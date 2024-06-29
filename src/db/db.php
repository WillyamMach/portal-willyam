<?php 
    try {
        $sql = new PDO('mysql:host=localhost;dbname=db_users', "root", "");
    } catch (PDOException $e) {
        echo "ERROR" . $e->getMessage();
    }