<?php
include "{$_SERVER['DOCUMENT_ROOT']}/souza-cases-site/dashboard/shared/instances.php";

$idProduto = $_GET['id'];
$produto->delete($idProduto);
header("location: ../");