<?php

include_once('conection.php');
if(!isset($_SESSION['user'])){
	header('location:login.php');
}

$quer="select * from Emp";
$st=$db->prepare($quer);
$st->execute();
$res=$st->fetchall(PDO::FETCH_ASSOC);



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
  .sertext {
    background-color: #d6d6da;
}
.check{
  height:17px;
  width:20px;
}
 
.checkbox {
  margin: 10px;
  font-size: 18px;
}
.print {
  font-size: 15px;
    margin-top: 6px;
    padding: 7px 15px 7px 15px;
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
            <a href="index.php">
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
          <li class="sidebar-dropdown active">
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
      <h2>ALL Employee</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
       
        <div class="input-group search mt-2 mb-2  ">
          <input type="text" id="myInput" class="form-control sertext" placeholder="Search">
          <div class="input-group-append">
            <button class="btn btn-info" type="button" onclick="buttonclik()">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>

        <div class="search mt-2 mb-2">
          
          <div class="checkbox float-left">
            <label>
              <input type="checkbox" class="check" id="selectall"> Select All
            </label>
          </div>

          <div class="float-right">
            <button class="btn btn-info print" type="button" onclick="formsubmit()">
                 Print
            </button>
          </div>
        </div>

        <table id="example" class="table table-bordered  table-responsive" style="width:100%">
       
        <thead class="table-dark">
            <tr>
              <th></th>
              <th>Photo</th>
              <th>Emp No.</th>
              <th>Department</th>
                <th>Full Name</th>
                <th>Designation</th>
                <th>Blood Group</th>
                <th>Mobile No.</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
             <form action="allpass.php" method="POST" id="form1">
              <div class="container">
              <div class="form-group">
              <div class="col-4">
                <label for="date1">Issue Date</label>
              <input type="date" id="date1" class="form-control" name="isuedate">
              <label for="date2">Expire Date</label>
              <input type="date" id="date2" name="expdate" class="form-control">
            </div>
            </div>
          </div>
             <?php foreach ($res as $res) {?>
               
             
            <tr>
             
                <td><input type="checkbox" class="case check" name="case[]" value="<?php echo $res['id'];  ?>"/></td>
                <td><img src="<?php echo $res['photo']; ?>" class="img-thumbnail"></td>
                <td><?php echo $res['empno']; ?></td>
                <td><?php echo $res['department']; ?></td>
                <td><?php echo $res['fname'];?></td>
                <td><?php echo $res['designation'];?></td>
                <td><?php echo $res['bloodgroup'];?></td>
                <td><?php echo $res['number'];?></td>
                <td><?php echo $res['gender'];?></td>
                <td><?php echo $res['address'];?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                 <a href="edit.php?id=<?php echo $res['id'] ?>" class="btn btn-success">Edit</a><a href="delete.php?id=<?php echo $res['id'];  ?>" class="btn btn-danger">Delete</a>
</div>
                    
    </td>
            </tr>
          <?php } ?>
           </form>
           
            
            
        </tbody>
        <tfoot class="table-dark">
            <tr>
               <th></th>
              <th>Photo</th>
              <th>Emp No.</th>
              <th>Department</th>
                <th>Full Name</th>
                <th>Designation</th>
                <th>Blood Group</th>
                <th>Mobile No.</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

         
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

<script type="text/javascript">
  function formsubmit(){


      if ($("input[type='checkbox'][name='case[]']:checked").length){
        
         $('#form1').submit();
    }else{
      alert("not valid");
    }


    // alert($('.check').checked);
    //
    //alert("HELLO");
  }

  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#example tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

function buttonclik() {
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#example tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
}


</script>

<script type="text/javascript">
  $(function(){

  // add multiple select / deselect functionality
  $("#selectall").click(function () {
      $('.case').attr('checked', this.checked);
  });

  // if all checkbox are selected, check the selectall checkbox
  // and viceversa
  $(".case").click(function(){

    if($(".case").length == $(".case:checked").length) {
      $("#selectall").attr("checked", "checked");
    } else {
      $("#selectall").removeAttr("checked");
    }

  });
});

</script>
    
</body>

</html>