<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!--<link rel="stylesheet" href="style2.css">-->

    <title>Admin_work</title>
    <style>
        button{
            height: 35px;
            width: 25%;
            font-size:18px;
            background-color:aquamarine;
            border-radius: 8px;
        }
        .abcd{
            margin: 20%;
            margin-top: 0%;
            margin-bottom: 10%;
            padding-bottom: 20%;
            background-image: url('Images/Img-1-18.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        br{
            padding: 50%;
        }

    </style>


</head>

<body>
    <form action="index.php" method="post">
        <div class="center">
            <div align="center" >
                <img src="https://www.sggs.ac.in/uploads/logos/sggs2.png" alt="University of Education and knowledge" width="882">
                <hr style="stroke-width: 2px;">
                <h1>Student Result Management System</h1>
                <hr>
                <div class = "abcd">
                    <h1 style="color: black;">Choose operation : </h1>
                    <br>
                    <button type="link" ><a href="admin\insert.php" style="text-decoration: none;">INSERT</a></button>
                    <br><br>
                    <button type="submit" ><a href="admin\delete.php" style="text-decoration: none;">DELETE</a></button>
                    <br><br>
                    <button type="submit" ><a href="admin\update.php" style="text-decoration: none;">UPDATE</a></button>
                    <br><br>
                    <button type="submit" ><a href="admin\display.php" style="text-decoration: none;">DISPLAY</a></button>
                    <br><br>
                    
                    <button type="submit" ><a href="RESULT\admin.php" style="text-decoration: none;"></a>LOGOUT</button>
                </div>
            </div>


        </div>
    </form>
</body>

</html>