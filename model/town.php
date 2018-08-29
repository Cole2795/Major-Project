<?php

require ("database.php");

$town = $_GET["term"];
$countyID = $_GET["countyID"];

if ($town != null) {
    $query = "SELECT * FROM towns WHERE countyID = :countyID AND town LIKE :town";
    $statement = $db->prepare($query);
    $statement->bindValue(":town", $town . "%", PDO::PARAM_STR);

    try {
        $statement->execute();
    } catch (PharException $e) {
        echo $e->getMessage();
        exit();
    }
    $results = $statement->fetchAll();
    $statement->closeCursor();

    $town = array();

    foreach ($results as $result) {
        $town[$result['townID']] = $result['town'];
        ;
    }
    $response = json_encode($towns);
    echo $response;
}