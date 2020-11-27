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
        <div class="container" style="padding-top:100px">
            <?php
            extract($_REQUEST);
 $id=$_GET['test_id'];
$q=mysqli_query($con,"select * from mst_test where test_id='$id'");
$res=mysqli_fetch_assoc($q);


if(isset($update))
{

$query="update mst_test SET test_name='$testname',total_que='$totque' where test_id='$id'";	
mysqli_query($con,$query);
echo "records updated";	
    header('location:testview.php');
	
	}



?>
<form name="form1" method="post" onSubmit="return check();">
<h2 class='text-center bg-primary'>Update TEST</h2>
  <table class="table table-striped">

 <tr>
        <td height="26"><div align="left"><strong> Enter Test Name </strong></div></td>
        <td>&nbsp;</td>
	  <td><input class="form-control" value="<?php echo $res['test_name']; ?>" name="testname" type="text" id="testname"></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Total Question </strong></div></td>
      <td>&nbsp;</td>
      <td><input class="form-control" value="<?php echo $res['total_que']; ?>" name="totque" type="text" id="totque"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input class="btn btn-primary" type="submit" name="update" value="update" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
        </div>
    </body>
</html>