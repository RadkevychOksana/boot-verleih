<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boots_verleih";

//Verbindung zur Datenbank
$conn = new mysqli($servername, $username, $password,$dbname);

//Überpüfen die Verbindung zur Datenbank
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM boot_categorie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $categories[]=$row;
  }
} else {
  $categories=[];
}

$boat=[];
if(!empty($GET['categorie'])){
$stmt=$mysqli->prepare('SELECT * FROM boat category_slug=?');
$stmt->bind_param('s',$GET['categorie']);
$stmt->execute();

$boats=[];

}
$conn->close();
?>