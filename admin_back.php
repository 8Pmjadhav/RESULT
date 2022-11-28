<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $uname = $_POST['uname'];
  $psw = $_POST['psw'];
}
$sql = "SELECT * FROM `admin` WHERE `Username` LIKE '$uname' AND `Password` LIKE '$psw'
  ";
$result2 = mysqli_query($conn, $sql);
if ($result2) {
  $num = mysqli_num_rows($result2);
} else {
  $num = 0;
}
if ($num != 0) {
  $row = mysqli_fetch_assoc($result2);
  header("location:Admin_work.php");
} else {
  //header("location:admin.php");
  //echo "<script>alert('Enter correct Details')</script>";
  session_abort();
  session_start();
  $_SESSION['$Login'] = 1;
  
  header("location:admin.php");
}

?>
