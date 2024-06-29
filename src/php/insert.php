<?php 
    require '../db/db.php';

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // post values
        $userName = $_POST['registerName'];
        $userEmail = $_POST['registerEmail'];
        $userPassword = $_POST['registerPassword'];
        //query
        $select = $sql->prepare("INSERT INTO tb_users (usu_name, usu_email, usu_password) VALUES (:name, :email, :password)");
        // Injection protection
        $select->bindParam(':name', $userName);
        $select->bindParam(':email', $userEmail);
        $select->bindParam(':password', $userPassword);
        // exec query
        $select->execute();

        header('Location: ../../index.html');
    }