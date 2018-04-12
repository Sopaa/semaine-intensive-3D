<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/04/2018
 * Time: 11:31
 */

require_once "../admin/bdd.php";



$sql = "INSERT INTO cart
(users_id)
VALUES
(1);";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql2 = "INSERT INTO drones
(users_id, commandes_id)
VALUES
(1, 1);";
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$drone_id = $conn->lastInsertId();

$sql3 = "INSERT INTO base
(prix)
VALUES
(200);";
$stmt3 = $conn->prepare($sql3);
$stmt3->execute();
$base_id = $conn->lastInsertId();

foreach ($_GET as $k => $v){
    var_dump($k);
    var_dump($v);

    $sql4 = "INSERT INTO 
parts_has_chassis
(parts_id, chassis_id, drones_id, couleurs_id)
VALUES
(:parts_id, :chassis_id, :drones_id, :couleurs_id);";

    $stmt4 = $conn->prepare($sql4);
    $stmt4->bindValue(':parts_id', $v);
    $stmt4->bindValue(':chassis_id', $base_id);
    $stmt4->bindValue(':drones_id', $drone_id);
    $stmt4->bindValue(':couleurs_id', 1);

    $stmt4->execute();
}

