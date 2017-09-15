<?php
session_start();

$_SESSION["rol"]="";
session_write_close();
header("Location: ../../index.php");
?>