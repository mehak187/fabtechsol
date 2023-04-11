<?php
  session_start();
  if(isset($_SESSION['LAST_ACTIVE_TIME'])) {
    if((time()-$_SESSION['LAST_ACTIVE_TIME'])>60*30) {
        header('location:logout.php');
    }
 }

 $_SESSION['LAST_ACTIVE_TIME1'] = time();

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
    <title>get hired2 admin</title>
   <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <meta name="description"
        content="Fabulous Technology Solutions provides you with Best Mobile App Development, Web Development, UI/UX development, and Electrical Hardware Development.">
    <meta name="keyword"
        content="fab techsol, Fabulous Technology Solutions, it software company, Software house, Software Development Company,Web Application Development Company,Web Application,Web Application development,Software Development,Website Development,Best web application Developers,Mobile Application Developers,IT company">
     <!---------------og start------>
<?php include '../og.php' ?>
<!------------og end------------->
<meta name="author" content="fab techsol">

</head>
<body>

<?php
include 'connection.php';
    $id = $_GET['id'];
    $del = "DELETE from hiring_form WHERE id=$id";
    $res = mysqli_query($conn,$del);
    header('location: get-hired-details.php');
    // include 'get-hired-details.php'
    $_SESSION['DEL'] = "hey";
    ?>

</body>
</html>