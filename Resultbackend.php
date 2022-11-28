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
  $repsw = $_POST['Repsw'];
}
//$sql="INSERT INTO `student` (`Name`, `Reg.No.`, `Year`, `Department`, `Semister`) VALUES ('Prathamesh Manikrao Jadhav', '$reg', '$year', '$depar', '$sem')";
//$sql="SELECT * FROM student WHERE 'Year'='2'";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <title>Show_result</title>
  <style>
    button {
      height: 35px;
      width: 25%;
      font-size: 18px;
      background-color: aquamarine;
      border-radius: 8px;
    }

    h1 {
      color: white;
    }

    .abc {
      color: white;
    }

    .whole1 {
      border: solid #456;
      border-width: 0 1px;
      margin: 20%;
      margin-top: 0%;
      background-image: url('Images/cd.jpg');

    }

    table,
    th,
    td {
      border: 1px solid;
      color: white;
    }

    tr:hover {
      background-color: coral;
    }
  </style>
</head>

<body>
  <?php
  $logic = true;
  $sql = "SELECT * FROM `stu_info` WHERE `Reg.No.` LIKE '$reg' AND `Password` LIKE '$repsw'";
  $result = mysqli_query($conn, $sql);
  $result1 = 0;
  $num = 0;
  $sql1 = "SELECT * FROM `all_stu` WHERE `Year` = $year AND `Sem` = $sem AND `Reg.No.` LIKE '$reg'";
  $sql2 = "SELECT * FROM `subjects` WHERE `Year` = $year AND `Sem` = $sem AND `Department` LIKE '$depar'  ";

  $result1 = mysqli_query($conn, $sql1);
  $result2 = mysqli_query($conn, $sql2);
  $num = mysqli_num_rows($result1);
  if ($num == 0) {

    session_abort();
    session_start();
    $_SESSION['$WrReg'] = 1;
    header("location:Result.php");
  } else {
    $row = mysqli_fetch_assoc($result);
    $row1 = mysqli_fetch_assoc($result1);
    $row2 = mysqli_fetch_assoc($result2);
  }
  ?>


  <div align='center' class="whole1">
    <h1 style='font-size: 80px ;'>Result</h1>
    <hr style='height:5px ;background: black;margin-top:0'>
    <h1 class="abc">
      <strong>Name :<?php echo $row['Name']; ?>
        <br>
        Reg.No. : <?php echo $row['Reg.No.']; ?>
        <br>
        Department :<?php echo $row['Department']; ?> ,
        Year : <?php echo $row1['Year']; ?> , Sem : <?php echo $row1['Sem']; ?>
        <hr>
        <div align="center">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Course</th>
                <th scope="col">Grade</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><?php echo $row2['Sub_1']; ?></td>
                <td><?php echo $row1['Sub_1']; ?></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><?php echo $row2['Sub_2']; ?></td>
                <td><?php echo $row1['Sub_2']; ?></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><?php echo $row2['Sub_3']; ?></td>
                <td><?php echo $row1['Sub_3']; ?></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td><?php echo $row2['Sub_4']; ?></td>
                <td><?php echo $row1['Sub_4']; ?></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td><?php echo $row2['Sub_5']; ?></td>
                <td><?php echo $row1['Sub_5']; ?></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td><?php echo $row2['Sub_6']; ?></td>
                <td><?php echo $row1['Sub_6']; ?></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td><?php echo $row2['Sub_7']; ?></td>
                <td><?php echo $row1['Sub_7']; ?></td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td><?php echo $row2['Sub_8']; ?></td>
                <td><?php echo $row1['Sub_8']; ?></td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td><?php echo $row2['Sub_9']; ?></td>
                <td><?php echo $row1['Sub_9']; ?></td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td><?php echo $row2['Sub_10']; ?></td>
                <td><?php echo $row1['Sub_10']; ?></td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td><?php echo $row2['Sub_11']; ?></td>
                <td><?php echo $row1['Sub_11']; ?></td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td><?php echo $row2['Sub_12']; ?></td>
                <td><?php echo $row1['Sub_12']; ?></td>
              </tr>

            </tbody>
          </table>
          <button type="link"><a href="Result.php" style="text-decoration: none;"></a>LOGOUT</button>
        </div>
    </h1>
    <hr>
    </strong>
  </div>
</body>

</html>