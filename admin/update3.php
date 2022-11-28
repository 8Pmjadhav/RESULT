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
    $Sub_1 = $_POST['Sub_1'];
    $Sub_2 = $_POST['Sub_2'];
    $Sub_3 = $_POST['Sub_3'];
    $Sub_4 = $_POST['Sub_4'];
    $Sub_5 = $_POST['Sub_5'];
    $Sub_6 = $_POST['Sub_6'];
    $Sub_7 = $_POST['Sub_7'];
    $Sub_8 = $_POST['Sub_8'];
    $Sub_9 = $_POST['Sub_9'];
    $Sub_10 = $_POST['Sub_10'];
}
session_start();
$reg = $_SESSION['reg'];
$year = $_SESSION['year'];
$sem = $_SESSION['sem'];
$depar = $_SESSION['depar'];
$sql1 = "SELECT * FROM `all_stu` WHERE `Year` = $year AND `Sem` = $sem AND `Reg.No.` LIKE '$reg'";
$result1=mysqli_query($conn,$sql1);
$num1 = mysqli_num_rows($result1);
if($num1==0){
    session_abort();
    session_start();
    $_SESSION['$upd'] = 1;
    header("location:update.php");
}
$sql= "UPDATE `all_stu` SET `Sub_1`='$Sub_1',`Sub_2`='$Sub_2',`Sub_3`='$Sub_3',`Sub_4`='$Sub_4',`Sub_5`='$Sub_5',`Sub_6`='$Sub_6',`Sub_7`='$Sub_7',`Sub_8`='$Sub_8',`Sub_9`='$Sub_9',`Sub_10`='$Sub_10' WHERE `Year` = $year  AND `Sem` = $sem AND `Reg.No.` LIKE '$reg'";
$result=mysqli_query($conn,$sql);

echo "<h1>UPDATED Successfully !!!!!!</h1>" ;
?>