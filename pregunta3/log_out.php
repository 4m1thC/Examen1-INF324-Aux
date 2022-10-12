<?php
session_start();
echo $_SESSION["usuario"];
session_destroy();
header("Location: /pregunta3/login.php");
?>
