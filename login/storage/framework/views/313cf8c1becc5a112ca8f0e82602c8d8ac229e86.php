<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
</head>
<body>
	<nav>
		<a href="\home">Home</a>
		
		
	
		<a href="\userlist">User List</a>
		<a href="\registration">Registration</a>
		<a href="\logout">Logout</a>
		
		<a href="\signin">Sign in</a>
		<a href="\login">Login</a>
		

	</nav>

    <style>

    *{
	margin: 0;
	padding: 0;
	font-family:sans-sarif ;
}
nav{
	width: 100%;
	height: 70px;
	background-color: #6495ED;
}
a{
	text-decoration: none;
	color: white;
	line-height: 70px;
	width: 120px;
	display: inline-block;
	text-align: center;
	margin-left: 1%;
	font-size: 20px;
}
nav a:hover{
	background-color: white;
	color: black;
	transition: 1s all ease;
	text-decoration: none;
}
    
    </style>
<div class="containor">
<?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html><?php /**PATH C:\xamppserver\htdocs\laravel\login\resources\views/Layout.blade.php ENDPATH**/ ?>