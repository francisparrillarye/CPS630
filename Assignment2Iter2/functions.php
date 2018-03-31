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

function listArtworks(){
    $query = "SELECT Title FROM Artworks";
    try{
        mysqli_query($conn, $query);
        echo "Created tables Artists<br>";
    }catch{
        echo "<li>Could not create table Artists" . mysqli_error($conn) ."</li>"; 
    }

}
function listArtists(){

}
function listMuseums(){

}

?>