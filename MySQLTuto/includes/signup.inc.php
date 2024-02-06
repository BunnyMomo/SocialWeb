<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];

    // require_once 'db/dbh.inc.php';
    require_once 'functions.inc.php';

    // === Error handling === //
    if(emptyInputSignup($name, $email, $username, $password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if(invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($password, $passwordRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $password);
}
else {
    header("location: ../signup.php");
    exit();
}