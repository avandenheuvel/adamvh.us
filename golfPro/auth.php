<?php
session_start();

if (!isset($_SESSION['Administrator']) || !$_SESSION['Administrator']==1) {
    header('Location: login.php');
}

?>
