<?php
include "./auth.php";
include './includes/conn.php';
if($_POST['name'] && $_POST['class'])
{
    $id = $_POST['id'];
    $name   = $_POST['name'];
    $class = $_POST['class'];
    $parent = $_POST['parent'];
    $modidate = date('d-m-Y H:i:s a');
    $sql = "UPDATE stu_details SET stu_name='$name', class='$class', parent='$parent', modified='$modidate' where id= $id";
    $stmt = mysqli_query($conn,$sql);
    if($stmt)
    {
        header('Location:admin.php');
    }
 }
?>
