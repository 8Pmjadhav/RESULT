<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">

    <title>Result</title>
    <style>
        p{
            color:rgb(153, 9, 131) ;
            font-size: 200%;
        }
        select{
            height: 30px;
            width:500px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="center">
        <div align="center">
            <img src="https://www.sggs.ac.in/uploads/logos/sggs2.png" alt="University of Education and knowledge" width="1000">
            <hr style="stroke-width: 2px;">
            <h1>Result Portal</h1>
            <br>

        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="Result.php">Result</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
        <?php
            $temp = 0;


            session_start();
            session_destroy();            
        ?> 
            <form action="Resultbackend.php" method="post">
            <div class="imgcontainer">
                <img src="Images/tavatar.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <select name="Year" id="year"  required>
                    <option value="">Select Year</option>
                    <option value="1">First Year</option>
                    <option value="2">Second Year</option>
                    <option value="3">Third Year</option>
                    <option value="4">B.Tech</option>
                </select>
                <br><br>
                <select name="Sem" id="sem"  required>
                    <option value="">Select Semister</option>
                    <option value="1">First Semister</option>
                    <option value="2">Second Semister</option>
                </select>
                <br><br>
                <select name="Depar" id="depar"  required>
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
                <br>
                <p>Registration Number : <input type="text" name="RegNo" style="height:30px;width:200px;border-radius:8px" required></p>
                
                <p>Enter your Password : <input type="password" name="Repsw" style="height:30px;width:200px;border-radius:8px" required></p>

                <button type="submit" style="height: 35px;font-size:18px;">SUBMIT</button>
                <br><br>
                <button type="reset" style="height: 35px;font-size:18px;background-color:red;">RESET</button>
                <br>
            </div>
            </form>
            <?php
            
            $temp = @$_SESSION['$WrReg'];
                
            if ($temp) {
                echo '<script>alert("Enter Correct Details")</script>';
            }
            ?>
    </div>

</body>

</html>

