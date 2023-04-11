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
    <title>Courses-Books - Fabulous Technology Solutions</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <?php
    include 'admin/connection.php';
    $sel12 = "SELECT * FROM events_meta" or die("conn failed");
    $res_sql12 = mysqli_query($conn, $sel12);
    $row12 = mysqli_fetch_assoc($res_sql12); ?>
    <meta name="description" content="<?php echo $row12['meta_des'] ?>">
   
    <!---------------og start------>
    <?php include 'og.php' ?>
    <!------------og end------------->
    <meta name="author" content="fab techsol">
    <!-- ------------------CSS Link--------------- -->
    <?php include 'css/style.php'; ?>
    <!-- -------font-awesome-link----- -->
    <script src="https://kit.fontawesome.com/088d3f36f9.js" crossorigin="anonymous"></script>
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
    <section class="project-p">
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
                            <li><a href="about">About</a></li>
                        </ul>
                        <ul class="p-social">
                            <li><a href="<?php echo $row_social['twitter'] ?>" target="_blank"><img
                                        src="img/twitter.png" alt="twitter-icon"></a></li>
                            <li><a href="<?php echo $row_social['fb'] ?>" target="_blank"><img src="img/fb.png"
                                        alt="facebook-icon"></a></li>
                            <li><a href="<?php echo $row_social['lnk'] ?>" target="_blank"><img src="img/linkedin.png"
                                        alt="linkedin-icon"></a></li>
                            <li><a href="<?php echo $row_social['insta'] ?>" target="_blank"><img
                                        src="img/instagram.png" alt="instagram-icon"></a></li>
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
                                        $res_slink = mysqli_query($conn, $select_slink);
                                        while ($row_slink = mysqli_fetch_assoc($res_slink)) { ?>
                                        <li><a
                                                href="<?php echo $row_slink['service_link'] ?>"><?php echo $row_slink['service_title'] ?></a>
                                        </li>
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
    |          Books SECTION            |
    ==================================== -->
    <section class="books-sec" style="background:var(--blue-dark2)">
    <div class="container">
        <div class="faq-main">
            <p class="m-head">
                <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                <span>
                    Recommended Books
                </span>
                <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
            </p>
            <p class="h-para">
                Unlock Your Potential with Our Reading List
            </p>
        </div>
        <div class="search-books">
            <input type="text" name="search" value="" autocomplete="off" id="myinput" placeholder="Search...." onkeyup="searchFunction()" >
            <label for="myinput">
                <button id="search-button"><i class="fas fa-search"></i></button>
            </label>
            <select id="search-select" onchange="searchFunctiont()">
            <option value="" selected disabled hidden>Search by category</option>
            <option value="Programming">Programming</option>
            <option value="Database">Database</option>
            <option value="Design">Design</option>
            <option value="Microsoft">Microsoft</option>
            <option value="Hosting platform">Hosting platform</option>
            <option value="SEO">SEO</option>
        </select>
        </div>      
        <div class="events-main services-main" id="services-main">
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">JavaScript</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>2.8K</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>702</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1U5XTG59f3lQH-lMGAFgUdOY1Z3XgzD2H/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Python</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>2.2K</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>856</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1R1yP-Z3m6tcofJM8n9DTIp7D9cI11Bn_/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Java</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>1.6K</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>982</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1QZ3UD1DDFY9yMW_m3fXmoLLQOhLmhOLr/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Adobe Photoshop</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Brain Wood</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>1.4K</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>300</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Design</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1JSG_GaVigSxpCXYvb-BLsPRgO22m6t32/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">React JS</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>1.2K</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>110</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1al6FTeHNqKf8VpdpmcyKYVuCvAbxZwxM/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Adobe Illustrator</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Brain Wood</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>1.2K</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>10</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Design</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/16n_Z8mt4YsCIABQhTTwsBO3h8ZWbx9QB/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">PHP</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>761</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>481</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1OAgzkUWmDvX0pqrgE7Fg0kBaFGVaEEQC/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">C++</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>753</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>708</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1xl__GFLYuDcyZdjRkOo5V_6yfwzVx7LA/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Algorithms</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>655</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>257</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1Ehxl9Ee8_9CTbydj1yAk8Hxn7_HOLgxf/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Microsoft Word</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Joan Lambert</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>642</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>10</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Microsoft</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1U3u_C_w8hHa8CEesGXv4ZZxklHFWnwKt/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Git</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>623</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>195</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Code Hosting Platform</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1xvdZAy_DkVdw2HpJs8m8SG1fWQfwLYgx/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">JavaScript Next</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Raju Gandhi</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>445</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>251</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1P840DmMSoVAP2DIhaHNxaX0Y6cN_LKgS/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Flutter</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Thomas Bailey, Alessandro Biessek</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>363</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>370</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/12h_3RTom72VXkmyQBkktEMDKzVfpiuli/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Adobe Premiere Pro</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                            <div class="service-img">
                                <div class="service-img-m">
                                <img src="img/course-book.png">
                                </div>
                            </div>
                            <div class="book-det-main">
                                <div class="book-det">
                                    <h3>Author</h3>
                                    <p>Brain Wood</p>
                                </div>
                                <div class="book-det">
                                    <h3>Language</h3>
                                    <p>English</p>
                                </div>
                                <div class="book-det">
                                    <h3>Downloads</h3>
                                    <p>328</p>
                                </div>
                                <div class="book-det">
                                    <h3>Pages</h3>
                                    <p>42</p>
                                </div>
                                <div class="book-det">
                                    <h3>Category</h3>
                                    <p class="prog">Design</p>
                                </div>
                                <div class="book-det">
                                    <h3>Date</h3>
                                    <p>February 14, 2023</p>
                                </div>
                            </div>
                            <div class="blue-btn">
                                <a href="https://drive.google.com/file/d/1amSPlfy7jF_6pyVdSGZaBiagQHYpR6Aq/view?usp=share_link"
                                    class="download-book">Download Book</a>
                            </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Adobe After Effects</h2>
                    <span class="service-border"></span>
                        <div class="change-style">
                            <div class="service-img">
                                <div class="service-img-m">
                                <img src="img/course-book.png">
                                </div>
                            </div>
                            <div class="book-det-main">
                                <div class="book-det">
                                    <h3>Adobe Systems</h3>
                                    <p>Marko Aleksendrić</p>
                                </div>
                                <div class="book-det">
                                    <h3>Language</h3>
                                    <p>English</p>
                                </div>
                                <div class="book-det">
                                    <h3>Downloads</h3>
                                    <p>257</p>
                                </div>
                                <div class="book-det">
                                    <h3>Pages</h3>
                                    <p>382</p>
                                </div>
                                <div class="book-det">
                                    <h3>Category</h3>
                                    <p class="prog">Design</p>
                                </div>
                                <div class="book-det">
                                    <h3>Date</h3>
                                    <p>February 14, 2023</p>
                                </div>
                            </div>
                            <div class="blue-btn">
                                <a href="https://drive.google.com/file/d/1C4hlVRzsCf5vvvxNWJb5-5QGWlTxTnRv/view?usp=share_link"
                                    class="download-book">Download Book</a>
                            </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Microsoft PowerPoint</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>PittInformation Technology</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>242</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>41</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Microsoft</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1uGYlCZWlBz5V9f33mV2cYkdtQAZUx2vV/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">C language</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>237</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>342</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1R-DxeyAPVDx23fV9KttWf_pXssOzcw4_/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Microsoft Office 365</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Linda Foulkes</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>222</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>1552</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Microsoft</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1w9A9OCujfLC9M-BfoSOdTtpuruKwTxNw/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Microsoft Access</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Marian Twomey, IT Services</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>221</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>123</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Microsoft</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/18pDDymUTaT5Z0lNlaejMjqROdh6tLMcO/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Step-by-Step Guide to Python</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Joe Thompson</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>194</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>360</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1nIrvFa6C9jOTNy6uvcYI9Y54vNZx8mVS/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">PHP 8 for Absolute Beginners</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Jason Lengstorf</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>131</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>437</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1hexVWEkSE31KUU4iCHC3FIs_-ZlD9lg3/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
             
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">HTML5 Canvas for Professionals</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>129</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>81</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1rOmlV1nwiGfQpCjn3p32BTReub2y82hn/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
               <!-- ----------event-box------- -->
               <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Python Book Crash Course</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>109</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>548</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1KF4mmyGHGFObrxuJnAWzJAObUgZLsg1S/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Django for professionals</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>William S. Vincent</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>25</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>262</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1v-i3sAyP43KGqPhgK-ppMMp52sgsQ6RP/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
             <!-- ----------event-box------- -->
             <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Full Stack FastAPI, React, and MongoDB</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                            <div class="service-img">
                                <div class="service-img-m">
                                <img src="img/book-recommended.png">
                                </div>
                            </div>
                            <div class="book-det-main">
                                <div class="book-det">
                                    <h3>Author</h3>
                                    <p>Marko Aleksendrić</p>
                                </div>
                                <div class="book-det">
                                    <h3>Language</h3>
                                    <p>English</p>
                                </div>
                                <div class="book-det">
                                    <h3>Downloads</h3>
                                    <p>361</p>
                                </div>
                                <div class="book-det">
                                    <h3>Pages</h3>
                                    <p>122</p>
                                </div>
                                <div class="book-det">
                                    <h3>Category</h3>
                                    <p class="prog">Programming</p>
                                </div>
                                <div class="book-det">
                                    <h3>Date</h3>
                                    <p>February 14, 2023</p>
                                </div>
                            </div>
                            <div class="blue-btn">
                                <a href="https://drive.google.com/file/d/1V3nyVtVnqu7VZKqxCIEq9cHOdayUeM76/view?usp=share_link"
                                    class="download-book">Download Book</a>
                            </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">SQL Injection Strategies</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Ettore Galluccio, Edoardo Caselli, Gabriele Lombar</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>183</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>313</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Database</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1-HQjrdM-0sG9DGkOy0MUlkoPX-EBd_Lu/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Ruby Programming for Beginners</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>74</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>154</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1mvtsc9tGwTZlW2zJ69joFeUScHiWQvTc/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Java 9.0 to 17.0 Cookbook</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Tejaswini Jog</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>70</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>348</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1QC8_27F_-8xNiFhvAD1m3JzqdH3F3ORf/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Mastering React Test-Driven Development</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Daniel Irvine</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>102</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>565</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1Qlnmf9E8F_TF_04oNMe3tIzj_SYHzP6m/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Data Science from Scratch</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>92</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>406</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1I1owCzs-wqbMuu8JchdcAQ5A2nqkSjcB/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Learn Python in One Day</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>560</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>100</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1E-ti3k8k6HR_Oijq-3V2SpFJ8xJdzu5O/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Efficient Linux at the Command Line Core </h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Daniel Barrett</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>80</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>248</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1QSUVmpcfGoHeInTumIDN303fwgJ5xAIl/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">The Big Book of Data Engineering</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p class="prog">Databricks</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>123</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>57</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1QxSr9ex6FgId43M3U4H-rwXHRw14kWBE/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Grokking The Java Developer Interview</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Jatin Arora</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>26</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>333</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 13, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1KroaU01xzpCILIm2e3ShJGlQYZADKLqt/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable"> Ethical Hacking with Python</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Sanjib Sinha</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>52</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>197</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/12iC18OOnHLqeu9R8PIVkwHGMxhqyCjo5/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
         
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Adobe Animate Classroom</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Brain Wood</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>182</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>2</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Design</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1KIYzoHdETp04tvT4o8marC4PjD1jJwHk/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Web framework for Python Django</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>179</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>190</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1HrqhaGExOVg-ivcb2ldRCtVFR2rpHuwD/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
                 <!-- ----------event-box------- -->
                 <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Core Java Volume Fundamentals </h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan Agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>77</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>2617</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1bacLqN9HcXNs5uw_7c2pHNvMJKFyNR7W/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
     <!-- ----------event-box------- -->
     <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Ruby on Rails Tutorial 7-th edition </h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p class="prog">Michael Hartl</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>20</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>961</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1E_TnCe26n-V9wrJhkLAFyCR_lvIcZYh_/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Python Concurrency with asyncio</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Matthew Fowler</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>20</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>378</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1yc1KkaHo9AXmaCIrFgdwqtfHdfynxJsi/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Designing and Prototyping Interfaces with figma</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Fabio Staiano</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>196</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>382</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Design</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/15PnPJ3M8YCpb_b5x9Gs8xoS7Km3yoYcw/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Modern Frontend Development with Node.js</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Florian Rappl</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>108</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>209</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1kg2WkbP_C_8RPsdOafDQHvSgTZ6GPqDV/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            
   <!-- ----------event-box------- -->
   <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Full-Stack Web Development with GraphQL and React</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Sebastian Grebe</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>166</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>473</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1PC8V4_i1F4m5aIP2EzIhFhLwaWCPvUto/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
               <!-- ----------event-box------- -->
               <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Beginning Rails 6</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Brady Somerville, Adam Gamble, Cloves Carneiro Jr.</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>49</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>582</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1lx4Y8Don6rTOraSUlk8i1czxWMOsOylN/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Figma</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Fabio Staiano</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>165</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>10</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Design</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/15PnPJ3M8YCpb_b5x9Gs8xoS7Km3yoYcw/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">JSON</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan Agmmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>175</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>374</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1RC7-Ya807Q4GGQUvjrGPVCHuNsRUR9wz/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">SEO</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan Agmmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>169</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>331</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">SEO</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1bZgayk4d4bVtcTpSGfHQ5jRZbZOit4jL/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Adobe Creative Cloud</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Adobe Systems</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>157</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>62</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Design</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1CUOLK_Jl57xrIolkAo_emd5tBTwvN7Xi/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Adobe XD</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan Agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>156</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>62</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Design</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1OYQlmCs_N4zwB0Egqwb-_J8n1Skw9WPw/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Mongo DB</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan Agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>156</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>73</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Database</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1P5sQq1rYAM-6cu_uZuUIb4UIvw3n0_Lv/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Dreamweaver</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Brain Wood</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>152</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>498</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Design</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/13yMCTaKi9CA982saVYiJmcEyjDDG5jza/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Node JS</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>127</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>334</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1LFnhCmOvJuxVs2y__qH7mQY9O4kkwfPv/view?usp=sharing"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">ASP.NET Core</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Andrew Lock</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>22</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>834</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1WyVENZ97bZC6_DUsjbmJMISLPJVrnapl/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">XML</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>110</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>277</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1IbI8OQ4Pj9WfDjzGAVloAr6nX-dYQuFR/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Clean Code in PHP</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Carsten Windler, Alexandre Daubois</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>109</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>264</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1bsroOXf-BJd0UPOcCXW7qIClk1_lvoeQ/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Visual Studio Code</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Visual Studio Code</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>622</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>26</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Source Code Editor</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1ynCYnD0mRL-JY1WsB2C1FpknhPUUDpMe/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Python Data Science </h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>107</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>216</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1I1owCzs-wqbMuu8JchdcAQ5A2nqkSjcB/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Learning TypeScript</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Josh Goldberg</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>92</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>320</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1VjVQE7NS2jTfRLe_blDNQxV4GVPJGLTU/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Java Design Patterns</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Vaskaran Sarcar</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>88</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>543</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1CtGa1IysQBRtA6gCNgaweudUs3SztXPI/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Bash</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>86</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>204</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/13yMCTaKi9CA982saVYiJmcEyjDDG5jza/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">LaTeX</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>85</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>60</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1pSpGXepy8zEDjaj6dA7hcmIqK6J7eRpy/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Microsoft SharePoint</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>78</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>47</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Microsoft</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1Vv_2KVPKaNUP9DY67GpEf4kCpu5eAu5U/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <!--<div class="service-box" id="service-box">-->
            <!--    <div class="service-con">-->
            <!--        <h2 class="book-title searchable">.Net</h2>-->
            <!--        <span class="service-border"></span>-->
            <!--        <div class="change-style">-->
            <!--            <div class="service-img">-->
            <!--                <div class="service-img-m">-->
            <!--                    <img src="img/book-recommended.png">-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="book-det-main">-->
            <!--                <div class="book-det">-->
            <!--                    <h3>Author</h3>-->
            <!--                    <p>Hassan agmir</p>-->
            <!--                </div>-->
            <!--                <div class="book-det">-->
            <!--                    <h3>Language</h3>-->
            <!--                    <p>English</p>-->
            <!--                </div>-->
            <!--                <div class="book-det">-->
            <!--                    <h3>Downloads</h3>-->
            <!--                    <p>50</p>-->
            <!--                </div>-->
            <!--                <div class="book-det">-->
            <!--                    <h3>Pages</h3>-->
            <!--                    <p>257</p>-->
            <!--                </div>-->
            <!--                <div class="book-det">-->
            <!--                    <h3>Category</h3>-->
            <!--                    <p class="prog">Programming</p>-->
            <!--                </div>-->
            <!--                <div class="book-det">-->
            <!--                    <h3>Date</h3>-->
            <!--                    <p>February 14, 2023</p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="blue-btn">-->
            <!--                <a href="https://drive.google.com/file/d/1Fbh9v8k8KjmpU3Ly__CZqmI64VdI1E4Y/view?usp=share_link" class="download-book">Download Book</a>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
         
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">C#</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>34</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>808</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1m2dqG065SXprf1Dm4ZpIDTryLDgN6qi5/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Kotlin</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>34</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>94</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/16NTcEvUSg9vGDRGdyWZjoMmGRe3iJFXk/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">MATLAB</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>32</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>182</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/12F-QWOBEKb8HqO4QqwB0OWDgou4DcJ9w/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Scala programming</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>19</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>754</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1wwgGtDGJ2ML-dPUnxP7IKzjtm2-xNyYg/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -------code-2--------- -->
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">HTML5</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>1.2K</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>122</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1-CKzwL8sWx-DvtoAfzqqCsD3bzjJlE1L/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">React Native</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>806</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>91</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1jP2oaxj7UHCHEVshy0r13MBo6M9V4yZf/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">AI</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>600</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>52</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1ylcNfOou6a9P98sGLKGG6EP7CRSxIaUu/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Kali Linux</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>486</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>65</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1X191L5PxMlLVt-DCO43sZR0hRDoI2S7w/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <!--<div class="service-box" id="service-box">-->
            <!--    <div class="service-con">-->
            <!--        <h2 class="book-title searchable">JQuery</h2>-->
            <!--        <span class="service-border"></span>-->
            <!--        <div class="change-style">-->
            <!--            <div class="service-img">-->
            <!--                <div class="service-img-m">-->
            <!--                    <img src="img/book-recommended.png">-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="book-det-main">-->
            <!--                <div class="book-det">-->
            <!--                    <h3>Author</h3>-->
            <!--                    <p>Hassan agmir</p>-->
            <!--                </div>-->
            <!--                <div class="book-det">-->
            <!--                    <h3>Language</h3>-->
            <!--                    <p>English</p>-->
            <!--                </div>-->
            <!--                <div class="book-det">-->
            <!--                    <h3>Downloads</h3>-->
            <!--                    <p>443</p>-->
            <!--                </div>-->
            <!--                <div class="book-det">-->
            <!--                    <h3>Pages</h3>-->
            <!--                    <p>67</p>-->
            <!--                </div>-->
            <!--                <div class="book-det">-->
            <!--                    <h3>Category</h3>-->
            <!--                    <p class="prog">Programming</p>-->
            <!--                </div>-->
            <!--                <div class="book-det">-->
            <!--                    <h3>Date</h3>-->
            <!--                    <p>February 14, 2023</p>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="blue-btn">-->
            <!--                <a href="https://drive.google.com/file/d/1DCebfbnfrvqUCTKHnyP7CVmqhtp1d7dm/view?usp=share_link" class="download-book">Download Book</a>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->


            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">API</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Charif Nijim</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>288</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>57</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1D0wuKKev_E9T7CFbKjEHA6lYgGEjXcUN/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Lightroom</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Adobe Systems</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>267</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>382</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Design</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1I4jWASh5UoXD1OScVtMyGSiG2l5du30e/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Android</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>260</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>1329</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/10II3-_ldkYSXfRfxmYCu0twohxkZC7h5/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">TypeScript</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>254</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>334</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1o0h5zSI1b8JTdBPonhxuycxHKqeLFBXp/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Learn Java in one day</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>212</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>225</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1Zm_khnG_zRKBkUrwiDlmzCEdWi4jB1aW/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Bootstrap</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>509</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>193</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1YiqrkfVmUDFo6-avduVTs9rLaj_65IbK/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Vue.js</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>204</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>439</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1PfdWr-Uam0Ng55rFGUNjPZe-5OVgMHZR/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Arduino</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>200</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>177</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1rTK7HFWUElpHA8A4VrIYi6tWzbypKwTl/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">InDesign</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Brain Wood</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>310</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>45</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Design</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1P1jrQ2MmB38Bfxk5q6uo5zTDFk5xHTFg/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Adobe Animate</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Brain Wood</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>183</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>2</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Design</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1A5IG9FxZfIbsOOEsAUMN0S4Z0-_A_1Qq/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">AngularJS</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Ahmed Bouchefra</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>173</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>38</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1RC5pMLKlVOC4pLXCmvnr7jJYn4xtqyHs/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Excel</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>1.2K</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>198</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Microsoft</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1jSUejrhdG1N4fwe30Df8qdychlaaSVcw/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Excel VBA</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>167</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>128</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Microsoft</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1A0qzeqsAkMFO2yg0WAoRGZbB7DBlB-9t/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Creative Cloud</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Adobe Systems</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>158</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>62</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Design</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1CUOLK_Jl57xrIolkAo_emd5tBTwvN7Xi/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Microsoft SQL Server</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan Agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>139</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>186</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Database</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1DIgNYlkOLIxEQlDH3UsX6euRYbX1IMyC/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">RealWorld Next JS</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p class="prog">Michele Riva</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>133</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>367</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1-YpNeAUxFjhz01jvmhVRRHief7QBtrYF/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Java Challenges</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p class="prog">Michael Inden</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>121</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>532</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1T4xAKb2LdNwWepzYjDFMrTnpgJl96HDc/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Microsoft OneNote</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Curtis Frye</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>117</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>41</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Microsoft</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1qSEk_g-XF-VEHVx_89HY8Qs8jNFcrte-/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Blender 2.9</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>John M Blain</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>113</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>305</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1Y0u35ZXURhupaIeBmnWUAEFY417Uc3Pl/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">CSS3</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>110</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>244</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/17VLlnmo34eBH0KjR-5BkzNuVBDTEP4HN/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">PowerShell </h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                            <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>93</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>148</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1aFAPSp8q9VuRCKAs21gSS4ZoPlaTXjv-/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Java Design Patterns</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Vaskaran Sarcar</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>87</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>543</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1ZKQtwifNfZDcXd62xCrUZAHlTZw1zgXZ/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Entity Framework</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>77</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>94</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1UASy84IAAoDiKjFA6TuMD2peXLknK84D/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">R Lanaguage</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>73</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>475</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1NT-ta3JRldcQ6PHY7ZFd-scCoIAgCRd6/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Ansible for AWS </h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>67</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>106</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 13, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1OUuFAF82pJGiEtUuunEKkvulv6feglEJ/view?usp=share_link"
                                class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Objective-C </h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>66</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>129</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1Bc8UR7oK0AHCD461V85K9u8TQqHCHEnL/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable"> Microsoft Sway</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/course-book.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>65</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>47</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Microsoft</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1I4wnne3pzmBR8iwG07poBxISarYrcwoa/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">.Net Framework</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>51</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>257</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1Fbh9v8k8KjmpU3Ly__CZqmI64VdI1E4Y/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">PostgreSQL </h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>books.goalkicker.com</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>32</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>74</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Database</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1PbXWE9tLnwXBLpc3mre6qN7H_jv2hzk6/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Swift </h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Hassan Agmir</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>30</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>525</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 14, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1WTKcelH1LcvVoGHHBzqufs6RlFr9WkD3/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------event-box------- -->
            <div class="service-box" id="service-box">
                <div class="service-con">
                    <h2 class="book-title searchable">Ruby DSL</h2>
                    <span class="service-border"></span>
                    <div class="change-style">
                        <div class="service-img">
                            <div class="service-img-m">
                                <img src="img/book-recommended.png">
                            </div>
                        </div>
                        <div class="book-det-main">
                            <div class="book-det">
                                <h3>Author</h3>
                                <p>Gay Jim</p>
                            </div>
                            <div class="book-det">
                                <h3>Language</h3>
                                <p>English</p>
                            </div>
                            <div class="book-det">
                                <h3>Downloads</h3>
                                <p>19</p>
                            </div>
                            <div class="book-det">
                                <h3>Pages</h3>
                                <p>92</p>
                            </div>
                            <div class="book-det">
                                <h3>Category</h3>
                                <p class="prog">Programming</p>
                            </div>
                            <div class="book-det">
                                <h3>Date</h3>
                                <p>February 13, 2023</p>
                            </div>
                        </div>
                        <div class="blue-btn">
                            <a href="https://drive.google.com/file/d/1Re4yFqQ-I_YMxHfbgGHn4hpH700S0K3v/view?usp=share_link" class="download-book">Download Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
function searchFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById('myinput');
    filter = input.value.toUpperCase();
    // console.log(filter);
    li=document.getElementsByClassName('service-box');

    for(i=0 ; i< li.length; i++){
        a = li[i].getElementsByClassName('searchable')[0];
        if(a.innerHTML.toUpperCase().indexOf(filter) > -1){
            li[i].style.display = "";
        }

        else{
            li[i].style.display = 'none';
        }
    }
}

function searchFunctiont() {
    var input, filter, li, a, i;
    input = document.getElementById('search-select');
    filter = input.value.toUpperCase();
    // console.log(filter);
    li=document.getElementsByClassName('service-box');

    for(i=0 ; i< li.length; i++){
        a = li[i].getElementsByClassName('prog')[0];
        if(a.innerHTML.toUpperCase().indexOf(filter) > -1){
            li[i].style.display = "";
        }

        else{
            li[i].style.display = 'none';
        }
    }
}
// function searchFunctiont() {
//     var input, filter, li, a, i;
//     input = document.getElementById('search-select');
//     filter = input.value.toUpperCase();
//     // console.log(filter);
//     li=document.getElementsByClassName('service-box');

//     for(i=0 ; i< li.length; i++){
//         category = li[i].getElementsByClassName('book-det')[4].getElementsByTagName('p')[0].innerHTML.toUpperCase();
//         a = li[i].getElementsByClassName('prog')[0];
        
//         // if(a.innerHTML.toUpperCase().indexOf(filter) > -1){
//         //     li[i].style.display = "";
//         // }

//         // else{
//         //     li[i].style.display = 'none';
//         // }

//         if(filter === '' || category === filter){
//             li[i].style.display = "";
//         }
//         else{
//             li[i].style.display = 'none';
//         }
//     }
// }




</script>


        <?php include 'ftr.php' ?>
        <!-- </section> -->
        <!-- ########################
    |              JS            |
    ########################## -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/main.js"></script>
        <!-- // -----slider------ -->
        <script src="js/slick.min.js"></script>

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