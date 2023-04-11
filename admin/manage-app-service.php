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
//  --------only one time delete alert-----
 if(isset($_SESSION['DEL'])){
    if((time()-$_SESSION['LAST_ACTIVE_TIME2'])<2) {
        ?><script>
            window.alert("Record deleted successfully");
        </script><?php
    }
  }
  
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
    <title>Manage Application Service</title>
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
                <h4>Application Development Service</h4>
            </div>

            <!-- -------service text-------- -->
            <?php
                include 'connection.php';
                $sel64 = "SELECT * FROM about_app" or die("conn failed");
                $res_sql64 = mysqli_query($conn,$sel64) or die("query failed");
                $row64 = mysqli_fetch_assoc($res_sql64);
                if(mysqli_num_rows($res_sql64)>0) { ?>
                <div class="contact-details-main res-tbl">
                <h5>Application Service About Section</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Heading</th>
                                <th>Sub Heading</th>
                                <th>Description</th>
                                <th>Image-1</th>
                                <th>Image-2</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $row64['heading'] ?></td>
                                <td><?php echo $row64['sub_heading'] ?></td>
                                <td><?php echo $row64['des'] ?></td>
                                <td><img src="../<?php echo $row64['img_1'] ?>" alt="<?php echo $row64['heading'].'-1' ?>"></td>
                                <td><img src="../<?php echo $row64['img_2'] ?>" alt="<?php echo $row64['heading'].'-2' ?>"></td>
                                <td><a href="add-about-app.php" class="del-can">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php }
            else { ?>
                <div class="no-record">
                    <img src="../img/alert-icon.png" alt="alert-icon">
                    <h6>There is no record to show</h6>
                </div>
            <?php } 
            ?>
            <!-- ---------service-box-------- -->
            
            <?php
            include 'connection.php';
            $select71 = "SELECT * FROM app_process";
            $res71 = mysqli_query($conn,$select71);
            if(mysqli_num_rows($res71)>=1) { ?>
                <div class="contact-details-main res-tbl">
                <div class="con-det-top">
                    <h4>Application Development Process</h4>
                    <div class="blue-btns-main">
                        <div class="blue-btn">
                            <a href="add-app-process.php">Add Application Process</a>
                        </div>
                    </div>
            </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <!--<th>List items</th>-->
                                <th>Icon</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sr = 1;
                                while($row71 = mysqli_fetch_assoc($res71)) { ?>
                            <tr>
                                <td><?php echo $sr ?></td>
                                <td><?php echo $row71['heading'] ?></td>
                                <td><?php echo $row71['des'] ?></td>
                                
                                <td> <img src="../<?php echo $row71['icon'] ?>" alt="icon"></td>
                                <td>
                                    <a href="del-app-process.php?id=<?php echo $row71['id'];?>" class="del-can">Delete
                                        </a>
                                </td>
                                <td>
                                    <a href="edit-app-process?id=<?php echo $row71['id'];?>" class="del-can">Edit
                                        </a>
                                </td>
                            </tr>
                            <?php $sr++; } ?>
                        </tbody>
                    </table>
                </div>
            <?php }
            else {?>
                <div class="no-record">
                    <img src="../img/alert-icon.png" alt="alert-icon">
                    <h6>There is no record to show</h6>
                </div>
            <?php } 
            ?>
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