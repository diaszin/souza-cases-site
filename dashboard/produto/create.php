<?php
include "../shared/instances.php";

$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$productDescription = $_POST['productDescription'];

$produto->create($productName, $productPrice, $productDescription);