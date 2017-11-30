<?php
    require_once "header.php";
    require_once "functions.php";

    $petInfo = getPetInfo($_GET['id']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?=$petInfo->name?></title>
    </head>
        <body style="border: 0px; padding: 0px; margin: 0px">
        <div style="background-color:#6699cc; color: #fffff0;">
            <h2>Adopt A Pet</h2><br/>
            <span style="font-size: .7em">
            <?php if($loggedIn){?>
                <?=$firstName." ".$lastName?>&nbsp;(<a href="doLogout.php">Logout</a>)
            <?php }else{ ?>
                <a href="login.php">Login</a>
            <?php } ?>
        </span>
        </div>


        <table border="0">
        <tr>
            <td>
                <img src="images/<?=$petInfo->photo?>" />
            </td>
            <td>
                <table border="0">
                    <tr><td>Species</td><td><?=$petInfo->species?></td></tr>
                    <tr><td>Breed</td><td><?=$petInfo->breed?></td></tr>
                    <tr><td>Name</td><td><?=$petInfo->name?></td></tr>
                    <tr><td>Age</td><td><?=$petInfo->age?></td></tr>
                    <tr><td>Gender</td><td><?=$petInfo->gender?></td></tr>
                    <tr><td>Availability</td><td><?=$petInfo->available?></td></tr>
                </table>

            </td>
        </tr>
        </table>

        <hr/>
        <?php if(isAdmin()){?>
            <a href="addPet.php">+ Add</a>&nbsp;&nbsp;
            <a href="doDeletePet.php?id=<?=$_GET['id']?>" >delete</a>
        <?php } ?>

    </body>

</html>