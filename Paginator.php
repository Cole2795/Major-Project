<?php


class paginator {
    private $db;
    
    function _construct($DB_con) {
        $this->db = $DB_con;
    }
    
    public function viewData($query) {
        $statement = $this->db->prepare($query);
        $statement ->execute();
        
        if($statement->rowCount() > 0){
            $results = $statement->fetchAll();
            foreach($results as $result){
                echo "<tr><td>" .
                $result['ID'] . "<\td><td>" .
                $result['name'] . "<\td><td>";
                
                
            }
        }
        else {
            echo "<tr><td>No Result match</td></tr>";
        }
    }
    
    public function paging($query, $record_per_page) {
        $startingPosition = 0;
        if($pageNo = filter_input(INPUT_GET, 'page_no', FILTER_VALIDATE_INT)){
            $startingPosition = $pageNo * $record_per_page;
        }
        $query2 = $query . " LIMIT $startingPosition , $record_per_page";
        return $query2;
    }
    
    public function pagingLinks($query, $records_per_page) {
        $self = $_SERVER['PHP_SELF'];
        $statement = $this->db->prepare($query);
        $statement->execute();
        $total_no_records = $statement->rowCount();
        if($total_no_records > 0){
            echo "<tr><td colspan='3'>";
            $total_no_pages = ceil($total_no_records/$records_per_page);
            $current_page = 1;
            if($page_no = filter_input(INPUT_GET, 'page_no', FILTER_VALIDATE_INT)){
                $page_no = 1;
            }
            if($current_page !=1){
                $previous = $current_page - 1;
                echo "<a href ='" . $self . "?page_no=1'>First</a>;&nbsp;";
                echo "<a href ='" . $self . "?page_no=" . $previous . "'>Previous</a>&nbsp";
                
            }
            for($i = 1; $i <= $total_no_pages; $i++) {
                if($i == $current_page){
                    echo "<strong><a href'" . self . "?page_no=" . $i .
                            "style='color:red; text-decoration:none'>" . $i . "</a></strong>&nbsp;";
                }
                else{
                    echo "<a href='" . self . "?page_no" . $i . "'>" . $i . "</a>&nbsp;&nbsp";
                }
                echo "</td></tr>";
                    
            }
        }
    }

}
