<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css" />
	<title>Dasboard</title>
    <link rel="stylesheet" type="text/css" href="body.css" />
    <style>
        h1{
            padding-top:5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="heading">dashboard</h1>
        <h1 class="welcome"><?php echo "Welcome ".$_SESSION['USER_NAME'];?></h1>
        </br>
        <a href="logout.php">Logout</a>
        <div class="banner" >
            <img src="img/banner.png" alt="">
        </div>
        <div class="box-container">
            <div class="box">
            </div>
        </div>
    </div>
</body>
<script src="Script.js"></script>
</html>