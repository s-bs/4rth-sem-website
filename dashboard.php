<?php 
session_start();
if (!isset($_SESSION['admin_id'])) {

   header('location:index.php?err=1');

}

?>
<!DOCTYPE html>
<html>
<head>

	<title>dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php require_once 'admin_menu.php' ?>
	<h5>Dashboard</h5>
	

</body>
</html>