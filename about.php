<!DOCTYPE html>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VBDMY6M847"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-VBDMY6M847');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Fabtechsol - Global Software Company</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <?php
    include 'admin/connection.php';
    $sel12 = "SELECT * FROM about_meta" or die("conn failed");
    $res_sql12 = mysqli_query($conn, $sel12);
    $row12 = mysqli_fetch_assoc($res_sql12); ?>
    <meta name="description" content="<?php echo $row12['meta_des'] ?>">
    <!---------------og start------>
    <?php include 'og.php' ?>
    <!------------og end------------->
    <meta name="author" content="fabtechsol">
    <!-- Meta Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '658112671961788');
    fbq('track', 'PageView');
    </script>
    <noscript>
        <img class="pixel" height="1" width="1"
            src="https://www.facebook.com/tr?id=658112671961788&ev=PageView&noscript=1" alt="meta-img" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- ------------------CSS Link--------------- -->
    <?php include 'css/style.php'; ?>
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/088d3f36f9.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <!-- ==================================
    |            Primary nav               |
    ==================================== -->
        <?php
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
                            <img src="img/location.png" alt="location-icon">
                        </div>
                        <?php echo $row_social['location'] ?>
                    </a>
                    <a href="mailto:<?php echo $row_social['email'] ?>" target="_blank">
                        <div class="icon">
                            <img src="img/mail.png" alt="mail-icon" class="mail-icon-home">
                        </div>
                        <?php echo $row_social['email'] ?>
                    </a>
                </div>
                <!-- ----------primary nav right------ -->
                <div class="p-nav-right">
                    <ul class="p-links">
                        <li><a href="get-hired">Get Hired</a></li>
                        <li><a href="free-courses">Free courses</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="about">About</a></li>
                    </ul>
                    <ul class="p-social">
                        <li><a href="<?php echo $row_social['twitter'] ?>" target="_blank"><img src="img/twitter.png" alt="twitter-icon"></a></li>
                        <li><a href="<?php echo $row_social['fb'] ?>" target="_blank"><img src="img/fb.png"
                                    alt="facebook-icon"></a></li>
                        <li><a href="<?php echo $row_social['lnk'] ?>" target="_blank"><img src="img/linkedin.png" alt="linkedin-icon"></a></li>
                        <li><a href="<?php echo $row_social['insta'] ?>"
                                target="_blank"><img src="img/instagram.png" alt="instagram-icon"></a></li>
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
                        <a href="https://fabtechsol.com" class="logo-img">
                            <img src="img/fabtech-logo.png" alt="logo">
                        </a>
                        <!--<div>-->
                        <!--    <span>Fabulous</span>-->
                        <!--    <span>Technology Solutions</span>-->
                        <!--</div>-->
                </div>
                <!-- -------------------------------
                |              Mbl nav             |
                ------------------------------------>
                <div class="mbl-nav">
                    <!-- -----mbl-primary-nav-start--- -->
                    <div class="mbl-prime primary-nav">
                        <!-- -email and location-- -->
                        <div class="p-nav-left">
                            <a href="https://www.google.com/maps/dir/32.5040684,74.5111716/fabtech+solutions+sialkot/@32.4919858,74.4989334,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x391eebf05050a257:0x65c6ed11df82a794!2m2!1d74.5271225!2d32.4811242"
                                target="_blank">
                                <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div><?php echo $row_social['location'] ?></div>
                            </a>
                            <a href="mailto:<?php echo $row_social['email'] ?>" target="_blank">
                                <div class="icon">
                                <i class="fas fa-envelope"></i>
                                </div>
                                <?php echo $row_social['email'] ?>
                            </a>
                        </div>
            
                    </div>
                    <!-- -----mbl-primary-nav-end--- -->
                    <!-- <div class="search-mbl">
                        <input type="search" placeholder="Search" id="search">
                        <label for="search" class="icons">
                            <img class="search" src="img/search-icon.png" alt="search-icon">
                        </label>
                    </div> -->
                    <!-- ------mbl-menu----- -->
                    <ul class="mbl-menu">
                        <li><a href="https://fabtechsol.com">Home</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="project">Our Projects</a></li>
                        <li><a href="contact-us">Contact Us</a></li>
                        <li><a href="blog">Our Blogs</a></li>
                        <li><a href="get-hired">Get Hired</a></li>
                                <li><a href="free-courses">Free courses</a></li>
                                <li><a href="faq">FAQ</a></li>
                                <li><a href="https://fabtechsol.com/about">About</a></li>
                    </ul>

                    <div class="close">
                        <img src="img/close.png" alt="nav-close-icon">
                    </div>
                    <!-- ----mbl-call to expert-- -->
                    <a href="tel:<?php echo $row_social['phone'] ?>" class="call call-mbl" target="_blank">
                        <div class="icon">
                            <img src="img/phone-icon.png" alt="phone-icon">
                        </div>
                        <div class="">
                            <span>
                                <?php echo $row_social['phone'] ?>
                            </span>
                            <span>Call to Expert</span>
                        </div>
                    </a>
                    <!-- -----mbl-primary-nav-start--- -->
                    <!-- ----social--- -->
                    <div class="mbl-prime primary-nav">
                        <div class="p-nav-right">
                            <ul class="p-social">
                                <li><a href="<?php echo $row_social['twitter'] ?>"><img src="img/twitter.png"
                                            alt="twitter-icon"></a></li>
                                <li><a href="<?php echo $row_social['fb'] ?>" target="_blank"><img src="img/fb.png"
                                            alt="facebook-icon"></a></li>
                                <li><a href="<?php echo $row_social['lnk'] ?>" target="_blank"><img src="img/linkedin.png"
                                            alt="linkedin-icon"></a></li>
                                <li><a href="<?php echo $row_social['insta'] ?>" target="_blank"><img src="img/instagram.png"
                                            alt="instagram-icon"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- -----mbl-primary-nav-end--- -->
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
                            <li class="nav-item"><a href="https://fabtechsol.com">Home</a></li>
                            <li class="nav-item active"><a href="about">About</a></li>
                            <li class="nav-item dropdown-main">
                                <a href="services">Services</a>
                                 <ul class="dropdown-menu">
                                        <?php
                                        include 'admin/connection.php';
                                        $select_slink = "SELECT * FROM services_main ORDER BY id ASC";
                                        $res_slink = mysqli_query($conn, $select_slink);
                                        while ($row_slink = mysqli_fetch_assoc($res_slink)) { ?>
                                            <li><a href="<?php echo $row_slink['service_link'] ?>"><?php echo $row_slink['service_title'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                            </li>
                            <li class="nav-item"><a href="project">Our Projects</a></li>
                            <li class="nav-item"><a href="contact-us">Contact Us</a></li>
                            <li class="nav-item"><a href="blog">Our Blogs</a></li>
                            <li class="icons">
                                <img src="img/Line.png" alt="line-icon">
                                <label for="search-d" class="search-d-btn"><img class="search" src="img/search-icon.png"
                                        alt="search-icon"></label>
                            </li>
                            <li class="chat-btn"><a href="https://fabtechsolution-9c507.web.app/#">Chat With Us</a></li>
                        </ul>
                    </div>
                    <!-- -----------call----------- -->
                    <a href="https://wa.me/<?php echo $row_social['phone'] ?>" target="_blank" class="call">
                        <div class="icon">
                            <img src="img/phone-icon.png" alt="phone-icon">
                        </div>
                        <div class="">
                            <span><?php echo $row_social['phone'] ?></span>
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
                        <img src="img/togg.png" alt="hamburger">
                    </div>
                    <div class="chat-btn mbl-chat"><a href="https://fabtechsolution-9c507.web.app/#">Chat With Us</a></div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ==================================
    |             HERO SECTION             |
    ==================================== -->
    <?php
    include 'admin/connection.php';
    $sel1 = "SELECT * FROM about_hero" or die("conn failed");
    $res_sql1 = mysqli_query($conn, $sel1) or die("conn failed");
    $row1 = mysqli_fetch_assoc($res_sql1) or die("conn failed");
    if (mysqli_num_rows($res_sql1) > 0) { ?>
    <section class="hero-wrapper about-hero-wrapper">
        <div class="container">
            <div class="hero">
                <h1><?php echo $row1['about_hero_title'] ?></h1>
                <p><?php echo $row1['about_hero_des'] ?></p>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- ==================================
    |            ABOUT COMPANY              |
    ==================================== -->
    <section class="about-com about-p-com">
        <div class="container">
            <div class="about-com-main">
                <?php
                include 'admin/connection.php';
                $select_comp = "SELECT * FROM about_company" or die("query failed");
                $res_comp = mysqli_query($conn, $select_comp) or die("res failed");
                while ($row_comp = mysqli_fetch_assoc($res_comp)) { ?>
                <!-- ---------ABOUT-img--------- -->
                <div class="about-img">
                    <div class="about-p-img">
                        <img src="<?php echo $row_comp['img_1'] ?>" alt="Fabulous software developers team">
                    </div>
                    <div class="about-p-img2">
                        <img src="<?php echo $row_comp['img_2'] ?>" alt="Fabtechsol world-class software development partner">
                    </div>
                </div>
                <!-- ---------ABOUT-content--------- -->
                <div class="about-content">
                    <p class="m-head">
                        <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                        <span><?php echo $row_comp['heading'] ?></span>
                        <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                    </p>
                    <h2><?php echo $row_comp['sub_heading'] ?></h2>
                    <p><?php echo $row_comp['des'] ?></p>
                    <div class="about-ftr">
                        <div class="blue-btn">
                            <a href="<?php echo $row_comp['btn_link'] ?>"><?php echo $row_comp['btn_name'] ?></a>
                        </div>
                        <div class="call-btn">
                            <a href="https://wa.me/<?php echo $row_social['phone'] ?>" target="_blank" class="call">
                                <div class="icon">
                                    <img src="img/phone-icon.png" alt="phone-icon">
                                </div>
                                <div>
                                    <span>+92 347 587 956 6</span>
                                    <span>Call to Expert</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
    </section>
    <!-- ==================================
    |            BRAND SECTION             |
    ==================================== -->
    <section class="brand-sec">
        <div class="container">
            <div class="brand-main">
                <div class="brand-text">
                    <p>Trusted by big companies
                        all over the world </p>
                </div>
                <div class="brands-box">
                    <div class="brand-img">
                        <img src="img/brand-1.png" alt="brand-1">
                    </div>
                    <div class="brand-img">
                        <img src="img/brand-2.png" alt="brand-2">
                    </div>
                    <div class="brand-img">
                        <img src="img/brand-3.png" alt="brand-3">
                    </div>
                    <div class="brand-img">
                        <img src="img/brand-2.png" alt="brand-4">
                    </div>
                    <div class="brand-img">
                        <img src="img/brand-1.png" alt="brand-5">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ==================================
    |       TESTIMONIAL SECTION            |
    ==================================== -->
    <?php
    $sel26 = "SELECT * FROM testimonial" or die("conn failed");
    $res_sql26 = mysqli_query($conn, $sel26) or die("query failed");
    $row26 = mysqli_fetch_assoc($res_sql26) or die("row failed");
    ?>     
    <section class="testimonial-wrapper about-p-testimonial">
        <div class="container">
            <div class="why-fab-about">
                <div class="why-fab">
                    <div class="why-fab-con">
                        <p class="m-head">
                            <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                            <span><?php echo $row26['heading'] ?></span>
                            <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                        </p>
                        <h2><?php echo $row26['sub_heading'] ?></h2>
                        <p><?php echo $row26['des'] ?></p>
                        <div class="why-fab-services">
                        <?php
                        $select_25 = "SELECT * FROM why_fab_points ORDER BY id DESC";
                        $res_25 = mysqli_query($conn, $select_25);
                        $sr = 1;
                        while ($row_25 = mysqli_fetch_assoc($res_25)) { ?> 
                            <div class="why-fab-box">
                                <div class="icon">
                                    <img src="<?php echo $row_25['icon'] ?>" alt="team-icon-<?php echo $sr ?>">
                                </div>
                                <h3><?php echo $row_25['point_name'] ?></h3>
                            </div>
                        <?php $sr++;
                        } ?>
                        </div>
                    </div>
                </div>
                <div class="testimonial-main">
                    <?php
                    $select_client = "SELECT * FROM client_tbl ORDER BY id DESC";
                    $res_client = mysqli_query($conn, $select_client);
                    while ($row_client = mysqli_fetch_assoc($res_client)) { ?>
                    <div class="testimonial-box">
                        <div class="t-box-top">
                            <div class="t-img">
                                <img src="<?php echo $row_client['client_img'] ?>"
                                    alt="<?php echo $row_client['client_name'] ?>">
                            </div>
                            <div class="t-con">
                                <div class="star-icons">
                                    <img src="img/star-icon.png" alt="star-icon">
                                    <img src="img/star-icon.png" alt="star-icon">
                                    <img src="img/star-icon.png" alt="star-icon">
                                    <img src="img/star-icon.png" alt="star-icon">
                                    <img src="img/star-icon.png" alt="star-icon">
                                </div>
                                <h5><?php echo $row_client['client_name'] ?></h5>
                            </div>
                        </div>
                        <div class="testimonial-des">
                            <p><?php echo $row_client['client_para'] ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
    </section>
      <!-- ==================================
    |           MSG FROM CEO             |
    ==================================== -->
    <?php
    $sel = "SELECT * FROM ceo_msg" or die("conn failed");
    $res_sql = mysqli_query($conn, $sel);
    $row = mysqli_fetch_assoc($res_sql);
    if (mysqli_num_rows($res_sql) > 0) { ?>
    <section class="ceo-msg-sec">
        <div class="container">
            <div class="ceo-main">
                <div class="ceo-img">
                    <img src="<?php echo $row['ceo_img'] ?>" alt="<?php echo $row['ceo_name'] ?>">
                </div>
                <div class="ceo-msg">
                    <h3>
                        <?php echo $row['msg_title'] ?>
                    </h3>
                    <p>
                        <?php echo $row['msg_des'] ?>
                    </p>
                    <div class="ceo-det">
                        <h4>
                            <?php echo $row['ceo_name'] ?>
                        </h4>
                        <h4>Chief Executive Officer</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- ==================================
    |           BANNER SECTION            |
    ==================================== -->
    <section class="banner-sec">
        <div class="container">
            <div class="banner-main">
                <?php
                $sel30 = "SELECT * FROM banner" or die("conn failed");
                $res_sql30 = mysqli_query($conn, $sel30) or die("conn failed");
                while ($row_30 = mysqli_fetch_assoc($res_sql30)) { ?>
                        <div class="banner-box">
                            <div class="banner-con">
                                <div class="icon">
                                    <img src="img/chat.png" alt="chat-icon">
                                </div>
                                <div class="banner-text">
                                    <h6><?php echo $row_30['heading'] ?></h6>
                                    <h5><?php echo $row_30['des'] ?></h5>
                                </div>
                            </div>
                            <div class="banner-btn blue-btn">
                                <a href="<?php echo $row_30['btn_link'] ?>"><?php echo $row_30['btn_name'] ?></a>
                            </div>
                        </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ==================================
    |             TEAM SECTION            |
    ==================================== -->
    <!--<section class="team-sec">
        <div class="container">
            <div class="team-main">
                <div class="team-con">
                    <p class="m-head">
                        <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                        <span>Our Experts</span>
                        <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                    </p>
                    <h2>Meet our experienced team people</h2>
                </div>
                <div class="team-box-main">
                    <div class="team-box">
                        <div class="team-img">
                            <img src="img/expert-1.webp" alt="expert-1">
                        </div>
                        <div class="team-box-con">
                            <h6>Developer</h6>
                            <h4>Thomas Jhon</h4>
                        </div>
                    </div>
                    <div class="team-box">
                        <div class="team-img">
                            <img src="img/expert-2.webp" alt="expert-2">
                        </div>
                        <div class="team-box-con">
                            <h6>Developer</h6>
                            <h4>Thomas Jhon</h4>
                        </div>
                    </div>
                    <div class="team-box">
                        <div class="team-img">
                            <img src="img/expert-3.webp" alt="expert-3">
                        </div>
                        <div class="team-box-con">
                            <h6>Developer</h6>
                            <h4>Thomas Jhon</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ==================================
    |           Stats SECTION            |
    ==================================== -->
    <?php
    // include 'admin/connection.php';
    $select_stats = "SELECT * FROM previous_record" or die("query failed");
    $res_stats = mysqli_query($conn, $select_stats) or die("res failed"); ?>
    <section class="tech-sec stats-sec">
        <div class="container">
            <div class="tech-main">
                <?php while ($row_stats = mysqli_fetch_assoc($res_stats)) { ?>
                <div class="stats-box">
                    <div class="stats-icon">
                        <img src="img/stats-1.png" alt="staff-icon">
                    </div>
                    <h2><?php echo $row_stats['t_staff'] ?></h2>
                    <h6>Staff</h6>
                </div>
                <div class="stats-box">
                    <div class="stats-icon">
                        <img src="img/stats-2.png" alt="project-icon">
                    </div>
                    <h2><?php echo $row_stats['t_projects'] ?></h2>
                    <h6>projects completed</h6>
                </div>
                <div class="stats-box">
                    <div class="stats-icon">
                        <img src="img/stats-3.png" alt="client-icon">
                    </div>
                    <h2><?php echo $row_stats['r_clients'] ?></h2>
                    <h6>repeated clients</h6>
                </div>
                <div class="stats-box">
                    <div class="stats-icon">
                        <img src="img/stats-4.png" alt="feedback-icon">
                    </div>
                    <h2><?php echo $row_stats['t_feedbacks'] ?></h2>
                    <h6>feedback</h6>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ==================================
    |           FAQ SECTION            |
    ==================================== -->
    <section class="faq-sec" id="faq">
        <div class="container">
            <div class="faq-main">
                <p class="m-head">
                    <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                    <span>FAQ</span>
                    <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                </p>
                <h2>Some of the frequently asked questions by Clients</h2>
            </div>
            <?php
            // include 'admin/connection.php';
            $select_faq = "SELECT * FROM faq order by id ASC limit 8" or die("query failed");
            $res_faq = mysqli_query($conn, $select_faq) or die("res failed"); ?>
            <div class="acc-m-sec">
                <ul class="accordion-list">
                    <?php while ($row_faq = mysqli_fetch_assoc($res_faq)) { ?>
                    <li class="">
                        <div class="acc-head">
                            <h6><?php echo $row_faq['question'] ?></h6>
                            <div class="acc-icon">
                                <img src="img/acc-open-icon.png" alt="accordian-open-icon">
                            </div>
                        </div>
                        <div class="answer">
                            <p><?php echo $row_faq['answer'] ?></p>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==================================
    |           FOOTER SECTION            |
    ==================================== -->
    <?php include 'ftr.php' ?>

    <!-- ########################
    |              JS            |
    ########################## -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
 // ------accordian----
       $(document).ready(function () {
    $('.accordion-list > li > .answer').hide();
    $('.accordion-list > li').click(function (event) {
        // prevent accordion from closing if clicked element is a hyperlink
        if (event.target.tagName === 'A') {
            return;
        }

        if ($(this).hasClass("active")) {
            $(this).removeClass("active").find(".answer").slideUp();
        } else {
            $(".accordion-list > li.active .answer").slideUp();
            $(".accordion-list > li.active").removeClass("active");
            $(this).addClass("active").find(".answer").slideDown();
        }
        return false;
    });

    // add click event listener to hyperlinks
    $('.accordion-list a').click(function (event) {
        event.stopPropagation();
    });
});
    </script>
       <!--// restriction to download image--------->
    <script>
    const images = document.getElementsByTagName('img');
    for (let i = 0; i < images.length; i++) {
      images[i].addEventListener('contextmenu', function(event) {
        event.preventDefault();
      });
    }
    </script>
</body>

</html>