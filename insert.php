<?php  


use PHPMailer\PHPMailer\PHPMailer;
require_once "vendor/autoload.php";

$data = array();

$servername = "localhost";
$username = "root";
$password = "";
$database = "salman";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "hello";
//print_r($_POST);
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$sql = "INSERT INTO `insertdata` (`nid`, `sName`, `sEmail`, `sAddres`, `dDateadded`) VALUES (NULL, '$name', '$email', '$message', current_timestamp());";
$result = mysqli_query($conn, $sql);

$data['status']="SUCCESS";

echo json_encode($data);

?>