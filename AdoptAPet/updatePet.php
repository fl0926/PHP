<?php
require_once "header.php";
require_once "functions.php";
include "adminWall.php";
$petInfo = getPetInfo($_GET['id']);
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

<form enctype="multipart/form-data" action="doUpdatePet.php" method="post">
    <label for="species"     >Species:     </label><input type="text" id="species"      name="species"      value="<?=$petInfo->species?>"   /><br/>
    <label for="breed"       >Breed:       </label><input type="text" id="breed"        name="breed"        value="<?=$petInfo->breed?>"     /><br/>
    <label for="name"        >Name:        </label><input type="text" id="name"         name="name"         value="<?=$petInfo->name?>"      /><br/>
    <label for="age"         >Age:         </label><input type="text" id="age"          name="age"          value="<?=$petInfo->age?>"       /><br/>
    <label for="gender"      >Gender:      </label>
    <select id="gender" name="gender">
        <option <?= ($petInfo->gender == "M") ? "SELECTED" : "" ?> value="M">Male</option>
        <option <?= ($petInfo->gender == "F") ? "SELECTED" : "" ?> value="F">Female</option>
        <option <?= ($petInfo->gender == "N") ? "SELECTED" : "" ?> value="N">N/A</option>
    </select><br/>



    <label for="availability">Availability:</label>
    <select id="availability" name="availability" >
        <option <?= ($petInfo->available == "AVAILABLE") ? "SELECTED" : "" ?> value="AVAILABLE">AVAILABLE</option>
        <option <?= ($petInfo->available == "UNAVAILABLE") ? "SELECTED" : "" ?> value="UNAVAILABLE">UNAVAILABLE</option>
    </select><br/>

    <label for="photo"       >Photo:       </label><input type="file" id="photo"        name="photo"        />
    <input type="hidden" name="id" value="<?=$petInfo->id?>"> <br/>
    <input type="submit" name="go" value="Save"/>
    &nbsp;<a href="index.php">Cancel</a>
</form>
</body>
</html>
