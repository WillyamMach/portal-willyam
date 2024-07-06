<?php 
require '../db/db.php';

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // post values
    $userEmail = $_POST['registerEmail'];
    $userPassword = $_POST['registerPassword'];

    $select = $sql->prepare("SELECT * FROM tb_users WHERE usu_email = :email");
    $select->bindParam(':email', $userEmail);
    $select->execute();
    $result = $select->fetchAll(\PDO::FETCH_ASSOC);

    $_SESSION['userEmail'] = $userEmail;
    $_SESSION['userPassword'] = $userPassword;
    $_SESSION['userName'] = $result[0]['usu_name'];

    if($result) {
        if($result[0]['usu_password'] != $_SESSION['userPassword']) {
            header("Location: ../../index.php?error=wPass");
            die();
        }

        header("Location: ../../page_home.php");
        die();

    }

    header("Location: ../../index.php?error=wEmail");
    die();
    
}