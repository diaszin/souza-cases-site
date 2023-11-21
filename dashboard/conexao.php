<?php
$conexao = new mysqli("localhost", "root", "", port: 3306, database:"sousacases");
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

