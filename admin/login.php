<?php
    require ("common.php");
    $user_id = $_POST['loginid'];
    $user_id = mysqli_real_escape_string($con,$user_id);
    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con,$password);
    
    $query = mysqli_query($con,"select * from mst_admin where loginid='$user_id' and password='$password'");
    
    $num = mysqli_num_rows($query);
    
    if($num == 0){
        $error = $$_GET['error'];
        $error = "<span class = 'red'>echo 'Enter Correct Loginid and Password'</span>";
        header('location:index.php?error='.$error);
    }else{
        $row = mysqli_fetch_array($query);
        $_SESSION['user_id'] = $row['loginid'];
        $_SESSION['user_id'] = $row['id'];
        header('location:home.php');
    }
    
?>