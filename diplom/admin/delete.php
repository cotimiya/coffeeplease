<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $DB_SERVER = "localhost";
    $DB_USER = "root";
    $DB_PASS = "";
    $DB_NAME = "phpform";

    // подключение к базе
    $connect = new mysqli($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME);

    $mysql = "DELETE FROM users WHERE id=$id";
    $connect->query($mysql);
}

header("location: index.php");
exit;
?>