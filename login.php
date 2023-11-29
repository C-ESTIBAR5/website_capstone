<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>




<body>
<div class="background-image">
        <img src="./assets/images/background.jpg">
    </div>

    <header class="header">
        <nav class="nav container">
            <a href="./index.php" class="logo">BARANGAY BUDDY</a>
            <div class="nav-mobile">
                <ul class="list">
                    <li class="list-item">
                       <a href="" class="list-link current">Home</a>
                    </li>
                    <li class="list-item">
                        <a href="" class="list-link">Officials</a>
                    </li>
                    <li class="list-item">
                        <a href="" class="list-link">Barangay Hall Location</a>
                    </li>
                    <li class="list-item dropdown">
                        <button class="list-link dropdown-btn place-items-center">
                            Settings <i class="ri-arrow-drop-right-line"></i>
                        </button>
                        <ul class="list dropdown-menu">
                            <li class="list-item">
                                <a href="" class="list-link current">Settings</a>
                            </li>
                            <li class="list-item">
                                <a href="" class="list-link current">Terms and Conditions</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <button class="icon-btn menu-toggle-btn menu-toggle-close place-items-center">
                    <i class="ri-close-line"></i>
                </button>
            </div>

            <div class="align-right">
                <button class="icon-btn menu-toggle-btn menu-toggle-open place-items-center">
                    <i class="ri-function-line"></i>
                </button>
                <button class="icon-btn theme-toggle-btn place-items-center">
                    <i class="ri-sun-line theme-light-icon"></i>
                    <i class="ri-moon-line theme-dark-icon"></i>
                </button>
            </div>
        </nav>
</header>

	<section class="login-form">
		<div class="wrapper">
			<form action="">
				<h1>LOGIN</h1>
				<div class="input-box">
					<input type="email" placeholder="Email Address" required>
					<i class="ri-user-line"></i>
				</div>
				<div class="input-box">
					<input type="password" placeholder="Password" required>
					<i class="ri-lock-password-line"></i>
				</div>
			</form>

				<div class="remember-forgot">
					<label><input type="checkbox">Remember Me</label>
					<a href="#">Forget Password?</a>
				</div>

				<button type="submit" class="btn"><a href="index.php">Login</a></button>

		</div>
	</section>


	<footer class="footer">
    <div class="footer-container container">
        <span class="copyright-information">
            &copy; 2023 Barangay Buddy. All right reserved.
        </span>
        <ul class="list">
            <li class="list-item">
                <a href="#" class="list-link">Privacy Policy</a>
            </li>
            <li class="list-item">
                <a href="#" class="list-link">About Us</a>
            </li>
        </ul>
    </div>
</footer>


<script src="./assets/js/main.js"></script>
</body>
</html>