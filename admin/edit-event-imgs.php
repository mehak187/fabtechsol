<?php
session_start();
if (isset($_SESSION['LAST_ACTIVE_TIME'])) {
    if ((time() - $_SESSION['LAST_ACTIVE_TIME']) > 60 * 30) {
        header('location:logout.php');
    }
}

//  $_SESSION['LAST_ACTIVE_TIME'] = time();

if (!isset($_SESSION['umail'])) {
    header('location: login.php');
}

if (isset($_SESSION['DEL'])) {
    if ((time() - $_SESSION['LAST_ACTIVE_TIME1']) < 2) {
        ?>
        <script>
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
    <title>Update Event Images</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <meta name="description"
        content="Fabulous Technology Solutions one of the Top IT Company provides services in Web Application, Software development, Mobile App Development, Web Development, UI/UX design and Electrical Hardware Development .">
    <meta name="keyword"
        content="fab techsol, Fabulous Technology Solutions, it software company, Software house, Software Development Company,Web Application Development Company,Web Application,Web Application development,Software Development,Website Development,Best web application Developers,Mobile Application Developers,IT company">
    <meta name="author" content="fab techsol">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

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
            if (isset($_GET['id'])) {
                $id2 = $_GET['id'];
            } 
            $sql = "SELECT * FROM events_imgs WHERE event_id=$id2";
            $result = mysqli_query($conn, $sql);
            ?>
            <div class="add-news">
                <form action="" method="POST"
                    enctype="multipart/form-data">
                    <h4>Change Event Images</h4>
                    <input type="hidden" name="ev_id" value="<?php echo $id2 ?>">

                    <!-- run loop bcoz img are multiple -->
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {?>
                            <div>
                                <div id="<?php echo $row['id'] ?>">
                                    <img src="<?php echo $row['event_img'] ?>" alt="" style="width:100%;max-width:150px;margin:10px 0;">
                                </div>
                            </div>
                       <?php  }
                       
                    ?>
                    <div class="field del-old-btn">
                         <button type="submit" name="delete">Delete old images</button>
                    </div>
                     <div class="add-list" id="dup-sec">
                        <div class="field" id="dup-con">
                            <label for="other-img">Event images</label>
                            <input type="file" name="other_img[]" id="other-img">
                        </div>
                    </div>
                    <div class="add-more" id="dup-btn">
                        Add more images<img src="../img/duplicate.png" alt="">
                    </div>
                    <div class="submit-btn">
                        <input type="submit" name="add" value="Submit">
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
        $(document).ready(function () {
            $("#dup-btn").click(function () {
                $("#dup-con").clone().appendTo("#dup-sec");
            });
        });
    </script>
    <?php
    if (isset($_POST['delete'])) {
        $id=$_POST['ev_id'];
        $del2 = "DELETE from events_imgs WHERE event_id=$id";
        $res2 = mysqli_query($conn, $del2);
        ?> 
        <script>window.location = "manage-events.php";</script>  -->
       <?php
    }
    $ev_id = $_POST['ev_id'];
    if (isset($_POST['add'])) {
        for ($i = 0; $i < count($_FILES['other_img']['name']); $i++) {
            $image_name = $_FILES['other_img']['name'][$i];
            $image_size = $_FILES['other_img']['size'][$i];
            $image_tmp = $_FILES['other_img']['tmp_name'][$i];

            // Check if the file is an image
            $image_type = exif_imagetype($image_tmp);
            if ($image_type !== false) {
                $allowed_types = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
                if (in_array($image_type, $allowed_types)) {

                    // Upload the image to the server
                    $image_path = '../upload/' . $image_name;
                    move_uploaded_file($image_tmp, $image_path);

                    // Store the image details in the database
                    $sql = "INSERT INTO events_imgs (event_id, event_img) VALUES ($ev_id, '$image_path')";
                    $res_sql = mysqli_query($conn, $sql);
                     ?> 
                      <script>window.location = "manage-events.php";</script>  -->
                     <?php
                } else {
                    echo "Invalid Event image type. Only PNG, JPEG, and GIF images are allowed.";
                }
            } else {
                echo "Invalid image format";
            }
        }
    }
        ?>


</body>

</html>