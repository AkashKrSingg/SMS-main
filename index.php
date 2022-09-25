<?php
    $msg="";
    if(isset($_GET['msg']))
    {
        $msg = $_GET['msg'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage-SMS</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body{
            background-color: rgb(231, 229, 234);
        }
        .container
        {
            
            width: 500px;
            height: 500px;
            background-color: rgb(158, 158, 223);
            position: absolute;
            top: 20%;
            left: 35%;
            border: 10px solid rgb(69, 77, 71);
            padding: 50px 10px;
            border-radius: 50px;

        }
        .container form{
            margin: 20px 80px;
        }
        .container label
        {
            width: 100px;
            font-weight: bold;
            font-size: 23px;
            color: rgb(4, 14, 41);
        }
    </style>
</head>
<body>
    <div class="container">
        <h4 class="text-center">Admin Login Panel</h4 class="text-center">
        <form action="./login.php" method="post" name="frmlogin" id="frmlogin" autocomplete="off">
            <label for="emal">Email</label>
            <input type="email" name="email" id="email"> <br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password"><br>

            <input type="submit" value="Login" name="submit"> <a href="#" class="text-white">Forgot password ?</a>
        </form>
        <h4>
            <?php
                echo $msg;
            ?>
        </h4>
    </div>
    
< <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>