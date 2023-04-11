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
    <title>Get Hired - Fabulous Technology Solutions</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <?php
            include 'admin/connection.php';
            $sel12 = "SELECT * FROM hired_meta" or die("conn failed");
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
    <!-- ------------------CSS Link--------------- -->
    <?php include 'admin/main.php' ; include 'css/style.php';?>
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/088d3f36f9.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <section class="contact-p get-hired">
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
                            <li class="active"><a href="get-hired">Get Hired</a></li>
                            <li><a href="free-courses">Free courses</a></li>
                            <li><a href="faq">FAQ</a></li>
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
        $sel1 = "SELECT * FROM hired_hero" or die("conn failed");
        $res_sql1 = mysqli_query($conn,$sel1) or die("query failed");
        $row1 = mysqli_fetch_assoc($res_sql1) or die("row failed");
        if(mysqli_num_rows($res_sql1)>0) { ?>
        <section class="hero-wrapper">
            <div class="container">
                <div class="hero">
                    <div class="hero-con">
                        <div class="hero-icon">
                            <img src="img/contact-phone.png" alt="hero-phone-icon">
                        </div>
                        <h1><?php echo $row1['hired_hero_title'] ?></h1>
                    </div>
                    <p><?php echo $row1['hired_hero_des'] ?></p>
                </div>
            </div>
        </section>
        <?php } ?>
        <!-- ==================================
        |          CONTACT US SECTION          |
        ==================================== -->
        <section class="contact-us-sec">
            <div class="container">
                <div class="contact-us-main">
                    <div class="contact-left" id="get-hired-fm">
                        <p class="m-head">
                            <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                            <span>Get Hired</span>
                            <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                        </p>
                        <p class="hiring-para-head">Fill the Hiring Form</p>
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"
                            enctype="multipart/form-data">
                            
                            <!-- --------form section------     -->
                            <div class="form-sec">
                                <h5>Applying for*</h5>
                                <div class="form-field apply-for-field j-type">
                                    <div class="apply-for check-field">
                                        <input type="checkbox" name="apply[]" id="internship" value="internship"
                                            class="intern">
                                        <label for="internship">Internship</label>
                                    </div>
                                    <div class="apply-for check-field">
                                        <input type="checkbox" name="apply[]" id="onsite" value="onsite" class="job">
                                        <label for="onsite">Onsite Job</label>
                                    </div>
                                    <div class="apply-for check-field">
                                        <input type="checkbox" name="apply[]" id="remote" value="remote" class="job"
                                            onclick="myFunction()">
                                        <label for="remote">Remote Job</label>
                                    </div>
                                </div>
                            </div>


                            <!-- ------form-sec------ -->
                            <div class="form-sec" id="av-time">
                                <h5>Days</h5>
                                <div class="form-field apply-for-field week-days">
                                    <div class="check-field">
                                        <input type="checkbox" name="days[]" id="Monday" value="Monday">
                                        <label for="Monday">Monday</label>
                                    </div>
                                    <div class="check-field">
                                        <input type="checkbox" name="days[]" id="Tuesday" value="Tuesday">
                                        <label for="Tuesday">Tuesday</label>
                                    </div>
                                    <div class="check-field">
                                        <input type="checkbox" name="days[]" id="Wednesday" value="Wednesday">
                                        <label for="Wednesday">Wednesday</label>
                                    </div>
                                    <div class="check-field">
                                        <input type="checkbox" name="days[]" id="Thursday" value="Thursday">
                                        <label for="Thursday">Thursday</label>
                                    </div>
                                    <div class="check-field">
                                        <input type="checkbox" name="days[]" id="Friday" value="Friday">
                                        <label for="Friday">Friday</label>
                                    </div>
                                    <div class="check-field">
                                        <input type="checkbox" name="days[]" id="Saturday" value="Saturday">
                                        <label for="Saturday">Saturday</label>
                                    </div>
                                    <div class="check-field">
                                        <input type="checkbox" name="days[]" id="Sunday" value="Sunday">
                                        <label for="Sunday">Sunday</label>
                                    </div>
                                </div>
                                <h5>Availability hours</h5>
                                <div class="form-field av-hours">
                                    <div class="input-field">
                                        <input type="time" placeholder="First Name" name="st_time">
                                    </div>
                                    <h5>to</h5>
                                    <div class="input-field">
                                        <input type="time" placeholder="Last Name" name="end_time">
                                    </div>
                                </div>
                            </div>
                            <!-- --------form section------     -->
                            <div class="form-sec">
                                <h5>Personal Information*</h5>
                                <div class="form-field">
                                    <div class="input-field">
                                        <input type="text" placeholder="First Name" name="fname" required>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" placeholder="Last Name" name="lname" required>
                                    </div>
                                </div>

                                <div class="form-field">
                                    <div class="input-field">
                                        <input type="text" placeholder="Phone number" name="number" required>
                                    </div>
                                    <div class="input-field">
                                        <input type="email" placeholder="Your Email" name="email" required>
                                    </div>
                                </div>
                                <div class="form-field address-field">
                                    <div class="input-field">
                                        <select name="city" required>
                                            <option value="" disabled selected hidden>City</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                            <option value="Ahmadpur East">Ahmadpur East</option>
                                            <option value="Ali Khan Abad">Ali Khan Abad</option>
                                            <option value="Alipur">Alipur</option>
                                            <option value="Arifwala">Arifwala</option>
                                            <option value="Attock">Attock</option>
                                            <option value="Bhera">Bhera</option>
                                            <option value="Bhalwal">Bhalwal</option>
                                            <option value="Bahawalnagar">Bahawalnagar</option>
                                            <option value="Bahawalpur">Bahawalpur</option>
                                            <option value="Bhakkar">Bhakkar</option>
                                            <option value="Burewala">Burewala</option>
                                            <option value="Chillianwala">Chillianwala</option>
                                            <option value="Chakwal">Chakwal</option>
                                            <option value="Chichawatni">Chichawatni</option>
                                            <option value="Chiniot">Chiniot</option>
                                            <option value="Chishtian">Chishtian</option>
                                            <option value="Daska">Daska</option>
                                            <option value="Darya Khan">Darya Khan</option>
                                            <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                            <option value="Dhaular">Dhaular</option>
                                            <option value="Dina">Dina</option>
                                            <option value="Dinga">Dinga</option>
                                            <option value="Dipalpur">Dipalpur</option>
                                            <option value="Faisalabad">Faisalabad</option>
                                            <option value="Ferozewala">Ferozewala</option>
                                            <option value="Fateh Jhang">Fateh Jang</option>
                                            <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                            <option value="Gojra">Gojra</option>
                                            <option value="Gujranwala">Gujranwala</option>
                                            <option value="Gujrat">Gujrat</option>
                                            <option value="Gujar Khan">Gujar Khan</option>
                                            <option value="Hafizabad">Hafizabad</option>
                                            <option value="Haroonabad">Haroonabad</option>
                                            <option value="Hasilpur">Hasilpur</option>
                                            <option value="Haveli Lakha">Haveli Lakha</option>
                                            <option value="Jatoi">Jatoi</option>
                                            <option value="Jalalpur">Jalalpur</option>
                                            <option value="Jattan">Jattan</option>
                                            <option value="Jampur">Jampur</option>
                                            <option value="Jaranwala">Jaranwala</option>
                                            <option value="Jhang">Jhang</option>
                                            <option value="Jhelum">Jhelum</option>
                                            <option value="Kalabagh">Kalabagh</option>
                                            <option value="Karor Lal Esan">Karor Lal Esan</option>
                                            <option value="Kasur">Kasur</option>
                                            <option value="Kamalia">Kamalia</option>
                                            <option value="Kamoke">Kamoke</option>
                                            <option value="Khanewal">Khanewal</option>
                                            <option value="Khanpur">Khanpur</option>
                                            <option value="Kharian">Kharian</option>
                                            <option value="Khushab">Khushab</option>
                                            <option value="Kot Addu">Kot Addu</option>
                                            <option value="Jauharabad">Jauharabad</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Lalamusa">Lalamusa</option>
                                            <option value="Layyah">Layyah</option>
                                            <option value="Liaquat Pur">Liaquat Pur</option>
                                            <option value="Lodhran">Lodhran</option>
                                            <option value="Malakwal">Malakwal</option>
                                            <option value="Mamoori">Mamoori</option>
                                            <option value="Mailsi">Mailsi</option>
                                            <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                            <option value="Mian Channu">Mian Channu</option>
                                            <option value="Mianwali">Mianwali</option>
                                            <option value="Multan">Multan</option>
                                            <option value="Murree">Murree</option>
                                            <option value="Muridke">Muridke</option>
                                            <option value="Mianwali Bangla">Mianwali Bangla</option>
                                            <option value="Muzaffargarh">Muzaffargarh</option>
                                            <option value="Narowal">Narowal</option>
                                            <option value="Nankana Sahib">Nankana Sahib</option>
                                            <option value="Okara">Okara</option>
                                            <option value="Renala Khurd">Renala Khurd</option>
                                            <option value="Pakpattan">Pakpattan</option>
                                            <option value="Pattoki">Pattoki</option>
                                            <option value="Pir Mahal">Pir Mahal</option>
                                            <option value="Qaimpur">Qaimpur</option>
                                            <option value="Qila Didar Singh">Qila Didar Singh</option>
                                            <option value="Rabwah">Rabwah</option>
                                            <option value="Raiwind">Raiwind</option>
                                            <option value="Rajanpur">Rajanpur</option>
                                            <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                            <option value="Rawalpindi">Rawalpindi</option>
                                            <option value="Sadiqabad">Sadiqabad</option>
                                            <option value="Safdarabad">Safdarabad</option>
                                            <option value="Sahiwal">Sahiwal</option>
                                            <option value="Sangla Hill">Sangla Hill</option>
                                            <option value="Sarai Alamgir">Sarai Alamgir</option>
                                            <option value="Sargodha">Sargodha</option>
                                            <option value="Shakargarh">Shakargarh</option>
                                            <option value="Sheikhupura">Sheikhupura</option>
                                            <option value="Sialkot">Sialkot</option>
                                            <option value="Sohawa">Sohawa</option>
                                            <option value="Soianwala">Soianwala</option>
                                            <option value="Siranwali">Siranwali</option>
                                            <option value="Talagang">Talagang</option>
                                            <option value="Taxila">Taxila</option>
                                            <option value="Toba Tek Singh">Toba Tek Singh</option>
                                            <option value="Vehari">Vehari</option>
                                            <option value="Wah Cantonment">Wah Cantonment</option>
                                            <option value="Wazirabad">Wazirabad</option>
                                            <option value="Badin">Badin</option>
                                            <option value="Bhirkan">Bhirkan</option>
                                            <option value="Rajo Khanani">Rajo Khanani</option>
                                            <option value="Chak">Chak</option>
                                            <option value="Dadu">Dadu</option>
                                            <option value="Digri">Digri</option>
                                            <option value="Diplo">Diplo</option>
                                            <option value="Dokri">Dokri</option>
                                            <option value="Ghotki">Ghotki</option>
                                            <option value="Haala">Haala</option>
                                            <option value="Hyderabad">Hyderabad</option>
                                            <option value="Islamkot">Islamkot</option>
                                            <option value="Jacobabad">Jacobabad</option>
                                            <option value="Jamshoro">Jamshoro</option>
                                            <option value="Jungshahi">Jungshahi</option>
                                            <option value="Kandhkot">Kandhkot</option>
                                            <option value="Kandiaro">Kandiaro</option>
                                            <option value="Karachi">Karachi</option>
                                            <option value="Kashmore">Kashmore</option>
                                            <option value="Keti Bandar">Keti Bandar</option>
                                            <option value="Khairpur">Khairpur</option>
                                            <option value="Kotri">Kotri</option>
                                            <option value="Larkana">Larkana</option>
                                            <option value="Matiari">Matiari</option>
                                            <option value="Mehar">Mehar</option>
                                            <option value="Mirpur Khas">Mirpur Khas</option>
                                            <option value="Mithani">Mithani</option>
                                            <option value="Mithi">Mithi</option>
                                            <option value="Mehrabpur">Mehrabpur</option>
                                            <option value="Moro">Moro</option>
                                            <option value="Nagarparkar">Nagarparkar</option>
                                            <option value="Naudero">Naudero</option>
                                            <option value="Naushahro Feroze">Naushahro Feroze</option>
                                            <option value="Naushara">Naushara</option>
                                            <option value="Nawabshah">Nawabshah</option>
                                            <option value="Nazimabad">Nazimabad</option>
                                            <option value="Qambar">Qambar</option>
                                            <option value="Qasimabad">Qasimabad</option>
                                            <option value="Ranipur">Ranipur</option>
                                            <option value="Ratodero">Ratodero</option>
                                            <option value="Rohri">Rohri</option>
                                            <option value="Sakrand">Sakrand</option>
                                            <option value="Sanghar">Sanghar</option>
                                            <option value="Shahbandar">Shahbandar</option>
                                            <option value="Shahdadkot">Shahdadkot</option>
                                            <option value="Shahdadpur">Shahdadpur</option>
                                            <option value="Shahpur Chakar">Shahpur Chakar</option>
                                            <option value="Shikarpaur">Shikarpaur</option>
                                            <option value="Sukkur">Sukkur</option>
                                            <option value="Tangwani">Tangwani</option>
                                            <option value="Tando Adam Khan">Tando Adam Khan</option>
                                            <option value="Tando Allahyar">Tando Allahyar</option>
                                            <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                            <option value="Thatta">Thatta</option>
                                            <option value="Umerkot">Umerkot</option>
                                            <option value="Warah">Warah</option>
                                            <option value="Abbottabad">Abbottabad</option>
                                            <option value="Adezai">Adezai</option>
                                            <option value="Alpuri">Alpuri</option>
                                            <option value="Akora Khattak">Akora Khattak</option>
                                            <option value="Ayubia">Ayubia</option>
                                            <option value="Banda Daud Shah">Banda Daud Shah</option>
                                            <option value="Bannu">Bannu</option>
                                            <option value="Batkhela">Batkhela</option>
                                            <option value="Battagram">Battagram</option>
                                            <option value="Birote">Birote</option>
                                            <option value="Chakdara">Chakdara</option>
                                            <option value="Charsadda">Charsadda</option>
                                            <option value="Chitral">Chitral</option>
                                            <option value="Daggar">Daggar</option>
                                            <option value="Dargai">Dargai</option>
                                            <option value="Darya Khan">Darya Khan</option>
                                            <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                            <option value="Doaba">Doaba</option>
                                            <option value="Dir">Dir</option>
                                            <option value="Drosh">Drosh</option>
                                            <option value="Hangu">Hangu</option>
                                            <option value="Haripur">Haripur</option>
                                            <option value="Karak">Karak</option>
                                            <option value="Kohat">Kohat</option>
                                            <option value="Kulachi">Kulachi</option>
                                            <option value="Lakki Marwat">Lakki Marwat</option>
                                            <option value="Latamber">Latamber</option>
                                            <option value="Madyan">Madyan</option>
                                            <option value="Mansehra">Mansehra</option>
                                            <option value="Mardan">Mardan</option>
                                            <option value="Mastuj">Mastuj</option>
                                            <option value="Mingora">Mingora</option>
                                            <option value="Nowshera">Nowshera</option>
                                            <option value="Paharpur">Paharpur</option>
                                            <option value="Pabbi">Pabbi</option>
                                            <option value="Peshawar">Peshawar</option>
                                            <option value="Saidu Sharif">Saidu Sharif</option>
                                            <option value="Shorkot">Shorkot</option>
                                            <option value="Shewa Adda">Shewa Adda</option>
                                            <option value="Swabi">Swabi</option>
                                            <option value="Swat">Swat</option>
                                            <option value="Tangi">Tangi</option>
                                            <option value="Tank">Tank</option>
                                            <option value="Thall">Thall</option>
                                            <option value="Timergara">Timergara</option>
                                            <option value="Tordher">Tordher</option>
                                            <option value="Awaran">Awaran</option>
                                            <option value="Barkhan">Barkhan</option>
                                            <option value="Chagai">Chagai</option>
                                            <option value="Dera Bugti">Dera Bugti</option>
                                            <option value="Gwadar">Gwadar</option>
                                            <option value="Harnai">Harnai</option>
                                            <option value="Jafarabad">Jafarabad</option>
                                            <option value="Jhal Magsi">Jhal Magsi</option>
                                            <option value="Kacchi">Kacchi</option>
                                            <option value="Kalat">Kalat</option>
                                            <option value="Kech">Kech</option>
                                            <option value="Kharan">Kharan</option>
                                            <option value="Khuzdar">Khuzdar</option>
                                            <option value="Killa Abdullah">Killa Abdullah</option>
                                            <option value="Killa Saifullah">Killa Saifullah</option>
                                            <option value="Kohlu">Kohlu</option>
                                            <option value="Lasbela">Lasbela</option>
                                            <option value="Lehri">Lehri</option>
                                            <option value="Loralai">Loralai</option>
                                            <option value="Mastung">Mastung</option>
                                            <option value="Musakhel">Musakhel</option>
                                            <option value="Nasirabad">Nasirabad</option>
                                            <option value="Nushki">Nushki</option>
                                            <option value="Panjgur">Panjgur</option>
                                            <option value="Pishin Valley">Pishin Valley</option>
                                            <option value="Quetta">Quetta</option>
                                            <option value="Sherani">Sherani</option>
                                            <option value="Sibi">Sibi</option>
                                            <option value="Sohbatpur">Sohbatpur</option>
                                            <option value="Washuk">Washuk</option>
                                            <option value="Zhob">Zhob</option>
                                            <option value="Ziarat">Ziarat</option>
                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <select name="state" id="">
                                            <option value="" disabled selected hidden>State</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Sindh">Sindh</option>
                                            <option value="khyber_pakhtunkhwa">Khyber Pakhtunkhwa</option>
                                            <option value="balochistan">Balochistan</option>
                                            <option value="Islamabad">Islamabad</option>
                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <select name="religion" id="">
                                            <option value="" disabled selected hidden>Religion</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Christianity">Christianity</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-field">
                                    <div class="input-field full-field">
                                        <input type="text" placeholder="Where did you hear about us" name="ref">
                                    </div>
                                </div>
                            </div>
                            <!-- --------form section------     -->
                            <div class="form-sec">
                                <h5>Tell us about yourself* </h5>
                                <div class="form-field">
                                    <div class="input-field">
                                        <select name="field" id="emp-detail" required>
                                            <option value="choose" disabled selected hidden>In which position you are
                                                interested</option>
                                            <option value="ui-ux-designer">UI / UX designer</option>
                                            <option value="website-developer">Website developer</option>
                                            <option value="application-developer">Mobile application developer</option>
                                            <option value="software-developer">Software developer
                                            </option>
                                            <option value="seo-expert">SEO expert
                                            </option>
                                            <option value="content-writer">Content writer</option>
                                            <option value="social-media-marketer">Social media marketer</option>
                                            <option value="human-resource-manager">Human resource manager
                                            </option>
                                            <option value="project-manager">Project Manager
                                            </option>
                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <input type="number" placeholder="Your expected salary" name="exp_sal"
                                            min="10000" step="1000">
                                    </div>
                                </div>
                            </div>

                            <div class="form-sec skill-option software-field">
                                <div class="form-field">
                                    <div class="input-field">
                                        <select name="field" id="emp-detail2" required>
                                            <!-- <option value="choose" disabled selected hidden>In which position you are
                                                interested</option> -->
                                            <option value="Choose" disabled selected hidden>Choose</option>
                                            <option value="front-end-software-developer">Front end developer</option>
                                            <option value="back-end-software-developer">Back end developer</option>
                                            <option value="full-stack-software-developer">Full stack developer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- --------form section------     -->
                            <div
                                class="form-sec skill-option project-manager human-resource-manager content-writer ui-ux-designer website-developer back-end-software-developer full-stack-software-developer software-developer application-developer seo-expert social-media-marketer" id="human-resource-manager">
                                <h5>Add Skills*</h5>
                                <div class="form-field apply-for-field">
                                    <div class="check-field emp-skills project-manager">
                                        <input type="checkbox" name="skill_set[]" id="pm-skill-1" value="Understanding of Software development">
                                        <label for="pm-skill-1">Understanding of Software development</label>
                                    </div>
                                     <div class="check-field emp-skills project-manager">
                                        <input type="checkbox" name="skill_set[]" id="pm-skill-2" value="Team management">
                                        <label for="pm-skill-2">Team management</label>
                                    </div>
                                     <div class="check-field emp-skills project-manager">
                                        <input type="checkbox" name="skill_set[]" id="pm-skill-3" value="good english communication">
                                        <label for="pm-skill-3">Good english communication</label>
                                    </div>
                                     <div class="check-field emp-skills project-manager">
                                        <input type="checkbox" name="skill_set[]" id="pm-skill-4" value="Defining Scope of project">
                                        <label for="pm-skill-4">Defining Scope of project</label>
                                    </div>
                                    
                                      <div class="check-field emp-skills project-manager">
                                        <input type="checkbox" name="skill_set[]" id="pm-skill-5" value="Documentation">
                                        <label for="pm-skill-5">Documentation</label>
                                    </div>
                                    
                                    <div class="check-field emp-skills seo-expert">
                                        <input type="checkbox" name="skill_set[]" id="on_page_seo" value="On page SEO">
                                        <label for="on_page_seo">On page SEO</label>
                                    </div>
                                    <div class="check-field emp-skills seo-expert">
                                        <input type="checkbox" name="skill_set[]" id="off_page_seo" value="Off page SEO">
                                        <label for="off_page_seo">Off page SEO</label>
                                    </div>
                                    <div class="check-field emp-skills seo-expert">
                                        <input type="checkbox" name="skill_set[]" id="seo_optimized_content" value="SEO optimized content">
                                        <label for="seo_optimized_content">SEO optimized content</label>
                                    </div>
                                    <div class="check-field emp-skills social-media-marketer">
                                        <input type="checkbox" name="skill_set[]" id="facebook_marketing" value="Facebook marketing">
                                        <label for="facebook_marketing">Facebook marketing</label>
                                    </div>
                                    <div class="check-field emp-skills social-media-marketer">
                                        <input type="checkbox" name="skill_set[]" id="insta_marketing" value="Instagram marketing">
                                        <label for="insta_marketing">Instagram marketing</label>
                                    </div>
                                    <div class="check-field emp-skills social-media-marketer">
                                        <input type="checkbox" name="skill_set[]" id="tiktok_marketing" value="TikTok marketing">
                                        <label for="tiktok_marketing">TikTok marketing</label>
                                    </div>
                                    <div class="check-field emp-skills ui-ux-designer">
                                        <input type="checkbox" name="skill_set[]" id="adobe_xd" value="Adobe XD">
                                        <label for="adobe_xd">Adobe XD</label>
                                    </div>
                                    <div class="check-field emp-skills ui-ux-designer">
                                        <input type="checkbox" name="skill_set[]" id="figma" value="Figma">
                                        <label for="figma">Figma</label>
                                    </div>
                                    <div class="check-field emp-skills ui-ux-designer">
                                        <input type="checkbox" name="skill_set[]" id="photoshop" value="Photoshop">
                                        <label for="photoshop">Photoshop</label>
                                    </div>
                                    <div class="check-field emp-skills ui-ux-designer">
                                        <input type="checkbox" name="skill_set[]" id="illustrator" value="Illustrator">
                                        <label for="illustrator">Illustrator</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills website-developer front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="html" value="HTML">
                                        <label for="html">HTML</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills website-developer front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="css" value="css">
                                        <label for="css">CSS</label>
                                    </div>
                                    <div class="check-field emp-skills website-developer">
                                        <input type="checkbox" name="skill_set[]" id="bootstrap" value="Bootstrap">
                                        <label for="bootstrap">Bootstrap</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills website-developer application-developer front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="js" value="JavaScript">
                                        <label for="js">JavaScript</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills website-developer front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="react_js" value="React JS">
                                        <label for="react_js">React JS</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="angular_js" value="Angular JS">
                                        <label for="angular_js">Angular JS</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="next_js" value="Next JS">
                                        <label for="next_js">Next JS</label>
                                    </div>
                                    <div class="check-field emp-skills application-developer">
                                        <input type="checkbox" name="skill_set[]" id="react_native"
                                            value="React Native">
                                        <label for="react_native">React Native</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills application-developer front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="flutter" value="Flutter">
                                        <label for="flutter">Flutter</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills website-developer back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="python" value="Python">
                                        <label for="python">Python</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills website-developer back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="php" value="PHP">
                                        <label for="php">PHP</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills website-developer back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="Laravel" value="Laravel">
                                        <label for="Laravel">Laravel</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills website-developer back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="node_js" value="Node JS">
                                        <label for="node_js">Node JS</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="asp.net" value="Asp.net">
                                        <label for="asp.net">Asp.net</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills application-developer back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="dart" value="Dart">
                                        <label for="dart">Dart</label>
                                    </div>
                                    <div class="check-field emp-skills application-developer">
                                        <input type="checkbox" name="skill_set[]" id="kotlin" value="Kotlin">
                                        <label for="kotlin">Kotlin</label>
                                    </div>
                                    <div class="check-field emp-skills application-developer">
                                        <input type="checkbox" name="skill_set[]" id="swift" value="Swift">
                                        <label for="swift">Swift</label>
                                    </div>
                                    <div class="check-field emp-skills website-developer">
                                        <input type="checkbox" name="skill_set[]" id="wix" value="Wix">
                                        <label for="wix">Wix</label>
                                    </div>
                                    <div class="check-field emp-skills website-developer">
                                        <input type="checkbox" name="skill_set[]" id="wordpress" value="Wordpress">
                                        <label for="wordpress">Wordpress</label>
                                    </div>
                                    <div class="check-field emp-skills website-developer">
                                        <input type="checkbox" name="skill_set[]" id="square_space"
                                            value="Square Space">
                                        <label for="square_space">Square Space</label>
                                    </div>
                                    <div
                                        class="check-field emp-skills website-developer back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="skill_set[]" id="django" value="Django">
                                        <label for="django">Django</label>
                                    </div>
                                    <!-- ---------Upload mob app on---- -->
                                    <div class="check-field emp-skills application-developer upload-app">
                                        <h5>Upload app on</h5>
                                        <div class="form-field apply-for-field">
                                            <div class="check-field">
                                                <input type="checkbox" name="upload_app[]" id="app_store"
                                                    value="App Store">
                                                <label for="app_store">App Store</label>
                                            </div>
                                            <div class="check-field">
                                                <input type="checkbox" name="upload_app[]" id="ios_store"
                                                    value="IOS Store">
                                                <label for="ios_store">IOS Store</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ----------servers and databases------- -->
                                    <div
                                        class="check-field emp-skills website-developer front-end-software-developer back-end-software-developer full-stack-software-developer software-developer application-developer">
                                        <h5>Servers and Databases</h5>
                                        <div class="form-field apply-for-field">
                                            <div class="check-field">
                                                <input type="checkbox" name="server_set[]" id="aws" value="AWS">
                                                <label for="aws">AWS</label>
                                            </div>
                                            <div class="check-field">
                                                <input type="checkbox" name="server_set[]" id="heroku" value="Heroku">
                                                <label for="heroku">Heroku</label>
                                            </div>
                                            <div class="check-field">
                                                <input type="checkbox" name="server_set[]" id="hostinger"
                                                    value="Hostinger">
                                                <label for="hostinger">Hostinger</label>
                                            </div>
                                            <div class="check-field">
                                                <input type="checkbox" name="server_set[]" id="firebase"
                                                    value="Firebase">
                                                <label for="firebase">Firebase</label>
                                            </div>
                                            <div class="check-field">
                                                <input type="checkbox" name="server_set[]" id="go_daddy"
                                                    value="Go Daddy">
                                                <label for="go_daddy">Go Daddy</label>
                                            </div>
                                            <div class="check-field">
                                                <input type="checkbox" name="server_set[]" id="sql" value="SQL">
                                                <label for="sql">SQL</label>
                                            </div>
                                            <div class="check-field">
                                                <input type="checkbox" name="server_set[]" id="MySQL" value="MySQL">
                                                <label for="MySQL">MySQL</label>
                                            </div>
                                            <div class="check-field">
                                                <input type="checkbox" name="server_set[]" id="postgress"
                                                    value="Postgress">
                                                <label for="postgress">Postgress</label>
                                            </div>
                                            <div class="check-field">
                                                <input type="checkbox" name="server_set[]" id="mongo_db"
                                                    value="Mongo Db">
                                                <label for="mongo_db">Mongo Db</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ----------Additionaal-skills-------- -->
                            <div
                                class="form-sec skill-option project-manager extra-skills human-resource-manager content-writer seo-expert social-media-marketer ui-ux-designer website-developer back-end-software-developer full-stack-software-developer software-developer application-developer" id="human-resource-manager">
                                <h5>Additional Skills</h5>
                                <div class="form-field apply-for-field">
                                    <div class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills ui-ux-designer">
                                        <input type="checkbox" name="extra_skill[]" id="adobe_xd2" value="Adobe XD">
                                        <label for="adobe_xd2">Adobe XD</label>
                                    </div>
                                    <div class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills ui-ux-designer">
                                        <input type="checkbox" name="extra_skill[]" id="figma2" value="Figma">
                                        <label for="figma2">Figma</label>
                                    </div>
                                    <div class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills ui-ux-designer">
                                        <input type="checkbox" name="extra_skill[]" id="photoshop2" value="Photoshop">
                                        <label for="photoshop2">Photoshop</label>
                                    </div>
                                    <div class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills ui-ux-designer">
                                        <input type="checkbox" name="extra_skill[]" id="illustrator2" value="Illustrator">
                                        <label for="illustrator2">Illustrator</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="html2" value="HTML">
                                        <label for="html2">HTML</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="css2" value="css">
                                        <label for="css2">CSS</label>
                                    </div>
                                    <div class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer">
                                        <input type="checkbox" name="extra_skill[]" id="bootstrap2" value="Bootstrap">
                                        <label for="bootstrap2">Bootstrap</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer application-developer front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="js2" value="JavaScript">
                                        <label for="js2">JavaScript</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="react_js2" value="React JS">
                                        <label for="react_js2">React JS</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="angular_js2" value="Angular JS">
                                        <label for="angular_js2">Angular JS</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="next_js2" value="Next JS">
                                        <label for="next_js2">Next JS</label>
                                    </div>
                                    <div class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills application-developer">
                                        <input type="checkbox" name="extra_skill[]" id="react_native2"
                                            value="React Native">
                                        <label for="react_native2">React Native</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills application-developer front-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="flutter2" value="Flutter">
                                        <label for="flutter2">Flutter</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="python2" value="Python">
                                        <label for="python2">Python</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="php2" value="PHP">
                                        <label for="php2">PHP</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="Laravel2" value="Laravel">
                                        <label for="Laravel2">Laravel</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="node_js2" value="Node JS">
                                        <label for="node_js2">Node JS</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="asp.net2" value="Asp.net">
                                        <label for="asp.net2">Asp.net</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills application-developer back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="dart2" value="Dart">
                                        <label for="dart2">Dart</label>
                                    </div>
                                    <div class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills application-developer">
                                        <input type="checkbox" name="extra_skill[]" id="kotlin2" value="Kotlin">
                                        <label for="kotlin2">Kotlin</label>
                                    </div>
                                    <div class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills application-developer">
                                        <input type="checkbox" name="extra_skill[]" id="swift2" value="Swift">
                                        <label for="swift2">Swift</label>
                                    </div>
                                    <div class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer">
                                        <input type="checkbox" name="extra_skill[]" id="wix2" value="Wix">
                                        <label for="wix2">Wix</label>
                                    </div>
                                    <div class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer">
                                        <input type="checkbox" name="extra_skill[]" id="wordpress2" value="Wordpress">
                                        <label for="wordpress2">Wordpress</label>
                                    </div>
                                    <div class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer">
                                        <input type="checkbox" name="extra_skill[]" id="square_space2"
                                            value="Square Space">
                                        <label for="square_space2">Square Space</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer back-end-software-developer full-stack-software-developer software-developer">
                                        <input type="checkbox" name="extra_skill[]" id="django2" value="Django">
                                        <label for="django2">Django</label>
                                    </div>
                                    <!-- -------servers in additional--- -->
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer front-end-software-developer back-end-software-developer full-stack-software-developer software-developer application-developer">
                                        <input type="checkbox" name="extra_skill[]" id="aws2" value="AWS">
                                        <label for="aws2">AWS</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer front-end-software-developer back-end-software-developer full-stack-software-developer software-developer application-developer">
                                        <input type="checkbox" name="extra_skill[]" id="heroku2" value="Heroku">
                                        <label for="heroku2">Heroku</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer front-end-software-developer back-end-software-developer full-stack-software-developer software-developer application-developer">
                                        <input type="checkbox" name="extra_skill[]" id="hostinger2" value="Hostinger">
                                        <label for="hostinger2">Hostinger</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer front-end-software-developer back-end-software-developer full-stack-software-developer software-developer application-developer">
                                        <input type="checkbox" name="extra_skill[]" id="firebase2" value="Firebase">
                                        <label for="firebase2">Firebase</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer front-end-software-developer back-end-software-developer full-stack-software-developer software-developer application-developer">
                                        <input type="checkbox" name="extra_skill[]" id="go_daddy2" value="Go Daddy">
                                        <label for="go_daddy2">Go Daddy</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer front-end-software-developer back-end-software-developer full-stack-software-developer software-developer application-developer">
                                        <input type="checkbox" name="extra_skill[]" id="sql2" value="SQL">
                                        <label for="sql2">SQL</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer front-end-software-developer back-end-software-developer full-stack-software-developer software-developer application-developer">
                                        <input type="checkbox" name="extra_skill[]" id="MySQL2" value="MySQL">
                                        <label for="MySQL2">MySQL</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer front-end-software-developer back-end-software-developer full-stack-software-developer software-developer application-developer">
                                        <input type="checkbox" name="extra_skill[]" id="postgress2" value="Postgress">
                                        <label for="postgress2">Postgress</label>
                                    </div>
                                    <div
                                        class="check-field human-resource-manager content-writer seo-expert social-media-marketer emp-skills website-developer front-end-software-developer back-end-software-developer full-stack-software-developer software-developer application-developer">
                                        <input type="checkbox" name="extra_skill[]" id="mongo_db2" value="Mongo Db">
                                        <label for="mongo_db2">Mongo Db</label>
                                    </div>
                                </div>
                            </div>
                            <!-- --------form section------     -->
                            <div class="form-sec">
                                <h5>Academic Information*</h5>
                                <div class="form-field">
                                    <div class="input-field">
                                        <select name="degree" required>
                                            <option value="" disabled selected hidden>Degree</option>
                                            <option value="graduated">Graduated</option>
                                            <option value="post_graduated">Post Graduated</option>
                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" placeholder="Qualification/Certification"
                                            name="qualification" required>
                                    </div>
                                </div>
                                <div class="form-field">
                                    <div class="input-field">
                                        <input type="text" placeholder="CGPA" name="cgpa" required>
                                    </div>
                                    <div class="input-field">
                                        <input type="number" placeholder="Year Passed" name="year_passed" min="2000"
                                            max="2030">
                                    </div>
                                </div>
                                <div class="form-field">
                                    <div class="input-field full-field">
                                        <input type="text" placeholder="University" name="university" required>
                                    </div>
                                </div>
                            </div>
                            <!-- --------form section------     -->
                            <div class="form-sec previous-exp">
                                <h5>Previous Job Experience * </h5>
                                <div class="form-field">
                                    <div class="input-field">
                                        <input type="number" name="experience"
                                            placeholder="Previous Job Experience (Years)">
                                    </div>

                                    <div class="input-field">
                                        <input type="text" name="job_title" placeholder="Job Title">
                                    </div>
                                </div>
                                <div class="form-field">
                                    <div class="input-field">
                                        <input type="text" name="company" placeholder="Organization / Company"
                                            <?php $req ?>>
                                    </div>
                                    <div class="input-field">
                                        <input type="number" name="p_salary" placeholder="Salary" min="10000"
                                            step="1000" <?php $req ?>>
                                    </div>
                                </div>
                                <div class="form-field">
                                    <div class="input-field">
                                        <label for="">Start Date</label>
                                        <input type="date" name="start" placeholder="Start" <?php $req ?>>
                                    </div>
                                    <div class="input-field">
                                        <label for="">End Date</label>
                                        <input type="date" name="end" placeholder="End" <?php $req ?>>
                                    </div>
                                </div>
                                <div class="form-field">
                                    <div class="input-field full-field">
                                        <input type="text" name="leaving_reason" placeholder="Reason for leaving"
                                            <?php $req ?>>
                                    </div>
                                </div>
                            </div>
                            <!-- --------form section------     -->
                            <div class="form-sec">
                                <h5>Upload</h5>
                                <div class="form-field">
                                    <div class="input-field">
                                        <label for="">Upload Your CV / Resume</label>
                                        <input type="file" placeholder="Degree" name="cv" required>
                                    </div>
                                    <div class="input-field">
                                        <label for="">Upload Your Photo</label>
                                        <input type="file" placeholder="Degree" name="pic" required>
                                    </div>
                                </div>
                            </div>
                            <!-- --------form section------     -->
                            <div class="form-sec">
                                <h5>Describe yourself</h5>
                                <div class="form-field">
                                    <div class="msg-field">
                                        <textarea name="des" placeholder="Anything about you" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="submit-btn">
                                <button type="submit" name="submit">
                                    <span>Submit</span>
                                    <span><img src="img/send-white.png" alt="send-msg"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- -------NEWS------ -->
                    <div class="fab-news">
                        <div class="news-header">
                            <h2>News</h2>
                        </div>
                        <div class="news-body">
                            <div class="news-main-box">
                                <?php
                            include 'admin/connection.php';
                            $select_news = "SELECT * FROM news ORDER BY id DESC";
                            $res9 = mysqli_query($conn,$select_news); 
                            if(mysqli_num_rows($res9)>=1) { 
                                while($row9=mysqli_fetch_assoc($res9)) { ?>
                                <div class="news-box">
                                    <p><?php echo $row9['news'] ?></p>
                                    <div class="date-time">
                                        <span><?php echo $row9['date'] ?></span>
                                        <span><?php echo $row9['time'] ?></span>
                                    </div>
                                </div>
                                <?php }
                            } 
                            else {
                                echo "<p>No news yet.</p>";
                            }
                            ?>
                            </div>
                        </div>
                    </div>
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
    <!-- -------sweet alert------ -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    // -------av-hours and days-----
    function myFunction() {
        var checkBox = document.getElementById("remote");
        var text = document.getElementById("av-time");
        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
    </script>

    <script>
    $(document).ready(function() {
        $("#emp-detail").change(function() {
            var name = $("#emp-detail").val();
            $(".emp-skills").hide();
            
            $(".software-field").hide();
            
            $("." + name).show();

            $(".extra-skills .emp-skills").show();
            $(".extra-skills ." + name).hide();


                if(($("#emp-detail").val() == "human-resource-manager") || ($("#emp-detail").val() == "content-writer")) {
                    $(".form-sec.skill-option").hide();
                    $(".software-field").hide();

                } else if(($("#emp-detail").val() == "seo-expert") || ($("#emp-detail").val() == "social-media-marketer")){
                    $(".extra-skills").hide();
                    $(".software-field").hide();
                }

                else if($("#emp-detail").val() == "software-developer"){
                    $(".software-field").show();
                    $(".emp-skills").hide();
                    $("." + name).hide();
                   
                    $("#emp-detail2").change(function() {
                        var name = $("#emp-detail2").val();
                        $(".emp-skills").hide();
                        $(".form-sec.skill-option").show();
                        $("." + name).show();

                        $(".extra-skills .emp-skills").show();
                        $(".extra-skills ." + name).hide();

                    })
                }
                
                // =========================================================================
                //   if position is project mngr then shows option in columns instead of grid
                //  ==========================================================================
                  else if($("#emp-detail").val() == "project-manager") {
                    $(".contact-p form .form-sec:nth-of-type(6) .form-field.apply-for-field").css({"display": "flex", "flex-direction": "column"});
                    
                }
                 // =========================================================================
                //   if position is not project mngr then shows option in  grid
                //  ==========================================================================
                 else if($("#emp-detail").val() != "project-manager") {
                    $(".contact-p form .form-sec:nth-of-type(6) .form-field.apply-for-field").css({"display": "grid"});
                    
                }
                
                else {
                    $(".software-field").hide();
                }
        });

        // $("#emp-detail2").change(function() {
        //     var name = $("#emp-detail2").val();
        //     $(".emp-skills").hide();
        //     $("." + name).show();

        //     $(".extra-skills .emp-skills").show();
        //     $(".extra-skills ." + name).hide();

        //     // $("#" + name).hide();
        //     // $(".extra-skills#" + name).hide();

        // })
    })
    
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
        include 'admin/connection.php';
        date_default_timezone_set("Asia/Karachi");
        if(isset($_POST['submit'])) {
            $c_date = date("d-M-Y");
                $apply=implode(", ", $_POST['apply']);
                $days=implode(", ", $_POST['days']);
            $st_time = $_POST['st_time'];
            $end_time = $_POST['end_time'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $number = $_POST['number'];
            $email = $_POST['email'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $religion = $_POST['religion'];
            $ref = $_POST['ref'];
            $field = $_POST['field'];
            $exp_sal = $_POST['exp_sal'];
               $skill_set=implode(", ", $_POST['skill_set']);
               $upload_app=implode(", ", $_POST['upload_app']);
               $server_set=implode(", ", $_POST['server_set']);
               $extra_skill=implode(", ", $_POST['extra_skill']);
            $degree = $_POST['degree'];
            $qualification = $_POST['qualification'];
            $cgpa = $_POST['cgpa'];
            $year_passed = $_POST['year_passed'];
            $university = $_POST['university'];
            $experience = $_POST['experience'];
            $job_title = $_POST['job_title'];
            $company = $_POST['company'];
            $p_salary = $_POST['p_salary'];
            $start = $_POST['start'];
            $end = $_POST['end'];
            $leaving_reason =mysqli_real_escape_string($conn,$_POST['leaving_reason']);
            $cv =mysqli_real_escape_string($conn,$_POST['cv']);
            $pic =mysqli_real_escape_string($conn,$_POST['pic']);
            $des =mysqli_real_escape_string($conn,$_POST['des']);

            // ----img---
            $file = $_FILES['pic'];
            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];
            $file_ext = explode(".",$file_name);
            $file_lower = strtolower(end($file_ext));
            $file_main = array('jpg','png','jpeg');
            // ---file-cv--
            $filecv = $_FILES['cv'];
            $file_namecv = $filecv['name'];
            $file_tmpcv = $filecv['tmp_name'];
            $file_extcv = explode(".",$file_namecv);
            $file_lowercv = strtolower(end($file_extcv));
            $file_maincv = array('jpg','pdf','png','doc','docx');

            if((in_array($file_lower,$file_main)) && (in_array($file_lowercv,$file_maincv))){
                $dest_file = 'upload/' .$file_name;
                move_uploaded_file($file_tmp,$dest_file);

                $dest_filecv = 'upload/' .$file_namecv;
                move_uploaded_file($file_tmpcv,$dest_filecv);

                $insert_sql = "INSERT INTO hiring_form(apply,days,st_time,end_time,fname,lname,number,email,city,state,religion,ref,field,exp_sal,skill_set,upload_app,server_set,extra_skill,degree,qualification,cgpa,year_passed,university,experience,job_title,company,p_salary,start,end,leaving_reason,cv,pic,des,date) Values('$apply','$days','$st_time','$end_time','$fname','$lname','$number','$email','$city','$state','$religion','$ref','$field','$exp_sal','$skill_set','$upload_app','$server_set','$extra_skill','$degree','$qualification','$cgpa','$year_passed','$university','$experience','$job_title','$company','$p_salary','$start','$end','$leaving_reason','$dest_filecv','$dest_file','$des','$c_date')" or die("conn failed");
                $res = mysqli_query($conn,$insert_sql);
            ?>
<script>
swal("", "Thanks for applying, application submitted successfully, you will be notified through email and whatsapp",
    "success");
</script><?php
            }
            else{
                ?><script>
swal("", "Invalid File Format", "error");
</script><?php
            }
        }
?>

</html>