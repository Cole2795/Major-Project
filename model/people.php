<?php



require_once("../model/database.php");

$name = $_GET["term"];

if ($peopleName != null) {
    $query = "SELECT * FROM friends WHERE name LIKE :name";
    $statement = $db->prepare($query);
    $statement->bindValue(":name", $name."%", PDO::PARAM_STR);
    //$statement->bindValue(":region",$region,PDO::PARAM_STR);
    try {
        $statement->execute();
    }
    catch(PharException $e) {
        echo $e->getMessage();
        exit();
    }
    $results = $statement->fetchAll();
    $statement->closeCursor();
    
    $name= array();
    
    foreach ($results as $result){
        $name[$result['id']] = $result['name'];
       ;
    }
    $response = json_encode($name);
    echo $response;
}