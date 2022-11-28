<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
  <title>Admin</title>
</head>

<body>
  <div class="center">
    <div align="center">
      <img src="https://www.sggs.ac.in/uploads/logos/sggs2.png" alt="University of Education and knowledge" width="1000">
      <hr style="stroke-width: 2px;">
      <h1>Student Result Management System</h1>
      <br>

    </div>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="Result.php">Result</a></li>
      <li><a class="active" href="admin.php">Admin</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#about">About</a></li>
    </ul>

    <?php
    $temp1 = 0;
    session_start();
    session_destroy();
    ?>
    <form action="admin_back.php" method="post">
      <div class="imgcontainer">
        <img src="Images/tavatar.jpg" alt="Avatar" class="avatar">
      </div>
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}+" required>
        <input type="checkbox" onclick="myFunction()">Show Password

        <script>
          function myFunction() {
            var x = document.getElementById("psw");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
        </script>

        <button type="submit" style="font-size:18px;">Login</button>
      </div>

      <div align="center"> <button type="reset" style="background-color:red;font-size:18px;  width: 20%;">RESET</button> </div>

    </form>
    <?php
    $temp1 = @$_SESSION['$Login'];

    if ($temp1) {
      echo '<script>alert("Enter Correct Details")</script>';
    }
    ?>
  </div>
</body>

</html>