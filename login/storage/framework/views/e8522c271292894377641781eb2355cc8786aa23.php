<!DOCTYPE html>
<html>
<head>
	<title>Account Login</title>
	
</head>
<body>
	<nav>
		<a href="\home">Home</a>
		<a href="#">User List</a>
		<a href="#">Registration</a>
		<a href="#">Login</a>
	</nav>

    <style>
    
    *{
	margin: 0;
	padding: 0;
	font-family: verdana;
}
nav{
	width: 100%;
	height: 70px;
	background-color: red;
}
a{
	text-decoration: none;
	color: white;
	line-height: 70px;
	width: 120px;
	display: inline-block;
	text-align: center;
	margin-left: 1%;
}
nav a:hover{
	background-color: white;
	color: red;
	transition: 1s all ease;
}
    
    </style>
<div class="containor">
<?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html><?php /**PATH C:\xamppserver\htdocs\laravel\login\resources\views/layout.blade.php ENDPATH**/ ?>