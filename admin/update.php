<?php 
$temp1 = 0;

session_start();
session_destroy();
$temp1 = @$_SESSION['$del'];
if ($temp1) {
  echo '<script>alert("Alredy Deleted")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <style>
    select {
      border-radius: 8px;
    }

    body {
      margin: 20%;
      margin-top: 2%;
    }

    .contain {
      padding-top: 5%;
      padding-bottom: 5%;
      background-color: greenyellow;
      background-image: url('boot/Images/ef.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }

    button {
      height: 35px;
      font-size: 18px;
      width: 100px;
      border-radius: 8px;
    }
  </style>
</head>

<body>
    <div class="contain" align="center">
    <form action="update2.php" method="post">
        <h1>UPDATE RECORD</h1>
        <select name="Year" id="year" style="height: 30px;width:500px;" required>
            <option value="">Select Year</option>
            <option value="1">First Year</option>
            <option value="2">Second Year</option>
            <option value="3">Third Year</option>
            <option value="4">B.Tech</option>
        </select>
        <br><br>
        <select name="Sem" id="sem" style="height: 30px;width:500px;" required>
            <option value="">Select Semister</option>
            <option value="1">First Semister</option>
            <option value="2">Second Semister</option>
        </select>
        <br><br>
        <select name="Depar" id="depar" style="height: 30px;width:500px;" required>
            <option value="">Select Department</option>
            <option value="CSE">Computer Science and Engineering</option>
            <option value="IT">Information and Technology</option>
            <option value="ENTC">Electronics and Telecommunication</option>
            <option value="CE">Civil Engineering</option>
            <option value="ME">Mechanical Engineering</option>
            <option value="CHE">Chemical Engineering</option>
            <option value="TE">Textile Engineering</option>
            <option value="IE">Instrumentation Engineering</option>
            <option value="EE">Electrical Engineering</option>
            <option value="PE">Production Engineering</option>
        </select>
        <pre><h1>Registration Number :</h1><input type="text" name="RegNo" style="height:30px;width:200px;border-radius:8px" required></pre>
        <button type="submit" style="background-color: aqua;">UPDATE</button>
        <br>
        <br>
        <button type="reset">RESET</button>
        <br>
    </form>
    </div>
</body>

</html>