<!DOCTYPE html>
<html>
<head>
	<title>Simple Captcha With PHP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<style type="text/css">
		body{
			background: #3498db;
			padding: 0;
		}
		.box{
			width: 30%;
			background: white;
			margin: auto;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px;
			margin-top: 15%;
		}
		input{
			width: 90%;
			padding-left: 10px;
			height: 30px;
			border: 1px solid silver;
			border-radius: 5px;
			outline: none;
			transition: 0.3s;
		}
		input:hover{
			border: 1px solid #3498db;
		}
		button{
			margin-left: 15px;
			height: 30px;
			margin-top: 10px;
			border-radius: 5px;
			background: #3498db;
			color: white;
			border: 1px solid #3498db;
			cursor: pointer;
			transition: 0.3s;
			font-size: 13px;
		}
		a{
			height: 30px;
			margin-top: 10px;
			border-radius: 5px;
			background: #870f0d;
			color: white;
			border: 1px solid #870f0d;
			cursor: pointer;
			transition: 0.3s;
			text-decoration: none;
			font-family: arial;	
			font-size: 13px;
			padding-top: 7px;
			padding-bottom: 7px;
			padding-left: 5px;
			padding-right: 5px;
		}
		button:hover{
			background: white;
			color: #3498db;
			border: 1px solid #3498db;
		}
		a:hover{
			background: white;
			color: #870f0d;
			border: 1px solid #870f0d;
		}
		@media only screen and (max-width: 600px) {
  			.box {
 		   		width: 50%;
 		   		margin-top: 40%;
 		 	}
		}
	</style>
</head>
<body>
	<form action="index.php" method="post">
		<div class="box">
			<center><img src="captcha.php" style="width: 100px; border-radius: 5px"></center>
			<center><input type="text" name="captcha" placeholder="Enter Number" autofocus="on"></center>
			<button>Submit</button> <a href="index.php">Refresh</a>
			<?php
				session_start();
				if ($_POST) {
					$number = $_POST['captcha'];
					if ($number == $_SESSION['number']) {
						echo "<script>alert('CAPTCHA CORRECT GOOD JOB !')</script>";
					}else{
						echo "<script>alert('CAPTCHA WRONG TRY AGAIN !')</script>";
					}
				}
				
			?>
			<div style="color: #999999; font-family: arial; font-size: 12px;text-align: center;margin-top: 10px;">Copyright &copy; ImRealJere</div>
		</div>	
	</form>
</body>
</html>
