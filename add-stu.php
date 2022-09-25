<?php
include "./auth.php";
include './includes/conn.php';

if($_POST['name'] && $_POST['class'])
{   
    $stuname = $_POST['name'];
    $class = $_POST['class'];
    $parent = $_POST['parent'];
    $created = date('d-m-Y H:i:s a');
    $sql = "INSERT INTO stu_details(stu_name, class, parent,added) VALUES('$stuname', '$class','$parent','$created')";
    $stmt = mysqli_query($conn, $sql);
    if($stmt)
    {
        // echo "Records Inserted Successfully";
        header('Location:admin.php');
    }
}
else
{
    header('Location:admin.php');
}
?>
