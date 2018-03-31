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
//populate artists table-----------------------------
$query = 'INSERT INTO Artists(ID, fName, lName, Country, Dob, DoD)
            VALUES (1, "Leonardo", "Da Vinci","Italy","idk","idk"),
            (2, "Vincent","Van Gogh","idk","dont know","donr know"),
            (3, "Johannes","Vermer","idk","idk","idk"),
            (4, "Gustav","Klimt","idk","idk","idk"),
            (5,"Pablo","Picasso","idk","idk","idk")';
try{
    mysqli_query($conn, $query);
    echo "Populated table Artists<br>";
}catch{
    echo "Could not populate table Artists" . mysqli_error($conn) ."<br>"; 
}

//populate Artworks table-----------------------
$query = 'INSERT INTO Artworks(ID, Title, Artist, Image, Genre, Subject)
        VALUES(1, "American Gothic","idk", 1, "idk", "idk"),
        (2, "The Persistence of Time","idk", 2,"idk","idk"),
        (3, "The Scream", "dfb", 3, "bdfbdf", "sv"),
        (4, "Starry Night", "dfb", 4, "dbd", "bdb"),
        (5, "School of Athens", "dfb", 5, "dbd", "bdb") ';
try{
    mysqli_query($conn, $query);
    echo "Populated table Artworks<br>";
}catch{
    echo "Could not populate table Artworks" . mysqli_error($conn) ."<br>"; 
}

//populate table Museums---------------------------
$query = 'INSERT INTO Museums(ID, Name, Location)
        VALUES(1,"Royal Ontario Museum","Canada"),
        (2,"Art Gallery of Ontario","Canada"),
        (3,"The Louvre","France"),
        (4,"Art Institute of Chicago","United States"),
        (5, "National Gallery of London","United Kingdom")';
try{
    mysqli_query($conn, $query);
    echo "Populated table Museums<br>";
}catch{
    echo "Could not populate table Museums" . mysqli_error($conn) ."<br>"; 
}

//populate tables Images
$query = 'INSERT INTO Images(ID, Filename)
        VALUES(1, "AmericanGothic.jpg"),
        (2, "ThePersistnceofMemory.jpg"),
        (3, "TheScream.jpg"),
        (4, "StarryNight.jpg"),
        (5, "SchoolofAthens.jpg")';
?>