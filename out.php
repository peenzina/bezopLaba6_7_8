<?php
session_start();
session_destroy();
$_SESSION['auth'] = false;
header("Location:index.php");
?>