<?php
include '../login/admin_auth.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Upload Notes</title>
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <!-- <script src="assets/bootstrap/jquery.min.js"></script> -->
		<link rel="stylesheet" href="upload.css">
		
       
	</head>
	<body>
	
	<div class = "container mt-3 mb-3">
		
			<h1><b>UPLOAD NOTES</b></h1>
			<hr/>
				
				<a href = "notes_upload.php" class = "btn btn-primary mt-3"> UPLOAD A NEW NOTE </a>
				
				<a style="margin-left:2rem" href = "../admin/manage.php" class = "btn btn-primary mt-3"> GO BACK</a>
				<hr/>
				<h4 class="heading"><b>UPLOADED NOTES</b></h4>
				
			<div class = "row video-grid">
				<?php 
				
				include("db.php");
				
				$q = "select * from notes";
				
				$query = mysqli_query($conn,$q);
				
				while($row = mysqli_fetch_array($query)) {
					
				?>	
				
				<div class = "col-md-4 video-cnt">
					<?php
					$id=$row['id'];
					$title=$row['name'];				
					$title=str_replace(".pdf"," ",$title);
					 
					// echo 	str_replace(".pdf"," ",$title);?>
					<div class="pdf-display">
					<h2 class="title"><?php echo $title ?></h2>
					<button class="btn btn-success view"><a class="note-title" href="<?php echo 'pdfs/'.$row['name'] ?>" target="_blank">View</a></button>
                    </div>
					<?php
					echo '<button class="delete btn-success"><a href="note_del.php?deleteid='.$id.'">Delete above note</a></button>'
					?>
					
				</div>
				
				<?php } ?>
			</div>
	</div>
	</body>
</html>