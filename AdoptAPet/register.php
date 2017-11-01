<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <?php
        if(isset($_SESSION['registrationMessage'])){
            print "<div class='error' style='color:#ff0000;'>".$_SESSION['registrationMessage']."</div>";
            unset($_SESSION['registrationMessage']);
        }
    ?>

    <form action="doRegister.php" method="post">
        <label for="firstName">First Name:</label><input type="text" id="firstName" name="firstName" /><br/>
        <label for="lastName">Last Name:</label><input type="text" id="lastName" name="lastName" /><br/>
        <label for="userid">User ID:</label><input type="text" id="userid" name="userid" /><br/>
        <label for="password">Password: </label><input type="password" id="password" name="password" /><br/>
        <input type="submit" name="go" value="Register"/>
    </form>
</body>
</html>