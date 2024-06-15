

<!DOCTYPE html>
<html>
    <head>
        <title> Upload Video</title>
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <!-- <script src="assets/bootstrap/jquery.min.js"></script> -->
		<link rel="stylesheet" href="upload.css">
		
       
	</head>
	<body>
	
	<div class = "container mt-3 mb-3">
		
			<h1><b>UPLOAD VIDEO TUTORIAL FOR HTML COURSE</b></h1>
			<hr/>
				
				<a href = "html_upload.php" class = "btn btn-primary mt-3"> UPLOAD A NEW VIDEO </a>
				
				<a style="margin-left:2rem" href = "../admin/select_course.php" class = "btn btn-primary mt-3"> GO TO COURSE SELECTION</a>
				<hr/>
				
			<div class = "row video-grid">
				<?php 

				
				include("../FYP/uploadvideo/db.php");
				
				
				
				$q = "select * from html";
				
				$query = mysqli_query($conn,$q);
				
				while($row = mysqli_fetch_array($query)) {


					
				?>	
				
				<div class = "col-md-4 video-cnt">
					<h2 class="vid-title"><?php
					$title=$row['name'];					
					 echo 	str_replace(".mp4"," ",$title);?></h2>
					<video class="myvid" id = "myVideo" width = "100%" controls>
					<source src = "<?php echo './uploadvideo/html_vid/'.$row['name'] ?>">
					</video>
				</div>
				
				<?php } ?>
			</div>
	</div>
	</body>
</html>