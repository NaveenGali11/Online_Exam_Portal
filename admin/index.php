<?php
    require 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login | Online Examination Portal</title>
        <!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="exams.css" type="text/css">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
            <div class="container" style="padding-bottom:190px">
                <div class="row" style="padding:50px">
                    <div class="col-sm-4">
                        <h2>Login</h2>
                        <form action="login.php" method="post">
                            <div class="form-group col-sm-10">
                                  <input class="form-control" type="text" placeholder="Enter Your Login Id" name="loginid" required>    
                            </div>
                            
                            <div class="form-group col-sm-10">
                                <input class="form-control" type="password" placeholder="Enter Your Password" name="password" required>
                            </div>
                            
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>