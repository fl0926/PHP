<?php



class Pet{
    public $id;
    public $species;
    public $breed;
    public $name;
    public $age;
    public $gender;
    public $available;
    public $photo;
}


function getPetInfo($id){
    $db = getDB();
    $result = $db->query("select * from pets where id=".$id);
    $result->data_seek(0);
    $row = $result->fetch_assoc();

    $retVal = new Pet();
    $retVal->id        = $row['id'];
    $retVal->species   = $row['species'];
    $retVal->name      = $row['name'];
    $retVal->age       = $row['age'];
    $retVal->gender    = $row['gender'];
    $retVal->available = $row['avail'];
    $retVal->breed     = $row['breed'];
    $retVal->photo     = $row['photo'];

    return $retVal;
}

function validateUser($userid, $passwd){
    if(userExists($userid)){
        if(getUserInfo($userid)['password'] === $passwd){
            return true;
        }
    }else{
        // Add a message to the session to be displayed on the login
        // reflecting the fact this user doesn't exist.
    }

    return false;
}

function isAdmin(){

    // return ( isset($_SESSION['isAdmin']) && strtoupper($_SESSION['isAdmin']) == 'Y');

    if(!isset($_SESSION['isAdmin'])){
        return false;
    }

    if( strtoupper($_SESSION['isAdmin']) == 'Y' ){
        return true;
    }

    return false;
}

function getUserInfo($paramEmail){
    $db = getDB();
    $result = $db->query("select * from users where email = '$paramEmail'");
    $result->data_seek(0);
    $row = $result->fetch_assoc();

    return array("isAdmin"=>$row['admin'], "userid"=>$row['email'], "firstName"=>$row['firstName'], "lastName"=>$row['lastName'], "password"=>$row['password']);
}


function getDB(){
    $mysql = new mysqli("localhost", "root", "root", "adoptapet", 3306);

    if($mysql->connect_errno){
        echo("Failed to connect to our database.".$mysql->error);
    }

    return $mysql;
}


function createUser($paramEmail, $paramFirstName, $paramLastName, $paramPassword){
    $db = getDB();
    $pstmt = $db->prepare("insert into users (email, firstName, lastName, password) values (?, ?, ?, ?)");
    $pstmt->bind_param('ssss', $paramEmail, $paramFirstName, $paramLastName, $paramPassword);
    $pstmt->execute();
}

function userExists($paramEmail){
    $retVal = false;
    $db = getDB();
    $result = $db->query("select email from users where email = '$paramEmail'");
    $retVal = $result->num_rows > 0;
    return $retVal;
}


function createPet($species, $breed, $name, $age, $gender, $avail){
    $db = getDB();
    $pstmt = $db->prepare("insert into pets (species, breed, name, age, gender, avail) values (?, ?, ?, ?, ?, ?)");
    $pstmt->bind_param('sssiss', $species, $breed, $name, $age, $gender, $avail);
    $pstmt->execute();
}

function updatePet($id, $species, $breed, $name, $age, $gender, $avail){
    $db = getDB();
    $pstmt = $db->prepare("update pets set species=?, breed=?, name=?, age=?, gender=?, avail=? where id=?");
    $pstmt->bind_param('sssissi', $species, $breed, $name, $age, $gender, $avail, $id);
    $pstmt->execute();
}

function updatePetWithPhoto($id, $species, $breed, $name, $age, $gender, $avail, $photo){
    $db = getDB();
    $pstmt = $db->prepare("update pets set species=?, breed=?, name=?, age=?, gender=?, avail=?, photo=? where id=?");
    $pstmt->bind_param('sssisssi', $species, $breed, $name, $age, $gender, $avail, $photo, $id);
    $pstmt->execute();
}

function createPetWithPhoto($species, $breed, $name, $age, $gender, $avail, $photo){
    $db = getDB();
    $pstmt = $db->prepare("insert into pets (species, breed, name, age, gender, avail, photo) values (?, ?, ?, ?, ?, ?, ?)");
    $pstmt->bind_param('sssisss', $species, $breed, $name, $age, $gender, $avail, $photo);
    $pstmt->execute();
}

function deletePet($id){
    $db = getDB();
    $pstmt = $db->prepare("delete from pets where id=?");
    $pstmt->bind_param('i', $id);
    $pstmt->execute();
}




?>