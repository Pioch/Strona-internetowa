<!DOCTYPE html>
<html>
<body>
    
<?php

$servername = "localhost";
$username = "id15296634_piter";
$password = ">KAnapka12345";
$dbname = "id15296634_zapisy";

$czas=$_POST["zmienna1"];
$nazwa=$_POST["nazwa"];



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql="INSERT INTO Wyniki (Nazwa, Czas)
Values ('$nazwa', '$czas')";


if ($conn->query($sql) === TRUE) {
   echo "<script>window.location.href = '/index.html';</script>";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();

 


?>
</body>
</html>