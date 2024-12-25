<?php
require 'email/email.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = sendEmail($email);
        if (strpos($result, 'successfully') !== false) {
            $message = "Thank you for subscribing!";
            $messageType = "success";
        } else {
            $message = "Subscription failed. Please try again.";
            $messageType = "error";
        }
    } else {
        $message = "Please enter a valid email address.";
        $messageType = "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetPy | Offer</title>

    <link rel="icon" type="image/png" href="images/fav-icon.jpg">

    <link rel="stylesheet" href="css/robotics_page/section_1.css">
    <link rel="stylesheet" href="css/robotics_page/section_2.css">
    <link rel="stylesheet" href="css/robotics_page/section_3.css">
    <link rel="stylesheet" href="css/robotics_page/section_4.css">
    <link rel="stylesheet" href="css/robotics_page/section_5.css">
    <link rel="stylesheet" href="css/robotics_page/section_6.css">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Urbanist' rel='stylesheet'>

    <style>
        .alert {
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            text-align: center;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>

</head>

<body>
    <?php if (isset($message)): ?>
        <div class="alert alert-<?php echo $messageType; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <!--===================== SCROLL TO TOP BUTTON ======================-->
    <button id="scrollToTopBtn" aria-label="Scroll to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor" d="m12 4l-8 8h16z" />
        </svg>
    </button>

    <!--================ Top Info Bar ======================-->
    <div class="info-bar">
        <a href="services.php">
            <span>Software Development</span>
        </a>
        <a href="">
            <span class="cloud-solutions">Cloud Solutions</span>
            <span class="tally-on-cloud">Tally on Cloud</span>
        </a>
        <a href="https://robo.netpy.in/" target="_blank">
            <span>Robotics</span>
        </a>
        <a href="https://robo.netpy.in/schools.php" target="_blank">
            <span class="school">School <sup style="font-size: 0.9rem; color:#ff6f00;">New</sup></span>
        </a>
        <!-- <a href="IT-enterprise.php">
            <span>IT Solutions</span>
        </a> -->
    </div>

    <!--===================== NAVBAR ======================-->
    <header>
        <nav class="navbar">
            <div class="navbar-container">
                <div class="navbar-brand">
                    <a href="index.php">
                        <!--NetPy Technologies-->
                        <img src="images/transparent-logo.svg">
                    </a>
                </div>

                <button class="menu-toggle" aria-label="Toggle menu">
                    <svg viewBox="0 0 24 24">
                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
                    </svg>
                </button>

                <ul class="navbar-menu">
                    <li class="popup-trigger">
                        <a>What we don't do?</a>
                        <div class="popup-content">
                            <h3 class="popup-title">Our Principles</h3>
                            <ul class="popup-list">
                                <li class="popup-list-item">We don't compromise on code quality</li>
                                <li class="popup-list-item">We don't take on projects without proper planning</li>
                                <li class="popup-list-item">We don't overpromise and under-deliver</li>
                                <li class="popup-list-item">We don't skip security measures</li>
                                <li class="popup-list-item">We don't rush through testing phases</li>
                            </ul>
                        </div>
                    </li>

                    <li class="dropdown-conatiner">
                        <span>What we do? </span>

                        <div class="columns-container">
                            <!-- First Column -->
                            <div class="column" id="firstColumn">
                                <ul>
                                    <li class="hover-item default-active" data-type="netpyTech">
                                        NetPy Tech
                                        <ul class="netpy-subcontent">
                                            <li>Software Development
                                                <ul class="netpy-sub-subcontent">
                                                    <h4>Mobile App Development</h4>
                                                    <p>Native IOS | Native Android | Hybrid</p>
                                                </ul>
                                            </li>
                                            <li>UI/UX Design
                                                <ul class="netpy-sub-subcontent">
                                                    <h4>Mobile App Development</h4>
                                                    <p>Native IOS | Native Android | Hybrid</p>
                                                </ul>
                                            </li>
                                            <li>Quality Analysis
                                                <ul class="netpy-sub-subcontent">
                                                    <h4>Mobile App Development</h4>
                                                    <p>Native IOS | Native Android | Hybrid</p>
                                                </ul>
                                            </li>
                                            <li>Cloud & Computing
                                                <ul class="netpy-sub-subcontent">
                                                    <h4>Mobile App Development</h4>
                                                    <p>Native IOS | Native Android | Hybrid</p>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hover-item" data-type="netpyAcademy">
                                        NetPy Academy
                                        <ul class="netpy-subcontent">
                                            <li>Software Development Academy
                                                <ul class="netpy-sub-subcontent">
                                                    <h4>Mobile App Development</h4>
                                                    <p>Native IOS | Native Android | Hybrid</p>
                                                </ul>
                                            </li>
                                            <li>UI/UX Design Academy
                                                <ul class="netpy-sub-subcontent">
                                                    <h4>Mobile App Development</h4>
                                                    <p>Native IOS | Native Android | Hybrid</p>
                                                </ul>
                                            </li>
                                            <li>Quality Analysis Academy
                                                <ul class="netpy-sub-subcontent">
                                                    <h4>Mobile App Development</h4>
                                                    <p>Native IOS | Native Android | Hybrid</p>
                                                </ul>
                                            </li>
                                            <li>Cloud & Computing Academy
                                                <ul class="netpy-sub-subcontent">
                                                    <h4>Mobile App Development</h4>
                                                    <p>Native IOS | Native Android | Hybrid</p>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hover-item" data-type="netpyKidz">
                                        NetPy Kidz
                                        <ul class="netpy-subcontent">
                                            <li>Software Development Kidz
                                                <ul class="netpy-sub-subcontent">
                                                    <h4>Mobile App Development</h4>
                                                    <p>Native IOS | Native Android | Hybrid</p>
                                                </ul>
                                            </li>
                                            <li>UI/UX Design Kidz
                                                <ul class="netpy-sub-subcontent">
                                                    <h4>Mobile App Development</h4>
                                                    <p>Native IOS | Native Android | Hybrid</p>
                                                </ul>
                                            </li>
                                            <li>Quality Analysis Kidz
                                                <ul class="netpy-sub-subcontent">
                                                    <h4>Mobile App Development</h4>
                                                    <p>Native IOS | Native Android | Hybrid</p>
                                                </ul>
                                            </li>
                                            <li>Cloud & Computing Kidz
                                                <ul class="netpy-sub-subcontent">
                                                    <h4>Mobile App Development</h4>
                                                    <p>Native IOS | Native Android | Hybrid</p>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <!-- Vertical Line Separator -->
                            <div class="vertical-separator"></div>
                            <!-- Second Column -->
                            <div class="column" id="secondColumn">
                                <p>Select a category to see details</p>
                            </div>
                            <!-- Vertical Line Separator -->
                            <div class="vertical-separator"></div>
                            <!-- Third Column -->
                            <div class="column" id="thirdColumn">
                                <p>Hover over a category in the second column for details</p>
                            </div>
                        </div>
                    </li>

                    <!-- Lerarn dropdown -->
                    <li class="learn-popup-trigger">
                        <a>Learn</a>
                        <div class="popup-content">
                            <div class="list">
                                <!-- Mentorship to Internship -->
                                <a href="blog.php" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m12 22l-2-6H2l2 6zm0 0h4m-4-9v-.5c0-1.886 0-2.828-.586-3.414S9.886 8.5 8 8.5s-2.828 0-3.414.586S4 10.614 4 12.5v.5m15 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0m-9-9a2 2 0 1 1-4 0a2 2 0 0 1 4 0m4 13.5h6a2 2 0 0 1 2 2v.5a2 2 0 0 1-2 2h-1" color="#181818" />
                                    </svg>
                                    <span>Mentorship to Internship Program</span>
                                </a>
                                <!-- Training and Certification -->
                                <a href="blog.php" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                        <g fill="#181818">
                                            <path d="M3 3h18v4.385h-2V5H5v9h4.333v2H3z" />
                                            <path d="M12.684 10.287C13.558 11.212 14.303 12 16 12h2a2 2 0 0 1 2 2v1a2 2 0 0 1-1 1.732V22h-3v-8c-2.617 0-3.956-1.45-4.84-2.405a14 14 0 0 0-.367-.388l1.414-1.414q.249.25.477.494M19 9.5a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0" />
                                        </g>
                                    </svg>
                                    <span>Training and Certification</span>
                                </a>
                                <!-- Robotics | IOT | AI | Coding -->
                                <a href="blog.php" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 32 32">
                                        <path fill="#181818" d="M30 19h-4v-4h-2v9H8V8h9V6h-4V2h-2v4H8a2 2 0 0 0-2 2v3H2v2h4v6H2v2h4v3a2 2 0 0 0 2 2h3v4h2v-4h6v4h2v-4h3a2.003 2.003 0 0 0 2-2v-3h4Z" />
                                        <path fill="#181818" d="M26 2a4.004 4.004 0 0 0-4 4a3.96 3.96 0 0 0 .567 2.02L19.586 11H11v10h10v-8.586l2.98-2.98A3.96 3.96 0 0 0 26 10a4 4 0 0 0 0-8m-7 17h-6v-6h6Zm7-11a2 2 0 1 1 2-2a2 2 0 0 1-2 2" />
                                    </svg>
                                    <span>Robotics | IOT | AI | Coding</span>
                                </a>
                                <!-- Servers and Webniars -->
                                <a href="blog.php" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 28 28">
                                        <path fill="#000" d="M4.974 5.58A3.5 3.5 0 0 1 8.35 3h11.3a3.5 3.5 0 0 1 3.378 2.58l2.828 10.368C26.55 18.492 24.635 21 21.997 21h-9.995v-1.5h9.995a2.5 2.5 0 0 0 2.412-3.158L21.581 5.974a2 2 0 0 0-1.93-1.474h-11.3a2 2 0 0 0-1.93 1.474L5.323 10H4.25q-.253 0-.493.037zM11.992 24h8.26a.75.75 0 1 0 0-1.5h-8.25v1.25q0 .126-.01.25m-5.491-7a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3M2 13.25A2.25 2.25 0 0 1 4.25 11h4.501a2.25 2.25 0 0 1 2.25 2.25v10.5A2.25 2.25 0 0 1 8.751 26h-4.5A2.25 2.25 0 0 1 2 23.75zm2.25-.75a.75.75 0 0 0-.75.75v10.5c0 .414.336.75.75.75h4.501a.75.75 0 0 0 .75-.75v-10.5a.75.75 0 0 0-.75-.75z" />
                                    </svg>
                                    <span>Webinar</span>
                                </a>
                                <!-- Learning Resourses & Assets -->
                                <a href="blog.php" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.5 6c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C4.189 2 4.96 2 6.5 2s2.31 0 2.876.347c.317.194.583.46.777.777c.347.565.347 1.336.347 2.876s0 2.31-.347 2.876c-.194.317-.46.583-.777.777C8.811 10 8.04 10 6.5 10s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.777C2.5 8.311 2.5 7.54 2.5 6m1.282 8.782c1.047-1.047 1.57-1.57 2.19-1.72a2.26 2.26 0 0 1 1.056 0c.62.15 1.143.673 2.19 1.72s1.57 1.57 1.72 2.19a2.3 2.3 0 0 1 0 1.056c-.15.62-.673 1.144-1.72 2.19s-1.57 1.57-2.19 1.72a2.26 2.26 0 0 1-1.056 0c-.62-.15-1.143-.673-2.19-1.72s-1.57-1.57-1.72-2.19a2.26 2.26 0 0 1 0-1.056c.15-.62.673-1.144 1.72-2.19M14 18c0-1.54 0-2.31.347-2.876c.194-.317.46-.583.777-.777C15.689 14 16.46 14 18 14s2.31 0 2.877.347c.316.194.582.46.776.777C22 15.689 22 16.46 22 18s0 2.31-.347 2.877a2.36 2.36 0 0 1-.776.776C20.31 22 19.54 22 18 22s-2.31 0-2.876-.347a2.35 2.35 0 0 1-.777-.776C14 20.31 14 19.54 14 18m4-16v8m4-4h-8" color="#181818" />
                                    </svg>
                                    <span>Learning Resourses & Assets</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="explore-popup-trigger">
                        <a>Explore NetPy</a>
                        <div class="popup-content">
                            <div class="list-1">
                                <!-- Blogs -->
                                <a href="blog.php" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 8h2m-2 4h2m0 4H7m0-8v4h4V8zM5 20h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2" />
                                    </svg>
                                    Blogs
                                </a>
                                <!-- Workflow -->
                                <!-- <a href="workflow.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                        <g fill="none" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="#181818">
                                            <path d="M11.007 21H9.605c-3.585 0-5.377 0-6.491-1.135S2 16.903 2 13.25s0-5.48 1.114-6.615S6.02 5.5 9.605 5.5h3.803c3.585 0 5.378 0 6.492 1.135c.857.873 1.054 2.156 1.1 4.365" />
                                            <path d="M17.111 13.255c.185-.17.277-.255.389-.255s.204.085.389.255l.713.657c.086.079.129.119.182.138c.054.02.112.018.23.013l.962-.038c.248-.01.372-.014.457.057s.102.194.135.44l.132.986c.016.114.023.17.051.22c.028.048.073.083.163.154l.776.61c.192.152.288.227.307.335s-.046.212-.174.42l-.526.847c-.06.097-.09.146-.1.2s.002.111.026.223l.209.978c.05.24.076.36.021.456s-.172.134-.405.21l-.926.301c-.11.036-.166.054-.209.09c-.043.037-.07.089-.123.192l-.452.871c-.115.223-.173.334-.278.372s-.22-.01-.452-.106l-.888-.368c-.109-.045-.163-.068-.22-.068s-.111.023-.22.068l-.888.368c-.232.096-.347.144-.452.106s-.163-.15-.278-.372l-.452-.871c-.054-.103-.08-.155-.123-.191s-.099-.055-.209-.09l-.926-.302c-.233-.076-.35-.114-.405-.21s-.03-.215.021-.456l.21-.978c.023-.112.035-.168.025-.222a.6.6 0 0 0-.1-.2l-.525-.848c-.13-.208-.194-.312-.175-.42s.115-.183.307-.334l.776-.61c.09-.072.135-.107.163-.156s.035-.105.05-.22l.133-.985c.033-.245.05-.369.135-.44s.209-.067.457-.057l.963.038c.117.005.175.007.229-.013c.053-.02.096-.059.182-.138zM16 5.5l-.1-.31c-.495-1.54-.742-2.31-1.331-2.75C13.979 2 13.197 2 11.63 2h-.263c-1.565 0-2.348 0-2.937.44c-.59.44-.837 1.21-1.332 2.75L7 5.5" />
                                        </g>
                                    </svg>
                                    WorkFlow
                                </a> -->
                                <!-- Netpy Academy -->
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                        <path fill="#181818" d="M12 0L2.524.994v17.368L12 24l9.476-5.638V.994L12.099.01zm8.236 17.657L12 22.557l-8.236-4.9v-7.119l8.2 4.881l.014.885l-5.626-3.349l-.008.86l5.648 3.394l.015.908l-5.647-3.36l-.008.86L12 19.01l5.703-3.412v-.862l-.008.004v-2.805l2.54-1.517v7.238zm-.006-8.162l-2.254 1.328l-1.04.613l-4.96-2.951l-.009.858l4.24 2.521l-.037.023l-.092.054l-.602.355l-3.5-2.083l-.009.859l2.763 1.643l-.652.436l-.015.01l-2.088-1.23l-.008.858l1.37.807l-1.395.837l-8.16-4.85l8.172-4.912v.001zm.006-.864l-8.28-4.882h-.002l-8.19 4.877V2.11L12 1.246l8.237.864v6.52z" />
                                    </svg>
                                    NetPy Academy
                                </a>
                                <!-- Become Trainer -->
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                        <path fill="none" stroke="#181818" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.59 17.74c-.629.422-2.277 1.282-1.273 2.358c.49.526 1.037.902 1.723.902h3.92c.686 0 1.233-.376 1.723-.902c1.004-1.076-.644-1.936-1.273-2.357a4.29 4.29 0 0 0-4.82 0M20 12.5a2 2 0 1 1-4 0a2 2 0 0 1 4 0M10 6h5m-5-3h8M7 9.5V14c0 .943 0 1.414-.293 1.707S5.943 16 5 16H4c-.943 0-1.414 0-1.707-.293S2 14.943 2 14v-2.5c0-.943 0-1.414.293-1.707S3.057 9.5 4 9.5zm0 0h5M6.5 5a2 2 0 1 1-4 0a2 2 0 0 1 4 0" color="#181818" />
                                    </svg>
                                    Become Trainer
                                </a>
                                <!-- Certification -->
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 32 32">
                                        <path fill="#181818" d="m25 10l1.593 3l3.407.414l-2.5 2.253L28 19l-3-1.875L22 19l.5-3.333l-2.5-2.253L23.5 13zm-3 20h-2v-5a5.006 5.006 0 0 0-5-5H9a5.006 5.006 0 0 0-5 5v5H2v-5a7.01 7.01 0 0 1 7-7h6a7.01 7.01 0 0 1 7 7zM12 4a5 5 0 1 1-5 5a5 5 0 0 1 5-5m0-2a7 7 0 1 0 7 7a7 7 0 0 0-7-7" />
                                    </svg>
                                    Certifications
                                </a>
                                <!-- Community -->
                                <a href="community.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 32 32">
                                        <path fill="#181818" d="M8 7a2 2 0 1 1 4 0a2 2 0 0 1-4 0m2-4a4 4 0 1 0 0 8a4 4 0 0 0 0-8M4.5 13A2.5 2.5 0 0 0 2 15.5v.25c0 .275 0 1.845 1.054 3.36c.757 1.088 1.983 2.047 3.899 2.54a4 4 0 0 1 1.735-1.717c-2.33-.251-3.437-1.167-3.992-1.965A4 4 0 0 1 4 15.75v-.25a.5.5 0 0 1 .5-.5h6c0-.706.133-1.38.375-2zm24.446 6.11c-.757 1.088-1.983 2.047-3.899 2.54a4 4 0 0 0-1.735-1.717c2.33-.251 3.437-1.167 3.992-1.965A4 4 0 0 0 28 15.75v-.25a.5.5 0 0 0-.5-.5h-6c0-.706-.133-1.38-.375-2H27.5a2.5 2.5 0 0 1 2.5 2.5v.25c0 .275 0 1.845-1.054 3.36M20 7a2 2 0 1 1 4 0a2 2 0 0 1-4 0m2-4a4 4 0 1 0 0 8a4 4 0 0 0 0-8m-6 10a2 2 0 1 0 0 4a2 2 0 0 0 0-4m-4 2a4 4 0 1 1 8 0a4 4 0 0 1-8 0m-4 8.5a2.5 2.5 0 0 1 2.5-2.5h11a2.5 2.5 0 0 1 2.5 2.5v.25c0 .275 0 1.845-1.054 3.36C21.846 28.691 19.756 30 16 30s-5.846-1.309-6.946-2.89C8 25.595 8 24.026 8 23.75zm2.5-.5a.5.5 0 0 0-.5.5v.25c0 .165.001 1.22.696 2.218c.65.935 2.06 2.032 5.304 2.032s4.654-1.097 5.304-2.032A4 4 0 0 0 22 23.75v-.25a.5.5 0 0 0-.5-.5z" />
                                    </svg>
                                    NetPy Community
                                </a>
                                <!-- About -->
                                <a href="aboutus.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                                        <path fill="#181818" d="M11 9h2V7h-2m1 13c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m0-18A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m-1 15h2v-6h-2z" />
                                    </svg>
                                    About NetPy
                                </a>
                            </div>

                            <div class="divider"></div>

                            <div class="list-2">
                                <!-- Contact -->
                                <h4>
                                    <a href="contact.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 2048 2048" style="position: relative; top:-1px;">
                                            <path fill="#000" d="M1330 1203q136 47 245 131t186 196t118 243t41 275h-128q0-164-58-304t-162-244t-243-161t-305-59q-107 0-206 27t-184 76t-155 119t-119 155t-77 185t-27 206H128q0-144 42-275t119-242t186-194t245-133q-78-42-140-102T475 969t-67-157t-24-172q0-133 50-249t137-204T774 50t250-50q133 0 249 50t204 137t137 203t50 250q0 88-23 171t-67 156t-105 133t-139 103M512 640q0 106 40 199t110 162t163 110t199 41t199-40t162-110t110-163t41-199t-40-199t-110-162t-163-110t-199-41t-199 40t-162 110t-110 163t-41 199" />
                                        </svg>
                                        Contact Us
                                    </a>
                                </h4>
                                <div class="container">
                                    <!-- Linkedin -->
                                    <a href="https://www.linkedin.com/company/netpy-tech" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256">
                                            <path fill="#0a66c2" d="M218.123 218.127h-37.931v-59.403c0-14.165-.253-32.4-19.728-32.4c-19.756 0-22.779 15.434-22.779 31.369v60.43h-37.93V95.967h36.413v16.694h.51a39.91 39.91 0 0 1 35.928-19.733c38.445 0 45.533 25.288 45.533 58.186zM56.955 79.27c-12.157.002-22.014-9.852-22.016-22.009s9.851-22.014 22.008-22.016c12.157-.003 22.014 9.851 22.016 22.008A22.013 22.013 0 0 1 56.955 79.27m18.966 138.858H37.95V95.967h37.97zM237.033.018H18.89C8.58-.098.125 8.161-.001 18.471v219.053c.122 10.315 8.576 18.582 18.89 18.474h218.144c10.336.128 18.823-8.139 18.966-18.474V18.454c-.147-10.33-8.635-18.588-18.966-18.453" />
                                        </svg>
                                    </a>
                                    <!-- Telegram -->
                                    <a href="https://t.me/netpytech" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256">
                                            <defs>
                                                <linearGradient id="logosTelegram0" x1="50%" x2="50%" y1="0%" y2="100%">
                                                    <stop offset="0%" stop-color="#2aabee" />
                                                    <stop offset="100%" stop-color="#229ed9" />
                                                </linearGradient>
                                            </defs>
                                            <path fill="url(#logosTelegram0)" d="M128 0C94.06 0 61.48 13.494 37.5 37.49A128.04 128.04 0 0 0 0 128c0 33.934 13.5 66.514 37.5 90.51C61.48 242.506 94.06 256 128 256s66.52-13.494 90.5-37.49c24-23.996 37.5-56.576 37.5-90.51s-13.5-66.514-37.5-90.51C194.52 13.494 161.94 0 128 0" />
                                            <path fill="#fff" d="M57.94 126.648q55.98-24.384 74.64-32.152c35.56-14.786 42.94-17.354 47.76-17.441c1.06-.017 3.42.245 4.96 1.49c1.28 1.05 1.64 2.47 1.82 3.467c.16.996.38 3.266.2 5.038c-1.92 20.24-10.26 69.356-14.5 92.026c-1.78 9.592-5.32 12.808-8.74 13.122c-7.44.684-13.08-4.912-20.28-9.63c-11.26-7.386-17.62-11.982-28.56-19.188c-12.64-8.328-4.44-12.906 2.76-20.386c1.88-1.958 34.64-31.748 35.26-34.45c.08-.338.16-1.598-.6-2.262c-.74-.666-1.84-.438-2.64-.258c-1.14.256-19.12 12.152-54 35.686c-5.1 3.508-9.72 5.218-13.88 5.128c-4.56-.098-13.36-2.584-19.9-4.708c-8-2.606-14.38-3.984-13.82-8.41c.28-2.304 3.46-4.662 9.52-7.072" />
                                        </svg>
                                    </a>
                                    <!-- Discord -->
                                    <a href="https://discord.gg/jZEQG4yv" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256">
                                            <g fill="none">
                                                <rect width="256" height="256" fill="#5865f2" rx="60" />
                                                <g clip-path="url(#skillIconsDiscord0)">
                                                    <path fill="#fff" d="M197.308 64.797a165 165 0 0 0-40.709-12.627a.62.62 0 0 0-.654.31c-1.758 3.126-3.706 7.206-5.069 10.412c-15.373-2.302-30.666-2.302-45.723 0c-1.364-3.278-3.382-7.286-5.148-10.412a.64.64 0 0 0-.655-.31a164.5 164.5 0 0 0-40.709 12.627a.6.6 0 0 0-.268.23c-25.928 38.736-33.03 76.52-29.546 113.836a.7.7 0 0 0 .26.468c17.106 12.563 33.677 20.19 49.94 25.245a.65.65 0 0 0 .702-.23c3.847-5.254 7.276-10.793 10.217-16.618a.633.633 0 0 0-.347-.881c-5.44-2.064-10.619-4.579-15.601-7.436a.642.642 0 0 1-.063-1.064a86 86 0 0 0 3.098-2.428a.62.62 0 0 1 .646-.088c32.732 14.944 68.167 14.944 100.512 0a.62.62 0 0 1 .655.08a80 80 0 0 0 3.106 2.436a.642.642 0 0 1-.055 1.064a102.6 102.6 0 0 1-15.609 7.428a.64.64 0 0 0-.339.889a133 133 0 0 0 10.208 16.61a.64.64 0 0 0 .702.238c16.342-5.055 32.913-12.682 50.02-25.245a.65.65 0 0 0 .26-.46c4.17-43.141-6.985-80.616-29.571-113.836a.5.5 0 0 0-.26-.238M94.834 156.142c-9.855 0-17.975-9.047-17.975-20.158s7.963-20.158 17.975-20.158c10.09 0 18.131 9.127 17.973 20.158c0 11.111-7.962 20.158-17.973 20.158m66.456 0c-9.855 0-17.974-9.047-17.974-20.158s7.962-20.158 17.974-20.158c10.09 0 18.131 9.127 17.974 20.158c0 11.111-7.884 20.158-17.974 20.158" />
                                                </g>
                                                <defs>
                                                    <clipPath id="skillIconsDiscord0">
                                                        <path fill="#fff" d="M28 51h200v154.93H28z" />
                                                    </clipPath>
                                                </defs>
                                            </g>
                                        </svg>
                                    </a>
                                    <!-- Twitter -->
                                    <a href="https://x.com/netpytech" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26.25" height="30" viewBox="0 0 448 512">
                                            <path fill="#000" d="M64 32C28.7 32 0 60.7 0 96v320c0 35.3 28.7 64 64 64h320c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64zm297.1 84L257.3 234.6L379.4 396h-95.6L209 298.1L123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5l78.2-89.5zm-37.8 251.6L153.4 142.9h-28.3l171.8 224.7h26.3z" />
                                        </svg>
                                    </a>
                                    <!-- Youtube -->
                                    <a href="https://www.youtube.com/@netpytech" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="42.67" height="30" viewBox="0 0 256 180">
                                            <path fill="#f00" d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134" />
                                            <path fill="#fff" d="m102.421 128.06l66.328-38.418l-66.328-38.418z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>


                    <a href="https://www.netpyconcepts.in/" target="_blank" class="join-btn-small">Join Community</a>
                </ul>
                <a href="https://www.netpyconcepts.in/" target="_blank" class="join-btn-large">Join Community</a>
            </div>
        </nav>
    </header>

    <!--===================== SECTION 1 ======================-->
    <section class="section-1">
        <header class="community-header">
            <p>Only for Netpy Community Students</p>
            <span>Hurry and enroll today – let this Diwali light up your path to a tech-driven future!</span>
        </header>
        <div class="container">
            <main class="main-content">
                <h1>Ignite Your Future in Robotics – This Diwali!</h1>
                <p class="description">
                    Unlock a world of innovation with our exclusive Robotics Course – now at 50% off for a limited time!
                    Use code <span>NETPYSTU2023DIWALI</span> and get hands-on experience in robotics and AIML.
                </p>
                <button class="cta-button">Register Soon</button>
            </main>
            <div class="image-section">
                <img src="images/robotics_page/cloud_robot.png" alt="Robot and gears illustration" />
            </div>
        </div>
    </section>

    <!--================== SECTION 2 ==================-->
    <section class="section-2">
        <div class="container">
            <header class="header">
                <h1>Empowering <span>Ideas</span><br>Building <span>Futures</span></h1>
            </header>

            <div class="services">
                <div class="service-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 14 14">
                        <g fill="none" stroke="#0e47a1" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2H1a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h12a.5.5 0 0 0 .5-.5v-8A.5.5 0 0 0 13 2m-7 9l-1 2.5M8 11l1 2.5m-5 0h6" />
                            <path d="m4.5 5.25l-1.75 1.5L4.25 8m5.5-2.5l1.5 1.25l-1.75 1.5m-3.25.5l1.5-4.5" />
                        </g>
                    </svg>
                    <h2 class="service-title">IT Solution</h2>
                    <p class="service-description">We offer enterprise-level IT solutions and services, delivering high-quality technology solutions to meet the evolving needs of businesses across various industries.</p>
                    <a href="#" class="service-link">
                        <img src="images/landing_page/section-2/arrow.png" alt="Arrow">
                    </a>
                </div>

                <div class="service-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                        <g fill="none" stroke="#0e47a1" stroke-width="1.50">
                            <path d="M14.706 4.313H9.294a4.98 4.98 0 0 0-4.982 4.981v5.412a4.98 4.98 0 0 0 4.982 4.982h5.412a4.98 4.98 0 0 0 4.982-4.982V9.294a4.98 4.98 0 0 0-4.982-4.982Z" />
                            <path d="M19.606 15.588h1.619a1.025 1.025 0 0 0 1.025-1.025V9.438a1.025 1.025 0 0 0-1.025-1.025h-1.62m-15.21 7.175h-1.62a1.025 1.025 0 0 1-1.025-1.025V9.438a1.025 1.025 0 0 1 1.025-1.025h1.62" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.765 8.413v-4.1m18.46 4.1l-.01-4.1M9.94 15.588h4.1m-6.16-4.613L8.903 9.95l1.025 1.025m4.102 0l1.025-1.025l1.024 1.025" />
                        </g>
                    </svg>
                    <h2 class="service-title">Robotics Learning</h2>
                    <p class="service-description">We provide comprehensive education in robotics and automation, empowering learners with hands-on skills to excel in the rapidly growing fields of advanced technology.</p>
                    <a href="#" class="service-link">
                        <img src="images/landing_page/section-2/arrow.png" alt="Arrow">
                    </a>
                </div>

                <div class="service-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                        <path fill="none" stroke="#0e47a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.50" d="m12 22l-2-6H2l2 6zm0 0h4m-4-9v-.5c0-1.886 0-2.828-.586-3.414S9.886 8.5 8 8.5s-2.828 0-3.414.586S4 10.614 4 12.5v.5m15 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0m-9-9a2 2 0 1 1-4 0a2 2 0 0 1 4 0m4 13.5h6a2 2 0 0 1 2 2v.5a2 2 0 0 1-2 2h-1" color="#0e47a1" />
                    </svg>
                    <h2 class="service-title">Mentorship to Internship</h2>
                    <p class="service-description">We offer IT-based internships that provide real-world experience, helping students and professionals develop practical skills and industry knowledge for their career growth.</p>
                    <a href="#" class="service-link">
                        <img src="images/landing_page/section-2/arrow.png" alt="Arrow">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!--==================   SECTION 3  ==================-->
    <section class="section-3">
        <!-- header -->
        <header>
            Crafted by U<span>s</span>
        </header>

        <p class="info">
            From custom websites to intuitive mobile apps, we create digital solutions that are both functional and visually compelling, helping brands build lasting relationships with their customers. We make it simple for businesses to engage with their audience and deliver value every step of the way.
        </p>

        <!-- Slider -->
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <img src="images/landing_page/section-3/section_2_slider_img1.png" alt="FinStack Logo" class="logo">
                    <div class="content">
                        <h2>FinStack Brand Logo Design</h2>
                        <p>This embodies financial innovation, blending modern elegance with sleek lines, symbolizing growth, stability, and digital transformation.</p>
                        <a href="#" class="know-more">
                            Know more
                            <img src="images/landing_page/section-3/arrow.png" />
                        </a>
                    </div>
                </div>
                <div class="slide">
                    <img src="images/landing_page/section-3/section_2_slider_img2.png" alt="Hotel Forest Avenue" class="logo">
                    <div class="content">
                        <h2>Hotel Forest Avenue</h2>
                        <p>The primary goal of the project was to provide an online platform that captures the essence of Hotel Forest Avenue while facilitating a smooth booking process.</p>
                        <a href="#" class="know-more">
                            Know more
                            <img src="images/landing_page/section-3/arrow.png" />
                        </a>
                    </div>
                </div>
                <div class="slide">
                    <img src="images/landing_page/section-3/section_2_slider_img3.png" alt="Mobile Application Case Study" class="logo">
                    <div class="content">
                        <h2>Mobile Application Case Study</h2>
                        <p>This is a UX Case study for a mobile application which deals with event booking and event hosting.</p>
                        <a href="#" class="know-more">
                            Know more
                            <img src="images/landing_page/section-3/arrow.png" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="nav-buttons">
                <button class="nav-button prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="white" d="M11.03 8.53a.75.75 0 1 0-1.06-1.06l-4 4a.75.75 0 0 0 0 1.06l4 4a.75.75 0 1 0 1.06-1.06l-2.72-2.72H18a.75.75 0 0 0 0-1.5H8.31z" />
                    </svg>
                </button>
                <button class="nav-button next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="white" d="M13.47 8.53a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06l2.72-2.72H6.5a.75.75 0 0 1 0-1.5h9.69z" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!--=============== SECTION 4 ========================-->
    <section class="section-4">
        <div class="container">
            <header class="header">
                <h1>
                    <span class="blue-text">Rooted</span> in Service,<br>
                    <span class="blue-text">Driven</span> by Care
                </h1>
            </header>

            <div class="values-grid">
                <!-- Value Card 1 -->
                <div class="value-card">
                    <div class="icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#0052CC" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                        </svg>
                    </div>
                    <h2>We are grounded</h2>
                    <p>Our approach is practical and focused, staying rooted in real-world solutions that meet your unique needs</p>
                </div>

                <!-- Value Card 2 -->
                <div class="value-card">
                    <div class="icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#0052CC" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h2>We listen to you carefully</h2>
                    <p>Your voice guides us—every project begins with a deep commitment to understanding your vision and goals</p>
                </div>

                <!-- Value Card 3 -->
                <div class="value-card">
                    <div class="icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#0052CC" stroke-width="2">
                            <circle cx="12" cy="12" r="5" />
                            <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42" />
                        </svg>
                    </div>
                    <h2>We understand your need</h2>
                    <p>We believe technology should serve you—our designs are intuitive and human-centered, crafted to simplify your life</p>
                </div>

                <!-- Value Card 4 -->
                <div class="value-card">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 32 32">
                            <path fill="#0D47A1" d="M6.813 2.406L5.405 3.812L7.5 5.906L8.906 4.5zm18.375 0L23.093 4.5L24.5 5.906l2.094-2.093zM16 3.03q-.495.004-1 .064h-.03c-4.056.465-7.284 3.742-7.845 7.78c-.448 3.25.892 6.197 3.125 8.095a5.24 5.24 0 0 1 1.75 3.03v6h2.28c.348.597.983 1 1.72 1s1.372-.403 1.72-1H20v-4h.094v-1.188c0-1.466.762-2.944 2-4.093C23.75 17.06 25 14.705 25 12c0-4.94-4.066-9.016-9-8.97m0 2c3.865-.054 7 3.11 7 6.97c0 2.094-.97 3.938-2.313 5.28l.032.032A7.8 7.8 0 0 0 18.279 22h-4.374c-.22-1.714-.955-3.373-2.344-4.563c-1.767-1.5-2.82-3.76-2.468-6.312c.437-3.15 2.993-5.683 6.125-6.03a7 7 0 0 1 .78-.064zM2 12v2h3v-2zm25 0v2h3v-2zM7.5 20.094l-2.094 2.093l1.407 1.407L8.905 21.5zm17 0L23.094 21.5l2.093 2.094l1.407-1.407zM14 24h4v2h-4z" />
                        </svg>
                    </div>
                    <h2>We innovate with purpose</h2>
                    <p>Our approach is practical and focused, staying rooted in real-world solutions that meet your unique needs</p>
                </div>

                <!-- Value Card 5 -->
                <div class="value-card">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                            <circle cx="8" cy="16" r="1" fill="#0D47A1" />
                            <path fill="#0D47A1" d="M20.733 4.657a.997.997 0 0 0-1.399.009a.997.997 0 0 0 .01-1.4A6.47 6.47 0 0 0 15.5 2A6.5 6.5 0 0 0 9 8.5l.031.379c-.337.239-2.893 2.147-4.258 3.301C3.638 13.17 3 14.555 3 16c0 2.757 2.243 5 5 5c1.465 0 2.854-.65 3.811-1.784c1.173-1.375 3.08-3.923 3.317-4.229L15.5 15A6.5 6.5 0 0 0 22 8.5c0-1.44-.474-2.766-1.267-3.843M8 19a3 3 0 0 1-3-3c0-.92.423-1.732 1.064-2.292c2.368-2.002 3.617-2.748 5.115-4.015A4.5 4.5 0 0 1 11 8.5A4.5 4.5 0 0 1 15.5 4c.47 0 .914.092 1.339.226L14 7l.5 2.5l2.5.5l2.805-2.741c.115.396.195.807.195 1.241a4.5 4.5 0 0 1-4.5 4.5c-.416 0-.811-.074-1.193-.18c-1.267 1.498-2.013 2.748-4.024 5.105A2.98 2.98 0 0 1 8 19M19.384 6.271l-2.705 2.645l-1.329-.266l-.263-1.314l2.726-2.663c.651.393 1.19.939 1.571 1.598" />
                        </svg>
                    </div>
                    <h2>We build relationships, not just projects</h2>
                    <p>Every interaction is an opportunity to understand your business better</p>
                </div>

                <!-- Value Card 6 -->
                <div class="value-card">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 32 32">
                            <path fill="#0D47A1" d="M2 13.5C2 7.701 6.701 3 12.5 3S23 7.701 23 13.5S18.3 24 12.5 24c-1.686 0-3.281-.398-4.695-1.106L3.89 23.943a1.5 1.5 0 0 1-1.837-1.837l1.05-3.918A10.4 10.4 0 0 1 2 13.5m10.5 12q1-.001 1.955-.158A8.46 8.46 0 0 0 19.5 27c1.486 0 2.88-.38 4.094-1.049a1 1 0 0 1 .741-.09l3.456.926l-.926-3.458a1 1 0 0 1 .09-.74A8.46 8.46 0 0 0 28 18.5a8.49 8.49 0 0 0-3.665-6.991a12 12 0 0 0-.787-2.7A10.5 10.5 0 0 1 30 18.5a10.5 10.5 0 0 1-1.102 4.688l1.05 3.918a1.5 1.5 0 0 1-1.838 1.837l-3.915-1.049A10.46 10.46 0 0 1 19.5 29c-3.124 0-5.93-1.364-7.853-3.53q.423.03.853.03" />
                        </svg>
                    </div>
                    <h2>Your satisfaction drives us</h2>
                    <p>From start to finish, we ensure each step aligns with your vision, putting your success at the heart of what we do</p>
                </div>
            </div>
        </div>
    </section>


    <!--===================== SECTION 5 =======================-->
    <section class="section-5">
        <div class="container">
            <!-- Feedback and Improvement Section -->
            <div class="section">
                <div class="image-container">
                    <img src="images/landing_page/section-5/section5_2_img.png" alt="Feedback Analysis">
                </div>
                <div class="content content-1">
                    <h2>Feedback and Continuous Improvement</h2>
                    <ul class="features-list">
                        <li>Stay Updated with Industry Trends</li>
                        <li>Market Research</li>
                        <li>Pilot New Services</li>
                        <li>Flexibility</li>
                    </ul>
                    <a href="#" class="learn-more">Learn more</a>
                </div>
            </div>

            <!-- Customer-Centric Approach Section -->
            <div class="section section-reverse">
                <div class="image-container">
                    <img src="images/landing_page/section-5/section5_1_img.png" alt="Customer Service Representative">
                </div>
                <div class="content content-2">
                    <h2>Customer-Centric Approach <span>With NetPy</span></h2>
                    <p>By focusing on delivering personalized and consistent service, a business can enhance client satisfaction and loyalty, which drives repeat business and long-term growth.</p>
                    <a href="#" class="learn-more">Learn more</a>
                </div>
            </div>

            <!-- Client-Driven Focus Section -->
            <div class="section">
                <div class="image-container">
                    <img src="images/landing_page/section-5/section5_3_img.png" alt="Client Meeting">
                </div>
                <div class="content content-3">
                    <h2>Client-Driven Focus</h2>
                    <ul class="features-list">
                        <li>Understand the Customer Needs</li>
                        <li>Personalize the Service</li>
                        <li>Build the Trust</li>
                    </ul>
                    <a href="#" class="learn-more">Learn more</a>
                </div>
            </div>

            <!-- Innovation Section -->
            <div class="section section-reverse">
                <div class="image-container">
                    <img src="images/landing_page/section-5/section5_1_img.png" alt="Innovation Workshop">
                </div>
                <div class="content content-4">
                    <h2>Innovation and Adaptation <span>With NetPy</span></h2>
                    <p>Stay updated with industry trends to introduce new services or improve existing ones and regularly gather market research to stay ahead of competitors and adapt to changes.</p>
                    <a href="#" class="learn-more">Learn more</a>
                </div>
            </div>
        </div>
    </section>


    <!--======================= SECTION 6 =======================-->
    <section class="section-6">
        <div class="container">
            <h1><span class="highlight">Precision</span> in every step<br><span class="highlight">Trust</span> in every project</h1>
            <a href="contact.php">
                <button class="contact-btn">Contact Us</button>
            </a>
            <div class="icons">
                <img src="images/landing_page/section-6/figma.png" alt="Figma Icon" class="icon icon-1">
                <img src="images/landing_page/section-6/selenium.png" alt="Selenium Icon" class="icon icon-2">
                <img src="images/landing_page/section-6/vscode.png" alt="VS Code Icon" class="icon icon-3">
                <img src="images/landing_page/section-6/notion.png" alt="Notion Icon" class="icon icon-4">
                <img src="images/landing_page/section-6/jira.png" alt="Jira Icon" class="icon icon-5">
                <img src="images/landing_page/section-6/meet.png" alt="Meet Icon" class="icon icon-6">
                <img src="images/landing_page/section-6/miro.png" alt="Miro Icon" class="icon icon-7">
            </div>
        </div>
    </section>


    <!--===================== FOOTER =======================-->
    <section class="footer-container">
        <footer class="footer">
            <p class="footer-heading">Let there be <span>INNOVATION</span></p>

            <div class="footer-content">
                <div class="footer-link-container">
                    <div class="footer-links">
                        <a href="#">Careers</a>
                        <a href="aboutus.php">About Us</a>
                        <a href="contact.php">Contact Us</a>
                        <a href="services.php">Services</a>
                        <a href="https://maps.app.goo.gl/mh4Ljehq9DZdy7wj9" target="_blank">Location</a>
                    </div>

                    <div class="footer-links">
                        <a href="privacy_statement.php">Privacy Statement</a>
                        <a href="terms_condition.php">Terms & Conditions</a>
                    </div>
                </div>

                <div class="newsletter">
                    <p>Subscribe our newsletter</p>

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="email-input-container">
                            <input type="email" name="email" id="email" class="email-input" placeholder="Stay in the loop - your email here" required>
                            <button type="submit" class="submit-btn">→</button>
                        </div>
                    </form>

                    <div class="social-links">
                        <!-- Youtube -->
                        <a href="https://www.youtube.com/@netpytech" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 24 24">
                                <g fill="none" stroke="#0e47a1" stroke-linejoin="round" stroke-width="1.50">
                                    <path stroke-linecap="round" d="M2.45 11.419c0-3.017.3-4.526 1.237-5.463s2.446-.937 5.463-.937h5.7c3.017 0 4.525 0 5.463.937s1.237 2.446 1.237 5.463v1.162c0 3.017-.3 4.526-1.237 5.463s-2.446.937-5.463.937h-5.7c-3.017 0-4.526 0-5.463-.937S2.45 15.598 2.45 12.581z" />
                                    <path d="m14.686 11.491l-4.268-2.667a.6.6 0 0 0-.918.509v5.335a.6.6 0 0 0 .918.508l4.268-2.667a.6.6 0 0 0 0-1.018Z" />
                                </g>
                            </svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/netpykidz" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                                <path fill="#0e47a1" d="M17.34 5.46a1.2 1.2 0 1 0 1.2 1.2a1.2 1.2 0 0 0-1.2-1.2m4.6 2.42a7.6 7.6 0 0 0-.46-2.43a4.9 4.9 0 0 0-1.16-1.77a4.7 4.7 0 0 0-1.77-1.15a7.3 7.3 0 0 0-2.43-.47C15.06 2 14.72 2 12 2s-3.06 0-4.12.06a7.3 7.3 0 0 0-2.43.47a4.8 4.8 0 0 0-1.77 1.15a4.7 4.7 0 0 0-1.15 1.77a7.3 7.3 0 0 0-.47 2.43C2 8.94 2 9.28 2 12s0 3.06.06 4.12a7.3 7.3 0 0 0 .47 2.43a4.7 4.7 0 0 0 1.15 1.77a4.8 4.8 0 0 0 1.77 1.15a7.3 7.3 0 0 0 2.43.47C8.94 22 9.28 22 12 22s3.06 0 4.12-.06a7.3 7.3 0 0 0 2.43-.47a4.7 4.7 0 0 0 1.77-1.15a4.85 4.85 0 0 0 1.16-1.77a7.6 7.6 0 0 0 .46-2.43c0-1.06.06-1.4.06-4.12s0-3.06-.06-4.12M20.14 16a5.6 5.6 0 0 1-.34 1.86a3.06 3.06 0 0 1-.75 1.15a3.2 3.2 0 0 1-1.15.75a5.6 5.6 0 0 1-1.86.34c-1 .05-1.37.06-4 .06s-3 0-4-.06a5.7 5.7 0 0 1-1.94-.3a3.3 3.3 0 0 1-1.1-.75a3 3 0 0 1-.74-1.15a5.5 5.5 0 0 1-.4-1.9c0-1-.06-1.37-.06-4s0-3 .06-4a5.5 5.5 0 0 1 .35-1.9A3 3 0 0 1 5 5a3.1 3.1 0 0 1 1.1-.8A5.7 5.7 0 0 1 8 3.86c1 0 1.37-.06 4-.06s3 0 4 .06a5.6 5.6 0 0 1 1.86.34a3.06 3.06 0 0 1 1.19.8a3.1 3.1 0 0 1 .75 1.1a5.6 5.6 0 0 1 .34 1.9c.05 1 .06 1.37.06 4s-.01 3-.06 4M12 6.87A5.13 5.13 0 1 0 17.14 12A5.12 5.12 0 0 0 12 6.87m0 8.46A3.33 3.33 0 1 1 15.33 12A3.33 3.33 0 0 1 12 15.33" />
                            </svg>
                        </a>
                        <!-- Whatsapp -->
                        <a href="https://whatsapp.com/channel/0029VazDKGL6xCSNuKAtnp18" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 24 24">
                                <path fill="#0e47a1" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                            </svg>
                        </a>
                        <!-- Twitter -->
                        <a href="https://x.com/netpytech" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 24 24">
                                <path fill="#0e47a1" d="m17.687 3.063l-4.996 5.711l-4.32-5.711H2.112l7.477 9.776l-7.086 8.099h3.034l5.469-6.25l4.78 6.25h6.102l-7.794-10.304l6.625-7.571zm-1.064 16.06L5.654 4.782h1.803l10.846 14.34z" />
                            </svg>
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/company/netpy-tech" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38.38" height="37.38" viewBox="0 0 448 512">
                                <path fill="#0e47a1" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3M135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5c0 21.3-17.2 38.5-38.5 38.5m282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7c-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5c67.2 0 79.7 44.3 79.7 101.9z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>


            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">© 2024 NetPy Technologies. All Rights Reserved</div>
                </div>
            </div>
        </footer>
    </section>

    <script src="js/navbar_dropdown.js"></script>
    <script src="js/landing_page/navbar.js"></script>
    <script src="js/top-scroller.js"></script>

    <script src="js/landing_page/section_3.js"></script>
</body>

</html>