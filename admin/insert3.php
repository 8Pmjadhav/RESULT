<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$reg = 0;
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
    //$Sub_11 = $_POST['Sub_11'];
    //$Sub_12 = $_POST['Sub_12'];
}
session_start();
$reg = $_SESSION['reg'];
$year = $_SESSION['year'];
$sem = $_SESSION['sem'];
$depar = $_SESSION['depar'];
$sqlt = "SELECT * FROM `all_stu` WHERE `Year` = $year AND `Sem` = $sem AND `Reg.No.` LIKE '$reg'";

$resultt = mysqli_query($conn, $sqlt);
$numt = mysqli_num_rows($resultt);
if ($numt != 0) {

    session_abort();
    session_start();
    $_SESSION['$WrReg'] = 1;
    header("location:insert.php");
}else{
    $sql1 = "INSERT INTO `all_stu` ( `Year`, `Sem`, `Reg.No.`, `Sub_1`, `Sub_2`, `Sub_3`, `Sub_4`, `Sub_5`, `Sub_6`, `Sub_7`, `Sub_8`, `Sub_9`, `Sub_10`) VALUES ( '$year', '$sem', '$reg', '$Sub_1', '$Sub_2', '$Sub_3', '$Sub_4', '$Sub_5', '$Sub_6', '$Sub_7', '$Sub_8', '$Sub_9', '$Sub_10')";
    $result1 = mysqli_query($conn, $sql1);
    echo "<h1>Inserted Successfully !!!</h1>";
    //echo '<script>alert("This student is not registered !!")</script>';
}
?>