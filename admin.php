<?php
/**
 * Created by PhpStorm.
 * User: Ignas
 * Date: 11/10/2018
 * Time: 3:18 PM
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
// Deleting the product
if ( isset($_GET['delete']) && !empty($_GET['delete']) ) {
    $query = $conn->prepare("DELETE FROM products WHERE id = :id");
    $query->execute([
        'id' => $_GET['delete']
    ]);
}
// Adding a product
if ( isset($_POST['submit'])) {
    $query = $conn->prepare("INSERT INTO products (title,description,price) VALUES (:title, :description, :price)");
    unset($_POST['submit']);
    $query->execute($_POST);
}
// Getting all products from the database
$query = $conn->prepare("SELECT * FROM products");
$query->execute();
$products = $query->fetchAll(PDO::FETCH_ASSOC);
require 'view/admin.php';