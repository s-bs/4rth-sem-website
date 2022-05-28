<?php
	require 'connection.php';
	session_start();
	if (!isset($_SESSION['admin_id'])) {
   header('location:index.php');
}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Add place</title>
	</head>
	
	<body>
		<?php require_once 'admin_menu.php' ?>
		<div>

			<div class="addplace">
				<form  enctype="multipart/form-data" action="" method="post" >
					<h1>Add place</h1>

							<label class="label1">pradesh_id</label>
						<input 
							name="pradesh_id" 
							type="int" 
							class="text1"
							placeholder="ENTER pradesh_id"
							
							required
						/><br><br>

					
					<label class="label1">place Name</label>
						<input 
							name="name" 
							type="text" 
							class="text1"
							placeholder="Enter Name"
							
							required
						/><br><br>
						
					<label class="label1">Image</label>
						<input 
							name="img" ;
							class="img" ;
							type="file";
						/><br><br>
				
					
					<label class="label1">Description</label>
						<input 
							name="desc" 
							type="text" 
							class="text1" 
							placeholder="Enter Place Description" 
							required
						/><br><br>
					
					<input name="submit_btn1" type="submit" class="submit_btn1" value="Submit">
					<a href="adminlogin.php"><input type="reset" class="reset_btn1" value="Cancel"></a>
				</form>
				<?php
				if(isset($_POST['submit_btn1']))
				{
					//echo '<script type="text/javascript"> alert("Sign Up Button Clicked") </script>';
					$pradesh_id=$_POST['pradesh_id'];
					$name=$_POST['name'];
					$img=$_FILES['img'];
					$desc=$_POST['desc'];
					$img_name=$_FILES['img']['name'];
					$img_size=$_FILES['img']['size'];
					$imp_tmp=$_FILES['img']['tmp_name'];
					$directory='\\uploads\\';
					$target_file=$directory.$img_name;
					move_uploaded_file($imp_tmp, realpath(getcwd()) . $target_file);
					$admin_id = $_SESSION['admin_id'];
					//insert value on database
				    $query = "INSERT INTO places(`pradesh_id`,`name`, `image`, `description`, `created_by`) 
				    VALUES ('$pradesh_id','$name', '$img_name', '$desc', '$admin_id')";
					$query_run=mysqli_query($connection, $query);
					echo '<script type="text/javascript"> alert("Successfull Added Place") </script>';
				}
			?>
			</div>
		</div>
	</body>
</html>