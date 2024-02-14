<?php include_once "templates/header.php"; ?>
    
    <main>
        <div id="container">
            <section>
                <div id="signupLoginWrapper">
                    <h1>Signup</h1>
                    <form action="includes/signup.inc.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="name" placeholder="John Doe">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="passwordRepeat" placeholder="Password">
                        <label for="floatingPassword">Confirm Password</label>
                    </div>
                    <button class="btn btn-success w-100" name="submit" type="submit">Signup</button>
                    </form>
                    <br />
                    <h3>Already have an account?</h3>
                    <button class="btn btn-primary w-100" onclick="location.href='login.php'">Login</button>
                    <br />
                    <?php
                    if(isset($_GET["error"])) {
                        if($_GET["error"] == "emptyinput") {
                            echo "<p>Fill in all fields!</p>";
                        }
                        else if($_GET["error"] == "invaliduid") {
                            echo "<p>Choose a proper username!</p>";
                        }
                        else if($_GET["error"] == "invalidemail") {
                            echo "<p>Choose a proper email!</p>";
                        }
                        else if($_GET["error"] == "passwordsdontmatch") {
                            echo "<p>Passwords don't match!</p>";
                        }
                        else if($_GET["error"] == "stmtfailed") {
                            echo "<p>Something went wrong, try again!</p>";
                        }
                        else if($_GET["error"] == "usernametaken") {
                            echo "<p>Username already taken!</p>";
                        }
                        else if($_GET["error"] == "none") {
                            echo "<p>You have signed up!</p>";
                        }
                    }
                    ?>
                </div>
            </section>
        </div>
    </main>