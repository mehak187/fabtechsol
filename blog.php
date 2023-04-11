<!DOCTYPE html>
<html lang="en"
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
    <title>Blog - Fabulous Technology Solutions</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <?php
            include 'admin/connection.php';
            $sel12 = "SELECT * FROM blog_meta" or die("conn failed");
            $res_sql12 = mysqli_query($conn,$sel12);
            $row12 = mysqli_fetch_assoc($res_sql12); ?>
    <meta name="description"
        content="<?php echo $row12['meta_des'] ?>">

        <!---------------og start------>
    <?php include 'og.php' ?>
    <!------------og end------------->
    <meta name="author" content="fab techsol">
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
    <section class="blog-p">
        <!-- ==================================
        |            Primary nav               |
        ==================================== -->
            <?php
            $sel_social = "SELECT * FROM social" or die("conn failed");
            $res_social = mysqli_query($conn,$sel_social);
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
                                <li class="nav-item active"><a href="blog">Our Blogs</a></li>
                                <li class="icons">
                                    <img src="img/Line.png" alt="line-icon">
                                    <label for="search-d" class="search-d-btn"><img class="search"
                                            src="img/search-icon.png" alt="search-icon"></label>
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
        $sel1 = "SELECT * FROM blog_hero" or die("conn failed");
        $res_sql1 = mysqli_query($conn,$sel1) or die("query failed");
        $row1 = mysqli_fetch_assoc($res_sql1) or die("row failed");
        if(mysqli_num_rows($res_sql1)>0) { ?>
        <section class="hero-wrapper">
            <div class="container">
                <div class="hero">
                    <h1><?php echo $row1['blog_hero_title'] ?></h1>
                    <p><?php echo $row1['blog_hero_des'] ?></p>
                </div>
            </div>
        </section>
        <?php } ?>
        <!-- ==================================
    |           blog main SECTION            |
    ==================================== -->
    <?php
    include 'connection.php';
    $select_servicem = "SELECT * FROM blog_main ORDER BY id DESC";
    $res_servicem = mysqli_query($conn, $select_servicem);
    if (mysqli_num_rows($res_servicem) >= 1) { ?>
        <section class="events-sec blog-all">
            <div class="container">
                <div class="faq-main">
                    <p class="m-head">
                        <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                        <span>
                            Our Blog
                        </span>
                        <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                    </p>
                    <p class="h-para">
                        Latest Posts
                    </p>
                </div>
                <div class="events-main services-main">
                    <?php while ($row_servicem = mysqli_fetch_assoc($res_servicem)) { ?>
                        <!-- ----------event-box------- -->
                        <div class="service-box">
                            <div class="service-img">
                                <div class="service-img-m">
                                    <img src="<?php echo $row_servicem['img1'] ?>" alt="event-img">
                                </div>
                            </div>
                            <div class="service-con">
                                <span class="service-border"></span>
                                <h2>
                                    <?php echo $row_servicem['title'] ?>
                                </h2>
                               <div class="para-main">
                                    <?php echo $row_servicem['des1'] ?>
                               </div>
                                <a href="blogs/<?php echo $row_servicem['meta_con'] ?>.php">Read more</a>
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
        |            BLOG SECTION          |
        ==================================== -->
        <?php
            $select41 = "SELECT * FROM who_we_are";
            $res41 = mysqli_query($conn,$select41);
            $row41=mysqli_fetch_assoc($res41);

            $select42 = "SELECT * FROM our_approach";
            $res42 = mysqli_query($conn,$select42);
            $row42=mysqli_fetch_assoc($res42);

            $select43 = "SELECT * FROM our_mission";
            $res43 = mysqli_query($conn,$select43);
            $row43=mysqli_fetch_assoc($res43);

            $select44 = "SELECT * FROM our_vision";
            $res44 = mysqli_query($conn,$select44);
            $row44=mysqli_fetch_assoc($res44);
            ?>       
        <section class="blog-sec">
            <div class="container">
                <div class="blog-main">
                    <p class="m-head">
                        <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                        <span>Our Blog</span>
                        <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                    </p>
                    <h2><?php echo $row41['heading'] ?></h2>
                    <p><?php echo $row41['des'] ?></p>

                    <div class="blog-con-main">
                        <div class="blog-con">
                            <h2><?php echo $row42['heading'] ?></h2>
                            <p><?php echo $row42['des'] ?></p>
                        </div>
                        <div class="blog-con-right">
                            <div class="blog-con">
                                <h3><?php echo $row43['heading'] ?></h3>
                                <p><?php echo $row43['des'] ?></p>
                            </div>
                            <div class="blog-con">
                                <h3><?php echo $row44['heading'] ?></h3>
                                <p><?php echo $row44['des'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================
        |      BLOG core values SECTION       |
        ==================================== -->
        <?php 
         $select45 = "SELECT * FROM our_core_values";
         $res45 = mysqli_query($conn,$select45);
         $row45=mysqli_fetch_assoc($res45);
         ?>
        <section class="options">
            <div class="container">
                <div class="options-con">
                    <p class="m-head">
                        <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                        <span><?php echo $row45['heading'] ?></span>
                        <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                    </p>
                    <p class="h-para"><?php echo $row45['des'] ?></p>
                </div>
                <div class="options-main">
                <?php
                    $select51 = "SELECT * FROM core_value_box order by id DESC";
                    $res51 = mysqli_query($conn,$select51);
                    while($row51 = mysqli_fetch_assoc($res51)) { ?>
                    <div class="option-box">
                        <div class="option-body">
                            <h3><?php echo $row51['heading'] ?></h3>
                            <p><?php echo $row51['des'] ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- ==================================
        |      BLOG QUALITY POLICY SECTION       |
        ==================================== -->
        <?php
        $select51 = "SELECT * FROM quality_policy";
        $res51 = mysqli_query($conn,$select51);
        if(mysqli_num_rows($res51)>0) { ?>
        <section class="quality-policy">
            <div class="container">
                <p class="h-para">
                    Our Quality Policy
                </p>
                <div class="quality-policy-main">
                <?php
                    while($row51 = mysqli_fetch_assoc($res51)) { ?>
                    <div class="quality-box">
                        <div class="icon">
                            <img src="img/stats-1.png" alt="stats-1">
                        </div>
                        <p><?php echo $row51['des'] ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php } ?>
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
                $select_faq = "SELECT * FROM faq order by id ASC limit 8" or die("query failed");
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
                </div>
            </div>
        </section>
        <!-- ==================================
        |           FOOTER SECTION            |
        ==================================== -->
        <?php include 'ftr.php' ?>
    </section>
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