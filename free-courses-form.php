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
    <title>Free Courses - Fabulous Technology Solutions</title>
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
                            <li><a href="get-hired">Get Hired</a></li>
                            <li class="active"><a href="free-courses">Free courses</a></li>
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
        |          CONTACT US SECTION          |
        ==================================== -->
        <section class="contact-us-sec course-form">
            <div class="container">
                <div class="contact-us-main">
                    <div class="contact-left" id="get-hired-fm">
                        <p class="m-head">
                            <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                            <span>Course Registration</span>
                            <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                        </p>
                        <!--<p class="hiring-para-head">Choose your course</p>-->
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"
                            enctype="multipart/form-data">
                            <!-- --------form section------     -->
                            <div class="form-sec">
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
                                        <input type="email" placeholder="Email" name="email" required>
                                    </div>
                                </div>
                                <div class="form-field">
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
                                </div>
                                 <div class="form-field">
                                    <div class="input-field full-field">
                                        <select name="course_name" required>
                                             <option value="Choose" selected disabled hidden>Choose your course</option>
                                            <option value="Introduction to programming">Introduction To Programming</option>
                                            <option value="graphic designing">Graphic Designing</option>
                                        </select>
                                    </div>
                                </div>
                                  <h5>Availability hours</h5>
                                <div class="form-field av-hours">
                                    <div class="input-field">
                                        <input type="time" placeholder="start time" name="st_time">
                                    </div>
                                    <h5>to</h5>
                                    <div class="input-field">
                                        <input type="time" placeholder="end time" name="end_time">
                                    </div>
                                </div>
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
                              
                            </div>
                            <!-- --------form section------     -->
                         
                            <div class="submit-btn">
                                <button type="submit" name="submit">
                                    <span>Submit</span>
                                    <span><img src="img/send-white.png" alt="send-msg"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- -------NEWS------ -->
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
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $number = $_POST['number'];
            $email = $_POST['email'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $course_name = $_POST['course_name'];

            $st_time = $_POST['st_time'];
            $end_time = $_POST['end_time'];  
            $days=implode(", ", $_POST['days']);

           
             $insert_sql = "INSERT INTO course_form(fname,lname,number,email,city,state,course_name,st_time,end_time,days,date) Values('$fname','$lname','$number','$email','$city','$state','$course_name','$st_time','$end_time','$days','$c_date')" or die("conn failed");
                $res = mysqli_query($conn,$insert_sql);
            ?>
            <script>
            swal("", "Thanks for applying, application submitted successfully, you will be notified through email and whatsapp",
                "success");
            </script><?php
        }
?>

</html>