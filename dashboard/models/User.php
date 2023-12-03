<?php
include "{$_SERVER['DOCUMENT_ROOT']}/souza-cases-site/dashboard/conexao.php";

class User{
    public function login(string $email, string $password){
        global $conexao;
        $sql = "SELECT password from user WHERE email = ? AND password = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        if($stmt->execute()){
            $userPassword = $stmt->fetch();
            return $userPassword;
        }else{
            die();
        }
    }
}