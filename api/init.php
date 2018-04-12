<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/04/2018
 * Time: 16:26
 */

require_once "../admin/bdd.php";

$json_data = new stdClass();

$sql = "SELECT * FROM chassis;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$json_data->chassis = [];
foreach ($stmt as $rec)//foreach loop
{
    $json_array['id'] = $rec['id'];
    $json_array['name'] = $rec['name'];
    $json_array['description'] = $rec['description'];
    $json_array['prix'] = $rec['prix'];
    $json_array['type'] = $rec['type'];
    //here pushing the values in to an array
    array_push($json_data->chassis, $json_array);
}


$sql2 = "SELECT * FROM parts;";
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$json_data->parts = [];
foreach ($stmt2 as $rec)//foreach loop
{
    $json_array['id'] = $rec['id'];
    $json_array['name'] = $rec['name'];
    $json_array['description'] = $rec['description'];
    $json_array['prix'] = $rec['prix'];
    $json_array['type'] = $rec['type'];
    //here pushing the values in to an array
    array_push($json_data->parts, $json_array);
}
//built in PHP function to encode the data in to JSON format
header('Content-Type: application/json');
echo json_encode($json_data);
