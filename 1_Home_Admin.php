<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/css/uikit.min.css" />
</head>
<body>
    <nav class="uk-navbar-container">
        <div class="uk-container">
            <div uk-navbar>
    
                <div class="uk-navbar-left">
    
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="1_Home_Admin.php">ABC Virtual</a></li>
                        <li>
                            <a href="3_CRUD_Patients.php">Patients</a>
                        </li>
                        <li>
                            <a href="4_CRUD_Doctors.php">Doctors</a>
                         </li>
                        <li>
                            <a href="5_CRUD_Receptionists.php">Receptionists</a>
                        </li>
                        <li>
                            <a href="6_View_All_Appointment.php">Appointments</a>
                        </li>

                    </ul>
    
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li> <a href="2_Login.html">Logout</a></li>
                    </ul>
                </div>
    
            </div>
        </div>
    </nav>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push">

        <ul class="uk-slideshow-items">
            <li>
                <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                    <img src="images/doctor 1.jpg" alt="" uk-cover>
                </div>
                <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
                <div class="uk-position-center uk-position-medium uk-text-center">
                    <div uk-slideshow-parallax="scale: 1,1,0.8">
                        <h2 uk-slideshow-parallax="x: 200,0,0">Welcome to ABC Virtual</h2>
                        
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                    <img src="images/doctor 2.jpg" alt="" uk-cover>
                </div>
                <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
                <div class="uk-position-center uk-position-medium uk-text-center">
                    <div uk-slideshow-parallax="scale: 1,1,0.8">
                        <h2 uk-slideshow-parallax="x: 200,0,0">World Class Health Care</h2>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-position-cover" uk-slideshow-parallax="scale: 1.2,1.2,1">
                    <img src="images/doctor 3.jpg" alt="" uk-cover>
                </div>
                <div class="uk-position-cover" uk-slideshow-parallax="opacity: 0,0,0.2; backgroundColor: #000,#000"></div>
                <div class="uk-position-center uk-position-medium uk-text-center">
                    <div uk-slideshow-parallax="scale: 1,1,0.8">
                        <h2 uk-slideshow-parallax="x: 200,0,0">Making Health Care Better Together</h2>
                    </div>
                </div>
            </li>
        </ul>
    
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slideshow-item="next"></a>
    
    </div>
    <br><br>

    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-3">
                <img class="au-img" src="images/about 1.jpg" alt="">
                
            </div>
            <div class="uk-width-1-3">
                <h2 class="uk-align-center">About Us</h2>
                <p class="uk-align-center">
                    Welcome to ABC Hospital, where compassionate care meets cutting-edge medicine. At ABC Hospital, we are dedicated to providing exceptional healthcare services with a focus on patient well-being, innovation, and community wellness.
                    
                    Our mission is to deliver high-quality, personalized medical care in a warm and welcoming environment. With a team of skilled and compassionate healthcare professionals, ABC Hospital is committed to meeting the diverse healthcare needs of our patients.
                    
                    At the heart of our commitment is a pursuit of excellence in medical practice, utilizing the latest advancements in technology and medical research to ensure our patients receive the best possible care.</p>
                
            </div>
            <div class="uk-width-1-3">
                <img class="au-img" src="images/about 2.jpg" alt="">
            </div>
        </div>
    </div>

    <br>
    <br>
    <hr>

    
    <br><br>
 

    <h1 class="uk-text-center">Our Gallery</h1>
    <br>
    <div uk-slider>

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
    
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                <li>
                    <img class="menu-item" src="images/gallery 1.jpg" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"><h1>Hallway</h1></div>
                </li>
                <li>
                    <img class="menu-item" src="images/gallery 2.jpg" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"><h1>Radiology Scans</h1></div>
                </li>
                <li>
                    <img class="menu-item" src="images/gallery 3.jpg" width="400" height="600" alt="">
                    <div  class="uk-position-center uk-panel"><h1>Wards</h1></div>
                </li>
                <li>
                    <img class="menu-item" src="images/gallery 4.jpg" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"><h1>Waiting Areas</h1></div>
                </li>
                <li>
                    <img src="images/gallery 5.jpg" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"><h1>Treatments</h1></div>
                </li>
                <li>
                    <img src="images/gallery 6.jpg" width="400" height="600" alt="">
                    <div class="uk-position-center uk-panel"><h1>Surgeons</h1></div>
                </li>
                
            </ul>
    
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>
    
        </div>
    
        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
    
    </div>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/js/uikit.min.js"></script>
    
</body>
</html>