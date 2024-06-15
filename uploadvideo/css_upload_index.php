<?php
//include auth_session.php file on all user panel pages
include './admin_auth.php';
?>

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
		
			<h1><b>UPLOAD VIDEO TUTORIAL FOR CSS COURSE</b></h1>
			<hr/>
				
				<a href = "css_upload.php" class = "btn btn-primary mt-3"> UPLOAD A NEW VIDEO </a>
				
				<a style="margin-left:2rem" href = "../admin/select_course.php" class = "btn btn-primary mt-3"> GO TO COURSE SELECTION</a>
				<hr/>
				<h4><b>UPLOADED VIDEOS</b></h4>
				
			<div class = "row video-grid">
				<?php 
				
				include("db.php");
				
				$q = "select * from css";
				
				$query = mysqli_query($conn,$q);
				
				while($row = mysqli_fetch_array($query)) {
					
				?>	
				
				<div class = "col-md-4 video-cnt">
					<h2 class="vid-title"><?php
					$id=$row['id'];
					$title=$row['name'];					
					 echo 	str_replace(".mp4"," ",$title);?></h2>
					<video class="myvid" id = "myVideo" width = "100%" controls>
					<source src = "<?php echo 'css_vid/'.$row['name'] ?>">
					</video>
					<?php
					echo '<button class="delete btn-success"><a href="css_del.php?deleteid='.$id.'">Delete above video</a></button>'
					?>
					
				</div>
				
				<?php } ?>
			</div>
	</div>
	</body>
</html>