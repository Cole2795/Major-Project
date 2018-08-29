
<?php
session_start();
include("../includes/database.php");
if($_REQUEST["Submit"]=="Update")
{
$sql="update users set password ='$_REQUEST[newpassword]' where users='$_SESSION[username]'";
//echo $sql;
mysql_query($sql);
header("Location:general.php?msg=updated");
}


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Change password</TITLE>
<script language="javascript" type="text/javascript">
function validate()
{

var formName=document.frm;

if(formName.newpassword.value == "")
{
document.getElementById("newpassword_label").innerHTML='Please Enter New Password';
formName.newpassword.focus();
return false;
}
else
{
document.getElementById("newpassword_label").innerHTML='';
}


if(formName.cpassword.value == "")
{
document.getElementById("cpassword_label").innerHTML='Enter ConfirmPassword';
formName.cpassword.focus();
return false;
}
else
{
document.getElementById("cpassword_label").innerHTML='';
}


if(formName.newpassword.value != formName.cpassword.value)
{
document.getElementById("cpassword_label").innerHTML='Passwords Missmatch';
formName.cpassword.focus()
return false;
}
else
{
document.getElementById("cpassword_label").innerHTML='';
}
}
</script>
<style type="text/css">
<!--
.style1 {font-weight: bold}
.style7 {
color: yellow;
font-size: 24px;
}
.style9 {
color: #FF6666;
font-weight: bold;
}
.style12 {
color: #666666;
font-weight: bold;
}
.style14 {color: #CC0033; font-weight: bold; }
-->
</style>
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
</HEAD>
<BODY>

<form action="general.php" method="post" name="frm" id="frm" onSubmit="return validate();">
<table width="47%" border="1" cellspacing="0" cellpadding="0">
<tr>
<td colspan="2" align="center"></td>
</tr>
<tr bgcolor="#666666">
<td colspan="2"><span class="style7">Change Password</span></td>
</tr>
<?php if($_REQUEST["msg"]=="updated") { ?>
<tr bgcolor="#666666">
<td colspan="2"><span class="style7">Password has been changed successfully.</span></td>
</tr>
<?php } ?>
<tr>
<td bgcolor="#CCCCCC"><span class="style14">New Password:</span></td>
<td bgcolor="#CCCCCC"><input type="password" name="newpassword" id="newpassword" size="20" autocomplete="off"/>&nbsp; <label id="newpassword_label" class="level_msg"></td>
</tr>
<tr>
<td bgcolor="#CCCCCC"><span class="style14">Confirm Password:</span></td>
<td bgcolor="#CCCCCC"><input type="password" name="cpassword" id="cpassword" size="20" autocomplete="off">&nbsp; <label id="cpassword_label" class="level_msg"></td>
</tr>

<tr bgcolor="#666666">
<td colspan="2" align="center"><input type="submit" name="Submit" value="Update" onSubmit="return validate();"/></td>
</tr>

</table>
<a href="index.php">Login</a>
</form>
</BODY>
</HTML>
