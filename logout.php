<?php
session_start();
session_destroy();
header("Location: http://localhost/pwebcrm/login.php");
die();
exit;
?>