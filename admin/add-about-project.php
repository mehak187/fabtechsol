<?php
  session_start();
  if(isset($_SESSION['LAST_ACTIVE_TIME'])) {
    if((time()-$_SESSION['LAST_ACTIVE_TIME'])>60*30) {
        header('location:logout.php');
    }
 }

//  $_SESSION['LAST_ACTIVE_TIME'] = time();

   if(!isset($_SESSION['umail'])){
    header('location: login.php');
  }

  if(isset($_SESSION['DEL'])){
    if((time()-$_SESSION['LAST_ACTIVE_TIME1'])<2) {
        ?><script>
            window.alert("Record deleted successfully");
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
    <title>Add about project</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <meta name="description"
        content="Fabulous Technology Solutions one of the Top IT Company provides services in Web Application, Software development, Mobile App Development, Web Development, UI/UX design and Electrical Hardware Development .">
    <meta name="keyword"
        content="fab techsol, Fabulous Technology Solutions, it software company, Software house, Software Development Company,Web Application Development Company,Web Application,Web Application development,Software Development,Website Development,Best web application Developers,Mobile Application Developers,IT company">
<meta name="author" content="fab techsol">
    <link rel="stylesheet" href="../css/main.css">
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
    <div class="contact-details-sec contact-us-sec">
        <div class="container">
           
            <div class="add-news">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"
                            enctype="multipart/form-data">
                        <h4>Add About Project</h4>
                        <div class="field">
                            <label for="heading">Heading</label>
                            <input type="text" placeholder="Our Projects" name="heading" id="heading" required>
                        </div>
                        <div class="field">
                            <label for="sub_heading">Sub Heading</label>
                            <input type="text" placeholder="We provide the best IT Solution Services" name="sub_heading" id="sub_heading" required>
                        </div>
                        <div class="field">
                            <label for="des">Description</label>
                            <textarea  placeholder="FABTECHSOL Is A Global Web Design And Development Company That Provides Intelligent, Cost-Effective Web And IT Solutions. Thanks To Our Client-First Ideology, We've Gained Worldwide Recognition For The Quality Of Our Products, Services, And Solutions." name="des" id="des" required></textarea>
                        </div>
                        <div class="field">
                            <label for="btn_name">Button Name</label>
                            <input type="text" placeholder="Discover more" name="btn_name" id="btn_name" required>
                        </div>
                        <div class="field">
                            <label for="btn_link">Button Link (only page name)</label>
                            <input type="text" placeholder="#" name="btn_link" id="btn_link" required>
                        </div>
                        <div class="field">
                            <label for="img_1">Image 1</label>
                            <input type="file" name="img_1" id="img_1" required>
                            <p class="note">Recommended size:515 X 347</p>
                        </div>
                        <div class="submit-btn">
                            <input type="submit" name="submit" value="Submit">
                        </div>
                    </form>
               </div>
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
     <!-- -------sweet alert------ -->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
        include 'connection.php';
        if(isset($_POST['submit'])) {
            $heading = $_POST['heading'];
            $sub_heading = $_POST['sub_heading'];
            $des=mysqli_real_escape_string($conn,$_POST['des']);
            $btn_name=mysqli_real_escape_string($conn,$_POST['btn_name']);
            $btn_link=mysqli_real_escape_string($conn,$_POST['btn_link']);
             
            $file = $_FILES['img_1'];
            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];
            $file_ext = explode(".",$file_name);
            $file_lower = strtolower(end($file_ext));
            $file_main = array('jpg','png','jpeg');

            $sel = "SELECT * FROM about_project" or die("conn failed");
            $res_sql = mysqli_query($conn,$sel);
            $row = mysqli_fetch_assoc($res_sql);
            if(in_array($file_lower,$file_main)) {
                $dest_file = '../upload/' .$file_name;
                move_uploaded_file($file_tmp,$dest_file);

                if(mysqli_num_rows($res_sql)>0) {
                    $up = "update about_project set heading='$heading',sub_heading='$sub_heading',des='$des',btn_name='$btn_name',btn_link='$btn_link',img_1='$dest_file'";
                    $res_up = mysqli_query($conn,$up);        
                    ?><script>
                    swal("", "About Project content updated successfully","success");
                    </script> <?php 
                } 
                else{
                    $insert_sql = "INSERT INTO about_project(heading,sub_heading,des,btn_name,btn_link,img_1) Values('$heading','$sub_heading','$des','$btn_name','$btn_link','$dest_file')" or die("conn failed");
                    $res = mysqli_query($conn,$insert_sql);
                    ?><script>
                    swal("", "About Project content added successfully","success");
                    </script><?php
                    } 
            }
            else{
                ?><script>
                    swal("", "Invalid File Format", "error");
                </script> <?php 
            } 
        } ?>
    </body>

</html>