<?php

$servername="localhost";
$uname="root";
$pass="";
$db="GymWarriors";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM staffs WHERE designation='Trainer'";
                $query = $conn->query($sql);

                echo "$query->num_rows";
?>