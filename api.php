<?php	
	// Converting the file name into array with the '.' keyword that seperats each value.
	$array = explode('.', $_FILES["file_upload"]["name"]);

	// Array's last value (which is the file Extension).
	$extension = end($array);
	
	// Condition to check if the last vale of the array.
	if ($extension != "jpg"){
		// If the condition is true that the file is not a JPG file.
		echo "Sorry, there was an error uploading your file.";
	}else{
		// If the condition is false that means the file is a JPG file.
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
