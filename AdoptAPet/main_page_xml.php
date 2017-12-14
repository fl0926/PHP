<?php
    require_once "header.php";
    require_once "functions.php";
    header("Content-Type: text/xml");
    print "<?xml version=\"1.0\" ?>";
?>

<pets>
<?php
    $db = getDB();
    $response = $db->query("select id, species, breed, name, age, gender, avail from pets");

    for($i = 0; $i < $response->num_rows; $i++){
        $response->data_seek($i);
        $row = $response->fetch_assoc();
?>
    <pet id="<?=$row['id']?>">
        <species><?=$row['species']?></species>
        <breed><?=$row['breed']?></breed>
        <name><?=$row['name']?></name>
        <age><?=$row['age']?></age>
        <gender><?=$row['gender']?></gender>
        <avail><?=$row['avail']?></avail>
    </pet>

    <?php } ?>

</pets>