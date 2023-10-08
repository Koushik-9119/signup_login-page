<?php
require('connection.inc.php');
require('functions.inc.php');
$msg='';
if(isset($_POST['signup'])){
    $name=get_safe_value($con,$_POST['name']);
	$username=get_safe_value($con,$_POST['username']);
	$password=get_safe_value($con,$_POST['password']);

    if(mysqli_num_rows(mysqli_query($con,"select * from users_login where username='$username'"))>0){
		$msg= "<font color='red'> Userame already Take! If WE Are Already Registered Please";
	}else{
		$password=password_hash($password,PASSWORD_DEFAULT);
		mysqli_query($con,"insert into users_login(name,username,password) values('$name','$username','$password')");
		$msg= "<font color='green'> Thanks for filling out our form! Please Login into your Account  ";
	}
} 

if(isset($_POST['signin'])){
	$username=get_safe_value($con,$_POST['username']);
	$password=get_safe_value($con,$_POST['password']);

	$res=mysqli_query($con,"select * from users_login where username='$username'");
	
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$verify=password_verify($password,$row['password']);
		if($verify==1){
			$_SESSION['USER_LOGIN']=true;
			$_SESSION['USER_NAME']=$row['username'];
			header('location:dashboard.php');
			die();
		}else{
			$msg= "<font color='red'>Please enter correct Password";
		}
	}else{
		$msg= "<font color='red'>Please enter correct UserName";
	}
	
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="container">
        <div class="login-page">
            <div class="form">
                <div><?php echo $msg?></div>
                <form method="post">
                    <div class="register-form">
                    <h2>Sign Up</h2>
                        <div class="inputBox">
                           <input type="text" name="name" required>
                           <label for="">Name</label>
                        </div>
                        <div class="inputBox">
                           <input type="text" name="username" required>
                           <label for="">UserName</label>
                        </div>
                        <div class="inputBox">
                            <input type="password"  name="password" required>
                            <label for="">Password</label>
                        </div>
                        <button type="submit" name="signup">Create</button>
                        <p class="message">Already registered? <a href="#">Sign In</a></p>
                    </div>
                </form>
                <form method="post">            
                    <div class="login-form">
                    <h2>Sign In</h2>
                        <div class="inputBox">
                            <input type="text" name="username" required>
                            <label for="">UserName</label>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" required>
                            <label for="">Password</label>
                        </div>
                        <button type="submit" name="signin">Login</button>
                        <p class="message">Not registered? <a href="#">Create an Account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="script.js"></script>
</body>
</html>

