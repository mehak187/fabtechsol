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
    <title>Website development service - Fabtechsol</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <?php
            include 'admin/connection.php';
            $sel12 = "SELECT * FROM web_meta" or die("conn failed");
            $res_sql12 = mysqli_query($conn,$sel12);
            $row12 = mysqli_fetch_assoc($res_sql12); ?>
    <meta name="description" content="<?php echo $row12['meta_des'] ?>">
    
    <!---------------og start------>
    <?php include 'og.php' ?>
    <!------------og end------------->
    <meta name="author" content="fab techsol">
    <!-- ------------------CSS Link--------------- -->
    <?php include 'css/style.php'; ?>
    <!-- -------slider-link-------- -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
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
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/088d3f36f9.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <section class="services-p software-service web-service">
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
                                <li class="nav-item active dropdown-main">
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
        $sel1 = "SELECT * FROM web_hero" or die("conn failed");
        $res_sql1 = mysqli_query($conn,$sel1) or die("query failed");
        $row1 = mysqli_fetch_assoc($res_sql1) or die("row failed");
        if(mysqli_num_rows($res_sql1)>0) { ?>
        <section class="hero-wrapper">
            <div class="container">
                <div class="hero">
                    <div class="hero-con">
                        <div class="hero-icon">
                            <img src="img/software-dev-service.png" alt="hero-icon">
                        </div>
                        <div>
                            <h6>Our Services</h6>
                            <h1><?php echo $row1['web_hero_title'] ?></h1>
                        </div>
                    </div>
                    <p><?php echo $row1['web_hero_des'] ?></p>
                </div>
            </div>
        </section>
        <?php } ?>
        <?php
        $sel64 = "SELECT * FROM about_web" or die("conn failed");
        $res_sql64 = mysqli_query($conn,$sel64) or die("query failed");
        $row64 = mysqli_fetch_assoc($res_sql64);
        if(mysqli_num_rows($res_sql64)>0) { ?>
        <!-- ==================================
        |            ABOUT COMPANY              |
        ==================================== -->
        <section class="about-com about-p-com">
            <div class="container">
                <div class="about-com-main">
                    <!-- ---------ABOUT-img--------- -->
                    <div class="about-img">
                        <div class="about-p-img">
                            <img src="<?php echo $row64['img_1'] ?>" alt="<?php echo $row64['heading'].'-1' ?>">
                        </div>
                        <div class="about-p-img2">
                        <img src="<?php echo $row64['img_2'] ?>" alt="<?php echo $row64['heading'].'-1' ?>">
                        </div>
                    </div>
                    <!-- ---------ABOUT-content--------- -->
                    <div class="about-content">
                        <p class="m-head">
                            <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                            <span><?php echo $row64['heading'] ?></span>
                            <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                        </p>
                        <h2><?php echo $row64['sub_heading'] ?></h2>
                        <p><?php echo $row64['des'] ?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
        <!-- ==================================
        |             SOFTWARE options              |
        ==================================== -->
        
        <section class="options">
            <div class="container">
                <div class="options-main">
                <?php 
                $select71 = "SELECT * FROM web_process ORDER BY id ASC";
                $res71 = mysqli_query($conn,$select71); 
                while($row71 = mysqli_fetch_assoc($res71)) { ?>

                    <div class="option-box">
                        <div class="option-body">
                            <div class="icon">
                                <img src="<?php echo $row71['icon'] ?>" alt="service-icon-2">
                            </div>
                            <h4><?php echo $row71['heading'] ?></h4>
                        </div>
                        <p><?php echo $row71['des'] ?> 
                            <!-- <a href="#"> more</a> -->
                        </p>
                        <!--<div class="process-list">-->
                                <?php
                            //         $list_item = '<img src="img/list-tick-icon.png" alt="list-icon">'.' '.$row71['list_item'];
                            //         // store complete list e.g list1,list2,list3
                            //         $string = $list_item;
                            //         // letter from which separation starts e.g ,
                            //         $substr = ',';
                            //         // extra thing to be added after separating e.g br and img is added after comma------
                            //         $attachment = '<br><img src="img/list-tick-icon.png" alt="list-icon"> ';
                            //         $position = strpos($string, ',');
                            // // word from which string start to break,attachment,original string
                            //         $newstring = str_replace($substr, $attachment, $string);
                            //                                      // ,        ,img, list-item
                            //         // result is img.list1 then line break img.list2
                            //         echo  $newstring;
                                
                                ?>
                            <!--</div>-->
                    </div>
                <?php } ?>
                </div>
            </div>
        </section>
        <!-- ==================================
        |        PROCEDURE SECTION            |
        ==================================== -->
        <section class="procedure-sec web-pro">
            <div class="container">
                <div class="proced-main">
                    <div class="proced-con">
                        <p class="m-head">
                            <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                            <span>Services</span>
                            <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                        </p>
                        <h3>How we do Website Development ?</h3>
                    </div>
                    <div class="graph">
                        <div class="graph-img">
                            <img src="img/web-graph-2.png" alt="graph-img">
                        </div>
                        <div class="phase web-phase-1">
                            <h5 class="mbl-phase">Phase 1</h5>
                            <div class="phase-content">
                                <ul>
                                    <li>Meeting with the Client</li>
                                    <li>Complete Documentation</li>
                                </ul>
                                <div class="phase-overlay-img">
                                    <img src="img/phase-overlay-img.png" alt="overlay">
                                </div>
                            </div>
                        </div>

                        <div class="phase web-phase-2">
                            <h5 class="mbl-phase">Phase 2</h5>
                            <div class="phase-content">
                                <ul>
                                    <li>Complete UIUX Design</li>
                                    <li>Complete Wireframing</li>
                                    <li>Complete Understanding & Presentation of Functionality</li>
                                </ul>
                                <div class="phase-overlay-img">
                                    <img src="img/phase-overlay-img.png" alt="overlay">
                                </div>
                            </div>
                        </div>

                        <div class="phase web-phase-3">
                            <h5 class="mbl-phase">Phase 3</h5>
                            <div class="phase-content">
                                <ul>
                                    <li>Complete front end deign
                                        using <span>HTML, </span><span>CSS</span> & <span>BOOTSTAP</span></li>
                                    <li>Demonstration of Front-End
                                        Design</li>
                                </ul>
                                <div class="phase-overlay-img">
                                    <img src="img/phase-overlay-img.png" alt="overlay">
                                </div>
                            </div>
                        </div>

                        <div class="phase web-phase-4">
                            <h5 class="mbl-phase">Phase 4</h5>
                            <div class="phase-content">
                                <ul>
                                    <li>Backend Functionality Implementation </li>
                                    <li>Final Meeting with Client to End the Project.</li>
                                </ul>
                                <div class="phase-overlay-img">
                                    <img src="img/phase-overlay-img.png" alt="overlay">
                                </div>
                            </div>
                        </div>
                        <h5 class="phase-text phase-1-text">Phase 1</h5>
                        <h5 class="phase-text phase-2-text">Phase 2</h5>
                        <h5 class="phase-text phase-3-text">Phase 3</h5>
                        <h5 class="phase-text phase-4-text">Phase 4</h5>
                        <h5 class="end">End</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================
        |        TECHNOLOGY SECTION            |
        ==================================== -->
              <?php
              include 'admin/connection.php';
        $sel11 = "SELECT * FROM tech_tbl order by id ASC" or die("conn failed");
        $res_sql11 = mysqli_query($conn,$sel11) or die("query failed");
        if(mysqli_num_rows($res_sql11)>0) { ?>
    <section class="tech-sec">
        <div class="container">
            <div class="tech-main techslider">
                <?php while($row11 = mysqli_fetch_assoc($res_sql11)){ ?>
                <div class="tech-box">
                    <div class="tech-icom">
                        <img src="<?php echo $row11['tech_img'] ?>" alt="<?php echo $row11['tech_name'] ?>">
                    </div>
                   <h4><?php echo $row11['tech_name'] ?></h4>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php } ?>
        <!-- ==================================
        |             TEAM SECTION            |
        ==================================== -->
        <section class="team-sec">
            <div class="container">
                <div class="team-main">
                    <div class="expert-contact">
                        <img src="img/expert-services.png" alt="contact-expert">
                        <a href="tel:<?php echo $row_social['phone'] ?>" class="contact-detail">
                            <h6><?php echo $row_social['phone'] ?></h6>
                        </a>
                    </div>
                    <div class="expert-des">
                        <h5>Talk with our expert and get you project done.</h5>
                        <p>Still planning to get started with us? Don't wait, get in touch with us. Our IT experts are available 24/7 to respond to your questions, to hop on zoom call if needed, to discuss your project requirements. Why to wait? Just click get started button bellow or use the number provided aside!.</p>
                        <div class="blue-btn">
                            <a href="https://fabtechsol.com/contact-us">Get Started</a>
                        </div>
                    </div>
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
    <!-- // -----slider------ -->
    <script src="js/slick.min.js"></script>
    <script>
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