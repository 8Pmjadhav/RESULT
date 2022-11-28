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
    $reg = $_POST['RegNo'];
    $year = $_POST['Year'];
    $sem = $_POST['Sem'];
    $depar = $_POST['Depar'];
}
$sql1 = "SELECT * FROM `all_stu` WHERE `Year` = $year AND `Sem` = $sem AND `Reg.No.` LIKE '$reg'";
$result1=mysqli_query($conn,$sql1);
$num1 = mysqli_num_rows($result1);
if($num1==0){
    session_abort();
    session_start();
    $_SESSION['$del'] = 1;
    header("location:delete.php");
}
$sql="DELETE FROM `all_stu` WHERE `Year` = $year AND `Sem` = $sem AND `Reg.No.` LIKE '$reg'  ";
$result=mysqli_query($conn,$sql);

echo "<h1>Deleted Successfully !!!!!!" ;
?>