<?php

session_start();
session_unset($_SESSION['un']);
session_unset($_SESSION['en']);
session_destroy();

header('location:index.php');

?>