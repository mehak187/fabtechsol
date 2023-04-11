<?php
  session_start();
  
  if(!isset($_SESSION['umail'])){
    header('location: login.php');
  }
  
  if(isset($_SESSION['LAST_ACTIVE_TIME'])) {
    if((time()-$_SESSION['LAST_ACTIVE_TIME'])>60*30) {
        header('location:logout.php');
    }
 }
// ------------for idle usr----
 $_SESSION['LAST_ACTIVE_TIME'] = time();
  //  --------only one time edit alert-----
 if(isset($_SESSION['EDIT'])){
    if((time()-$_SESSION['LAST_ACTIVE_TIME3'])<2) {
        ?><script>
            window.alert("Record Updated successfully");
        </script><?php
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
      
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage hero sections</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <meta name="description"
        content="Fabulous Technology Solutions one of the Top IT Company provides services in Web Application, Software development, Mobile App Development, Web Development, UI/UX design and Electrical Hardware Development .">
    <meta name="keyword"
        content="fab techsol, Fabulous Technology Solutions, it software company, Software house, Software Development Company,Web Application Development Company,Web Application,Web Application development,Software Development,Website Development,Best web application Developers,Mobile Application Developers,IT company">
    <meta name="author" content="fab techsol">
    <?php 
    include '../css/style.php';
    include 'main.php';
    ?>
</head>

<body>
   <?php
   include 'admin-nav.php';
   ?>
    <!-- -------Form--------- -->
    <div class="contact-details-sec">
        <div class="container">
            <div class="con-det-top">
                <h4>Manage Hero Sections</h4>
            </div>
            <?php
            include 'connection.php';
            $select_home = "SELECT * FROM home_hero";
            $res9 = mysqli_query($conn,$select_home);
            $row9=mysqli_fetch_assoc($res9);

            $select_about = "SELECT * FROM about_hero";
            $res10 = mysqli_query($conn,$select_about);
            $row10=mysqli_fetch_assoc($res10); 
            
            $select_services = "SELECT * FROM services_hero";
            $res11 = mysqli_query($conn,$select_services);
            $row11=mysqli_fetch_assoc($res11); 

            $select_project = "SELECT * FROM project_hero";
            $res12 = mysqli_query($conn,$select_project);
            $row12=mysqli_fetch_assoc($res12); 

            $select_contact = "SELECT * FROM contact_hero";
            $res13 = mysqli_query($conn,$select_contact);
            $row13=mysqli_fetch_assoc($res13); 

            $select_blog = "SELECT * FROM blog_hero";
            $res14 = mysqli_query($conn,$select_blog);
            $row14=mysqli_fetch_assoc($res14); 

            $select_hired = "SELECT * FROM hired_hero";
            $res15 = mysqli_query($conn,$select_hired);
            $row15=mysqli_fetch_assoc($res15);
            
            $select_web = "SELECT * FROM web_hero";
            $res16 = mysqli_query($conn,$select_web);
            $row16=mysqli_fetch_assoc($res16);

            $select_software = "SELECT * FROM software_hero";
            $res17 = mysqli_query($conn,$select_software);
            $row17=mysqli_fetch_assoc($res17);

            $select_app = "SELECT * FROM app_hero";
            $res18 = mysqli_query($conn,$select_app);
            $row18=mysqli_fetch_assoc($res18);

            $select_ui = "SELECT * FROM ui_hero";
            $res19 = mysqli_query($conn,$select_ui);
            $row19=mysqli_fetch_assoc($res19);
            
             $select_course = "SELECT * FROM courses_hero";
            $res20 = mysqli_query($conn,$select_course);
            $row20=mysqli_fetch_assoc($res20);

            $select_event = "SELECT * FROM events_hero";
            $res21 = mysqli_query($conn,$select_event);
            $row21=mysqli_fetch_assoc($res21);
            ?>             
                <div class="contact-details-main res-tbl">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Page Name</th>
                                <th>Hero Title</th>
                                <th>Hero Description</th>
                                 <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Home</td>
                                <td><?php echo $row9['home_hero_title'] ?></td>
                                <td>
                                    <?php echo $row9['home_hero_des'] ?> <br><br>
                                    <?php echo $row9['home_hero_des2'] ?>
                                </td>
                                <td>
                                    <a href="add-home-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>About Us</td>
                                <td><?php echo $row10['about_hero_title'] ?></td>
                                <td><?php echo $row10['about_hero_des'] ?></td>
                                <td>
                                    <a href="add-about-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Services</td>
                                <td><?php echo $row11['services_hero_title'] ?></td>
                                <td><?php echo $row11['services_hero_des'] ?></td>
                                <td>
                                    <a href="add-services-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Our Projects</td>
                                <td><?php echo $row12['project_hero_title'] ?></td>
                                <td><?php echo $row12['project_hero_des'] ?></td>
                                <td>
                                    <a href="add-project-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Contact Us</td>
                                <td><?php echo $row13['contact_hero_title'] ?></td>
                                <td><?php echo $row13['contact_hero_des'] ?></td>
                                <td>
                                    <a href="add-contact-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Our Blog</td>
                                <td><?php echo $row14['blog_hero_title'] ?></td>
                                <td><?php echo $row14['blog_hero_des'] ?></td>
                                <td>
                                    <a href="add-blog-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Get Hired</td>
                                <td><?php echo $row15['hired_hero_title'] ?></td>
                                <td><?php echo $row15['hired_hero_des'] ?></td>
                                <td>
                                    <a href="add-hired-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Website Developmet</td>
                                <td><?php echo $row16['web_hero_title'] ?></td>
                                <td><?php echo $row16['web_hero_des'] ?></td>
                                <td>
                                    <a href="add-web-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Software Development</td>
                                <td><?php echo $row17['software_hero_title'] ?></td>
                                <td><?php echo $row17['software_hero_des'] ?></td>
                                <td>
                                    <a href="add-software-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Application Development</td>
                                <td><?php echo $row18['app_hero_title'] ?></td>
                                <td><?php echo $row18['app_hero_des'] ?></td>
                                <td>
                                    <a href="add-application-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>UI/UX Designing</td>
                                <td><?php echo $row19['ui_hero_title'] ?></td>
                                <td><?php echo $row19['ui_hero_des'] ?></td>
                                <td>
                                    <a href="add-ui-ux-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                             <tr>
                                <td>Courses</td>
                                <td><?php echo $row20['course_hero_title'] ?></td>
                                <td><?php echo $row20['course_hero_des'] ?></td>
                                <td>
                                    <a href="add-courses-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Events</td>
                                <td><?php echo $row21['event_hero_title'] ?></td>
                                <td><?php echo $row21['event_hero_des'] ?></td>
                                <td>
                                    <a href="add-event-hero.php" class="del-can">Change description
                                        </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    <!-- ==================================
        |           FOOTER SECTION            |
        ==================================== -->
    <footer>
        <div class="container">
            <div class="ftr-main">
                <div class="ftr-col">
                    <p><span>Fabtechsol</span> is a web and mobile app development Company that believes in making
                        tomorrow’s world a better place. We focus on.</p>
                    <div class="social-icons">
                        <a href="#"><img src="../img/twitter.png" alt="twitter-icon"></a>
                        <a href="https://www.facebook.com/fabulousolutions/" target="_blank"><img src="../img/fb.png"
                                alt="facebook-icon"></a>
                        <a href="#" target="_blank"><img src="../img/linkedin.png" alt="linkedin-icon"></a>
                        <a href="https://www.instagram.com/fabulous_technology_solutions/?hl=en" target="_blank"><img
                                src="../img/instagram.png" alt="instagram-icon"></a>
                    </div>
                </div>
                <div class="ftr-col">
                    <a href="https://www.google.com/maps/dir/32.5040684,74.5111716/fabtech+solutions+sialkot/@32.4919858,74.4989334,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x391eebf05050a257:0x65c6ed11df82a794!2m2!1d74.5271225!2d32.4811242"
                        target="_blank">
                        <div class="icon">
                            <img src="../img/location.png" alt="location-icon">
                        </div>
                        Akbar Plaza near Rescue 1122 Sialkot
                    </a>
                    <a href="mailto:info@fabtechsol" target="_blank">
                        <div class="icon">
                            <img src="../img/mail.png" alt="mail-icon" style="width: 24px; height:18px">
                        </div>
                        Info@fabtechsol
                    </a>
                </div>
                <div class="ftr-col">
                    <form action="">
                        <div class="email-box">
                            <input type="email" placeholder="Email">
                            <button type="submit"><img src="../img/send-ftr.png" alt="send-icon-footer"></button>
                        </div>
                    </form>
                    <div class="ftr-call">
                        <a href="tel:92 318 232 232 3" class="call">
                            <div class="icon">
                                <img src="../img/phone-icon.png" alt="phone-icon">
                            </div>
                            <div class="">
                                <span>+92 318 232 232 3</span>
                                <span>Call to Expert</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!-- ########################
    |              JS            |
    ########################## -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>