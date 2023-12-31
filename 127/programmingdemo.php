<?php 
	 session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>127 Math</title>
	
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/programming.css">

	<!-- icon -->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		.context-dark, .bg-gray-dark, .bg-primary {
			color: rgba(255, 255, 255, 0.8);
		}

		.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
			color: #ffffff;
		}
		.nav-list li {
			padding-top: 5px;
			padding-bottom: 5px;
		}

		.nav-list li a:hover:before {
			margin-left: 0;
			opacity: 1;
			visibility: visible;
		}

		ul, ol {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.social-inner {
			display: flex;
			flex-direction: column;
			align-items: center;
			width: 100%;
			padding: 23px;
			font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
			text-transform: uppercase;
			color: rgba(255, 255, 255, 0.5);
		}
		.social-container .col {
			border: 1px solid rgba(255, 255, 255, 0.1);
			display: inline-block; 
		}
		.nav-list li a:before {
			content: "\f14f";
			font: 400 21px/1 "Material Design Icons";
			color: #4d6de6;
			display: inline-block;
			vertical-align: baseline;
			margin-left: -28px;
			margin-right: 7px;
			opacity: 0;
			visibility: hidden;
			transition: .22s ease;
		}

	</style>



</head>
<body style="background-color:#f1efef" >

			<!---Navigation Starts	----->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<h1 style="color: white;margin-top: 1px;" id="myhead">127 Math</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="index.php">Trang Chủ</a></li>
					<li> <a href="">KHÓA HỌC</a></li>
					<li> <a href="./video_tutorials/toan/display_video_courses.php">BÀI GIẢNG</a></li>
					<li> <a href="./online_quize/quizhome.php">KIỂM TRA</a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username']; ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->


 			<!---programming languages Section Start	----->
<br><br><br><br><br>
	<section class="latest-news-area" id="latest">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section-title text-center">
						<h2><b>CHƯƠNG TRÌNH HỌC</b></h2>
						<div class="sub-heading">
							Sau đây là các sách giáo khoa toán trung học <br>
							Bắt đầu học ngay hôm nay
						</div>
					</div>
				</div>
			</div>
		<br>
			<?php
			// session_start();
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'uniquedeveloper');
				$q="select * from programming_languages";
				$query=mysqli_query($con,$q);
				while ($res=mysqli_fetch_array($query)) {
			?>
			<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 10px;">
				<div class="latest-news-wrap">
					<div class="news-img">
						<img src=<?php echo $res['language_image']; ?> class="img-responsive">
						<div class="deat">
							<span><?php echo $res['language_name']; ?></span>
						</div>
					</div>
					<div class="news-content">
						<p>
							<?php echo $res['language_description']; ?>
						</p><br>
						<a href="programming/toan/toan_programming.php?course_name=<?php echo $res['language_name'] ?>">Bắt đầu Đọc...</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</section>

 			<!---programming languages Section ends	----->
 			<!---footer Section Start	----->

<br><br><br><br>

<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand">127 Math</a>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2022</span><span> </span><span>127Math</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>141 Chiến Thắng, Tân Triều, Thanh Trì, Hà Nội </dd>
              </dl>
              <dl class="contact-list">
                <dt>Email:</dt>
                <dd><a href="mailto:#">127Math@edu.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>HotLine:</dt>
                <dd><a href="tel:#">113</a> <span>or</span> <a href="tel:#">114</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div>
</footer>

 			<!---footer Section Ends	----->

</body>
</html>