<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27/03/2018
 * Time: 18:07
 */
try {
    $conn = new PDO ('mysql:host=localhost;dbname=personnaldrone', 'root', 'root');
} catch (PDOException $exception){
    echo $exception->getMessage( );
    exit;
}
$conn->exec('SET NAMES UTF8');