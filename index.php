<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
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
    <div class="management-area-container container d-grid">
        <div class="dashboard">
        <div class="card-dashboard">
        <h2 class="title independent-title">DASHBOARD</h2> 
            <header class="card-header">
                <h2 class="title">
                    What Do You Want To Do?
                </h2>
            </header>
            <div class="card-body">
                <a href="appointments.php" class="card-body-link">
                    <i class="ri-file-line"></i>Manage Appointments
                </a>
                <a href="reports.php" class="card-body-link">
                    <i class="ri-flag-line"></i>Manage Reports
                </a>
                <a href="suggestions.php" class="card-body-link">
                    <i class="ri-customer-service-2-fill"></i>Suggestions
                </a>
                <a href="announcements.php" class="card-body-link">
                    <i class="ri-edit-box-fill"></i>Publish Announcements
                </a>
            </div>
        </div>
        </div>
        <div class="card-group d-grid">
            <div class="card border-gray">



<section class="welcome-message">
    <div class="container">
        <div class="card">
            <header class="card-header">
                <h1 class="title">Welcome User</h1>
            </header>
            <div class="card-body d-grid">
                <div class="card-image">
                    <img src="./assets/images/ambiong_logo.jpg" alt="logo of ambiong">
                </div>
                <div class="card-information">
                    <h1 class="title main-title">
                        Barangay Ambiong
                    </h1>
                    <p class="card-description">
                        Vision - We envision Barangay Ambiong to become a model of a 
                        just, clean, progressive, and fully developed barangay, 
                        where people live harmoniously, and enjoy the fullness of God’s love.
                        <br>
                        <br>
                        Mission - To bring about the delivery of adequate and responsive services 
                        thru peoples involvement, empowerment and networking 
                        with GO’s, NGO’s, and PO’s by utilizing available resources.
                        <br>
                        <br>
                        Goal - To uplift and improve the quality of life by sustaining 
                        community mobilization in the barangay development activities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
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