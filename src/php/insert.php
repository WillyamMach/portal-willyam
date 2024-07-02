<?php 
    require '../db/db.php';

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // post values
        $userName = $_POST['registerUser'];
        $userEmail = $_POST['registerEmail'];
        $userPassword = $_POST['registerPassword'];
        $confirmUserPassword = $_POST['registerConfirmPassword'];

        if($userPassword != $confirmUserPassword) {
            header("Location: ../../tela_cadastro?error=passDif");
            die();
        }

        //query
        $select = $sql->prepare("INSERT INTO tb_users (usu_name, usu_email, usu_password) VALUES (:name, :email, :password)");
        // Injection protection
        $select->bindParam(':name', $userName);
        $select->bindParam(':email', $userEmail);
        $select->bindParam(':password', $userPassword);
        // exec query
        $select->execute();

        header('Location: ../../index.php');
    }