<?php

include_once('conection.php');

$er=0;

if(isset($_POST['submit'])){

  $username=$_POST['username'];
  $password = $_POST['password'];
  
  $quers="select count(*),username from User where username=:username and password=:patel";
  $es=$db->prepare($quers);
  $es->execute(array(
    'username'=>$username,
    'patel'=>$password

  ));
  $re=$es->fetchall();
  $a =$re[0][0];

  if($a>0){
  $_SESSION['user']=$re[0][1];
  header('location:index.php');

  }else{
    $er=1;
  }

      
  
}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body style="background: url('../Assets/image/1.jpg'); background-size: 100%; background-origin:center; background-repeat: no-repeat;">
  <div class="container-fluid" >
<div class="row" >

<div class="col-4"></div>
<div class="col-4 ">
<div style="margin-top:50%;color: black;font-weight: 900; ">
<form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <?php if ($er==1){?>
    <div class="alert alert-danger">
    username & password is incorrect !
    </div>
  <?php }?>
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter User name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <div style="text-align: center;">
  <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
</div>
</form>
</div>
</div>
</div>

</div>
</div>



<script src="../Assets/js/jquery.slim.min.js"></script>
<script src="../Assets/js/popper.min.js"></script>
<script src="../Assets/js/bootstrap.min.js"></script>
</body>
</html>
