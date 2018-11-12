<?php
/**
 * Created by PhpStorm.
 * User: Ignas
 * Date: 11/10/2018
 * Time: 3:14 PM
 */
require 'config.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<pre><b>Connection failed: </b>" . $e->getMessage();
    echo "<br>Please check the database settings in <b>config.php</b> and reload this page.</pre>";
    die();
}



$query = $conn->prepare("SELECT * FROM products");
$query->execute();
$products = $query->fetchAll(PDO::FETCH_ASSOC);


require 'view/index.php';