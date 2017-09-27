<?php require_once "header.php"?>
<!DOCTYPE html>
<html>
<head>
    <title>Adopt A Pet!</title>
</head>
<body style="border: 0px">
<div style="background-color:#336699; color: #fffff0">
    <h2>Adopt A Pet</h2><br/>
    <span style="font-size: .7em">
        <?php if($loggedIn){?>
            <?=$firstName." ".$lastName?>&nbsp;(<a href="doLogout.php">Logout</a>)
        <?php }else{ ?>
            <a href="login.php">Login</a>
        <?php } ?>
    </span>
</div>

</body>
</html>