<?php
include "./auth.php";
include './includes/conn.php';

    $id = $_GET['id'];
    // $name   = $_POST['name'];
    // $class = $_POST['class'];
    // $parent = $_POST['parent'];
    // $modidate=date('d-m-Y H:i:s a');
    $sql = "DELETE from stu_details where id= $id";
    $stmt = mysqli_query($conn,$sql);
    if($stmt)
    {
        header('Location:admin.php');
    }
?>