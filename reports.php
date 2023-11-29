<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Appointments</title>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/reports.css">
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
                       <a href="./index.php" class="list-link current">Home</a>
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
                <button class="icon-btn place-items-center">
                    <a href="profile.php">
                    <i class="ri-user-3-line"></i>
                    </a>
                </button>
                <button class="icon-btn place-items-center">
                    <a href="login.php">
                    <i class="ri-logout-box-r-line"></i>
                    </a>
                </button>
            </div>

        </nav>
</header>

<section class="management-area">
    <div class="management-area-container">
        <div class="dashboard">
        <div class="card-dashboard">
        <h2 class="title independent-title">View Reports</h2>
            <div class="card-body">
                <a href="" class="card-body-link">
                   <h1><b>Noisy Neighbors</h1></b>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Necessitatibus eius exercitationem iure est velit cumque ullam, minima quaerat 
                    voluptate laborum ab ipsum modi quam ipsa? Placeat optio dicta ipsa consequatur.
                    </p>
                </a>
                </a>
            </div>
        </div>
        </div>
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