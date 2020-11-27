<?php
include 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
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
        include 'head.php';
        ?>
        <div class="container-fluid" style="padding-top:50px">
            <?php
            extract($_REQUEST);
            $id = $_GET['sub_id'];
            $query = "select * from mst_subject where sub_id='$id'";
            $q=mysqli_query($con,$query);
            $res=mysqli_fetch_assoc($q);


            if(isset($update))
            {

            $query="update mst_subject SET sub_name='$subname' where sub_id='$id'";	
            mysqli_query($con,$query);
            echo "records updated";	
                header('location:viewsub.php');

            }



            ?>
            <h1 class='text-center bg-primary'>Update SUBJECT</h1>
            <div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
                <title>Add Subject</title>
                <form name="form1" method="post" onSubmit="return check();">
                    <table class="table table-striped">
                        <tr>
                            <td width="45%" height="32"><div align="center"><strong>Enter Subject Name </strong></div></td>
                            <td width="2%" height="5">  
                            <td width="53%" height="32">
                                <input class="form-control" value="<?php echo $res['sub_name']; ?>" name="subname" placeholder="enter language name" type="text" id="subname"></td>
                        <tr>
                            <td height="26"> </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="26"></td>
                            <td>&nbsp;</td>
                            <td><input class="btn btn-primary" type="submit" name="update" value="Update" ></td>
                        </tr>
                    </table>
                </form>
                <p>&nbsp; </p>
            </div>
        </div>
    </body>
</html>