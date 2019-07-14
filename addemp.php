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
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="Assets/css/main.css">
  
  <link rel="stylesheet" type="text/css" href="Assets/css/font/css/all.min.css">
 
<style type="text/css">
  .img {
    width: 150px;
    height: 140px;
  }
</style>

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
          <li class="sidebar-dropdown">
            <a href="/">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
              
            </a>
            
          </li>
          <li class="sidebar-dropdown active">
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
      <h2>Add Employee</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
          
<form action="acadd.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Employee No.</label>
    <input type="text" name="empno" class="form-control" id="exampleFormControlInput1" placeholder="123">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Department</label>
    <select class="form-control" name="department" id="exampleFormControlSelect1">
      <option value="Office">Office</option>
      <option value="Molding">Molding</option>
      <option value="Assembling">Assembling</option>
      <option value="Packing">Packing</option>
      <option value="Warehouse">Warehouse</option>
      <option value="Nail">Nail</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Full Name</label>
    <input type="text" name="fname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Full Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Designation</label>
    <input type="text" name="designation" class="form-control" id="exampleFormControlInput1" placeholder="Enter Designation here ...">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Blood Group</label>
    <select class="form-control" name="bloodgroup" id="exampleFormControlSelect1">
      <option value="A+">A+</option>
      <option value="O+">O+</option>
      <option value="B+">B+</option>
      <option value="AB">AB+</option>
      <option value="A-">A-</option>
      <option value="O-">O-</option>
      <option value="B-">B-</option>
      <option value="AB-">AB-</option>
    </select>
  </div>
  <div class="form-group">
    <label for="mo">Mobile Number</label>
    <input type="text" name="number" class="form-control" id="mo" placeholder="Enter Mobile Number ">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Gender</label>
    <label class="radio-inline"><input name="gender" value="Male" type="radio" name="optradio" required="">Male</label>
<label class="radio-inline"><input name="gender" value="Female" type="radio" name="optradio" required="">Female</label>
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Address"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Date of Issue </label>
    <input type="date" name="dateofissue" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Date of Expire</label>
    <input type="date" name="dateofexp" class="form-control" >
  </div>

  <div class="form-group">
    
    <label for="exampleFormControlFile1">Upload Photo</label>
    <input type="file" name="photo"  class="form-control" id="exampleFormControlFile1" required="">
    
    <img src="#" id="photo" class="img-thumbnail img">
  </div>
  <button class="btn btn-success  text-center" name="Submit">Submit</button>
</form>



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
    
    <script type="text/javascript">
      var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#exampleFormControlFile1").on('change', function(){
        readURL(this);
    });
    
    </script>
</body>

</html>