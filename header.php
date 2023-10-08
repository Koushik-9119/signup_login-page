<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!=''){

}else{
	header('location:index.php');
	die();
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="dashboard.css" />
	<title>Dasboard</title>
</head>
<body>
	<nav class="flex">
		<div class="nav-left flex">
			<img src="img/menu.png" class="menu">
			<img src="img/logo.png" class="logo">
		</div>
		<div class="nav-middle flex">
			<div class="search flex">
				<input type="text" placeholder="Search">
				<img src="img/search.png" >
			</div>
		</div>
		<div class="nav-right flex">
			<img src="img/messages.png">
			<img src="img/notification.png" >
			<img src="img/Jack.png" class="user-icon" >
		</div>
	</nav>
	<!-------------------------Sidebar--------->
	<div class="sidebar">
		<div class="side-links">
			<a href=""><img src="img/home.png"><p>Home</p></a>
			<a href=""><img src="img/messages.png"><p>messages</p></a>
			<a href=""><img src="img/notification.png"><p>Notification</p></a>
			<a href=""><img src="img/more.png"><p>More</p></a>
			<hr>
		</div>
	</div>

	<script src="Script.js"></script>

</body>
</html>
