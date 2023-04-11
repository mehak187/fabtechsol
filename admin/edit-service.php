<?php
  session_start();
  if(isset($_SESSION['LAST_ACTIVE_TIME'])) {
    if((time()-$_SESSION['LAST_ACTIVE_TIME'])>60*30) {
        header('location:logout.php');
    }
 }

 $_SESSION['LAST_ACTIVE_TIME3'] = time();

 if(!isset($_SESSION['umail'])){
    header('location: login.php');
  }
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit service</title>
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
           <?php 
             include 'connection.php';
             $id2 = $_GET['id'];
             $sql = "select * FROM services_main where id = $id2";
             $res1 = mysqli_query($conn,$sql);
             $row1 = mysqli_fetch_assoc($res1); 
             
            if(isset($_POST['submit'])) {
                $service_title = $_POST['service_title'];
                $service_des =mysqli_real_escape_string($conn,$_POST['service_des']);
                $service_link = $_POST['service_link'];
                $service_alt = $_POST['service_alt'];

                $ser_id = $_POST['ser_id'];
                
                $file = $_FILES['service_icon'];
                $file_name = $file['name'];
                $file_tmp = $file['tmp_name'];
                $file_ext = explode(".",$file_name);
                $file_lower = strtolower(end($file_ext));
                $file_main = array('jpg','png','jpeg');

                $file2 = $_FILES['service_image'];
                $file_name2 = $file2['name'];
                $file_tmp2 = $file2['tmp_name'];
                $file_ext2 = explode(".",$file_name2);
                $file_lower2 = strtolower(end($file_ext2));
                $file_main2 = array('jpg','png','jpeg','webp');

                if((in_array($file_lower,$file_main)) && (in_array($file_lower2,$file_main2))){
                    $dest_file = '../upload/' .$file_name;
                    move_uploaded_file($file_tmp,$dest_file);

                    $dest_file2 = '../upload/' .$file_name2;
                    move_uploaded_file($file_tmp2,$dest_file2);
$up_sql = "update services_main set service_title='$service_title', service_des='$service_des', service_link='$service_link', service_icon='$dest_file', service_image='$dest_file2',service_alt='$service_alt' WHERE id=$ser_id";
$res = mysqli_query($conn,$up_sql) or die("query failed");
                    // $res = mysqli_query($conn,$up_sql);
                    ?>
                    <script>window.location="https://fabtechsol.com/admin/manage-services.php";</script>
                    <?php
                    $_SESSION['EDIT'] = "hey2";
                } 
                else{
                    ?><script>
                    swal("", "Invalid File Format", "error");
                    </script>
                <?php } 
            } ?>
            <div class="add-news">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"
                            enctype="multipart/form-data">
                        <h4>Edit Service</h4>
                        <input type="hidden" placeholder="" name="ser_id" id="ser_id" value="<?php echo $row1['id'] ?>">
                       <div class="field">
                            <label for="service_title">Service Title</label>
                            <input type="text" placeholder="" value="<?php echo $row1['service_title'] ?>" name="service_title" id="service_title">
                        </div>
                        <div class="field">
                            <label for="service_des">Service Description</label>
                            <textarea  placeholder="" name="service_des" id="service_des"><?php echo $row1['service_des'] ?></textarea>
                        </div>
                        <div class="field">
                            <label for="service_icon">Service Icon</label>
                            <input type="file" name="service_icon" value="<?php echo $row1['service_icon'] ?>" id="service_icon"  required>
                        </div>
                        <div class="field">
                            <label for="service_image">Service Image</label>
                            <input type="file" name="service_image" value="<?php echo $row1['service_image'] ?>" id="service_image" required>
                             <p class="note">Recommended size:298 X 200</p>
                        </div>
                        <div class="field">
                            <label for="service_alt">Service Image Alt</label>
                            <input type="text" placeholder="" value="<?php echo $row1['service_alt'] ?>" name="service_alt" id="service_alt">
                        </div>
                        <div class="field">
                            <label for="service_link">Service Detail Page Link</label>
                             <input type="text" placeholder="Service Link" value="<?php echo $row1['service_link'] ?>" name="service_link" id="service_link">
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