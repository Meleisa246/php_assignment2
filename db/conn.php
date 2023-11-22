<?php 
   
   $host = "sql3.freesqldatabase.com";
    $db = "sql3664121";
    $user = "sql3664121";
    $pass = "A3mmsz3w7Z";
    $charset = "utf8mb4";

    /*$host = "localhost";
    $db = "attendance_db";
    $user = "root";
    $pass = "";
    $charset = "utf8mb4";*/

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once "crud.php";
    require_once "user.php";
    $crud = new crud($pdo);
    $users = new user($pdo);
   
    $users->insertUser("admin","password");
?>
