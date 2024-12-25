<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: #23242a;
			margin: 0;
		}

		.box {
			position: relative;
			width: 380px;
			height: 420px;
			background: #1c1c1c;
			border-radius: 8px;
			overflow: hidden;
		}

		.box::before,
		.box::after {
			content: '';
			position: absolute;
			top: 50%;
			left: 50%;
			width: 38px;
			height: 420px;
			background: linear-gradient(0deg, transparent, transparent, #45f3ff, #45f3ff, #45f3ff);
			z-index: 1;
			transform-origin: bottom right;
			animation: animate 6s linear infinite;
		}

		.box::after {
			animation-delay: 3s;
		}

		@keyframes animate {
			0% {
				transform: rotate(0deg);
			}
			100% {
				transform: rotate(360deg);
			}
		}

		.box form {
			position: absolute;
			inset: 4px;
			background: #222;
			padding: 50px 40px;
			border-radius: 8px;
			z-index: 2;
			display: flex;
			flex-direction: column;
		}

		.box form h2 {
			color: #fff;
			font-weight: 500;
			text-align: center;
			letter-spacing: 0.1em;
		}

		.box form .inputbox {
			position: relative;
			width: 100%;
			margin-top: 35px;
		}

		.box form .inputbox input {
			width: 100%;
			padding: 20px 10px 10px;
			background: transparent;
			outline: none;
			border: none;
			color: #23242a;
			font-size: 1em;
			letter-spacing: 0.05em;
			transition: 0.5s;
			z-index: 10;
		}

		.box form .inputbox span {
			position: absolute;
			left: 10px;
			top: 20px;
			color: #8f8f8f;
			font-size: 1em;
			letter-spacing: 0.05em;
			transition: 0.5s;
		}

		.box form .inputbox input:valid ~ span,
		.box form .inputbox input:focus ~ span {
			color: #fff;
			font-size: 0.75em;
			transform: translateY(-18px);
		}

		.box form .inputbox i {
			position: absolute;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 2px;
			background: #fff;
			border-radius: 4px;
			transition: 0.5s;
			pointer-events: none;
		}

		.box form .inputbox input:valid ~ i,
		.box form .inputbox input:focus ~ i {
			height: 44px;
		}

		.box form .links {
			display: flex;
			justify-content: space-between;
		}

		.box form .links a {
			font-size: 0.75em;
			color: #8f8f8f;
			text-decoration: none;
		}

		.box form .links a:hover {
			color: #fff;
		}

		.box form input[type="submit"] {
			border: none;
			outline: none;
			padding: 9px 25px;
			background: #fff;
			cursor: pointer;
			font-size: 0.9em;
			border-radius: 4px;
			font-weight: 600;
			width: 100px;
			margin-top: 10px;
		}

		.box form input[type="submit"]:active {
			opacity: 0.8;
		}
	</style>
</head>
<body>
	<div class="box">
		<form>
			<h2>Sign In</h2>
			<div class="inputbox">
				<input type="text" required="required">
				<span>Username</span>
				<i></i>
			</div>
			<div class="inputbox">
				<input type="password" required="required">
				<span>Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Forgot Password?</a>
				<a href="#">Sign Up</a>
			</div>
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>
