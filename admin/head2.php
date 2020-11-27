<?php
    include 'common.php';
?>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home">Exam Portal</a>
        </div>
        
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                               
                <li><a href="#">Home</a></li>
               
                <li><a href="viewsub.php">View Subject</a></li>
                
                <li><a href="testview.php">View Test</a></li>
                
                <li><a href="questiondelete.php">View Question</a></li>
                
                <li><a href="showuser.php">View User</a></li>

                <li><a href="logout.php">Logout</a></li>
                
               
            </ul>
        </div>
    </div>
</div>