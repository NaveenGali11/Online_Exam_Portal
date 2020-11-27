<?php
    include 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Home | Admin 
        </title>
                <!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="exams.css" type="text/css">
    </head>
    <body>
       
        <div class="container-fluid" style="padding-bottom:185px;padding-top:80px">
             <?php
            include 'head.php';
        ?>
                    <div class="jumbotron" style="padding:50px">
            <center>
                <h1>Welcome Admin</h1>
                <p>Click on the top links to go to pages..</p>
            </center>
            
        </div>
        </div>
        <?php
            include 'foot.php';
        ?>
    </body>
</html>