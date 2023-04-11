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
    <title>Contact with Fabulous Technology Solutions</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <?php
            include 'admin/connection.php';
            $sel12 = "SELECT * FROM contact_meta" or die("conn failed");
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
    <section class="contact-p services-p">
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
                                <li class="nav-item active"><a href="contact-us">Contact Us</a></li>
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
        $sel1 = "SELECT * FROM contact_hero" or die("conn failed");
        $res_sql1 = mysqli_query($conn,$sel1) or die("query failed");
        $row1 = mysqli_fetch_assoc($res_sql1) or die("row failed");
        if(mysqli_num_rows($res_sql1)>0) { ?>
        <section class="hero-wrapper">
            <div class="container">
                <div class="hero">
                    <!-- <div class="hero-icon">
                        <img src="img/contact-phone.png" alt="hero-phone-icon">
                    </div> -->
                    <h1><?php echo $row1['contact_hero_title'] ?></h1>
                    <p><?php echo $row1['contact_hero_des'] ?></p>
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
                    <div class="contact-left">
                        <p class="m-head">
                            <span class="arrow"><img src="img/arrow-left.png" alt="arrow-left"></span>
                            <span>Contact Us</span>
                            <span class="arrow"><img src="img/arrow-right.png" alt="arrow-right"></span>
                        </p>
                        <h2>Feel free to get in touch with our expert.</h2>
                        <p>You are just few steps away from bringing your product on internet, why to wait? You have the idea, we have the plan and team! Our IT experts are available 24/7 to respond to your questions, to hop
                        on zoom call if needed, to discuss your project requirements. Why to wait? Just fill the form aside or use the number provided bellow!</p>
                        <div class="contact-us-con">
                            <a href="https://wa.me/<?php echo $row_social['phone'] ?>" target="_blank" class="call">
                                <div class="icon">
                                    <img src="img/phone-icon.png" alt="phone-icon">
                                </div>
                                <div class="">
                                    <span><?php echo $row_social['phone'] ?></span>
                                    <span>Info@fabtechsol.com</span>
                                </div>
                            </a>
                            <a href="https://www.google.com/maps/dir/32.5040684,74.5111716/fabtech+solutions+sialkot/@32.4919858,74.4989334,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x391eebf05050a257:0x65c6ed11df82a794!2m2!1d74.5271225!2d32.4811242"
                                target="_blank">
                                <div class="icon">
                                    <img src="img/contact-location.png" alt="location-icon">
                                </div>
                                <div class="">
                                    <span>First Floor Akbar Plaza near rescue
                                        1122, Sialkot City</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="contact-right">
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
        </section>
        <!-- ==================================
        |         EXPERT BANNER SECTION        |
        ==================================== -->
        <section class="expert-banner">
            <div class="container">
                <div class="expert-ban-main">
                    <div class="expert-ban">
                        <div class="expert-con">
                            <h4>Feel free to get in touch with
                                our expert.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================
        |             TEAM SECTION            |
        ==================================== -->
        <section class="team-sec">
            <div class="container">
                <div class="team-main">
                    <div class="expert-contact">
                        <img src="img/expert-services.png" alt="contact-expert">
                        <a href="tel:+92 000 333 22" class="contact-detail">
                            <h6><?php echo $row_social['phone'] ?></h6>
                        </a>
                    </div>
                    <div class="expert-des">
                        <h3>Talk with our expert and get you project done.</h3>
                        <p>Still planning to get started with us? Don't wait, get in touch with us. Our IT experts are available 24/7 to respond to your questions, to hop
                        on zoom call if needed, to discuss your project requirements. Why to wait? Just click get started button bellow or use the number provided aside!.</p>
                        <div class="blue-btn">
                            <a href="https://fabtechsol.com/contact-us">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================
        |              MAP SECTION            |
        ==================================== -->
        <div class="google-map-sec">
            <iframe
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18833.123526261006!2d74.51394298948699!3d32.46411344742465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eebf05050a257%3A0x65c6ed11df82a794!2sFabulous%20Technology%20Solutions!5e0!3m2!1sen!2s!4v1679138285176!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
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
    <!-- -------sweet alert------ -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<?php
        include 'admin/connection.php';
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $subject = $_POST['subject'];
            $msg =mysqli_real_escape_string($conn, $_POST['msg']);

            $file = $_FILES['attach-doc'];
            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];
            $file_ext = explode(".",$file_name);
            $file_lower = strtolower(end($file_ext));
            $file_main = array('jpg','png','jpeg','pdf','doc','docx');
            if(in_array($file_lower,$file_main)) {
                $dest_file = 'upload/' .$file_name;
                move_uploaded_file($file_tmp,$dest_file);
                $insert_sql = "INSERT INTO contact_form(name,email,phone,subject,msg,file) Values('$name','$email','$number','$subject','$msg','$dest_file')";
                $res = mysqli_query($conn,$insert_sql);
                ?>
<script>
swal("", "Thanks for contacting us. You can use our chat system or whatsapp too for getting fast response. Else we will be getting back to you with in 4 hours through email. Thank you",
    "success");
</script><?php
            }
             else{
                ?><script>
swal("", "Invalid File Format", "error");
</script> <?php
}
       }
?>

</html>