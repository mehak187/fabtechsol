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

?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Hired person detail</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <meta name="description"
        content="Fabulous Technology Solutions provides you with Best Mobile App Development, Web Development, UI/UX development, and Electrical Hardware Development.">
    <meta name="keyword"
        content="fab techsol, Fabulous Technology Solutions, it software company, Software house, Software Development Company,Web Application Development Company,Web Application,Web Application development,Software Development,Website Development,Best web application Developers,Mobile Application Developers,IT company">
<meta name="author" content="fab techsol">
    <!-- ------------------CSS Link--------------- -->
    <?php include 'main.php' ; include '../css/style.php';?>

</head>

<body>
    <section class="contact-p get-hired">
       <?php
   include 'admin-nav.php';
   ?>
        <!-- ==================================
        |          CONTACT US SECTION          |
        ==================================== -->
        <section class="contact-us-sec cond-det">
            <div class="container">
                <div class="contact-us-main person-det">
                    <h3>Candidate Details</h3>
                    <div class="contact-left">
                        <?php
                    include 'connection.php';
                    $id2= $_GET['id'];
                    $select_contact = "SELECT * FROM hiring_form where id=$id2";
                    $res= mysqli_query($conn,$select_contact);
                    $row3= mysqli_fetch_assoc($res)
                    ?>
                        <!-- --------form section------     -->
                        <div class="form-sec">
                            <div class="emp-img">
                                <img src="../<?php echo $row3['pic']?>" alt="pic">
                            </div>
                        </div>
                        <div class="form-sec">
                            <h5>Applied for*</h5>
                            <div class="form-field">
                                <div class="box">
                                    <h6>Job Type:</h6>
                                    <p><?php echo $row3['apply'] ?></p>
                                </div>

                                <div class="box">
                                    <h6>CV / Resume:</h6>
                                    <a href="../<?php echo $row3['cv'] ?>" target="_blank">Download CV</a>
                                </div>
                            </div>
                        </div>
                        <!-- --------form section------     -->
                        <?php $apply_main = $row3['apply'];
                        if(($row3['apply']=="remote") || (strpos($apply_main, "remote"))) { ?>
                        <div class="form-sec">
                            <h5>Availability hours and days</h5>
                            <div class="form-field">
                                <div class="box">
                                    <h6>Days:</h6>
                                    <p><?php echo $row3['days'] ?></p>
                                </div>
                                <div class="box">
                                    <h6>Timing:</h6>
                                    <p><?php echo $row3['st_time'] ." to " .$row3['end_time']?></p>
                                </div>
                            </div>
                        </div>

                        <?php  } ?>
                        <!-- --------form section------     -->
                        <div class="form-sec">
                            <h5>Personal Information*</h5>
                            <div class="form-field">
                                <div class="box">
                                    <h6>First Name:</h6>
                                    <p><?php echo $row3['fname'] ?></p>
                                </div>
                                <div class="box">
                                    <h6>Last Name:</h6>
                                    <p><?php echo $row3['lname'] ?></p>
                                </div>
                            </div>

                            <div class="form-field">
                                <div class="box">
                                    <h6>Phone number:</h6>
                                    <p><?php echo $row3['number'] ?></p>
                                </div>
                                <div class="box">
                                    <h6>Email:</h6>
                                    <p><?php echo $row3['email'] ?></p>
                                </div>
                            </div>

                            <div class="form-field address-field">
                                <div class="box">
                                    <h6>City:</h6>
                                    <p><?php echo $row3['city'] ?></p>
                                </div>
                                <div class="box">
                                    <h6>State:</h6>
                                    <p><?php echo $row3['state'] ?></p>
                                </div>
                                <div class="box">
                                    <h6>Religion:</h6>
                                    <p><?php echo $row3['religion'] ?></p>
                                </div>
                            </div>

                            <div class="form-field">
                                <div class="box full-box">
                                    <h6>Where did you hear about us</h6>
                                    <p><?php echo $row3['ref'] ?></p>
                                </div>
                            </div>
                            <div class="form-field">
                                <div class="box full-box">
                                    <h6>Description:</h6>
                                    <p><?php echo $row3['des'] ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- --------form section------     -->
                        <div class="form-sec">
                            <h5>About Candidate </h5>
                            <div class="form-field">
                                <div class="box">
                                    <h6>Position:</h6>
                                    <p><?php echo $row3['field'] ?></p>
                                </div>
                                <div class="box">
                                    <h6>Expected salary</h6>
                                    <p><?php echo $row3['exp_sal'] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- --------form section------     -->
                        <?php if(($row3['field']!="human-resource-manager") && ($row3['field']!="content-writer")) { ?>
                        <div class="form-sec">
                            <h5>Skills Set</h5>
                            <div class="form-field">
                                <div class="box full-box">
                                    <h6>Skills:</h6>
                                    <p><?php echo $row3['skill_set'] ?></p>
                                </div>

                                <?php 
                                    $field_check = $row3['field'];
                                if($field_check=="application-developer") { ?>
                                    <div class="box full-box">
                                        <h6>Upload app on:</h6>
                                        <p><?php echo $row3['upload_app'] ?></p>
                                    </div>
                                <?php } ?>

                                <?php if(($row3['field']!="ui-ux-designer") && ($row3['field']!="seo-expert") && ($row3['field']!="social-media-marketer")) { ?>
                                <div class="box full-box">
                                    <h6>Servers and databases:</h6>
                                    <p><?php echo $row3['server_set'] ?></p>
                                </div>
                                <?php } ?>
                                <?php if(($row3['field']!="seo-expert") && ($row3['field']!="social-media-marketer")) { ?>
                                <div class="box full-box">
                                    <h6>Additional skills:</h6>
                                    <p><?php echo $row3['extra_skill'] ?></p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- --------form section------     -->
                        <div class="form-sec">
                            <h5>Academic Information</h5>
                            <div class="form-field">
                                <div class="box">
                                    <h6>Degree:</h6>
                                    <p><?php echo $row3['degree'] ?></p>
                                </div>
                                <div class="box">
                                    <h6>Qualification/Certification:</h6>
                                    <p><?php echo $row3['qualification'] ?></p>
                                </div>
                            </div>

                            <div class="form-field">
                                <div class="box">
                                    <h6>CGPA:</h6>
                                    <p><?php echo $row3['cgpa'] ?></p>
                                </div>
                                <div class="box">
                                    <h6>Year Passed:</h6>
                                    <p><?php echo $row3['year_passed'] ?></p>
                                </div>
                            </div>

                            <div class="form-field">
                                <div class="box full-box">
                                    <h6>University:</h6>
                                    <p><?php echo $row3['university'] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- --------form section------     -->
                        <div class="form-sec previous-exp">
                            <h5>Previous Job Experience</h5>
                            <!-- ---if experience is one or more than one year--- -->
                            <?php if($row3['experience']!=0) { ?>
                                <div class="form-field">
                                    <div class="box">
                                        <?php 
                                            if($row3['experience']==1) {
                                                $y = "Year";
                                            }
                                            else{
                                                $y = "Years";
                                            }
                                        ?>
                                        <h6>Previous Job Experience:</h6>
                                        <p><?php echo $row3['experience'] ." " .$y ?></p>
                                    </div>
                                    <div class="box">
                                        <h6>Job Title:</h6>
                                        <p><?php echo $row3['job_title'] ?></p>
                                    </div>
                                </div>

                                <div class="form-field">
                                    <div class="box">
                                        <h6>Organization / Company:</h6>
                                        <p><?php echo $row3['company'] ?></p>
                                    </div>
                                    <div class="box">
                                        <h6>Salary:</h6>
                                        <p><?php echo $row3['p_salary'] ?></p>
                                    </div>
                                </div>
                                <div class="form-field">
                                    <div class="box">
                                        <h6>Start Date:</h6>
                                        <p><?php echo $row3['start'] ?></p>
                                    </div>
                                    <div class="box">
                                        <h6>End Date:</h6>
                                        <p><?php echo $row3['end'] ?></p>
                                    </div>
                                </div>

                                <div class="form-field">
                                    <div class="box full-box">
                                        <h6>Reason for leaving:</h6>
                                        <p><?php echo $row3['leaving_reason'] ?></p>
                                    </div>
                                </div>
                            <?php }
                            else { ?>
                                <div class="form-field">
                                    <div class="box full-box">
                                        <h6>Previous Job Experience:</h6>
                                        <p>No experience</p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- --------form section------     -->
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================================
        |           FOOTER SECTION            |
        ==================================== -->
        <!-- <?php include 'ftr.php' ?> -->
    </section>
    <!-- ########################
    |              JS            |
    ########################## -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- -------sweet alert------ -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".intern").click(function() {
            $(".previous-exp").hide();
        });
    });
    $(document).ready(function() {
        $(".job").click(function() {
            $(".previous-exp").show();
        });
    });
    </script>
</body>

</html>