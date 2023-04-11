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
    <title>delete event</title>
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
    //delete content from event tbl
    $del = "DELETE from events WHERE id=$id";
    //delete content from imgs tbl
    $del2 = "DELETE from events_imgs WHERE event_id=$id";
    //select img from event tbl
    $sql1 = "SELECT main_img FROM events WHERE id=$id";
    $result1 = mysqli_query($conn,$sql1);
    $row1= mysqli_fetch_assoc($result1);
    $image_path1 = $row1['main_img'];
    unlink($image_path1);

    //select img from imgs tbl
    $sql = "SELECT event_img FROM events_imgs WHERE event_id=$id";
    $result = mysqli_query($conn,$sql);
    //run loop bcoz img are multiple
        while ($row = mysqli_fetch_assoc($result)) {
            $image_path = $row['event_img'];
            unlink($image_path);
        }

    // run query for delete content from event and imgs tbl
    $res = mysqli_query($conn,$del);
    $res2 = mysqli_query($conn,$del2);

    header('location: manage-events.php');
    // include 'get-hired-details.php'
    $_SESSION['DEL'] = "hey";
    ?>

</body>
</html>