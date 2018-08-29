<?php
if(isset($_POST['func']) && !empty($_POST['func'])){
	switch($_POST['func']){
		case 'getCalender':
			getCalender($_POST['year'],$_POST['month']);
			break;
		case 'getEvents':
			getEvents($_POST['date']);
			break;
		case 'addEvent':
			addEvent($_POST['date'],$_POST['title']);
			break;
		default:
			break;
	}
}
function getCalender($year = '',$month = '')
{
	$dateYear = ($year != '')?$year:date("Y");
	$dateMonth = ($month != '')?$month:date("m");
	$date = $dateYear.'-'.$dateMonth.'-01';
	$currentMonthFirstDay = date("N",strtotime($date));
	$totalDaysOfMonth = cal_days_in_month(CAL_GREGORIAN,$dateMonth,$dateYear);
	$totalDaysOfMonthDisplay = ($currentMonthFirstDay == 7)?($totalDaysOfMonth):($totalDaysOfMonth + $currentMonthFirstDay);
	$boxDisplay = ($totalDaysOfMonthDisplay <= 35)?35:42;
?>
	<div id="calender_section">
		<h2>
        	<select name="month_dropdown" class="month_dropdown dropdown"><?php echo getAllMonths($dateMonth); ?></select>
			<select name="year_dropdown" class="year_dropdown dropdown1"><?php echo getYearList($dateYear); ?></select>
        </h2>
		<div id="event_list" class="none"></div>
        <div id="event_add" class="none">
        	<p>&nbspAdd Event On <span id="eventDateView"></span></p>
            <p><b>Add Event Name: </b><input type="text" id="eventTitle" value=""/></p>
            <input type="hidden" id="eventDate" value=""/>
            <input type="button" id="addEventBtn" value="ADD"/>
        </div>
		<div id="calender_section_top">
			<ul>
				<li>Sun</li>
				<li>Mon</li>
				<li>Tue</li>
				<li>Wed</li>
				<li>Thu</li>
				<li>Fri</li>
				<li>Sat</li>
			</ul>
		</div>
		<div id="calender_section_bot">
			<ul>
			<?php 
				$dayCount = 1; 
				for($cb=1;$cb<=$boxDisplay;$cb++){
					if(($cb >= $currentMonthFirstDay+1 || $currentMonthFirstDay == 7) && $cb <= ($totalDaysOfMonthDisplay)){
						$currentDate = $dateYear.'-'.$dateMonth.'-'.$dayCount;
						$eventNum = 0;
						include 'dbConfig.php';
						$result = $db->query("SELECT title FROM events WHERE date = '".$currentDate."' AND status = 1");
						$eventNum = $result->num_rows;
						if(strtotime($currentDate) == strtotime(date("Y-m-d"))){
							echo '<li date="'.$currentDate.'" class="grey date_cell">';
						}elseif($eventNum > 0){
							echo '<li date="'.$currentDate.'" class="light_sky date_cell">';
						}else{
							echo '<li date="'.$currentDate.'" class="date_cell">';
						}
						echo '<span>';
						echo $dayCount;
						echo '</span>';
						echo '<div id="date_popup_'.$currentDate.'" class="date_popup_wrap none">';
						echo '<div class="date_window">';
						echo '<div class="popup_event">EVENTS ('.$eventNum.')</div>';
						echo ($eventNum > 0)?'<a href="javascript:;" onclick="getEvents(\''.$currentDate.'\');">View Events</a><br/>':'';
						echo '<a href="javascript:;" onclick="addEvent(\''.$currentDate.'\');">Add Event</a>';
						echo '</div></div>';
						echo '</li>';
						$dayCount++;
			?>
			<?php }else{ ?>
				<li><span>&nbsp;</span></li>
			<?php } } ?>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		function getCalendar(target_div,year,month){
			$.ajax({
				type:'POST',
				url:'functions.php',
				data:'func=getCalender&year='+year+'&month='+month,
				success:function(html){
					$('#'+target_div).html(html);
				}
			});
		}
		
		function getEvents(date){
			$.ajax({
				type:'POST',
				url:'functions.php',
				data:'func=getEvents&date='+date,
				success:function(html){
					$('#event_list').html(html);
					$('#event_add').slideUp('slow');
					$('#event_list').slideDown('slow');
				}
			});
		}
		function addEvent(date){
			$('#eventDate').val(date);
			$('#eventDateView').html(date);
			$('#event_list').slideUp('slow');
			$('#event_add').slideDown('slow');
		}
		$(document).ready(function(){
			$('#addEventBtn').on('click',function(){
				var date = $('#eventDate').val();
				var title = $('#eventTitle').val();
				$.ajax({
					type:'POST',
					url:'functions.php',
					data:'func=addEvent&date='+date+'&title='+title,
					success:function(msg){
						if(msg == 'ok'){
							var dateSplit = date.split("-");
							$('#eventTitle').val('');
							alert('Event Created Successfully.');
							getCalendar('calendar_div',dateSplit[0],dateSplit[1]);
						}else{
							alert('Some problem occurred, please try again.');
						}
					}
				});
			});
		});
		$(document).ready(function(){
			$('.date_cell').mouseenter(function(){
				date = $(this).attr('date');
				$(".date_popup_wrap").fadeOut();
				$("#date_popup_"+date).fadeIn();	
			});
			$('.date_cell').mouseleave(function(){
				$(".date_popup_wrap").fadeOut();		
			});
			$('.month_dropdown').on('change',function(){
				getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
			});
			$('.year_dropdown').on('change',function(){
				getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
			});
			$(document).click(function(){
				$('#event_list').slideUp('slow');
			});
		});
	</script>
<?php
}
function getAllMonths($selected = ''){
	$options = '';
	for($i=1;$i<=12;$i++)
	{
		$value = ($i < 01)?'0'.$i:$i;
		$selectedOpt = ($value == $selected)?'selected':'';
		$options .= '<option value="'.$value.'" '.$selectedOpt.' >'.date("F", mktime(0, 0, 0, $i+1, 0, 0)).'</option>';
	}
	return $options;
}
function getYearList($selected = ''){
	$options = '';
	for($i=2015;$i<=2025;$i++)
	{
		$selectedOpt = ($i == $selected)?'selected':'';
		$options .= '<option value="'.$i.'" '.$selectedOpt.' >'.$i.'</option>';
	}
	return $options;
}
function getEvents($date = ''){
	include 'dbConfig.php';
	$eventListHTML = '';
	$date = $date?$date:date("Y-m-d");
	$result = $db->query("SELECT title FROM events WHERE date = '".$date."' AND status = 1");
	if($result->num_rows > 0){
		$eventListHTML = '<h2>Events On '.date("l, d M Y",strtotime($date)).'</h2>';
		$eventListHTML .= '<ul>';
		while($row = $result->fetch_assoc()){ 
            $eventListHTML .= '<li>'.$row['title'].'</li>';
        }
		$eventListHTML .= '</ul>';
	}
	echo $eventListHTML;
}
function addEvent($date,$title){
	include 'dbConfig.php';
	$currentDate = date("Y-m-d H:i:s");
	$insert = $db->query("INSERT INTO events (title,date,created,modified) VALUES ('".$title."','".$date."','".$currentDate."','".$currentDate."')");
	if($insert){
		echo 'ok';
	}else{
		echo 'err';
	}
}
?>
<!--comment functions-->
<?php
	function get_comments($file_id) {
		include '../model/database.php';

		$result = mysqli_query($connect, "SELECT * FROM `comments` WHERE `file_id`='$file_id' AND `is_child`=FALSE ORDER BY `date` DESC");
		$row_cnt = mysqli_num_rows($result);

		echo '<h1>Comments ('.$row_cnt.')</h1>';
		echo '<div class="comment">';
			new_comment();
		echo '</div>';

		foreach($result as $item) {
			$date = new dateTime($item['date']);
			$date = date_format($date, 'M j, Y | H:i:s');
			$auth = $item['author'];
			$par_code = $item['com_code'];

			$chi_result = mysqli_query($connect, "SELECT * FROM `comments` WHERE `par_code`='$par_code' AND `is_child`=TRUE");
			$chi_cnt = mysqli_num_rows($chi_result);

			echo '<div class="comment" name="'.$item['com_code'].'">'
					.'<span class="author">'.$auth.'</span><br />'
					.$item['comment'].'<br />'
					.'<span class="date">Posted: '.$date.'</span><br />';

					if($chi_cnt == 0) {
						echo '<span class="replies">No replies</span>'
							.'<span class="replies">&emsp;Reply</span>';
					} else {
						echo '<span class="replies">[+] '.$chi_cnt.' replies</span>'
							.'<span class="replies"&emsp;Reply</span>';
							add_comment($item['author'], $item['com_code']);
						echo '<div name="children" id="children">';
						foreach($chi_result as $com) {
							$chi_date = new dateTime($com['date']);
							$chi_date = date_format($chi_date, 'M j, Y | H:i:s');

							echo '<div class="child" name="'.$com['com_code'].'">'
									.'<span class="author">'.$com['author'].'</span><br />'
									.$com['comment'].'<br />'
									.'<span class="date">Posted: '.$chi_date.'</span><br />'
								.'</div>';
						}
						echo '</div>';
					}
				echo '</div>';
		}
		mysqli_close($connect);
	}

	function add_comment($reply, $code) {
		echo '<form action="reply.php" method="post" enctpye="" name="new_comment">'
				.'<input type="hidden" name="par_code" value="'.$code.'" />'
				.'<textarea class="text_cmt" name="text_cmt" placeholder="Reply to '.$reply.'"></textarea><br />'
				.'<input type="submit" value="Reply" />'
			.'</form>';
	}

	function new_comment() {
		echo '<form action="new.php" method="post" enctpye="" name="new_comment">'
				.'<textarea class="text_cmt" name="text_cmt" placeholder="Post a new comment"></textarea><br />'
				.'<input type="submit" value="Post" />'
			.'</form>';
	}

	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$characterLength = strlen($characters);
		$randomString = '';

		for($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $characterLength - 1)];
		}
		return $randomString;
	}
	function checkString($com_code) {
		include 'database.php';

		$rand = generateRandomString();
		$result = mysqli_query($connect, "SELECT * FROM `comments` WHERE `com_code`='$com_code'");
		$row_cnt = mysqli_num_rows($result);

		if($row_cnt != 0) {
			return $rand;
		} else {
			checkString($rand);
		}
	}
?>