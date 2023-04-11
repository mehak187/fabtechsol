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
    <title>Add ceo message admin</title>
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
            <!--<div class="con-det-top">-->
            <!--    <h4>Admin News</h4>-->
            <!--    <div class="blue-btn">-->
            <!--        <a href="contact-details.php">Contact Form Details</a>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="add-news">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"
                            enctype="multipart/form-data">
                        <h4>Add CEO Message</h4>
                        <div class="field">
                            <label for="msg_title">Message Heading</label>
                            <input type="text" placeholder="Message Heading" name="msg_title" id="msg_title" required>
                        </div>
                        <div class="field">
                            <label for="msg_des">Message Description</label>
                            <textarea placeholder="Message Description" name="msg_des" id="msg_des" required></textarea>
                        </div>
                        <div class="field">
                            <label for="ceo_name">CEO Name</label>
                            <input type="text" placeholder="CEO Name" name="ceo_name" id="ceo_name" required>
                        </div>
                        <div class="field">
                            <label for="ceo_img">CEO Image</label>
                            <input type="File" placeholder="CEO Image" name="ceo_img" id="ceo_img" required>
                             <p class="note">Recommended size:400 X 400</p>
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
   
</body>

</html>
<?php
        include 'connection.php';
        if(isset($_POST['submit'])) { 
            $msg_title = $_POST['msg_title'];
            $msg_des =mysqli_real_escape_string($conn,$_POST['msg_des']);
            $ceo_name = $_POST['ceo_name'];

            $file3 = $_FILES['ceo_img'];
            $file_name3 = $file3['name'];
            $file_tmp3 = $file3['tmp_name'];
            $file_ext3 = explode(".",$file_name3);
            $file_lower3 = strtolower(end($file_ext3));
            $file_main3 = array('jpg','png','jpeg','webp');
            
            $sel = "SELECT * FROM ceo_msg" or die("conn failed");
            $res_sql = mysqli_query($conn,$sel);
            $row = mysqli_fetch_assoc($res_sql);

            if(in_array($file_lower3,$file_main3)) {
                $dest_file3 = '../upload/' .$file_name3;
                move_uploaded_file($file_tmp3,$dest_file3);

                if(mysqli_num_rows($res_sql)>0) {
                    $up = "update ceo_msg set msg_title='$msg_title',msg_des='$msg_des',ceo_name='$ceo_name',ceo_img='$dest_file3'";
                    $res_up = mysqli_query($conn,$up);        
                    ?><script>
                    swal("", "CEO Message updated successfully","success");
                    </script> <?php 
                }
                else {
                    $insert_sql = "INSERT INTO ceo_msg(msg_title,msg_des,ceo_name,ceo_img) Values('$msg_title','$msg_des','$ceo_name','$dest_file3')" or die("conn failed");
                    $res = mysqli_query($conn,$insert_sql);
                    ?><script>
                    swal("", "CEO Message added successfully","success");
                    </script><?php
                }
            }
            else {
                ?><script>
                swal("", "Invalid File Format", "error");
                </script><?php
            } 
        } 
    ?>