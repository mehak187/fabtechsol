<?php
session_start();

if (!isset($_SESSION['umail'])) {
    header('location: login.php');
}

if (isset($_SESSION['LAST_ACTIVE_TIME'])) {
    if ((time() - $_SESSION['LAST_ACTIVE_TIME']) > 60 * 30) {
        header('location:logout.php');
    }
}
// ------------for idle usr----
$_SESSION['LAST_ACTIVE_TIME'] = time();
//  --------only one time edit alert-----
if (isset($_SESSION['EDIT'])) {
    if ((time() - $_SESSION['LAST_ACTIVE_TIME3']) < 2) {
?>
<script>
    window.alert("Record Updated successfully");
</script>
<?php
    }
}
//  --------only one time delete alert-----
if (isset($_SESSION['DEL'])) {
    if ((time() - $_SESSION['LAST_ACTIVE_TIME2']) < 2) {
        ?>
<script>
    window.alert("Record deleted successfully");
</script>
<?php
    }
}
        ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage blog</title>
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
            <div class="con-det-top con-det-blog">
                <h4>Manage Blog Sections</h4>
            </div>
            <?php
            include 'connection.php';
            $select41 = "SELECT * FROM who_we_are";
            $res41 = mysqli_query($conn, $select41);
            $row41 = mysqli_fetch_assoc($res41);

            $select42 = "SELECT * FROM our_approach";
            $res42 = mysqli_query($conn, $select42);
            $row42 = mysqli_fetch_assoc($res42);

            $select43 = "SELECT * FROM our_mission";
            $res43 = mysqli_query($conn, $select43);
            $row43 = mysqli_fetch_assoc($res43);

            $select44 = "SELECT * FROM our_vision";
            $res44 = mysqli_query($conn, $select44);
            $row44 = mysqli_fetch_assoc($res44);

            $select45 = "SELECT * FROM our_core_values";
            $res45 = mysqli_query($conn, $select45);
            $row45 = mysqli_fetch_assoc($res45);

          
            ?>
              <?php
                  $select46 = "SELECT * FROM blog_main order by id DESC";
                  $res46 = mysqli_query($conn, $select46);
                if (mysqli_num_rows($res46) > 0) { ?>
                <div class="con-det-top">
                    <h4>Blog</h4>
                    <div class="blue-btns-main">
                        <div class="blue-btn">
                            <a href="add-blog-admin.php" target="_blank">Add blog</a>
                        </div>
                    </div>
                </div>
            <div class="contact-details-main res-tbl">
                
                <table class="table blog-tbl">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Page Title</th>
                            <th>Meta Description</th>
                            <th>Canonical Tags</th>
                            <th>Image 1</th>
                            <th>Image 1 Alt</th>
                            <th>Description 1</th>
                            <th>Image 2</th>
                            <th>Image 2 Alt</th>
                            <th>Description 2</th>
                            <th>Image 3</th>
                            <th>Image 3 Alt</th>
                            <th>Description 3</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    while ($row46 = mysqli_fetch_assoc($res46)) {
                            ?>
                        <tr>
                            <td>
                                 <?php echo $row46['title'] ?>
                            </td>
                            <td>
                                <?php echo $row46['meta_title'] ?>
                            </td>
                            <td>
                                <?php echo $row46['meta_des'] ?>
                            </td>
                            <td>
                                <?php echo $row46['meta_con'] ?>
                            </td>
                            <td>
                                <img src="../<?php echo $row46['img1'] ?>" alt="post">
                            </td>
                             <td>
                                <div class="blog-des-admin">
                                    <?php echo $row46['img1_alt'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="blog-des-admin">
                                    <?php echo $row46['des1'] ?>
                                </div>
                            </td>
                            <td>
                                <img src="../<?php echo $row46['img2'] ?>" alt="post">
                            </td>
                            <td>
                                <div class="blog-des-admin">
                                    <?php echo $row46['img2_alt'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="blog-des-admin">
                                <?php echo $row46['des2'] ?>
                                </div>
                            </td>
                            <td>
                                <img src="../<?php echo $row46['img3'] ?>" alt="post">
                            </td>
                            <td>
                                <div class="blog-des-admin">
                                    <?php echo $row46['img3_alt'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="blog-des-admin">
                                <?php echo $row46['des3'] ?>
                                </div>
                            </td>
                            <td>
                                <a href="del-blog.php?id=<?php echo $row46['id'] ?>" class="del-can">Delete
                                </a>
                            </td>
                            <td>
                                <a href="edit-blog.php?id=<?php echo $row46['id'] ?>" class="del-can">Edit
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php } ?>
            <!-- -------who we are-------- -->
            <div class="contact-details-main res-tbl">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $row41['heading'] ?>
                            </td>
                            <td>
                                <?php echo $row41['des'] ?>
                            </td>
                            <td>
                                <a href="add-who-we-are.php" class="del-can" target="_blank">Edit
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <?php echo $row42['heading'] ?>
                            </td>
                            <td>
                                <?php echo $row42['des'] ?>
                            </td>
                            <td>
                                <a href="add-our-approach.php" class="del-can" target="_blank">Edit
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <?php echo $row43['heading'] ?>
                            </td>
                            <td>
                                <?php echo $row43['des'] ?>
                            </td>
                            <td>
                                <a href="add-our-mission.php" class="del-can" target="_blank">Edit
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <?php echo $row44['heading'] ?>
                            </td>
                            <td>
                                <?php echo $row44['des'] ?>
                            </td>
                            <td>
                                <a href="add-our-vision.php" class="del-can" target="_blank">Edit
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <?php echo $row45['heading'] ?>
                            </td>
                            <td>
                                <?php echo $row45['des'] ?>
                            </td>
                            <td>
                                <a href="add-our-vision.php" class="del-can" target="_blank">Edit
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- ---------core-value------ -->
            
            <div class="contact-details-main res-tbl">
                <div class="con-det-top">
                    <h4>Core Value Section</h4>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $row45['heading'] ?>
                            </td>
                            <td>
                                <?php echo $row45['des'] ?>
                            </td>
                            <td>
                                <a href="add-our-core-value.php" class="del-can" target="_blank">Edit
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- ---------core-value-box--- -->

            <?php
                $select51 = "SELECT * FROM core_value_box order by id DESC";
                $res51 = mysqli_query($conn, $select51);
                if (mysqli_num_rows($res51) > 0) { ?>

            <div class="contact-details-main res-tbl">
                <div class="con-det-top">
                    <h4>Core Value box</h4>
                    <div class="blue-btns-main">
                        <div class="blue-btn">
                            <a href="add-core-value.php" target="_blank">Add core value</a>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    while ($row51 = mysqli_fetch_assoc($res51)) {
                            ?>
                        <tr>
                            <td>
                                <?php echo $row51['heading'] ?>
                            </td>
                            <td>
                                <?php echo $row51['des'] ?>
                            </td>
                            <td>
                                <a href="del-core-value.php?id=<?php echo $row51['id'] ?>" class="del-can">Delete
                                </a>
                            </td>
                            <td>
                                <a href="edit-core-value.php?id=<?php echo $row51['id'] ?>" class="del-can">Edit
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php } ?>

            <!-- ----------quality policy----- -->
            
            <?php
                $select51 = "SELECT * FROM quality_policy order by id DESC";
                $res51 = mysqli_query($conn, $select51);
                if (mysqli_num_rows($res51) > 0) { ?>
            <div class="contact-details-main res-tbl">
                <div class="con-det-top">
                    <h4>Our quality policy</h4>
                    <div class="blue-btns-main">
                        <div class="blue-btn">
                            <a href="add-quality-policy" target="_blank">Add quality policy</a>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    while ($row51 = mysqli_fetch_assoc($res51)) {
                            ?>
                        <tr>
                            <td>
                                <?php echo $row51['des'] ?>
                            </td>
                            <td>
                                <a href="del-quality-policy.php?id=<?php echo $row51['id'] ?>" class="del-can">Delete
                                </a>
                            </td>
                            <td>
                                <a href="edit-quality-policy.php?id=<?php echo $row51['id'] ?>" class="del-can">Edit
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php } ?>
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