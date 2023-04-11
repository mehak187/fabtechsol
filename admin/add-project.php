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
    <title>Add Project</title>
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

            <div class="add-news">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"
                    enctype="multipart/form-data" class="myform">
                    <h4>Add project</h4>
                    <div class="field">
                        <label for="heading">Project Heading</label>
                        <input type="text" placeholder="Delfood" name="heading" id="heading" required>
                    </div>
                    <div class="field">
                        <label for="sub_heading">Project Sub_Heading</label>
                        <input type="text" placeholder="Responsive Food Website" name="sub_heading" id="sub_heading"
                            required>
                    </div>
                    <div class="field">
                        <label for="des">Project Description</label>
                        <textarea
                            placeholder="Project Description"
                            name="des" id="des" required></textarea>
                    </div>
                    <div class="field">
                        <label for="icon">Image</label>
                        <input type="file" name="icon" id="icon" required>
                    </div>
                    <div class="field">
                        <label for="icon">Choose category</label>
                        <select name="p_catg" id="">
                            <?php
                                include 'connection.php';
                                $select_slink = "SELECT * FROM services_main ORDER BY id DESC";
                                $res_slink = mysqli_query($conn,$select_slink); 
                                while($row_slink = mysqli_fetch_assoc($res_slink)) { ?>
                                <option value="<?php echo $row_slink['service_title'] ?>"><?php echo $row_slink['service_title'] ?></option>
                            <?php } ?> 
                        </select>
                        </div>
                    <div class="add-list" id="dup-sec">
                        <div class="field" id="dup-con">
                        <label for="list_item">Key Features</label>
                            <input type="text" placeholder="Key Feature" name="list_item[]" id="list_item" required>
                        </div>

                    </div>
                    <div class="add-more" id="dup-btn">
                    Add more features<img src="../img/duplicate.png" alt=""> 
                    </div>
                    
                    <h5>More images</h5>
                     <div class="field">
                        <label for="img_1">Image 1</label>
                        <input type="file" name="img_1" id="img_1">
                    </div>
                    <div class="field">
                        <label for="img_2">Image 2</label>
                        <input type="file" name="img_2" id="img_2">
                    </div>
                    <div class="field">
                        <label for="img_3">Image 3</label>
                        <input type="file" name="img_3" id="img_3">
                    </div>
                    <div class="field">
                        <label for="img_4">Image 4</label>
                        <input type="file" name="img_4" id="img_4">
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

        $(document).ready(function(){
        $("#img_1").change(function () {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                alert("Only formats are allowed : "+fileExtension.join(', '));
                $('#img_1').val('');
            }
        });
        $("#img_1").change(function () {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                alert("Only formats are allowed : "+fileExtension.join(', '));
                $('#img_2').val('');
            }
        });
        $("#img_1").change(function () {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                alert("Only formats are allowed : "+fileExtension.join(', '));
                $('#img_3').val('');
            }
        });
        $("#img_1").change(function () {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                alert("Only formats are allowed : "+fileExtension.join(', '));
                $('#img_4').val('');
            }
        });
        });
    </script>
    
    <?php
    include 'connection.php';
    if (isset($_POST['submit'])) {
        $heading = $_POST['heading'];
        $sub_heading = $_POST['sub_heading'];
        $des = mysqli_real_escape_string($conn, $_POST['des']);
        $list_item = implode(", ", $_POST['list_item']);
        $p_catg = $_POST['p_catg'];

        $file = $_FILES['icon'];
        $file1 = $_FILES['img_1'];
        $file2 = $_FILES['img_2'];
        $file3 = $_FILES['img_3'];
        $file4 = $_FILES['img_4'];
       
        $insert_sql = "INSERT INTO project_portfolio(heading,sub_heading,des,list_item,p_catg) Values('$heading','$sub_heading','$des','$list_item','$p_catg')" or die("conn failed");
        $res = mysqli_query($conn, $insert_sql);
        $last_id = mysqli_insert_id($conn);
        // echo $last_id;
       
        if (!empty($file['name'])) {
            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];
            $file_ext = explode(".", $file_name);
            $file_lower = strtolower(end($file_ext));
            $file_main = array('jpg', 'png', 'jpeg');
            if (in_array($file_lower, $file_main)) {
                $dest_file = '../upload/' . $file_name;
                move_uploaded_file($file_tmp, $dest_file);
                $up_sql =  "update project_portfolio set icon='$dest_file' WHERE id=$last_id" or die("update failed");
                $res = mysqli_query($conn, $up_sql);
               
            }
            else { ?>
            <script>
                swal("", "Invalid Main image Format", "error");
            </script> <?php
            die();
            }
        }

        if (!empty($file1['name'])) {
            $file_name1 = $file1['name'];
            $file_tmp1 = $file1['tmp_name'];
            $file_ext1 = explode(".", $file_name1);
            $file_lower1 = strtolower(end($file_ext1));
            $file_main1 = array('jpg', 'png', 'jpeg');
            if (in_array($file_lower1, $file_main1)) {
                $dest_file1 = '../upload/' . $file_name1;
                move_uploaded_file($file_tmp1, $dest_file1);
                $up_sql =  "update project_portfolio set img_1='$dest_file1' WHERE id=$last_id" or die("update failed");
                $res = mysqli_query($conn, $up_sql);
                
            }
            else { ?>
                <script>
                    swal("", "Invalid Main image Format", "error");
                </script> <?php 
            }
        }

        if (!empty($file2['name'])) {
            $file_name2 = $file2['name'];
            $file_tmp2 = $file2['tmp_name'];
            $file_ext2 = explode(".", $file_name2);
            $file_lower2 = strtolower(end($file_ext2));
            $file_main2 = array('jpg', 'png', 'jpeg');
            if (in_array($file_lower2, $file_main2)) {
                $dest_file2 = '../upload/' . $file_name2;
                move_uploaded_file($file_tmp2, $dest_file2);
                $up_sql =  "update project_portfolio set img_2='$dest_file2' WHERE id=$last_id" or die("update failed");
                $res = mysqli_query($conn, $up_sql);
            }
            else { ?>
                <script>
                    swal("", "Invalid Main image Format", "error");
                </script> <?php 
            }
        }

        if (!empty($file3['name'])) {
            $file_name3 = $file3['name'];
            $file_tmp3 = $file3['tmp_name'];
            $file_ext3 = explode(".", $file_name3);
            $file_lower3 = strtolower(end($file_ext3));
            $file_main3 = array('jpg', 'png', 'jpeg');
            if (in_array($file_lower3, $file_main3)) {
                $dest_file3 = '../upload/' . $file_name3;
                move_uploaded_file($file_tmp3, $dest_file3);
                $up_sql =  "update project_portfolio set img_3='$dest_file3' WHERE id=$last_id" or die("update failed");
                $res = mysqli_query($conn, $up_sql);
                
            }
            else { ?>
                <script>
                    swal("", "Invalid Main image Format", "error");
                </script> <?php 
            }
        }

        if (!empty($file4['name'])) {
            $file_name4 = $file4['name'];
            $file_tmp4 = $file4['tmp_name'];
            $file_ext4 = explode(".", $file_name4);
            $file_lower4 = strtolower(end($file_ext4));
            $file_main4 = array('jpg', 'png', 'jpeg');
            if (in_array($file_lower4, $file_main4)) {
                $dest_file4 = '../upload/' . $file_name4;
                move_uploaded_file($file_tmp4, $dest_file4);
                $up_sql =  "update project_portfolio set img_4='$dest_file4' WHERE id=$last_id" or die("update failed");
                $res = mysqli_query($conn, $up_sql);
            }
            else { ?>
                <script>
                    swal("", "Invalid Main image Format", "error");
                </script> <?php 
            }
        }
        ?> <script>
            swal("", "Project added successfully", "success");
        </script> <?php 
    } ?>
</body>

</html>