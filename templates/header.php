<?php
    // IMPORTANT ! Session has to be started in every file that uses session variables
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP MySQL Tutorial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div id="headerContainer">
            <div id="logo">
                <i class="fa fa-facebook-square" aria-hidden="true"></i><span>lashbook</span>
            </div>
            <div id="menu">
                <i class="fa fa-bell" aria-hidden="true"></i>
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <i class="fa fa-desktop" aria-hidden="true"></i>
            </div>
            <?php
                if (isset($_SESSION['useruid'])) {
                    include_once('templates/profile_pic.php');
                }
            ?>
            
        </div>
    </header>