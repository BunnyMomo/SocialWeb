<?php

// ============================= //
// ====== CONNECTION DATA ====== //
// ============================= //

$dbHost = 'localhost';
$dbUser = 'Ernesto';
$dbPass = '1234';
$dbName = 'Test';

// ================== //
// ====== MAIN ====== //
// ================== //

// Tu crée l'objet de connexion
$db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

// === CONNECTION OBJ === //

$mysqli = @new mysqli(
  $dbHost,
  $dbUser,
  $dbPass,
  $dbName
);

// === CHECK CONNECTION ==/
if ($mysqli->connect_error) {
  echo 'Errno: ' . $mysqli->connect_errno;
  echo '<br>';
  echo 'Error: ' . $mysqli->connect_error;
  exit();
}

// === CHECK POST DATA === //
$username = isset($_POST['username']) ? htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8') : "" ;
$password = isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8') : "" ;

$nom = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
$motDePasse = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

if($username == "" || $password == "") {
  http_response_code(400);
  echo "Veuillir remplir les champs";
  exit;
}

// === WRITE TO DATABASE === //
$SQL_insert = "INSERT INTO Test (Username, Password) VALUES ('$username', '$password')";

try {  
  $result = $mysqli->query($SQL_insert);
  echo "Tout marche";
} catch (Exception $error) {
  echo "L'erreur est :" . $error->getMessage() . "\n";
}

// === READ DATABASE === //

$sql = "SELECT * FROM `Test`";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "id: " . $row["idUser"] . " Username: " . $row["Username"] . " Password: " . $row["Password"] . "</br>";
  }
} else {
  echo "0 results";
}

// === CLOSE CONNECTION == //
$mysqli->close();
