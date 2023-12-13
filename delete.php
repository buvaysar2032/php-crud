<?php
include_once('connect.php');

$id = $_GET['id'];

$pdoStatement = $pdo->prepare("
    DELETE FROM `comments` WHERE id=$id    
");

if ($pdoStatement->execute()) {
    header('location: index.php');
}
