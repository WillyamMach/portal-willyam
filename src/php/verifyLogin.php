<?php 
    require '../db/db.php';

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $userEmail = $_POST['registerEmail'];
        $userPassword = $_POST['registerPassword'];

        $select = $sql->prepare("SELECT * FROM tb_users WHERE usu_email = '$userEmail'");
        $select->execute();
        $result = $select->fetchAll(\PDO::FETCH_ASSOC);
        var_dump($result);
        
        if($result) {
            if($result[0]['usu_password'] != $userPassword) {
                header("Location: ../../index.php?error=wPass");
                die();
            } else {
                header("Location: ../../page_home.php");
                die();
            }
        } else {
            header("Location: ../../index.php?error=wEmail");
            die();
        }
    }

