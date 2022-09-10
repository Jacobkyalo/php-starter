<?php
session_start();

session_destroy();
header('Location: /phpfiles/13_sessions.php');

?>