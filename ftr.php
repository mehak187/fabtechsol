<!-- ==================================
    |           FOOTER SECTION            |
    ==================================== -->
    <?php
     $sel_social = "SELECT * FROM social" or die("conn failed");
     $res_social = mysqli_query($conn, $sel_social);
     $row_social = mysqli_fetch_assoc($res_social); ?>
    <footer>
    <div class="container">
        <div class="ftr-main">
            <div class="ftr-col">
                <p>Fabtechsol being a software development company believes in making tomorrow’s world a better place.
                </p>
                <div class="social-icons">
                    <a href="<?php echo $row_social['twitter'] ?>"><img src="img/twitter.png" alt="twitter-icon"></a>
                    <a href="<?php echo $row_social['fb'] ?>" target="_blank"><img src="img/fb.png"
                            alt="facebook-icon"></a>
                    <a href="<?php echo $row_social['lnk'] ?>" target="_blank"><img src="img/linkedin.png" alt="linkedin-icon"></a>
                    <a href="<?php echo $row_social['insta'] ?>" target="_blank"><img
                            src="img/instagram.png" alt="instagram-icon"></a>
                </div>
                <!--<div class="newsletter-btn">-->
                <!--    <button type="button" id="news-btn">Subscribe to our newsletter</button>-->
                <!--</div>-->
            </div>
            <div class="ftr-col">
                <a href="https://www.google.com/maps/dir/32.5040684,74.5111716/fabtech+solutions+sialkot/@32.4919858,74.4989334,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x391eebf05050a257:0x65c6ed11df82a794!2m2!1d74.5271225!2d32.4811242"
                    target="_blank">
                    <div class="icon">
                        <img src="img/location.png" alt="location-icon">
                    </div>
                    <?php echo $row_social['location'] ?>
                </a>
                <a href="mailto:info@fabtechsol" target="_blank">
                    <div class="icon">
                        <img src="img/mail.png" alt="mail-icon" class="mail-icon-home">
                    </div>
                    <?php echo $row_social['email'] ?>
                </a>
            </div>
            <div class="ftr-col">
                <form action="">
                    <div class="email-box">
                        <input type="email" placeholder="Email">
                        <button type="submit"><img src="img/send-ftr.png" alt="send-icon-footer"></button>
                    </div>
                </form>
                <div class="ftr-call">
                    <a href="https://wa.me/<?php echo $row_social['phone'] ?>" target="_blank" class="call">
                        <div class="icon">
                            <img src="img/phone-icon.png" alt="phone-icon">
                        </div>
                        <div class="">
                            <span><?php echo $row_social['phone'] ?></span>
                            <span>Call to Expert</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</footer>
<!-- ==================================
    |           SITE MAP  SECTION         |
    ==================================== -->
<div class="site-map-sec">
    <div class="container">
        <div class="site-map">
            <div class="cols">
                <div class="col-content">
                    <h2>Software Development Company-Fabulous Technology Solutions</h2>
                    <?php
                    $sel94 = "SELECT * FROM home_hero" or die("conn failed");
                    $res_sql94 = mysqli_query($conn, $sel94) or die("conn failed");
                    $row94 = mysqli_fetch_assoc($res_sql94) or die("conn failed");
                    ?>
                    <p>
                        <?php echo $row94['home_hero_des'] ?>
                    </p>
                </div>
                <div class="col-content">
                    <h3>About our company</h3>
                    <?php
                    $sel95 = "SELECT * FROM about_company_home" or die("conn failed");
                    $res_sql95 = mysqli_query($conn, $sel95) or die("query failed");
                    $row95 = mysqli_fetch_assoc($res_sql95) or die("row failed");
                    ?>
                    <p>
                        <?php echo $row95['des'] ?>
                    </p>
                </div>
                <div class="col-content">
                    <h3>Why choose us?</h3>
                    <?php
                    $sel96 = "SELECT * FROM why_fab" or die("conn failed");
                    $res_sql96 = mysqli_query($conn, $sel96) or die("query failed");
                    $row96 = mysqli_fetch_assoc($res_sql96) or die("row failed");
                    ?>
                    <p>
                        <?php echo $row96['des'] ?>
                    </p>
                </div>
                <div class="col-content">
                    <?php
                    $sel97 = "SELECT * FROM testimonial" or die("conn failed");
                    $res_sql97 = mysqli_query($conn, $sel97) or die("query failed");
                    $row97 = mysqli_fetch_assoc($res_sql97) or die("row failed");
                    ?>
                    <h5>
                        <?php echo $row97['sub_heading'] ?>
                    </h5>
                    <p>
                        <?php echo $row97['des'] ?>
                    </p>
                </div>

                <div class="col-content">
                    <h3>About our IT services</h3>
                    <?php
                    include 'admin/connection.php';
                    $sel98 = "SELECT * FROM services_hero" or die("conn failed");
                    $res_sql98 = mysqli_query($conn, $sel98) or die("query failed");
                    $row98 = mysqli_fetch_assoc($res_sql98) or die("row failed"); ?>
                    <p>
                        <?php echo $row98['services_hero_des'] ?>
                    </p>
                </div>
            </div>
            <div class="cols">
                <h2>Our Services</h2>
                <?php
                include 'admin/connection.php';
                $select_servicem = "SELECT * FROM services_main ORDER BY id DESC";
                $res_servicem = mysqli_query($conn, $select_servicem);
                while ($row_servicem = mysqli_fetch_assoc($res_servicem)) { ?>
                <div class="col-content">
                   <h3>
                        <a href="<?php echo $row_servicem['service_link'] ?>">
                            <?php echo $row_servicem['service_title'] ?>
                        </a>
                   </h3>
                    <p>
                        <?php echo $row_servicem['service_des'] ?>
                    </p>
                </div>
                <?php } ?>
            </div>
            <div class="cols">
                <?php
            $select105 = "SELECT * FROM our_core_values";
            $res105 = mysqli_query($conn, $select105);
            $row105 = mysqli_fetch_assoc($res105);
            ?>
                <h2>
                    <?php echo $row105['heading'] ?>
                </h2>
                <div class="col-content">
                    <p>
                        <?php echo $row105['des'] ?>
                    </p>
                    <ul>
                        <?php
                    $select106 = "SELECT * FROM core_value_box order by id DESC";
                    $res106 = mysqli_query($conn, $select106);
                    while ($row106 = mysqli_fetch_assoc($res106)) { ?>
                        <li>
                            <?php echo $row106['heading'] ?>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-content">
                    <?php
                    $select99 = "SELECT * FROM our_approach";
                    $res99 = mysqli_query($conn, $select99);
                    $row99 = mysqli_fetch_assoc($res99);
                    ?>
                    <h3>
                        <?php echo $row99['heading'] ?>
                    </h3>
                    <p>
                        <?php echo $row99['des'] ?>
                    </p>
                </div>
                <div class="col-content">
                    <?php
                $select100 = "SELECT * FROM our_mission";
                $res100 = mysqli_query($conn, $select100);
                $row100 = mysqli_fetch_assoc($res100);
                ?>
                    <h3>
                        <?php echo $row100['heading'] ?>
                    </h3>
                    <p>
                        <?php echo $row100['des'] ?>
                 </p>
                </div>
                <div class="col-content">
                    <?php
                    $select101 = "SELECT * FROM our_vision";
                    $res101 = mysqli_query($conn, $select101);
                    $row101 = mysqli_fetch_assoc($res101);
                    ?>
                    <h3>
                        <?php echo $row101['heading'] ?>
                    </h3>
                    <p>
                        <?php echo $row101['des'] ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>All Rights Reserved</p>
        </div>
    </div>
</div>