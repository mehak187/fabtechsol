<!DOCTYPE html>
<html lang="en">

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
    <title>FAQ - Fabulous Technology Solutions</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <meta name="description"
        content="Some of the frequently asked questions by Clients.">
    <?php 
    include 'admin/connection.php';
    ?>
  
        <!---------------og start------>
    <?php include 'og.php' ?>
    <!------------og end------------->
    <meta name="author" content="fab techsol">
    <!-- Meta Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
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
                        <li class="active"><a href="faq">FAQ</a></li>
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
                            <li class="nav-item"><a href="https://fabtechsol.com">Home</a></li>
                            <li class="nav-item"><a href="about">About</a></li>
                            <li class="nav-item dropdown-main">
                                <a href="services">Services</a>
                                 <ul class="dropdown-menu">
                                        <?php
                                            include 'admin/connection.php';
                                            $select_slink = "SELECT * FROM services_main ORDER BY id ASC";
                                            $res_slink = mysqli_query($conn,$select_slink); 
                                            while($row_slink = mysqli_fetch_assoc($res_slink)) { ?>
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
    <section class="hero-wrapper faq-hero">
        <div class="container">
            <div class="hero">
                <h1>FAQ</h1>
                <p>FABTECHSOL Is A Global Web Design And Development Company That Provides Intelligent, Cost-Effective
                    Web And IT Solutions. Thanks To Our Client-First Ideology, We've Gained Worldwide Recognition For
                    The Quality Of Our Products, Services, And Solutions.</p>
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
            include 'admin/connection.php';
            $select_faq = "SELECT * FROM faq order by id ASC" or die("query failed");
            $res_faq = mysqli_query($conn,$select_faq) or die("res failed"); ?>
            <div class="acc-m-sec">
                <ul class="accordion-list">
                <?php while($row_faq = mysqli_fetch_assoc($res_faq)) { ?>
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
                <!-- <ul class="accordion-list">
                    <li class="">
                        <div class="acc-head">
                            <h6>How can I be sure you work on my project as much as you declare?</h6>
                            <div class="acc-icon">
                                <img src="img/acc-open-icon.png" alt="accordian-open-icon">
                            </div>
                        </div>
                        <div class="answer">
                            <p>We thoroughly monitor our developers and control how much time they spend on each task
                                down to the exact minute.</p>
                        </div>
                    </li>
                    <li class="">
                        <div class="acc-head">
                            <h6>How can we schedule a meeting for project?</h6>
                            <div class="acc-icon">
                                <img src="img/acc-open-icon.png" alt="accordian-open-icon">
                            </div>
                        </div>
                        <div class="answer">
                            <p>We have created our own chat module for project requirements understanding, monitoring
                                and one to one comunication, you can simply use this link
                                https://fabtechsol-ca1dc.web.app/#/ to signup and chat with admin. Share your meeting
                                agenda on WhatsApp (+92 347 5879566) or on email: info@fabtechsol.com. One of our team
                                member will schedule it. Or you can simply fill contact us form</p>
                        </div>
                    </li>
                    <li class="">
                        <div class="acc-head">
                            <h6>If we need more information so where we can contact you?</h6>
                            <div class="acc-icon">
                                <img src="img/acc-open-icon.png" alt="accordian-open-icon">
                            </div>
                        </div>
                        <div class="answer">
                            <p>You can reach us on any platform following these details: Whatsapp: <?php echo $row_social['phone'] ?> Email:
                                info@fabtechsol.com</p>
                        </div>
                    </li>
                    <li class="">
                        <div class="acc-head">
                            <h6>What is your working hours</h6>
                            <div class="acc-icon">
                                <img src="img/acc-open-icon.png" alt="accordian-open-icon">
                            </div>
                        </div>
                        <div class="answer">
                            <p>We are available 24/7 as we have multiple teams and multiple office timings.</p>
                        </div>
                    </li>
                </ul> -->
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
    <!--// restriction to download image--------->
    <script>
    const images = document.getElementsByTagName('img');
    for (let i = 0; i < images.length; i++) {
      images[i].addEventListener('contextmenu', function(event) {
        event.preventDefault();
      });
    }
    </script>
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
</body>

</html>