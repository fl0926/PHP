<?php
    require_once "header.php";
    require_once "functions.php";

    if( isset($_GET["fo"])){
        switch($_GET["fo"]){
            case "JSON":
            case "json":
                include "main_page_json.php";
                exit(0);
                break;

            case "XML":
            case "xml":
                include "main_page_xml.php";
                exit(0);
                break;

            default:
                /* fall through to the HTML */
        }

    }
?>
<!DOCTYPE html>
<html style="margin: 0px; padding: 0px">
<head>
    <title>Adopt A Pet!</title>
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

<?php
    $db = getDB();
    $response = $db->query("select id, species, breed, name, age, gender, avail from pets");
?>


<table id="petTable" border="1" width="100%">
    <thead>
        <td>Species</td>
        <td>Breed</td>
        <td>Name</td>
        <td>Age</td>
        <td>Gender</td>
        <td>Available</td>
    </thead>
    <tbody>

    <?php
        for($i = 0; $i < $response->num_rows; $i++){
            $response->data_seek($i);
            $row = $response->fetch_assoc();
    ?>
    <tr>
        <td><?=$row['species']?></td>
        <td><?=$row['breed']?></td>
        <td><a href="petDetails.php?id=<?=$row['id']?>" >  <?=$row['name']?>  </a></td>
        <td><?=$row['age']?></td>
        <td><?=$row['gender']?></td>
        <td><?=$row['avail']?></td>
    </tr>

    <?php } ?>
    </tbody>
</table>

<hr/>

<?php if(isAdmin()){?>
    <a href="addPet.php">+ Add</a>
<?php } ?>

</body>
</html>
