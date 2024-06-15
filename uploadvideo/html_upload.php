<?php 

include("db.php");
include './admin_auth.php';

if(isset($_POST['upload'])) 
{
	
	
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$temp_name=$_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_destination = "html_vid/".$file_name;
	$allowed=array("video/x-matroska","video/mp4");


	if ($file_name=="") {
		echo'<script>alert("Please Select a file");</script>';
	}
	else if (!in_array($file_type,$allowed)) {
		
		echo'<script>alert("File must be video");</script>';
	}
	
	else if (move_uploaded_file($temp_name,$file_destination)) {
		
		$q = "INSERT INTO html (name) VALUES ('$file_name')";
		
		if(mysqli_query($conn, $q)) {
			
			$success = "Video Uploaded Successfully.";
			header('location: html_upload_index.php');
			
		}
		else {
			
			$failed = "Something Went Wrong??";
			
		}
	}
	
	else {
		
		$msz = "Please select a video to upload..!";
	}
}	

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Upload Video</title>
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <script src="assets/bootstrap/jquery.min.js"></script>
       
	</head>
	<body>
	
		<div class = "container mt-3">
		
			<h1 class = "text-center mb-5"><b>UPLOAD VIDEO INTO DATABASE</b></h1>
			<div class = "col-lg-8 m-auto">
				<form action = "html_upload.php" method = "post" enctype = "multipart/form-data">
				<div class = "form-group">
					<label><strong> Upload a Video</strong></label>
					<input type = "file" name = "file" class = "form-control">
				</div>
				<?php if(isset($success)) { ?>
				<div class = "alert alert-success">
				
				<?php echo $success; ?>
				
				</div>
				<?php } ?>
				<?php if(isset($failed)) { ?>
				<div class = "alert alert-danger">
				
					<?php echo $failed; ?>
				
				</div>
				<?php } ?>
				<?php if(isset($msz))  { ?>
				<div class = "alert alert-danger">
				
				<?php echo $msz; ?>
				
				</div>
				<?php } ?>	
				<a href="html_upload_index.php">
					<input type = "submit" name = "upload" value = "Upload" class = "btn btn-success ml-3">
				</a>
				<a href="html_upload_index.php">
					<input type = "button" name = "upload" value = "Go Back" class = "btn btn-primary mt-3">
				</a>
			</div>
		</div>
	</body>
</html>	