<html>

<head>
	<?php
            session_start();
	include("includes/db.php");
	if (isset($_POST['login'])) {
	    print_r($_POST);
	    $c_prn = $_POST['prn'];
	    $c_pass = $_POST['pass'];

	    $sel_c = "SELECT * from customers where customer_pass='$c_pass' AND customer_prn='$c_prn'";

	    $run_c = mysqli_query($con, $sel_c);

	    $check_customer = mysqli_num_rows($run_c);

	    if ($check_customer==0) {
	        echo "<script>alert('PRN or password is incorrect, please try again!')</script>";
	    }



	    if ($check_customer>0) {
	        $_SESSION['customer_email']=$c_prn;


	        header("location: index.php");
	    }
	}


	?>
	<title>LOGIN</title>
	<script src="https://use.typekit.net/ayg4pcz.js"></script>
	<script>
		try {
			Typekit.load({
				async: true
			});
		} catch (e) {}
	</script>

	<link rel="stylesheet" href="styles/style.css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
	<link href="themes/assets/css/carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<style type="text/css">
		body,
		html {
			height: 100%;
			background-repeat: no-repeat;
			background: rgb(185, 210, 224);
			/* Old browsers */
			background: -moz-radial-gradient(center, ellipse cover, rgba(185, 210, 224, 1) 0%, rgba(187, 214, 228, 1) 0%, rgba(186, 211, 225, 1) 15%, rgba(186, 211, 225, 1) 38%, rgba(169, 199, 215, 1) 68%, rgba(169, 199, 215, 1) 68%, rgba(169, 199, 215, 1) 82%, rgba(158, 191, 208, 1) 100%);
			/* FF3.6-15 */
			background: -webkit-radial-gradient(center, ellipse cover, rgba(185, 210, 224, 1) 0%, rgba(187, 214, 228, 1) 0%, rgba(186, 211, 225, 1) 15%, rgba(186, 211, 225, 1) 38%, rgba(169, 199, 215, 1) 68%, rgba(169, 199, 215, 1) 68%, rgba(169, 199, 215, 1) 82%, rgba(158, 191, 208, 1) 100%);
			/* Chrome10-25,Safari5.1-6 */
			background: radial-gradient(ellipse at center, rgba(185, 210, 224, 1) 0%, rgba(187, 214, 228, 1) 0%, rgba(186, 211, 225, 1) 15%, rgba(186, 211, 225, 1) 38%, rgba(169, 199, 215, 1) 68%, rgba(169, 199, 215, 1) 68%, rgba(169, 199, 215, 1) 82%, rgba(158, 191, 208, 1) 100%);
			/* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#b9d2e0', endColorstr='#9ebfd0', GradientType=1);
			/* IE6-9 fallback on horizontal gradient */

		}

		.login_box {
			background: #f7f7f7;
			border: 3px solid #F4F4F4;
			padding-left: 15px;
			margin-bottom: 25px;
		}

		.input_title {
			color: rgba(164, 164, 164, 0.9);
			padding-left: 3px;
			margin-bottom: 2px;
		}

		hr {
			width: 100%;
		}


		.login_title {
			font-family: "myriad-pro", sans-serif;
			font-style: normal;
			font-weight: 100;
			color: rgba(164, 164, 164, 0.44);
		}

		.card-container.card {
			max-width: 350px;

		}

		/*
		 * Card component
		 */
		.card {
			background-color: #FFFFFF;
			/* just in case there no content*/
			padding: 1px 25px 30px;
			margin: 0 auto 25px;
			margin-top: 15%x;
			/* shadows and rounded borders */
			-moz-border-radius: 2px;
			-webkit-border-radius: 2px;
			border-radius: 2px;
			-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		}

		.profile-img-card {
			width: 96px;
			height: 96px;
			margin: 0 auto 10px;
			display: block;
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
			border-radius: 50%;
		}

		/*
		 * Form styles
		 */
		.profile-name-card {
			font-size: 16px;
			font-weight: bold;
			text-align: center;
			margin: 10px 0 0;
			min-height: 1em;
		}

		.reauth-email {
			display: block;
			color: #404040;
			line-height: 2;
			margin-bottom: 10px;
			font-size: 14px;
			text-align: center;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
		}

		.form-signin #inputEmail,
		.form-signin #inputPassword {
			direction: ltr;
			height: 44px;
			font-size: 16px;
		}

		.form-signin input[type=email],
		.form-signin input[type=password],
		.form-signin input[type=text],
		.form-signin button {
			width: 100%;
			display: block;

			z-index: 1;
			position: relative;
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
		}

		.form-signin .form-control:focus {
			border-color: rgb(104, 145, 162);
			outline: 0;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgb(104, 145, 162);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgb(104, 145, 162);
		}

		.hero-btn {
			display: inline-block;
			text-decoration: none;
			color: #FFFFFF;
			border: 1px solid #fff;
			padding: 12px 34px;
			font-size: 13px;
			background: transparent;
			position: relative;
			cursor: pointer;
			border-radius: 10px;
		}

		.hero-btn:hover {
			border: 1px solid #8967f9;
			background: greenyellow;
			transition: 1s;
		}

		h1 {
			font-family: "Sofia", sans-serif;
			font-size: 75px;
			text-shadow: 3px 3px 3px #ababab;
		}

		@media only screen and (max-width: 500px) {
			h1 {
				font-size: 50px;
			}
		}

		.card-container.card {
			background-color: #404040;
		}
	</style>
</head>

<body>

	<!--Navigation Bar starts-->
	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-static-top " role="navigation">
			<h1 style="color: white" align="center">Canteen Management System</h1>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse ">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"></a>

				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about_us.php">About Us</a></li>
						<li><a href="full_menu.php">Full Menu</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--Navigation Bar ends-->

	<div class="container" style="margin-top: 100px;">
		<h2 class="welcome text-center" align="center"
			style="font-family:'Courier New', Courier, monospace; color:black;">
			Welcome to the Canteen of FXEC</h2>
		<br>
		<br>
		<div class="card card-container">
			<h2 class='login_title text-center' align="center" style="color: darkgrey">Login using your ID</h2>


			<form class="form-signin" method="POST">
				<span id="reauth-email" class="reauth-email"></span>
				<p class="input_title">Userid</p>
				<input type="text" name="prn" class="login_box" placeholder="ex:115A1011" required autofocus>
				<p class="input_title">Password</p>
				<input type="password" name="pass" class="login_box" placeholder="ex:*****" required>
				<div id="remember" class="checkbox">

				</div>
				<center><input class="hero-btn" type="submit" name="login" style="color: white" value="Login"></center>
			</form><!-- /form -->
		</div><!-- /card-container -->
	</div><!-- /container -->



	<h2 align="center"><a href="customer_register.php"><button type="button" class="hero-btn" name="">New?
				Register Here</button></a></h2>





	</div>
</body>

</html>