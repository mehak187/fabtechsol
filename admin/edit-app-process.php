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
    <title>Edit Application process</title>
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
             $sql = "SELECT * FROM app_process where id = $id2";
             $res1 = mysqli_query($conn,$sql);
             $row1 = mysqli_fetch_assoc($res1); 
             
            if(isset($_POST['submit'])) {
                $heading = $_POST['heading'];
                $des =mysqli_real_escape_string($conn,$_POST['des']);
                $list_item = implode(", ", $_POST['list_item']);

                $ser_id = $_POST['ser_id'];
                
                $file = $_FILES['icon'];
                $file_name = $file['name'];
                $file_tmp = $file['tmp_name'];
                $file_ext = explode(".",$file_name);
                $file_lower = strtolower(end($file_ext));
                $file_main = array('jpg','png','jpeg');

                if(in_array($file_lower,$file_main)){
                    $dest_file = '../upload/' .$file_name;
                    move_uploaded_file($file_tmp,$dest_file);

                    $up_sql = "update app_process set heading='$heading', des='$des', icon='$dest_file' WHERE id=$ser_id" or die("query failed");
                    $res = mysqli_query($conn,$up_sql);
                    ?>
                    <script>window.location="https://fabtechsol.com/admin/manage-app-service.php";</script>
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
                        <h4>Edit Application Service Process</h4>
                        <input type="hidden" placeholder="" name="ser_id" id="ser_id" value="<?php echo $row1['id'] ?>">
                        <div class="field">
                            <label for="heading">Heading</label>
                            <input type="text" placeholder="" value="<?php echo $row1['heading'] ?>" name="heading" id="heading" required>
                        </div>
                        <div class="field">
                            <label for="des">Description</label>
                            <textarea  placeholder="" name="des" id="des" required><?php echo $row1['des'] ?></textarea>
                        </div>
                        <div class="field">
                            <label for="icon">Icon</label>
                            <input type="file" name="icon" id="icon" required>
                             <p class="note">Recommended size:33 X 33</p>
                        </div>
                        
                        <!--<div class="add-list" id="dup-sec">-->
                        <!--    <div class="field" id="dup-con">-->
                        <!--        <label for="list_item">List item </label>-->
                        <!--        <input type="text" placeholder="Add list item" name="list_item[]" id="list_item" required>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="add-more" id="dup-btn">-->
                        <!--        <img src="../img/duplicate.png" alt="">-->
                        <!--</div>-->
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
     <script>
            $(document).ready(function(){
              $("#dup-btn").click(function(){
                $("#dup-con").clone().appendTo("#dup-sec");
              });
            });
            </script>

    </body>

</html>