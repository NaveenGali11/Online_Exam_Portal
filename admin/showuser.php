<?php
include 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
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
        <div class="container" style="padding-top:150px">
            <?php
            {

                $query = "SELECT * FROM mst_users";
                $sql=mysqli_query($con,$query) or die(mysqli_error($con));	
                echo "<table class='table table-striped'>";
                echo"<h1 class='text-center bg-danger'>Registered User Detail</h1>";
                echo "<tr>
                    <th class='text-primary'>UserID</th>
                    <th class='text-primary'>Name</th>
                    <th class='text-primary'>Email</th>
                    <th class='text-primary'>Delete User</th></tr>";

                while($result=mysqli_fetch_assoc($sql))
                {
                    $id = $result['username'];

                    echo "<tr>";	
                    echo "<td>".$result['user_id']. "</td>";
                    echo "<td>".$result['username']."</td>";
                    echo "<td>".$result['email']."</td>";
                    
                    echo "<td><a href='userdelete.php?username=$id'><span class='glyphicon glyphicon-trash'></span></a></td>";
                    
                    echo "</tr>";
                    echo"</div>";
                }
                echo "</table>";

            }
            ?>
        </div>
    </body>
</html>