<?php

require_once ("database.php");
$country = $_GET["term"];

if($country != null) {
    $query = "SELECT * FROM countries WHERE country LIKE :country";
    $statement = $db->prepare($query);
    $statement->bindValue(":country", $country."%", PDO::PARAM_STR);
    
    try {
        $statement->execute();
    } catch (PharException $e) {
        echo $e->getMessage();
        exit();
    }
    $results = $statement->fetchAll();
    $statement->closeCursor();
    
    $country = array();
    
    foreach ($results as $result){
        $country[$result['id']]=$result['country'];
        ;
    }
    $response = json_encode($country);
    echo $response;
}
