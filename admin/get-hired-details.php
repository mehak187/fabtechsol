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
    <title>get hired admin</title>
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
    <div class="contact-details-sec">
        <div class="container">
            <div class="con-det-top">
                <h4>Get Hired Form Details</h4>
            </div>
            <!-- -----filters------ -->
            <div class="filters-admin">

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="">
                        <?php
                        include 'connection.php';
                        // ---------city---filter-box----------
                        $select_city = "SELECT DISTINCT city FROM hiring_form";
                        $res2 = mysqli_query($conn, $select_city); ?>
                        <div class="filters-main">
                            <select name="city" id="">
                                <option value="" disabled selected hidden>Search by city</option>
                                <?php while ($row2 = mysqli_fetch_assoc($res2)) { ?>
                                    <option value="<?php echo $row2['city'] ?>"><?php echo $row2['city'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="filter-btn">
                                <button type="submit" name="cityf">Enter</button>
                            </div>
                        </div>
                        <?php
                        // ---------date---filter-box----------
                        $select_date = "SELECT DISTINCT date FROM hiring_form order by id DESC";
                        $res5 = mysqli_query($conn, $select_date); ?>
                        <div class="filters-main">
                            <select name="date" id="">
                                <option value="" disabled selected hidden>Search by date</option>
                                <?php while ($row5 = mysqli_fetch_assoc($res5)) { ?>
                                    <option value="<?php echo $row5['date'] ?>"><?php echo $row5['date'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="filter-btn">
                                <button type="submit" name="datef">Enter</button>
                            </div>
                        </div>
                    </div>
                    <!-------all-filter--------->
                    <div>
                        <button type="submit" name="allrec" class="all-rec-btn">Check all records</button>
                    </div>
                </form>
            </div>

            <!-- -------If FILTER city ---- -->
            <?php if (isset($_POST['cityf'])) {
                $mycity = $_POST['city'];
                $selbycity = "SELECT * FROM hiring_form WHERE city='$mycity'";
                $res_selbycity = mysqli_query($conn, $selbycity); ?>

                <div class="contact-details-main res-tbl">
                    <h4 class="fil-head">Filtered by
                        <?php echo $mycity ?>
                    </h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Job Type</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Degree</th>
                                <th>Qualification</th>
                                <th>CV</th>
                                <th>Submission Date</th>
                                <th>Details</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sr = 1;
                            while ($rcity = mysqli_fetch_assoc($res_selbycity)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $sr ?>
                                    </td>
                                    <td>
                                        <?php echo $rcity['apply'] ?>
                                    </td>
                                    <td>
                                        <?php echo $rcity['fname'] . " " . $rcity['lname'] ?>
                                    </td>
                                    <td>
                                        <?php echo $rcity['number'] ?>
                                    </td>
                                    <td>
                                        <?php echo $rcity['city'] ?>
                                    </td>
                                    <td>
                                        <?php echo $rcity['degree'] ?>
                                    </td>
                                    <td>
                                        <?php echo $rcity['qualification'] ?>
                                    </td>
                                    <td>
                                        <?php echo $rcity['date'] ?>
                                    </td>
                                    <td>
                                        <a href="../<?php echo $rcity['cv'] ?>" target="_blank">Download CV</a>
                                    </td>
                                    <td><a href="get-hired-person-details.php?id=<?php echo $rcity['id']; ?>"
                                            target="_blank">Details</a></td>
                                    <td>
                                        <a href="del.php?id=<?php echo $rcity['id']; ?>" class="del-can">Delete
                                        </a>
                                    </td>

                                </tr>
                                <?php $sr++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            <?php } elseif (isset($_POST['datef'])) {
                $mydate = $_POST['date'];
                $selbydate = "SELECT * FROM hiring_form WHERE date='$mydate'";
                $res_selbydate = mysqli_query($conn, $selbydate); ?>

                <div class="contact-details-main res-tbl">
                    <h4 class="fil-head">Filtered by
                        <?php echo $mydate ?>
                    </h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Job Type</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Degree</th>
                                <th>Qualification</th>
                                <th>CV</th>
                                <th>Submission Date</th>
                                <th>Details</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sr = 1;
                            while ($rdate = mysqli_fetch_assoc($res_selbydate)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $sr ?>
                                    </td>
                                    <td>
                                        <?php echo $rdate['apply'] ?>
                                    </td>
                                    <td>
                                        <?php echo $rdate['fname'] . " " . $rcity['lname'] ?>
                                    </td>
                                    <td>
                                        <?php echo $rdate['number'] ?>
                                    </td>
                                    <td>
                                        <?php echo $rdate['city'] ?>
                                    </td>
                                    <td>
                                        <?php echo $rdate['degree'] ?>
                                    </td>
                                    <td>
                                        <?php echo $rdate['qualification'] ?>
                                    </td>
                                    <td>
                                        <?php echo $rdate['date'] ?>
                                    </td>
                                    <td>
                                        <a href="../<?php echo $rdate['cv'] ?>" target="_blank">Download CV</a>
                                    </td>
                                    <td><a href="get-hired-person-details.php?id=<?php echo $rdate['id']; ?>"
                                            target="_blank">Details</a></td>
                                    <td>
                                        <a href="del.php?id=<?php echo $rdate['id']; ?>" class="del-can">Delete
                                        </a>
                                    </td>

                                </tr>
                                <?php $sr++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            <?php }
            // ----------all records----
            elseif (isset($_POST['allrec'])) {
                // -----all record btn filter---
                $select_contact = "SELECT * FROM hiring_form ORDER BY id DESC";
                $res3 = mysqli_query($conn, $select_contact);
                if (mysqli_num_rows($res3) >= 1) { ?>
                    <div class="contact-details-main res-tbl">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Job Type</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Degree</th>
                                    <th>Qualification</th>
                                    <th>Submission Date</th>
                                    <th>CV</th>
                                    <th>Details</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sr = 1;
                                while ($row3 = mysqli_fetch_assoc($res3)) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $sr ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['apply'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['fname'] . " " . $row3['lname'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['number'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['city'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['degree'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['qualification'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['date'] ?>
                                        </td>
                                        <td>
                                            <a href="../<?php echo $row3['cv'] ?>" target="_blank">Download CV</a>
                                        </td>
                                        <td><a href="get-hired-person-details.php?id=<?php echo $row3['id']; ?>"
                                                target="_blank">Details</a></td>
                                        <td>
                                            <a href="del.php?id=<?php echo $row3['id']; ?>" class="del-can">Delete
                                            </a>
                                        </td>

                                    </tr>
                                    <?php $sr++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <div class="no-record">
                        <img src="../img/alert-icon.png" alt="alert">
                        <h6>There is no record to show</h6>
                    </div>
                <?php }
            }
            // ----------If no filter--------
            else {
                // -----Without filter---
                $select_contact = "SELECT * FROM hiring_form ORDER BY id DESC";
                $res3 = mysqli_query($conn, $select_contact);
                if (mysqli_num_rows($res3) >= 1) { ?>
                    <div class="contact-details-main res-tbl">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Job Type</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Degree</th>
                                    <th>Qualification</th>
                                    <th>Submission Date</th>
                                    <th>CV</th>
                                    <th>Details</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sr = 1;
                                while ($row3 = mysqli_fetch_assoc($res3)) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $sr ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['apply'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['fname'] . " " . $row3['lname'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['number'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['city'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['degree'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['qualification'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row3['date'] ?>
                                        </td>
                                        <td>
                                            <a href="../<?php echo $row3['cv'] ?>" target="_blank">Download CV</a>
                                        </td>
                                        <td><a href="get-hired-person-details.php?id=<?php echo $row3['id']; ?>"
                                                target="_blank">Details</a></td>
                                        <td>
                                            <a href="del.php?id=<?php echo $row3['id']; ?>" class="del-can">Delete
                                            </a>
                                        </td>

                                    </tr>
                                    <?php $sr++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <div class="no-record">
                        <img src="../img/alert-icon.png" alt="alert">
                        <h6>There is no record to show</h6>
                    </div>
                <?php }
            } ?>
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