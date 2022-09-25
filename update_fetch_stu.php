<?php
include "./auth.php";
include './includes/conn.php';
?>
<!doctype html>
<html lang="en">
  <head>
      <title>Update Student Record</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Custom CSS -->
     <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
     <!-- navbar -->
     <?php
     include './includes/header.php';
     ?>
    <!-- update operation -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="img-box">
                    <img src="./images/student.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    if($_GET['id'])
                    {
                        $id = $_GET['id'];
                        $sql = "select * from stu_details where id='$id'";
                        $stmt = mysqli_query($conn, $sql);
                        $rs = mysqli_fetch_assoc($stmt);
                    }
                ?>
                <div class="student-form">
                    <h4>Update Student Record</h4>
                    <form action="updated_stu.php" method="post">
                        <div class="form-group">
                            <label for="name">Student's Name</label>
                            <input type="hidden" class="form-control" value="<?php echo $rs['id']; ?>" id="id" name="id">
                            <input type="text" class="form-control" value="<?php echo $rs['stu_name']; ?>" id="name" name="name" placeholder="Student's Name">
                        </div>
                        <div class="form-group">
                            <label for="class">Class</label>
                            <input type="text" class="form-control" value="<?php echo $rs['class']; ?>" id="class" name="class" placeholder="Class">
                        </div>
                        <div class="form-group">
                            <label for="parent">Parent's Name</label>
                            <input type="text" class="form-control" value="<?php echo $rs['parent'];  ?>" id="parent" name="parent" placeholder="Parent's Name">
                        </div>
                        <input type="submit" name="updateStudent" id="updateStudent" value="Update Record" class="btn btn-primary">
                        <a class="btn btn-danger" href="admin.php">Cancle</a>
                    </form>
                </div>
            </div>
        </div>
        
        <h1 class="text-center">Student List</h1>
    </div>

    <!-- Student Records -->
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>Sl. No</th>
                        <th> Student Name</th>
                        <th>Class</th>
                        <th>Parent's Name</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from stu_details";
                    $stmt = mysqli_query($conn, $sql);
                    $i = 0;
                    while($row = mysqli_fetch_assoc($stmt))
                    {
                        echo "  <tr>
                                    <td>".++$i."</td>
                                    <td>".$row['stu_name']."</td>
                                    <td>".$row['class']."</td>
                                    <td>".$row['parent']."</td>
                                    <td><a href='update_fetch_stu.php?id=".$row['id']."'><input type='button' name='edit_stu' id='edit_stu' value='Edit' class='btn btn-primary float-left'></a></td>
                                    <td><a href='delete_stu.php?id=".$row['id']."'><input type='button' name='delete_stu' id='delete_stu' value='Delete' class='btn btn-danger float-left'></a></td>
                                </tr> ";
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>