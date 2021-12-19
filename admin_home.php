<?php 
    session_start();
    // echo $_SESSION['uname'];    
    if(!$_SESSION['uname'] || !$_SESSION['id'])
        header("location: login.php");
    // else
    //     header("admin_home.php");
?>

<?php include('db_conn.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CMS Admin</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cantora+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/style.css">

        <style>
            
            .side-bar {
                width: 317px;
                background: #496d63;
                min-height: 100vh;
                transition: 500ms;
            }
            .main-content{
                padding: 40px;
            }
            @media screen and (max-width: 768px){
                .body {
                    display: block;
                }
                .side-bar {
                    position: absolute;
                }
            }
        </style>
    </head>
    <body>

        

        <header>
            <a href="admin_home.php" class="logo">CHARLIE'S FACTORY ADMIN</a>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </header>
        <div class="body">
            <?php include('admin_sidebar.php') ?>

            <div class="main-content">
                
            </div>
        </div>
        
        
        <script>
            window.history.forward();
        </script>
        <script src="assets/script.js"></script>
    </body> 
</html>