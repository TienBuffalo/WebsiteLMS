<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>127 Math</title>

	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!----font-awsome ends-->
		<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/signupstyle.css">
	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!----------email notification-------->
	<style type = "text/css">
		.pw
		{
			margin-bottom: 20px !important;
			padding: 4px !important;
			width: 220px !important;
			height: 32px !important;
			border: none !important;
			outline: none !important;
			border-bottom: 1px solid #aaa !important;
			font-weight: 400px !important;
			font-size: 15px !important;
			transition: 0.5s ease-in !important;
			margin-left: 70px;
		}
	</style>
</head>
<body>
			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<h1 style="color: white;margin-top: 10px;" id="myhead">127 Math</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="./index.php">Trang Chủ</a></li>
					<li> <a href="#">KHÓA HỌC</a></li>
					<li> <a href="#">HOẠT ĐỘNG</a></li>
					<li> <a href="#">HỖ TRỢ</a></li>
					<li> <a href="" id="our-location" class="btn-success" data-target="#mymodal" data-toggle="modal">Đăng nhập/Đăng ký</a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->

			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">ĐĂNG KÝ</h3>
						<div class="modal-body" >
							<div class="left-box">
								<form method="POST" action="registration.php"> 
									<div class="form-group">
										<label style="margin-left: -257px;"><i class="fa fa-user fa-2x"></i>&nbspTài Khoản :</label>
										<input type="text" name="name" class="form-control">
										<label style="margin-left: -127px;"><i class="fa fa-lock fa-2x"></i>&nbspMật khẩu :</label >
										<input type="password" name="password" class="pw" id="pwd" >
										<label style="margin-left: -100px;"><i class="fa fa-user fa-2x"></i>Nhập lại mật khẩu :</label>
										<input type="password" name="confirm_password" class="pw" id="cpwd">
										<label style="margin-left: -267px;"><i class="fa fa-lock fa-2x"></i>&nbspEmail id :</label>
										<input type="text" name="email" class="form-control">
										<div id="errorlabel" >
											<?php
												if(isset($_SESSION['signup']))
												{
													echo "Tài khoản đã tồn tại";
												}
											?>
										</div>
										<button id="btn-login" type="submit"></a> Đăng ký</button>
									</div>
								</form>
							</div>
							<div class="right-box">
								<span class="signinwith">Đăng nhập bằng <br> mạng xã hội</span>
								<button class="social facebook">Đăng nhập bằng Facebook</button>
								<button class="social twitter">Đăng nhập bằng Twitter</button>
								<button class="social google">Log in with Gmail</button>
							</div>
						</div>
						<button id="btn-signup"><a id="sign" href="login.php">Trở lại</a></button>
					</div>
				</div>
			</section>
			

			<!---Slider Section ends------->

			<!---confirm password validation Start------->

<script type="text/javascript">
	$(document).ready(function(){

		$('#cpwd').keyup(function(){
			var pwd=$('#pwd').val();
			var cpwd=$('#cpwd').val();
			if (cpwd!=pwd) 
			{
				$('#errorlabel').html('Password are not matched');
				$('#errorlabel').css('color','red');
				return false;
			}
			else
			{
				$('#errorlabel').html('');
				return true;
			}
		});

	});

</script>
         <!---confirm password validation end------->

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>

</body>
</html>