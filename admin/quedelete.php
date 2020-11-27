<?php
    include 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="exams.css" type="text/css">
    </head>
    <body>
        <?php
            include 'head.php';
            
            $id = $_GET['que_id'];
        
            $query = "delete from mst_question where que_id='$id'";
            $result = mysqli_query($con,$query) or die(mysqli_error($con));
            header('location:questiondelete.php')
        ?>
    </body>
</html>