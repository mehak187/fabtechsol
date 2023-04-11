<!-- ==================================
        |            Primary nav               |
        ==================================== -->
<?php
include 'connection.php';
$sel_social = "SELECT * FROM social" or die("conn failed");
$res_social = mysqli_query($conn, $sel_social);
$row_social = mysqli_fetch_assoc($res_social); ?>
<section class="primary-nav-wrapper">
    <div class="container">
        <div class="primary-nav">
            <!-- ----------primary nav left------ -->
            <div class="p-nav-left">
                <a href="https://www.google.com/maps/dir/32.5040684,74.5111716/fabtech+solutions+sialkot/@32.4919858,74.4989334,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x391eebf05050a257:0x65c6ed11df82a794!2m2!1d74.5271225!2d32.4811242"
                    target="_blank">
                    <div class="icon">
                        <img src="../img/location.png" alt="location-icon">
                    </div>
                    <?php echo $row_social['location'] ?>
                </a>
                <a href="mailto:info@fabtechsol" target="_blank">
                    <div class="icon">
                        <img src="../img/mail.png" alt="mail-icon" class="mail-icon-home">
                    </div>
                    <?php echo $row_social['email'] ?>
                </a>
            </div>
            <!-- ----------primary nav right------ -->
            <div class="p-nav-right">
                <ul class="p-links">
                    <li><a href="../index">Home</a></li>
                    <li><a href="../get-hired">Get Hired</a></li>
                    <li><a href="../contact-us">Contact</a></li>
                </ul>
                <ul class="p-social">
                    <li><a href="<?php echo $row_social['twitter'] ?>"><img src="../img/twitter.png"
                                alt="twitter-icon"></a></li>
                    <li><a href="<?php echo $row_social['fb'] ?>" target="_blank"><img src="../img/fb.png"
                                alt="facebook-icon"></a></li>
                    <li><a href="<?php echo $row_social['lnk'] ?>" target="_blank"><img src="../img/linkedin.png"
                                alt="linkedin-icon"></a></li>
                    <li><a href="<?php echo $row_social['insta'] ?>" target="_blank"><img src="../img/instagram.png"
                                alt="instagram-icon"></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ==================================
        |              Main nav               |
        ==================================== -->
<nav>
    <div class="container">
        <div class="main-nav">
            <!-- ----------logo---------- -->
            <div class="logo">
                <a href="index" class="logo-img">
                    <img src="../img/fabtech-logo.png" alt="logo">
                </a>

            </div>
            <!-- -------------------------------
                    |              Mbl nav             |
                    ------------------------------------>
            <div class="mbl-nav">
                <a href="tel:92 318 232 232 3" class="call call-mbl">
                    <div class="icon">
                        <img src="../img/phone-icon.png" alt="phone-icon">
                    </div>
                    <div class="">
                        <span>
                            <?php echo $row_social['phone'] ?>
                        </span>
                        <span>Call to Expert</span>
                    </div>
                </a>

                <div class="search-mbl">
                    <input type="search" placeholder="Search" id="search">
                    <label for="search" class="icons">
                        <img class="search" src="../img/search-icon.png" alt="search-icon">
                    </label>
                </div>

                <ul class="mbl-menu">
                    <li><a href="index.php">Admin Home</a></li>
                    <li><a href="contact-details.php">Contact </a></li>
                    <li><a href="get-hired-details.php">Get Hired </a></li>
                    <li><a href="news-admin.php">News</a></li>

                </ul>
                <div class="close">
                    <img src="../img/close.png" alt="close-icon">
                </div>
            </div>
            <!-- -------------------------------
                    |        main-nav-right-desktop     |
                    ------------------------------------>
            <div class="main-nav-r">
                <!-- ----------navbox------------ -->
                <div class="navbox">
                    <ul>
                        <div class="search-box-d">
                            <input type="search" id="search-d" placeholder="Search">
                        </div>
                        <li><a href="index.php">Admin Home</a></li>
                        <li><a href="contact-details.php">Admin Contact </a></li>
                        <li><a href="get-hired-details.php">Admin Get Hired </a></li>
                        <li><a href="news-admin.php">Admin News</a></li>
                        <li><a href="logout.php">Logout</a></li>

                        <li class="icons">
                            <img src="../img/Line.png" alt="line-icon">
                            <label for="search-d" class=""><img class="search" src="../img/search-icon.png"
                                    alt="search-icon"></label>
                        </li>
                        <li class="chat-btn"><a href="#">Chat With Us</a></li>
                    </ul>
                </div>
                <!-- -----------call----------- -->
                <a href="tel:92 318 232 232 3" class="call">
                    <div class="icon">
                        <img src="../img/phone-icon.png" alt="phone-icon">
                    </div>
                    <div class="">
                        <span>
                            <?php echo $row_social['phone'] ?>
                        </span>
                        <span>Call to Expert</span>
                    </div>
                </a>
            </div>
            <!-- -------------------------------
                    |           mbl content             |
                    ------------------------------------>
            <div class="res-con">
                <!-- ---------hamburger------------- -->
                <div class="togg">
                    <img src="../img/togg.png" alt="hamburger">
                </div>
                <div class="chat-btn mbl-chat"><a href="#">Chat With Us</a></div>
            </div>
        </div>
    </div>
</nav>