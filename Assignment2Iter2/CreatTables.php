<?php
$username= "fparrill";
$password=",n";
$server = "localhost";
$database = "fparrill";

try{
    $conn = mysqli_connect($server $username, $password, $database);
    echo "Connect to database";
}catch{
    die("Connection failed: " . mysqli_connect_error());
}

$query = "Creat Table Artists(ID int, fName VARCHAR(255), lName VARCHAR(255), Country VARCHAR(255), DoB VARCHAR(255), DoD VARCHAR(255)";
try{
    mysqli_query($conn, $query);
    echo "Created tables Artists<br>";
}catch{
    echo "Could not create table Artists" . mysql_error($conn) ."<br>"; 
}

//$query = "Create Table Artworks(ID int, Title VARCHAR(30), Artist VARCHAR(30), Image int, Genre VARCHAR(30), Subject VARCHAR(30), Museum VARCHAR(50), Reviews int)";
//$query = "Create Table Images(ID int, Title VARCHAR(255))";
//$query = "Create Table Museums(ID int, Name VARCHAR(255), Location VARCHAR(255), Gallery int)";
//$query = "Create Table Images(ID int, Title VARCHAR(255))";
//$query = "Create Table Genres(ID int, Title VARCHAR(255))";
//$query = "Create Table Subjects(ID int, Tiltle VARCHAR(255))";
//$query = "Create Table Galleries(ID int, Title VARCHAR(30))";
//$query = "Create Table Reviews(ID int, Username VARCHAR(30), Date VARCHAR(30), Order int, Comment VARCHAR(255))";
//$query = "Create Table ShoppingCart(ID int, Fname VARCHAR(30), Lname VARCHAR(30), Address VARCHAR(255), Shipping VARCHAR(30), Date VARCHAR(255), Artwork int, Orders int, TotalAmount int)";

?>
