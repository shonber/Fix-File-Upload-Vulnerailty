<?php	
	
	$array = explode('.', $_FILES["file_upload"]["name"]);
	$extension = end($array);
	
	if ($extension != "jpg"){
		echo "Sorry, there was an error uploading your file.";
	}else{
		$target_file = "uploads/" . basename($_FILES["file_upload"]["name"]);
		if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) 
		{
			echo "The file ". basename( $_FILES["file_upload"]["name"]). " has been uploaded.";
		} 
		else 
		{
		   echo "Sorry, there was an error uploading your file."; 
		}
	}
?>