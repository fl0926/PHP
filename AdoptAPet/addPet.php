<?php
require_once "header.php";
require_once "functions.php";
include "adminWall.php";

?>
<!DOCTYPE html>
<html style="margin: 0px; padding: 0px">
<head>
    <title>Add a A pet</title>
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

<form enctype="multipart/form-data" action="doAddPet.php" method="post">
    <label for="species"     >Species:     </label><input type="text" id="species"      name="species"      /><br/>
    <label for="breed"       >Breed:       </label><input type="text" id="breed"        name="breed"        /><br/>
    <label for="name"        >Name:        </label><input type="text" id="name"         name="name"         /><br/>
    <label for="age"         >Age:         </label><input type="text" id="age"          name="age"          /><br/>
    <label for="gender"      >Gender:      </label>
    <select id="gender" name="gender">
        <option value="M">Male</option>
        <option value="F">Female</option>
        <option value="N">N/A</option>
    </select><br/>



    <label for="availability">Availability:</label>
    <select id="availability" name="availability" >
        <option value="AVAILABLE">AVAILABLE</option>
        <option value="UNAVAILABLE">UNAVAILABLE</option>
    </select><br/>
    <label for="photo"       >Photo:       </label><input type="file" id="photo"        name="photo"        /><br/>
    <input type="submit" name="go" value="Save"/>
    &nbsp;<a href="index.php">Cancel</a>
</form>
</body>
</html>
