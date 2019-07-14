<?php

include_once('conection.php');
if(!isset($_SESSION['user'])){
	header('location:login.php');
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="../Assets/css/bootstrapad.min.css">
 <link rel="stylesheet" type="text/css" href="Assets/css/main.css">
  
  <link rel="stylesheet" type="text/css" href="Assets/css/font/css/all.min.css">
 


</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
     
      <div class="sidebar-header">
        
        <div class="user-info">
          <span class="user-name"><?php echo $_SESSION['user']; ?>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span></span>
          </li>
          <li class="sidebar-dropdown active">
            <a href="/">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
              
            </a>
            
          </li>
          <li class="sidebar-dropdown">
            <a href="addemp.php">
              <i class="fa fa-shopping-cart"></i>
              <span>Add Employee</span>
           
            </a>
           
          </li>
          <li class="sidebar-dropdown">
            <a href="allemp.php">
              <i class="far fa-gem"></i>
              <span>List All Employee</span>
            </a>
           </li>
          
          
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
     
      <a href="logout.php">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
              <div class="card m-1" style="width: 18rem; float:left;">
 
  <div class="card-body">
    <h5 class="card-title">Total Employee</h5>
    <p class="card-text"><?php $quer="select count(*) from Emp";

                      $st=$db->prepare($quer);
                      $st->execute();
                      $re=$st->fetchall()[0][0];
                      echo $re;


      ?></p>
   
  </div>
</div> 
            <div class="card m-1" style="width: 18rem;  float:left;">
 
  <div class="card-body">
    <h5 class="card-title">Office Employee</h5>
    <p class="card-text"><?php $quer="select count(*) from Emp where department='Office'";

                      $st=$db->prepare($quer);
                      $st->execute();
                      $re=$st->fetchall()[0][0];
                      echo $re;


      ?></p>
   
  </div>
</div> 
   <div class="card m-1" style="width: 18rem;  float:left;">
 
  <div class="card-body">
    <h5 class="card-title">Assembling Employee</h5>
    <p class="card-text"><?php $quer="select count(*) from Emp where department='Assembling'";

                      $st=$db->prepare($quer);
                      $st->execute();
                      $re=$st->fetchall()[0][0];
                      echo $re;


      ?></p>
   
  </div>
</div> 
   <div class="card m-1" style="width: 18rem;  float:left;">
 
  <div class="card-body">
    <h5 class="card-title">Packing Employee</h5>
    <p class="card-text"><?php $quer="select count(*) from Emp where department='Packing'";

                      $st=$db->prepare($quer);
                      $st->execute();
                      $re=$st->fetchall()[0][0];
                      echo $re;


      ?></p>
   
  </div>
</div> 
   <div class="card m-1" style="width: 18rem;  float:left;">
 
  <div class="card-body">
    <h5 class="card-title">Warehouse Employee</h5>
    <p class="card-text"><?php $quer="select count(*) from Emp where department='Warehouse'";

                      $st=$db->prepare($quer);
                      $st->execute();
                      $re=$st->fetchall()[0][0];
                      echo $re;


      ?></p>
   
  </div>
</div> 
   <div class="card m-1" style="width: 18rem;  float:left;">
 
  <div class="card-body">
    <h5 class="card-title">Nail Employee</h5>
    <p class="card-text"><?php $quer="select count(*) from Emp where department='Nail'";

                      $st=$db->prepare($quer);
                      $st->execute();
                      $re=$st->fetchall()[0][0];
                      echo $re;


      ?></p>
   
  </div>
</div>

<div class="card m-1" style="width: 18rem;  float:left;">
 
  <div class="card-body">
    <h5 class="card-title">Screw Employee</h5>
    <p class="card-text"><?php $quer="select count(*) from Emp where department='Screw'";

                      $st=$db->prepare($quer);
                      $st->execute();
                      $re=$st->fetchall()[0][0];
                      echo $re;


      ?></p>
   
  </div>
</div> 
<div class="card m-1" style="width: 18rem;  float:left;">
 
  <div class="card-body">
    <h5 class="card-title">Furnace Employee</h5>
    <p class="card-text"><?php $quer="select count(*) from Emp where department='Furnace'";

                      $st=$db->prepare($quer);
                      $st->execute();
                      $re=$st->fetchall()[0][0];
                      echo $re;


      ?></p>
   
  </div>
</div> 
<div class="card m-1" style="width: 18rem;  float:left;">
 
  <div class="card-body">
    <h5 class="card-title">Zinc Plating Employee</h5>
    <p class="card-text"><?php $quer="select count(*) from Emp where department='Zinc Plating'";

                      $st=$db->prepare($quer);
                      $st->execute();
                      $re=$st->fetchall()[0][0];
                      echo $re;


      ?></p>
   
  </div>
</div> 
<div class="card m-1" style="width: 18rem;  float:left;">
 
  <div class="card-body">
    <h5 class="card-title">Nail & Screw Employee</h5>
    <p class="card-text"><?php $quer="select count(*) from Emp where department='Nail & Screw'";

                      $st=$db->prepare($quer);
                      $st->execute();
                      $re=$st->fetchall()[0][0];
                      echo $re;


      ?></p>
   
  </div>
</div> 
<div class="card m-1" style="width: 18rem;  float:left;">
 
  <div class="card-body">
    <h5 class="card-title">Security</h5>
    <p class="card-text"><?php $quer="select count(*) from Emp where department='Security'";

                      $st=$db->prepare($quer);
                      $st->execute();
                      $re=$st->fetchall()[0][0];
                      echo $re;


      ?></p>
   
  </div>
</div> 







            <div class="card m-1" style="width: 18rem;  float:left;">
 
  <div class="card-body">
    <h5 class="card-title">Molding Employee</h5>
    <p class="card-text"><?php $quer="select count(*) from Emp where department='Molding' ";

                      $st=$db->prepare($quer);
                      $st->execute();
                      $re=$st->fetchall()[0][0];
                      echo $re;


      ?></p>
   
  </div>
</div> 

        </div>
      </div>
    </div>

  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
<script src="Assets/js/jquery.slim.min.js"></script>
<script src="Assets/js/popper.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>
<script  src="Assets/js/main.js"></script>
    
</body>

</html>