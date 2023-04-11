<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y2P7K2JP0M"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-Y2P7K2JP0M');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fabulous Technology Solutions</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <meta name="description"
        content="Fabulous Technology Solutions provides you with Best Mobile App Development, Web Development, UI/UX development, and Electrical Hardware Development.">
    <meta name="keyword"
        content="fab techsol, Fabulous Technology Solutions, it software company, Software house, Software Development Company,Web Application Development Company,Web Application,Web Application development,Software Development,Website Development,Best web application Developers,Mobile Application Developers,IT company">
     <!---------------og start------>
<?php include '../og.php' ?>
<!------------og end------------->
<meta name="author" content="fab techsol">
    <!-- ------------------CSS Link--------------- -->
    <link rel="stylesheet" href="../css/main.css">
     <!-- -------sweet alert------ -->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
     <!-- Meta Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '658112671961788');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=658112671961788&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
     <?php 
    include '../css/style.php';
    ?>
</head>
<body>
    <section class="login">
            <div class="login-form">
                <h1>Log in</h1>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                    <div class="form-field">
                        <label for="email">Email address</label>
                        <input type="email" name="email" id="email" required>
                    </div>
        
                    <div class="form-field">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass" required>
                    </div>
        
                    <div class="submit-btn">
                        <input type="submit" value="Login" name="submit">
                    </div>
                </form>
            </div>
    </section>
</body>
<?php
    include 'connection.php';
    // CONDITION 1:
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $sql_email = "SELECT * FROM admin_login WHERE email='$email'";
        $email_res = mysqli_query($conn,$sql_email) or die("query unsuccesful");
        $email_num = mysqli_num_rows($email_res);    
        if($email_num>0) {
            $emailrow_fetch = mysqli_fetch_assoc($email_res);
            $_SESSION['umail'] = $emailrow_fetch['email'];
            // echo $_SESSION['umail']; 
            if($pass == $emailrow_fetch['pass']){
                ?><script>
            window.location = "index";
           </script><?php
             }
            // CONDITION 1ai else::
            else{      
            ?><script>
            swal("", "Invalid Password", "error");
            </script><?php
            }
        }
        // CONDITION 1a else:
        else{      
            ?><script>
            swal("", "Invalid email", "error");
            </script><?php
        }
    }
?>
</html>
