<?php
include 'connect.php';

if(isset($_POST['submit'])){
    print_r($_POST);
    $name = $_POST['name'];
    $callsign = $_POST['callsign'];
}

$query = "INSERT INTO callsigns (name, callsign) VALUES('$name', '$callsign')";
$result = mysqli_query($con, $query);

if(!$result){
    echo "insert was fucked...<br>";
    exit();
} else {
    header("Location: poll.php");
}

?>