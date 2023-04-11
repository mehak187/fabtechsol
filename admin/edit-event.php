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
    <title>Update Events</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <meta name="description"
        content="Fabulous Technology Solutions one of the Top IT Company provides services in Web Application, Software development, Mobile App Development, Web Development, UI/UX design and Electrical Hardware Development .">
    <meta name="keyword"
        content="fab techsol, Fabulous Technology Solutions, it software company, Software house, Software Development Company,Web Application Development Company,Web Application,Web Application development,Software Development,Website Development,Best web application Developers,Mobile Application Developers,IT company">
    <meta name="author" content="fab techsol">
    <link rel="stylesheet" href="../css/main.css">
    <?php
    include 'connection.php';
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
 if (isset($_GET['id'])) {
    $id2 = $_GET['id'];
    $sql7 = "SELECT * FROM events where id = $id2";
    $res7 = mysqli_query($conn, $sql7);
    $row7 = mysqli_fetch_assoc($res7);
}
?>
            <div class="add-news">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"
                    enctype="multipart/form-data">
                    <h4>Add Event</h4>
                    <input type="hidden" name="event_id" value="<?php echo $row7['id'] ?>">

                    <div class="field">
                        <label for="event_title">Event Title</label>
                        <input type="text" value="<?php echo $row7['title'] ?>" name="event_title" id="event_title">
                    </div>
                    <div class="field">
                        <label for="event_des">Event Description</label>
                        <textarea placeholder="event Description" name="event_des" id="event_des"><?php echo $row7['des'] ?></textarea>
                    </div>
                    <div class="field">
                        <label for="">Event Thumbnail Image</label>
                        <input type="file" name="event_img" id="event_img" style="display:none" onchange="readURL(this);">
                        <label for="event_img" style="max-width:100px;margin-top:6px">
                            <img src="<?php echo $row7['main_img'] ?>"
                                alt="<?php echo $row7['main_img'] . "-event" ?>" style="width:100%" id="blah">
                        </label>
                        <script>
                        function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    $('#blah')
                                        .attr('src', e.target.result);
                                };
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
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
    <script>
        $(document).ready(function () {
            $("#dup-btn").click(function () {
                $("#dup-con").clone().appendTo("#dup-sec");
            });
        });
    </script>

    <?php
   
    if (isset($_POST['submit'])) {
        $event_title = $_POST['event_title'];
        $event_des = mysqli_real_escape_string($conn, $_POST['event_des']);

        $file2 = $_FILES['event_img'];
        $file_name2 = $file2['name'];
        $file_tmp2 = $file2['tmp_name'];
        $file_ext2 = explode(".", $file_name2);
        $file_lower2 = strtolower(end($file_ext2));
        $file_main2 = array('jpg', 'png', 'jpeg', 'webp');

        $event_id = $_POST['event_id'];
        $img_idsp = $_POST['img_idsp'];

        if (empty($file2['name'])) {
            $up_sql = "update events set title='$event_title', des='$event_des' WHERE id=$event_id" or die("query failed");
            $res = mysqli_query($conn, $up_sql);
            ?>
            <script>
                window.location = "manage-events.php";
            </script>
        <?php } else {
            if (in_array($file_lower2, $file_main2)) {
                $dest_file2 = '../upload/' . $file_name2;
                move_uploaded_file($file_tmp2, $dest_file2);
                $up_sql = "update events set title='$event_title', des='$event_des', main_img='$dest_file2' WHERE id=$event_id" or die("query failed");
                $res = mysqli_query($conn, $up_sql);
                ?>
                <script>window.location = "manage-events.php";</script>
                <?php
            } else {
                ?>
                <script>
                    swal("", "Invalid Thumbnail Image Format", "error");
                </script>
            <?php }

        }
    } ?>

</body>

</html>