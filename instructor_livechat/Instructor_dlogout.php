<?php 
session_start();

session_unset();
session_destroy();

header("Location: Instructor_signup.php");
exit;