<?php
if(isset($_POST['submit']))
{
	$file= $_FILES['file'];
	move_uploaded_file($_FILES["file"] ["tmp_name"],"uploads/upload.png");

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpg','jpeg','png','pdf' );

	/*if(in_array($fileActualExt, $allowed))
	{
		if($fileError === 0){
			if ($fileSize<1000000000) {
				$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination='uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("location : index.php?uploadsuccess");
				
			}else{echo "you file is too big";}
		}else{echo "there was an error";}

	}else{
		echo "you can upload";
	}*/
}