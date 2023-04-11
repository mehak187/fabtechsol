<?php
  session_start();
  if(isset($_SESSION['LAST_ACTIVE_TIME'])) {
    if((time()-$_SESSION['LAST_ACTIVE_TIME'])>60*30) {
        header('location:logout.php');
    }
 }

//  $_SESSION['LAST_ACTIVE_TIME'] = time();

   if(!isset($_SESSION['umail'])){
    header('location: login.php');
  }

  if(isset($_SESSION['DEL'])){
    if((time()-$_SESSION['LAST_ACTIVE_TIME1'])<2) {
        ?><script>
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
    <title>Add Blog admin</title>
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
                            enctype="multipart/form-data">
                        <h4>Add Blog</h4>
                        <div class="field">
                            <label for="meta_title">Meta title</label>
                            <input type="text" placeholder="Add meta title......" name="meta_title" id="meta_title" required>
                        </div>
                        <div class="field">
                            <label for="meta_des">Meta Description</label>
                            <input type="text" placeholder="Add meta description......" name="meta_des" id="meta_des" required>
                        </div>
                        <div class="field">
                            <label for="meta_con">Canonical Tag</label>
                            <input type="text" placeholder="Add link only....." name="meta_con" id="meta_con" required>
                        </div>

                        <div class="field">
                            <label for="blog-title">Blog Title</label>
                            <input type="text" placeholder="Blog Title" name="blog-title" id="blog-title" required>
                        </div>
                        <div class="field">
                            <label for="blog-img1">Blog Image 1</label>
                            <input type="file" name="blog-img1" id="blog-img1" required>
                             <p class="note">Recommended size:800 X 400</p>
                        </div>
                        <div class="field">
                            <label for="img1-alt">Image 1 alt tag</label>
                            <input type="text" placeholder="Alt tag" name="img1-alt" id="img1-alt" required>
                        </div>
                        <div class="field">
                            <label for="blog-des1">Blog Description 1</label>
                            <textarea  placeholder="Blog Description 1" name="blog-des1" id="blog-des1" required></textarea>
                        </div>

                        <div class="field">
                            <label for="blog-img2">Blog Image 2</label>
                            <input type="file" name="blog-img2" id="blog-img2" required>
                             <p class="note">Recommended size:800 X 400</p>
                        </div>
                        <div class="field">
                            <label for="img2-alt">Image 2 alt tag</label>
                            <input type="text" placeholder="Alt tag" name="img2-alt" id="img2-alt" required>
                        </div>
                        <div class="field">
                            <label for="blog-des2">Blog Description 2</label>
                            <textarea  placeholder="Blog Description 2" name="blog-des2" id="blog-des2" required></textarea>
                        </div>

                        <div class="field">
                            <label for="blog-img3">Blog Image 3</label>
                            <input type="file" name="blog-img3" id="blog-img3" required>
                             <p class="note">Recommended size:800 X 400</p>
                        </div>
                        <div class="field">
                            <label for="img3-alt">Image 3 alt tag</label>
                            <input type="text" placeholder="Alt tag" name="img3-alt" id="img3-alt" required>
                        </div>
                        <div class="field">
                            <label for="blog-des3">Blog Description 3</label>
                            <textarea  placeholder="Blog Description 3" name="blog-des3" id="blog-des3" required></textarea>
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
     <?php
include 'connection.php';
if(isset($_POST['submit'])) {
    $blog_title = mysqli_real_escape_string($conn, str_replace("\r\n", "", $_POST['blog-title']));
    $blog_des1 = mysqli_real_escape_string($conn, str_replace("\r\n", "", $_POST['blog-des1']));
    $blog_des2 = mysqli_real_escape_string($conn,str_replace("\r\n", "", $_POST['blog-des2']));
    $blog_des3 = mysqli_real_escape_string($conn,str_replace("\r\n", "", $_POST['blog-des3']));
    $img1_alt = mysqli_real_escape_string($conn,str_replace("\r\n", "", $_POST['img1-alt']));
    $img2_alt = mysqli_real_escape_string($conn,str_replace("\r\n", "", $_POST['img2-alt']));
    $img3_alt = mysqli_real_escape_string($conn,str_replace("\r\n", "", $_POST['img3-alt']));
    $meta_title = mysqli_real_escape_string($conn,str_replace("\r\n", "", $_POST['meta_title']));
    $meta_des = mysqli_real_escape_string($conn,str_replace("\r\n", "", $_POST['meta_des']));
    $meta_con = mysqli_real_escape_string($conn,str_replace("\r\n", "", $_POST['meta_con']));
   
    $file = $_FILES['blog-img1'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_ext = explode(".",$file_name);
    $file_lower = strtolower(end($file_ext));
    $file_main = array('jpg','png','jpeg');
    $timestamp = date("Ymd_His"); // generate a Unix timestamp
    $new_file_name = $timestamp . '_' . $file_name; // append the timestamp to the file name

    $file2 = $_FILES['blog-img2'];
    $file_name2 = $file2['name'];
    $file_tmp2 = $file2['tmp_name'];
    $file_ext2 = explode(".",$file_name2);
    $file_lower2 = strtolower(end($file_ext2));
    $file_main2 = array('jpg','png','jpeg','webp');
    $timestamp2 = date("Ymd_His"); // generate a Unix timestamp
    $new_file_name2 = $timestamp2 . '_' . $file_name2; // append the timestamp to the file name

    $file3 = $_FILES['blog-img3'];
    $file_name3 = $file3['name'];
    $file_tmp3 = $file3['tmp_name'];
    $file_ext3 = explode(".",$file_name3);
    $file_lower3 = strtolower(end($file_ext3));
    $file_main3 = array('jpg','png','jpeg','webp');
    $timestamp3 = date("Ymd_His"); // generate a Unix timestamp
    $new_file_name3 = $timestamp3 . '_' . $file_name3;

   

 
    if((in_array($file_lower,$file_main)) && (in_array($file_lower2,$file_main2)) && (in_array($file_lower3,$file_main3))){
        $dest_file = '../upload/' .$new_file_name;
        move_uploaded_file($file_tmp,$dest_file);

        $dest_file2 = '../upload/' .$new_file_name2;
        move_uploaded_file($file_tmp2,$dest_file2);

        $dest_file3 = '../upload/' .$new_file_name3;
        move_uploaded_file($file_tmp3,$dest_file3);
        
        $content = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="../img/logo.png">
        <meta name="description" content="' . $meta_des . '">
<link rel="canonical" href="' . $meta_con . '" />
<title>' .$meta_title. '</title>
            <link rel="stylesheet" href="../css/blog.css">
        </head>
        <body>
        <?php include "../addfile.php"; ?>
            <div class="project-det-sec event-det blog-det">
                <div class="container">
                    <div class="project-det-main">
                        <div class="project-left">
                            <div class="project-img">
                                <img src="' . $dest_file . '" alt="' . $img1_alt . '">
                            </div>
                            <h1>' . $blog_title . '</h1>
                            <!--<h4>Description</h4>-->
                            <div class="my-para">' . $blog_des1 . '</div>
                            <div class="project-img">
                                <img src="' . $dest_file2 . '" alt="' . $img2_alt . '">
                            </div>
                            <div class="my-para">' . $blog_des2 . '</div>
                            <div class="project-img">
                                <img src="' . $dest_file3 . '" alt="' . $img3_alt . '">
                            </div>
                            <div class="my-para">' . $blog_des3 . '</div>
                        </div>
                        <div class="project-right">
                            <h4>More Blogs</h4>
                            <?php include "../allblogs.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>';
     
        $insert_sql = "INSERT INTO blog_main(title,des1,des2,des3,img1,img2,img3,img1_alt,img2_alt,img3_alt,meta_title,meta_des,meta_con) VALUES('$blog_title','$blog_des1','$blog_des2','$blog_des3','$dest_file','$dest_file2','$dest_file3','$img1_alt','$img2_alt','$img3_alt','$meta_title','$meta_des','$meta_con')";
        $res = mysqli_query($conn,$insert_sql);
        // Specify the filename and path
$filename = "../blogs/" . $meta_con . ".php";
// Open the file in write mode
$file = fopen($filename, "w");

// Write some content to the file
fwrite($file, $content);

// Close the file
fclose($file);

 ?><script>
 swal("", "Blog added successfully","success");
 </script> <?php 
        } 
    else{
        ?><script>
        swal("", "Invalid File Format", "error");
        </script>
    <?php } 
} ?>

    </body>

</html>