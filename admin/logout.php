<?php
error_reporting(0);
error_reporting(E_ERROR);

session_start();
session_destroy();

header("Location:login.php");

?>