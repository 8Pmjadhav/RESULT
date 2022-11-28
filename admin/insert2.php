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
    $reg = $_POST['RegNo'];
    $year = $_POST['Year'];
    $sem = $_POST['Sem'];
    $name = @$_POST['Name'];
    $depar = $_POST['Depar'];
}
session_start();
$_SESSION['reg'] = $reg;
$_SESSION['year'] = $year;
$_SESSION['sem'] = $sem;
$_SESSION['depar'] = $depar;
$logic = true;
$sql = "SELECT * FROM `stu_info` WHERE `Reg.No.` LIKE '$reg'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
$sqlt = "SELECT * FROM `all_stu` WHERE `Year` = $year AND `Sem` = $sem AND `Reg.No.` LIKE '$reg'";

$resultt = mysqli_query($conn, $sqlt);
$numt = mysqli_num_rows($resultt);
if ($num == 0 && $numt != 0) {

    session_abort();
    session_start();
    $_SESSION['$WrRe'] = 1;
    header("location:insert.php");
} else {
    $sql2 = "SELECT * FROM `subjects` WHERE `Year` = $year AND `Sem` = $sem AND `Department` LIKE '$depar'    ";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $row = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert2</title>
    <style>
        select {
            border-radius: 8px;
            height: 40px;
            width: 190px;
            font-size: 25px;
            
        }

        body {
            margin: 20%;
            margin-top: 2%;
        }

        .contain {
            padding-top: 2px;
            padding-bottom: 5px;
            background-color: blueviolet;
        }

        button {
            height: 35px;
            font-size: 18px;
            width: 200px;
            border-radius: 8px;
        }

        table,
        th,
        td {
            border: 1px solid;
            color: white;
            width: 800px;
            text-align: center;
        }

        tr:hover {
            background-color: coral;
        }
    </style>
</head>

<body>
    <div class="contain" align="center">
        <form action="insert3.php" method="post">
            <h1 style="font-size: 80px;">INSERT RECORD</h1>
                <hr>
                <h1 class="abc">
                    <strong>Name :<?php echo $row['Name']; ?>
                        <br>
                        Reg.No. : <?php echo $row['Reg.No.']; ?>
                        <br>
                        Department :<?php echo $row['Department']; ?> ,
                        Year : <?php echo $row2['Year']; ?> , Sem : <?php echo $row2['Sem']; ?>
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
                                        <td><select name="Sub_1" id="Sub_1" required>
                                                <option value="">Select Grade</option>
                                                <option value="A+">A+</option>
                                                <option value="A">A</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><?php echo $row2['Sub_2']; ?></td>
                                        <td><select name="Sub_2" id="Sub_2" required>
                                                <option value="">Select Grade</option>
                                                <option value="A+">A+</option>
                                                <option value="A">A</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><?php echo $row2['Sub_3']; ?></td>
                                        <td><select name="Sub_3" id="Sub_3" required>
                                                <option value="">Select Grade</option>
                                                <option value="A+">A+</option>
                                                <option value="A">A</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td><?php echo $row2['Sub_4']; ?></td>
                                        <td><select name="Sub_4" id="Sub_4" required>
                                                <option value="">Select Grade</option>
                                                <option value="A+">A+</option>
                                                <option value="A">A</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td><?php echo $row2['Sub_5']; ?></td>
                                        <td><select name="Sub_5" id="Sub_5" required>
                                                <option value="">Select Grade</option>
                                                <option value="A+">A+</option>
                                                <option value="A">A</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td><?php echo $row2['Sub_6']; ?></td>
                                        <td><select name="Sub_6" id="Sub_6" required>
                                                <option value="">Select Grade</option>
                                                <option value="A+">A+</option>
                                                <option value="A">A</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td><?php echo $row2['Sub_7']; ?></td>
                                        <td><select name="Sub_7" id="Sub_7" required>
                                                <option value="">Select Grade</option>
                                                <option value="A+">A+</option>
                                                <option value="A">A</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td><?php echo $row2['Sub_8']; ?></td>
                                        <td><select name="Sub_8" id="Sub_8" required>
                                                <option value="">Select Grade</option>
                                                <option value="A+">A+</option>
                                                <option value="A">A</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td><?php echo $row2['Sub_9']; ?></td>
                                        <td><select name="Sub_9" id="Sub_9" required>
                                                <option value="">Select Grade</option>
                                                <option value="A+">A+</option>
                                                <option value="A">A</option>
                                                <option value="B+">B+</option>
                                                <option value="B">B</option>
                                                <option value="C+">C+</option>
                                                <option value="C">C</option>
                                                <option value="Audit">Audit</option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td><?php echo $row2['Sub_10']; ?></td>
                                        <td><input type="text" name="Sub_10" style="height:40px;width:190px;border-radius:8px;font-size:25px;" required></td>
                                    </tr>

                                </tbody>
                            </table>
                            <br>
                            <button type="submit">SUBMIT</button>
                            <br>
                            <button type="reset" style="background-color:red;">RESET</button>
                            <br>
                        </div>
                </h1>
        </form>
    </div>
</body>

</html>