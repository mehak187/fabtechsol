<?php
  session_start();
  if(isset($_SESSION['LAST_ACTIVE_TIME'])) {
    if((time()-$_SESSION['LAST_ACTIVE_TIME'])>60*30) {
        header('location:logout.php');
    }
 }

 $_SESSION['LAST_ACTIVE_TIME2'] = time();

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
    <title>delete admin</title>
   <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <meta name="description"
        content="Fabulous Technology Solutions provides you with Best Mobile App Development, Web Development, UI/UX development, and Electrical Hardware Development.">
    <meta name="keyword"
        content="fab techsol, Fabulous Technology Solutions, it software company, Software house, Software Development Company,Web Application Development Company,Web Application,Web Application development,Software Development,Website Development,Best web application Developers,Mobile Application Developers,IT company">
<meta name="author" content="fab techsol">
    <!-- Meta Pixel Code -->
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=658112671961788&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>
<body>

<?php
include 'connection.php';
    $id = $_GET['id'];
    $del = "DELETE from courses_main WHERE course_id=$id";
    $res = mysqli_query($conn,$del);
    header('location: manage-courses.php');
    // include 'get-hired-details.php'
    $_SESSION['DEL'] = "hey";
    ?>

</body>
</html>