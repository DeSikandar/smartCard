<?php



include_once('conection.php');

if ($_FILES["photo"]["error"] == 4)
{
    $qyer="update Emp set empno=:empno,department=:department,fname=:fname,designation=:designation,bloodgroup=:bloodgroup,number=:number,gender=:gender,address=:address where id=:id ";

	$st=$db->prepare($qyer);
	$st->execute(array(
	    'id'=>$_POST['id'],
		':empno' =>$_POST['empno'],
		':department' =>$_POST['department'],
		':fname' =>$_POST['fname'],
		':designation' =>$_POST['designation'],
		':bloodgroup' =>$_POST['bloodgroup'],
		':number' =>$_POST['number'],
		':gender' =>$_POST['gender'],
		':address' =>$_POST['address']
	

	));
	
	header('location:allemp.php');
	
	
	
	
}else{
    
    
    $target_dir = "uploads/";
	$target_file = $target_dir .date("Ymdhisa"). basename($_FILES["photo"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["photo"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	
	// Check file size
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
	        //echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}


	$qyer="update Emp set empno=:empno,department=:department,fname=:fname,designation=:designation,bloodgroup=:bloodgroup,number=:number,gender=:gender,address=:address,photo=:photo where id=:id ";

	$st=$db->prepare($qyer);
	$st->execute(array(
	    'id'=>$_POST['id'],
		':empno' =>$_POST['empno'],
		':department' =>$_POST['department'],
		':fname' =>$_POST['fname'],
		':designation' =>$_POST['designation'],
		':bloodgroup' =>$_POST['bloodgroup'],
		':number' =>$_POST['number'],
		':gender' =>$_POST['gender'],
		':address' =>$_POST['address'],
		':photo' =>$target_file

	));

	header('location:allemp.php');
	
}


?>