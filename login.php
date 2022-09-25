<?php
    session_start();
    include './includes/conn.php';
    if($_POST['email'] && $_POST['password'])
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $sql = "select * from admin where email= '$email'";
        $stmt = mysqli_query($conn,$sql);
        if($row = mysqli_fetch_assoc($stmt))
        {
            if($row['password']==$pass)
            {
                $_SESSION['email'] = $row['email'];
                $_SESSION['password']=$row['password'];
                session_write_close();
                header('Location:admin.php');
            }
            else
            {
                header('Location:index.php?msg=Enter Valid Password');
            }
        }
        else
        {
            header('Location:index.php?msg=Enter Valid Email');
        }

    }
    else
    {
        header('Location:index.php?msg=Enter Valid Email & Password.');
    }

?>