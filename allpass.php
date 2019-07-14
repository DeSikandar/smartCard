<?php

include_once('conection.php');
 $cas= $_POST['case'];
//print_r($cas);



// $que="select * from Emp where id=:id";

// $st=$db->prepare($que);
// $st->execute(array(
// 	'id'=>$id

// ));

// $res=$st->fetchall(PDO::FETCH_ASSOC)[0];



?>

<!DOCTYPE html>
<html>
<head>
	<title>ID Card</title>
	 
 
  <link rel="stylesheet" type="text/css" href="Assets/css/font/css/all.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<style type="text/css">

		
body {
	background-color: #fff;
	font-family:'verdana';
}
.id-card-holder {
	width: 340px !important;
	height: 207px !important;  
    border: 2px solid black;
    border-radius: 5px;  
    text-align: center;
    margin: 0px auto;
    margin-top: 10px; 
    }
.header {
	height: 60px;
	background-color: #5ddcff;
	margin-bottom: 5px;

}
.logo {
	width: 235px;
    height: 55px;
	margin-top: 3px;
}
hr {
	height: 2px;
	color: red; 
    margin: 0px;
    margin-bottom: 2px;
}
.id_detiles { 
	height: 117px; 
	background-color: #fff;
	margin-bottom: 5px;

}
.id_photo {
	width: 95px; 
	height: 100px;  
	float: left;

}
.id_logo {
	width: 85px;
	height: 90px;
	margin: 5px 0px 0px 0px;
}
.emp_det {
	width: 245px;
	height: 100px;  
	color: black!important;
	 

} 
.empfont {
	color: black!important;
	font-size: 10PX;
	margin: 3px 0px 0px 20px;

}
.footer {
	height: 20px;
	background-color: #5ddcff;

}
p {
	margin: 0px;
	padding: 0px;
	text-align: left;
	color: #000;
}
.p {
	float: left;
    font-size: 10PX;
    font-weight: 800;
	margin: 3px 0px 0px 5px;
}



.footer2 {
	margin: 0px auto;
    padding: 0px;
    text-align: center;
    margin: 10px;
	
}
.fbutton {
	cursor: pointer;
    padding: 5px 8px 5px 8px;
    color: #fff;
    font-weight: bold;
    border: 1px solid;
    background: #0e83cd;
    border-radius: 5px;
}
.fbutton:hover {
	 
    
    font-weight: bold;
      
    border-radius: 5px;
}
.fbutton:hover, .fbutton:active {
    color: #0e83cd;
    background: #fff;
}

@media print {
    .fbutton {
        display :  none;
    }
}


@page {
   size: 8.27in 11.69in;
   margin: 25mm 0mm 15mm 0mm;
}
</style>

</head>
<body>
<div class="footer2">
<button class="fbutton" onclick="window.print()">Print</button>
<button class="fbutton" onclick="window.location.href='index.php'">Home </button>
<button class="fbutton" onclick="window.location.href='addemp.php'">Add More Employee</button>
</div>
	<?php
foreach ($cas as $key) {?>
	

	<?php   
$que="select * from Emp where id=:id";

$st=$db->prepare($que);
$st->execute(array(
	'id'=>$key

));

$res=$st->fetchall(PDO::FETCH_ASSOC)[0];


	?>

		<div class="id-card-holder">
		 
		 <!-- header -->
				<div class="header">
					 <img class="logo" src="Assets/image/logo.png"> 
					 

				</div>
				 
		 <!--  end header -->

		<!-- body -->
				<div class="id_detiles"> 

					<div class="id_photo" style="float: left;">
					  <img class="id_logo" src="<?php echo $res['photo']; ?>">  
					 
					</div>

					  <div class="emp_det" style="float: left;">
					  	<p class="empfont">Emp No. :-  <?php echo $res['empno'];  ?></p>
					  	<p class="empfont">Department :-  <?php echo $res['department']; ?></p>
					  	<p class="empfont">Name :-  <?php echo $res['fname']; ?></p> 
						<p class="empfont">Designation :- <?php echo $res['designation']; ?></p> 
						<p class="empfont">Blood Group :- <?php echo $res['bloodgroup']; ?></p> 
						<p class="empfont">Mobile No. :-  <?php echo $res['number']; ?></p>
						<p class="empfont">Address :-  <?php echo $res['address']; ?></p> 
						
					</div>  

				</div>
		<!-- end body -->

		<!-- footer -->

				<div class="footer"> 
			<p class="p">Date of Issue :- <?php $date = new DateTime($_POST['isuedate']);
echo $date->format('d/m/Y');  ?></p><p class="p">Date of Expire :- <?php 
		$date = new DateTime($_POST['expdate']);
echo $date->format('d/m/Y'); ?></p>
		</div>
		<!-- end footer -->

		</div>

	<?php } ?>






</body>
</html>