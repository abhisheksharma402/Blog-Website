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
        <title>Add Categories</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cantora+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/style.css">

        <style>
            
            



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

            
            <div class="main-content form">
                <h1>Delete Categories</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <label for="id">Category Id:</label>
                    <input type="number" name="id"><br>
                    <input type="submit" name="save">
                </form> 

                <?php 
                    if(isset($_POST['save'])){
                        $id = $_POST['id'];
                        $q1 = "DELETE FROM categories WHERE id='$id';";

                        $res1 = mysqli_query($conn, $q1);
                        if($res1){
                            echo "<h3 style='text-align:center;'>Category Deleted Successfully!!</h3>";
                        }
                        else{;
                            echo "<h3>Error: </h3>".mysqli_error($conn);
                        }
                    }
                ?>
            </div>
        </div>
        


        
        <script>
            window.history.forward();
        </script>
        <script src="assets/script.js"></script>
    </body> 
</html>