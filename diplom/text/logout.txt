<?php
    session_start();
    unset($_SERVER['session_username']);
    //unset($_SESSION['session_full_name']);
    session_destroy();
    header("Location: login.php");
?>
<style>
@import url("css/lk.css");
</style>