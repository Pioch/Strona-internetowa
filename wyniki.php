<!DOCTYPE html>
<html>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
 <style> 
 body {
  background-color: lightblue;
  font-size:  20px;
  body { text-align: center; }
 }
table { width: 500px; margin: 0 auto; text-align: left; }
 </style>
<body>
<div class="container">

 <a href="index.html" class="btn btn-success" role="button">Powrót do menu</a>
<?php
$servername = "localhost";
$username = "id15296634_piter";
$password = ">KAnapka12345";
$dbname = "id15296634_zapisy";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<br><table><tr><th>Nazwa</th><th>Czas[s]</th></tr>";
$sql = "SELECT Nazwa, Czas FROM Wyniki";
$result = $conn->query($sql);
$rowcount=mysqli_num_rows($result);
if ($rowcount > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>". $row["Nazwa"]."</td><td> ". $row["Czas"]."</td></tr>";
    }
	echo"</table>";
} else {
    echo "0 results";
}

$conn->close();
?>


</body>
</html>