<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PZW5WDG');</script>
<!-- End Google Tag Manager -->
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FABTECHSOL : Software Development Company</title>
    <meta name="title" content="Software Development Company">
    <?php
    include 'admin/connection.php';
    $sel12 = "SELECT * FROM home_meta" or die("conn failed");
    $res_sql12 = mysqli_query($conn, $sel12);
    $row12 = mysqli_fetch_assoc($res_sql12);
   
    ?>
    <meta name="description" content="<?php echo $row12['meta_des'] ?>">
    <meta name="author" content="Fabulous Technology Solutions">
    <link rel="icon" type="image/x-icon" href="img/logo.png">

    <!---------------og start------>
    <?php include 'og.php' ?>
    <!------------og end------------->
    <meta name="author" content="fabtechsol">
    <!-- -----------------CSS Link--------------- -->
    <?php include 'css/style.php'; ?>
    <!-- -------slider-link-------- -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!-- Meta Pixel Code -->
    <script>, e, v, f          n = f.fbq = functi on() {
     .callMe         ents)
        };
        if (!f._fbq) f._fbq = n; n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0; t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '658112671961788');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img class="pixel" src="https://www.facebook.com/tr?id=658112671961788&ev=PageView&noscript=1"
            alt="meta-img" /></noscript>
    <!-- End Meta Pixel Code -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/088d3f36f9.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <!-- -------------------------------
            Chatbot 
    ------------------------------- -->
    <section class="chatbot-content">
        <div class="chatbot-icon">
           <img src="img/chat-box-logo.png" alt="chatbot">
        </div>
        <div class="bot-main">
            <div class="wrapper">
                <div class="title"><span><img src="img/chatbot-logo.png" alt="fabtech-light"></span><i class="fas fa-times chatbot-close"></i></div>
                <div class="form">
                  <iframe src="https://links.collect.chat/6412f943bddfe03b3a3cfdf8"  width="100%" height="600" frameBorder="0"></iframe><script async type="text/javascript" src="https://collectcdn.com/embed.js"></script>
                </div>
               
            </div>

            <script>
                 $(document).ready(function(){
    $("#data").on("keydown", function(event){
        if (event.keyCode === 13) {
            event.preventDefault();
            sendMessage();
        }
    });

    $("#send-btn").on("click", function(){
        sendMessage();
    });

    function sendMessage() {
        $value = $("#data").val();
        $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div><div class="icon"> <i class="fas fa-user"></i></div></div>';
        $(".form").append($msg);
        $("#data").val('');

        // start ajax code
        $.ajax({
            url: 'message.php',
            type: 'POST',
            data: 'text='+$value,
            success: function(result){
                $replay = '<div class="bot-inbox inbox"><div class="icon"> <div class="bot-fab-logo"><img src="img/logo.png" alt="fab-logo"></div></div><div class="msg-header"><p>' + result + '</p></div></div>';
                $(".form").append($replay);
                // when chat goes down the scroll bar automatically comes to the bottom
                $(".form").scrollTop($(".form")[0].scrollHeight);
            }
        });
    }
});


            </script>
        </div>
    </section>
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
                        <li><a href="faq">FAQ</a></li>
                        <li><a href="https://fabtechsol.com/about">About</a></li>
                    </ul>
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
                            <li class="nav-item active"><a href="https://fabtechsol.com">Home</a></li>
                            <li class="nav-item"><a href="about">About</a></li>
                            <li class="nav-item dropdown-main">
                                <a href="services">Services</a>
                                <ul class="dropdown-menu">
                                    <?php
                                    include 'admin/connection.php';
                                    $select_slink = "SELECT * FROM services_main ORDER BY id ASC";
                                    $res_slink = mysqli_query($conn, $select_slink);
                                    while ($row_slink = mysqli_fetch_assoc($res_slink)) { ?>
                                        <li><a href="<?php echo $row_slink['service_link'] ?>">
                                                <?php echo $row_slink['service_title'] ?>
                                            </a></li>
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
                    <a href="https://api.whatsapp.com/send?phone=923475879566" target="_blank" class="call">
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
                </div>
                <!-- -------------------------------
                |           mbl content             |
                ------------------------------------>
                <div class="res-con">
                    <!-- ---------hamburger------------- -->
                    <div class="togg">
                        <img src="img/togg.png" alt="hamburger">
                    </div>
                    <div class="chat-btn mbl-chat"><a href="https://fabtechsolution-9c507.web.app/#">Chat With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ==================================
    |             HERO SECTION             |
    ==================================== -->
    <?php
    include 'admin/connection.php';
    $sel1 = "SELECT * FROM home_hero" or die("conn failed");
    $res_sql1 = mysqli_query($conn, $sel1) or die("conn failed");
    $row1 = mysqli_fetch_assoc($res_sql1) or die("conn failed");
    if (mysqli_num_rows($res_sql1) > 0) { ?>
        <section class="hero-wrapper">
            <div class="container">
                <div class="hero home-hero">
                    <h1>
                        <?php echo $row1['home_hero_title'] ?>
                    </h1>
                    <p>
                        <?php echo $row1['home_hero_des'] ?>
                    </p>
                    <p><br>
                        <?php echo $row1['home_hero_des2'] ?></br>
                    </p>
                    <div class="home-btns-main">
                        <div class="chat blue-btn chatbot-open">
                            <a href="#">
                                <div class="icon">
                                    <i class="fas fa-robot"></i>
                                </div>
                                <span>Start Chat</span>
                            </a>
                        </div>
                        <div class="chat blue-btn">
                            <a href="https://api.whatsapp.com/send?phone=923475879566" target="_blank">
                                <div class="icon"><i class="fas fa-comments"></i></div>
                                <span>Live Chat</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- ==================================
    |             web options              |
    ==================================== -->
    <section class="options">
        <div class="container">
            <div class="options-main">
                <?php
                $select_workflow = "SELECT * FROM work_flow";
                $res_workflow = mysqli_query($conn, $select_workflow);
                $sr = 1;
                while ($row_workflow = mysqli_fetch_assoc($res_workflow)) { ?>
                    <div class="option-box">
                        <div class="option-head">
                            <div class="icon">
                                <img src="img/send-dark.png" alt="send-icon">
                            </div>
                            <p class="nmbr">0<?php echo $sr ?></p>
                        </div>
                        <div class="option-body">
                            <h4>
                                <?php echo $row_workflow['heading'] ?>
                            </h4>
                            <p>
                                <?php echo $row_workflow['des'] ?>
                            </p>
                        </div>
                    </div>
                    <?php $sr++;
                } ?>
            </div>
        </div>
    </section>
    <!-- ==================================
    |            ABOUT COMPANY              |
    ==================================== -->
    <section class="about-com">
        <div class="container">
            <?php
            $sel22 = "SELECT * FROM about_company_home" or die("conn failed");
            $res_sql22 = mysqli_query($conn, $sel22) or die("query failed");
            $row22 = mysqli_fetch_assoc($res_sql22) or die("row failed"); ?>
            <div class="about-com-main">
                <!-- ---------ABOUT-img--------- -->
                <div class="about-img about-img-up">
                    <div class="img-main">
                        <img src="<?php echo $row22['img'] ?>" alt="FABTECHSOL software development services">
                    </div>
                    <div class="experience-box">
                        <div class="experience">
                            <h2>
                                <?php echo $row22['t_experience'] ?>
                            </h2>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                </div>
                <!-- ---------ABOUT-content--------- -->
                <div class="about-content">
                    <p class="m-head">
                        <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                        <span>
                            <?php echo $row22['heading'] ?>
                        </span>
                        <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                    </p>
                    <h2 class="h-para">
                        <?php echo $row22['sub_heading'] ?>
                    </h2>
                    <p>
                        <?php echo $row22['des'] ?>
                    </p>
                    <ul>
                        <?php
                        $select_23 = "SELECT * FROM perk";
                        $res_23 = mysqli_query($conn, $select_23);
                        while ($row_23 = mysqli_fetch_assoc($res_23)) { ?>
                            <li><img src="img/list-tick-icon.png" alt="list-icon">
                                <?php echo $row_23['perk_name'] ?>
                            </li>
                        <?php } ?>
                    </ul>


                    <div class="about-ftr">
                        <div class="blue-btn">
                            <a href="<?php echo $row22['btn_link'] ?>">
                                <?php echo $row22['btn_name'] ?>
                            </a>
                        </div>
                        <div class="call-btn">
                            <a href="https://api.whatsapp.com/send?phone=923475879566" target="_blank" class="call">
                                <div class="icon">
                                    <img src="img/phone-icon.png" alt="phone-icon">
                                </div>
                                <div>
                                    <span>
                                        <?php echo $row_social['phone'] ?>
                                    </span>
                                    <span>Call to Expert</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================
    |            SERVICES SECTION          |
    ==================================== -->

    <section class="services-wrapper">
        <div class="container">
            <?php
            include 'admin/connection.php';
            $sel21 = "SELECT * FROM service_sec" or die("conn failed");
            $res_sql21 = mysqli_query($conn, $sel21) or die("query failed");
            $row21 = mysqli_fetch_assoc($res_sql21) or die("row failed");
            if (mysqli_num_rows($res_sql21) > 0) { ?>
                <div class="services-content-m">
                    <p class="m-head">
                        <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                        <span>
                            <?php echo $row21['heading'] ?>
                        </span>
                        <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                    </p>
                    <div class="services-content">
                        <div class="service-head">

                            <h2 class="h-para">
                                <?php echo $row21['sub_heading'] ?>
                            </h2>
                        </div>

                        <div class="service-para">
                            <p>
                                <?php echo $row21['des'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="container services-main-container">
            <div class="services-main">
                <?php
                $select_servicem = "SELECT * FROM services_main ORDER BY id ASC";
                $res_servicem = mysqli_query($conn, $select_servicem);
                while ($row_servicem = mysqli_fetch_assoc($res_servicem)) { ?>
                    <!-- ---------service-box-------- -->
                    <div class="service-box">
                        <a href="<?php echo $row_servicem['service_link'] ?>">
                            <div class="service-img">
                                <div class="service-img-m">
                                    <img src="<?php echo $row_servicem['service_image'] ?>"
                                        alt="<?php echo $row_servicem['service_title'] . " service" ?>">
                                </div>
                                <div class="service-icon">
                                    <img src="<?php echo $row_servicem['service_icon'] ?>"
                                        alt="<?php echo $row_servicem['service_title'] . " icon" ?>">
                                </div>
                            </div>
                            <div class="service-con">
                                <span class="service-border"></span>
                                <h2>
                                    <?php echo $row_servicem['service_title'] ?>
                                </h2>
                                <p>
                                    <?php echo $row_servicem['service_des'] ?>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ==================================
    |            WHY FAB SECTION          |
    ==================================== -->
    <section class="why-fab-wrapper">
        <div class="why-fab-overlay">
            <div class="container">
                <?php
                $sel24 = "SELECT * FROM why_fab" or die("conn failed");
                $res_sql24 = mysqli_query($conn, $sel24) or die("query failed");
                $row24 = mysqli_fetch_assoc($res_sql24) or die("row failed"); ?>
                <div class="why-fab">
                    <div class="why-fab-con">
                        <p class="m-head">
                            <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                            <span>
                                <?php echo $row24['heading'] ?>
                            </span>
                            <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                        </p>
                        <h2 class="h-para">
                            <?php echo $row24['sub_heading'] ?>
                        </h2>
                        <p>
                            <?php echo $row24['des'] ?>
                        </p>
                        <?php $select_25 = "SELECT * FROM why_fab_points";
                        $res_25 = mysqli_query($conn, $select_25);
                        if (mysqli_num_rows($res_25) > 0) { ?>
                            <div class="why-fab-services">
                                <?php
                                while ($row_25 = mysqli_fetch_assoc($res_25)) { ?>
                                    <div class="why-fab-box">
                                        <div class="icon">
                                            <img src="<?php echo $row_25['icon'] ?>" alt="team-icon-<?php echo $sr ?>">
                                        </div>
                                        <h4>
                                            <?php echo $row_25['point_name'] ?>
                                        </h4>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="why-fab-img">
                <img src="img/Website-Work-Picture-Change.png" alt="software consulting">
            </div>
    </section>
    <!-- ==================================
    |             Contact Us               |
    ==================================== -->
    <section class="contact-wrapper">
        <div class="container">
            <div class="contact">
                <div class="contact-img">
                    <img src="img/contact-form-bussiness.png" alt="web app development">
                </div>
                <div class="contact-con">
                    <p class="m-head">
                        <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                        <span>Contact Us</span>
                        <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                    </p>

                    <h2 class="h-para">Get a quote to get started!</h2>
                    <div class="contact-p">
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="form-field">
                                <div class="input-field">
                                    <input type="text" placeholder="Your Name" name="name" required>
                                </div>
                                <div class="input-field">
                                    <input type="email" placeholder="Your Email" name="email" required>
                                </div>
                            </div>
                            <div class="form-field">
                                <div class="input-field">
                                    <input type="text" placeholder="Phone number" name="number" required>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="form-field">
                                <div class="msg-field">
                                    <textarea name="msg" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                            <div class="form-field full-field attach-doc">
                                <div class="">
                                    <input type="file" placeholder="Attach document" id="attach-doc" name="attach-doc">
                                    <label for="attach-doc">
                                        <span>Attach document</span>
                                        <img src="img/upload.png" alt="upload">
                                    </label>
                                </div>
                            </div>
                            <div class="submit-btn">
                                <button type="submit" name="submit">
                                    <span>Send Message</span>
                                    <span><img src="img/send-white.png" alt="send-msg"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================
    |        TECHNOLOGY SECTION            |
    ==================================== -->
    <?php
    $sel11 = "SELECT * FROM tech_tbl order by id ASC" or die("conn failed");
    $res_sql11 = mysqli_query($conn, $sel11) or die("query failed");
    if (mysqli_num_rows($res_sql11) > 0) { ?>
        <section class="tech-sec">
            <div class="container">
                <div class="tech-main techslider">
                    <?php while ($row11 = mysqli_fetch_assoc($res_sql11)) { ?>
                        <div class="tech-box">
                            <div class="tech-icom">
                                <img src="<?php echo $row11['tech_img'] ?>" alt="<?php echo $row11['tech_name'] ?>">
                            </div>
                            <h4>
                                <?php echo $row11['tech_name'] ?>
                            </h4>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
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
                        <img src="<?php echo $row['ceo_img'] ?>" alt="leading software development company CEO">
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
    |             TEAM SECTION            |
    ==================================== -->
    <!-- <section class="team-sec">
        <div class="container">
            <div class="team-main">
                <div class="team-con">
                    <p class="m-head">
                        <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                        <span>Our Experts</span>
                        <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                    </p>

                    <h3>Meet our experienced team</h3>
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
    |       TESTIMONIAL SECTION            |
    ==================================== -->
    <?php
    $sel26 = "SELECT * FROM testimonial" or die("conn failed");
    $res_sql26 = mysqli_query($conn, $sel26) or die("query failed");
    $row26 = mysqli_fetch_assoc($res_sql26) or die("row failed");
    if (mysqli_num_rows($res_sql26) > 0) { ?>
        <section class="services-wrapper testimonial-wrapper">
            <div class="container">
                <div class="services-content-m">
                    <p class="m-head">
                        <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                        <span>
                            <?php echo $row26['heading'] ?>
                        </span>
                        <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                    </p>
                    <div class="services-content">
                        <div class="service-head">
                            <h2 class"h-para">
                                <?php echo $row26['sub_heading'] ?>
                            </h2>
                        </div>
                        <div class="service-para">
                            <p>
                                <?php echo $row26['des'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-main testslider">
                    <?php
                    $select_client = "SELECT * FROM client_tbl ORDER BY id DESC";
                    $res_client = mysqli_query($conn, $select_client);
                    while ($row_client = mysqli_fetch_assoc($res_client)) { ?>
                        <div class="t-slider-box">
                            <div class="testimonial-box">
                                <div class="t-box-top">
                                    <div class="t-img">
                                        <img src="<?php echo $row_client['client_img'] ?>"
                                            alt="<?php echo $row_client['client_img_alt'] ?>">
                                    </div>
                                    <div class="t-con">
                                        <div class="star-icons">
                                            <img src="img/star-icon.png" alt="star-icon">
                                            <img src="img/star-icon.png" alt="star-icon">
                                            <img src="img/star-icon.png" alt="star-icon">
                                            <img src="img/star-icon.png" alt="star-icon">
                                            <img src="img/star-icon.png" alt="star-icon">
                                        </div>
                                        <h5>
                                            <?php echo $row_client['client_name'] ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="testimonial-des">
                                    <p>
                                        <?php echo $row_client['client_para'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- ==================================
    |           Events SECTION            |
    ==================================== -->
    <?php
    include 'connection.php';
    $select_servicem = "SELECT * FROM events ORDER BY id DESC limit 4";
    $res_servicem = mysqli_query($conn, $select_servicem);
    if (mysqli_num_rows($res_servicem) >= 1) { ?>
        <section class="events-sec">
            <div class="container">
                <?php
                $sel = "SELECT * FROM events_heading" or die("conn failed");
                $res_sql = mysqli_query($conn, $sel);
                $row = mysqli_fetch_assoc($res_sql);
                ?>
                <div class="faq-main">
                    <p class="m-head">
                        <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                        <span>
                            <?php echo $row['heading'] ?>
                        </span>
                        <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                    </p>
                    <p class="h-para">
                        <?php echo $row['sub_heading'] ?>
                    </p>
                </div>
                <div class="events-main services-main">
                    <?php while ($row_servicem = mysqli_fetch_assoc($res_servicem)) { ?>
                        <!-- ----------event-box------- -->
                        <div class="service-box">
                            <div class="service-img">
                                <div class="service-img-m">
                                    <img src="<?php echo $row_servicem['main_img'] ?>" alt="event-img">
                                </div>
                            </div>
                            <div class="service-con">
                                <span class="service-border"></span>
                                <h3 class="ser-title">
                                    <?php echo $row_servicem['title'] ?>
                                </h3>
                                <p>
                                    <?php echo $row_servicem['des'] ?>
                                </p>
                                <a href="event-details.php?id=<?php echo $row_servicem['id']; ?>">Read more</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="blue-btn">
                    <a href="events">See More</a>
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
                                <h6>
                                    <?php echo $row_30['heading'] ?>
                                </h6>
                                <h5>
                                    <?php echo $row_30['des'] ?>
                                </h5>
                            </div>
                        </div>
                        <div class="banner-btn blue-btn">
                            <a href="<?php echo $row_30['btn_link'] ?>">
                                <?php echo $row_30['btn_name'] ?>
                            </a>
                        </div>
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
                                <h6>
                                    <?php echo $row_faq['question'] ?>
                                </h6>
                                <div class="acc-icon">
                                    <img src="img/acc-open-icon.png" alt="accordian-open-icon">
                                </div>
                            </div>
                            <div class="answer">
                                <p>
                                    <?php echo $row_faq['answer'] ?>
                                </p>
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
    <!-- ==================================
    |           Popup  SECTION         |
    ==================================== -->

    <!-- ########################
    |              JS            |
    ########################## -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--<script src="js/main.js"></script>-->
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-------------push notification------------>
    <script src="js/push.min.js"></script>
    <script src="js/serviceWorker.min.js"></script>
    <script>
        Push.create("Hello!", {
            body: "Thanks for visiting'?",
            icon: '',
            timeout: 4000,
            onClick: function () {
                window.focus();
                this.close();
            }
        });
    </script>

    <!-- <script>
        $(document).ready(function(){
    $("#news-btn").click(function(){
        $(".popup.newsletter.alert-popup").css("display", "flex");
    });
});

    </script> -->
    <!-- // -----slider------ -->
    <script src="js/slick.min.js"></script>
    <script>
        // ---slider----testimonial---
        $(".testslider").slick({
            dots: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1500,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow: ".priv_arrow",
            nextArrow: ".next_arrow",
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            ],
        });
        // ---slider----tech---
        $(".techslider").slick({
            dots: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1500,
            speed: 300,
            slidesToShow: 8,
            slidesToScroll: 7,
            prevArrow: ".priv_arrow",
            nextArrow: ".next_arrow",
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 7,
                    slidesToScroll: 6,
                    infinite: true,
                    dots: true,
                },
            },
            {
                breakpoint: 860,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 4,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    dots: false,
                },
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3,
                    dots: false,
                },
            },
            ],
        });
    </script>
    <script>
        // ----------responsive sidebar--------
        $(document).ready(function () {
            $(".togg").click(function () {
                $(".mbl-nav").css("display", "block");
            });
        });

        $(document).ready(function () {
            $(".close").click(function () {
                $(".mbl-nav").css("display", "none");
            });
        });

        // ------search-box-on click----
        $(document).ready(function () {
            $(".search-d-btn").click(function () {
                $(".search-box-d").toggle();
            });
        });

        // ------alert and newsletter popup----
        $(document).ready(function () {
            $(".close-btn-p").click(function () {
                $(".dev-popup").hide();
            });
        });
   
        // ------accordian----
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
//   -----------chatbot---------
        $(document).ready(function () {
            $(".chatbot-icon").click(function () {
                $(".bot-main").css("display", "flex");
                $(".chatbot-icon").css("display", "none");
            });
            $(".chatbot-close").click(function () {
                $(".bot-main").css("display", "none");
                $(".chatbot-icon").css("display", "block");
            });
           $(".chatbot-open").click(function () {
                $(".bot-main").css("display", "flex");
                $(".chatbot-icon").css("display", "none");
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
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);

    $file = $_FILES['attach-doc'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_ext = explode(".", $file_name);
    $file_lower = strtolower(end($file_ext));
    $file_main = array('jpg', 'png', 'jpeg', 'pdf', 'doc', 'docx');
    if(!empty($file['name'])) {
        if (in_array($file_lower, $file_main)) {
            $dest_file = 'upload/' . $file_name;
            move_uploaded_file($file_tmp, $dest_file);
            $insert_sql = "INSERT INTO contact_form(name,email,phone,subject,msg,file) Values('$name','$email','$number','$subject','$msg','$dest_file')";
            $res = mysqli_query($conn, $insert_sql);
            ?>
            <script>
                swal("", "Thanks for contacting us. You can use our chat system or whatsapp too for getting fast response. Else we will be getting back to you with in 4 hours through email. Thank you",
                    "success");
            </script>
            <?php
        } else {
            ?>
            <script>
                swal("", "Invalid File Format", "error");
            </script>
            <?php
        }
    }
    else{
        $insert_sql = "INSERT INTO contact_form(name,email,phone,subject,msg) Values('$name','$email','$number','$subject','$msg')";
        $res = mysqli_query($conn, $insert_sql);
        ?>
        <script>
            swal("", "Thanks for contacting us. You can use our chat system or whatsapp too for getting fast response. Else we will be getting back to you with in 4 hours through email. Thank you",
                "success");
        </script>
        <?php
    }
   
}
?>

</html>