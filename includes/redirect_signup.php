<?php

// If user is not logged in, redirect to login page
if (!isset($_SESSION['useruid'])) {
    header('location: signup.php');
}
