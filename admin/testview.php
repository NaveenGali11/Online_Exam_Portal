<?php
    include 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- link to Jquery minified-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- link to Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="exams.css" type="text/css">
    </head>
    <body>
        <?php
            include 'head.php';
        ?>
        <div class="container" style="padding-top:80px">
            <?php
            $query = "SELECT * FROM mst_test";
            $sql=mysqli_query($con,$query) or die(mysqli_error($con));	
            
            echo "<table class='table table-striped'>";
            echo "<tr><th class='text-primary'>Id</th><th class='text-primary'>name</th>
                   <th class='text-primary'>Total Questions</th>
                   <th class='text-primary'>Update</th>
                   <th class='text-primary'>Delete</th></tr>";
            
            while($result = mysqli_fetch_assoc($sql))
            {
                $id=$result['test_id'];
                echo "<tr>";
                echo "<td>".$result['test_id']."</td>";
                echo "<td>".$result['test_name']."</td>";
                echo "<td>".$result['total_que']."</td>";
                echo "<td><a href='test_update.php?test_id=$id'><span class='glyphicon glyphicon-edit'></span></a></td>";
                echo "<td><a href='test_delete.php?test_id=$id'><span class='glyphicon glyphicon-trash'></span></a></td>";
                echo"</tr>";  
            }
            echo "</table>";
            
        ?>
        </div>
    </body>
</html>