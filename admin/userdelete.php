<?php
    include 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="exams.css">
    </head>
    <body>
        <?php
            include 'header.php';
            
            
            $id=$_GET['username'];

            $sql=mysqli_query($con,"delete from mst_users where name='$id'") or die(mysqli_error($con));
            header('location:showuser.php');
        ?>
    </body>
</html>