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
//create Artists table
$query = "Creat Table Artists(ID int, fName VARCHAR(255), lName VARCHAR(255), Country VARCHAR(255), DoB VARCHAR(255), DoD VARCHAR(255)";
try{
    mysqli_query($conn, $query);
    echo "Created tables Artists<br>";
}catch{
    echo "Could not create table Artists" . mysqli_error($conn) ."<br>"; 
}

//creat Artworks table
$query = "Create Table Artworks(ID int, Title VARCHAR(30), Artist VARCHAR(30), Image int, Genre VARCHAR(30), Subject VARCHAR(30), Museum VARCHAR(50), Reviews int)";
try{
    mysqli_query($conn, $query);
    echo "Created tables Artists<br>";
}catch{
    echo "Could not create table Artists" . mysqli_error($conn) ."<br>"; 
}

//create Images table
$query = "Create Table Images(ID int, Title VARCHAR(255))";
try{
    mysqli_query($conn, $query);
    echo "Created tables Artists<br>";
}catch{
    echo "Could not create table Artists" . mysqli_error($conn) ."<br>"; 
}

//create Museums table
$query = "Create Table Museums(ID int, Name VARCHAR(255), Location VARCHAR(255), Gallery int)";
try{
    mysqli_query($conn, $query);
    echo "Created tables Artists<br>";
}catch{
    echo "Could not create table Artists" . mysqli_error($conn) ."<br>"; 
}

//create Images table
$query = "Create Table Images(ID int, Title VARCHAR(255))";
try{
    mysqli_query($conn, $query);
    echo "Created tables Artists<br>";
}catch{
    echo "Could not create table Artists" . mysqli_error($conn) ."<br>"; 
}

//create Genres table
$query = "Create Table Genres(ID int, Title VARCHAR(255))";
try{
    mysqli_query($conn, $query);
    echo "Created tables Artists<br>";
}catch{
    echo "Could not create table Artists" . mysqli_error($conn) ."<br>"; 
}

//create Subjects table
$query = "Create Table Subjects(ID int, Tiltle VARCHAR(255))";
try{
    mysqli_query($conn, $query);
    echo "Created tables Artists<br>";
}catch{
    echo "Could not create table Artists" . mysqli_error($conn) ."<br>"; 
}

//create Galleries tables
$query = "Create Table Galleries(ID int, Title VARCHAR(30))";
try{
    mysqli_query($conn, $query);
    echo "Created tables Artists<br>";
}catch{
    echo "Could not create table Artists" . mysqli_error($conn) ."<br>"; 
}

//create Reviews table
$query = "Create Table Reviews(ID int, Username VARCHAR(30), Date VARCHAR(30), Order int, Comment VARCHAR(255))";
try{
    mysqli_query($conn, $query);
    echo "Created tables Artists<br>";
}catch{
    echo "Could not create table Artists" . mysqli_error($conn) ."<br>"; 
}

//create ShoppingCart table
$query = "Create Table ShoppingCart(ID int, Fname VARCHAR(30), Lname VARCHAR(30), Address VARCHAR(255), Shipping VARCHAR(30), Date VARCHAR(255), Artwork int, Orders int, TotalAmount int)";
try{
    mysqli_query($conn, $query);
    echo "Created tables Artists<br>";
}catch{
    echo "Could not create table Artists" . mysqli_error($conn) ."<br>"; 
}

mysqli_close($conn);
?>
