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
                <h1>Update Existing Categories</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <label for="id">Category Id:</label>
                    <input type="number" name="id"><br>
                    <label for="newName">New Name:</label>
                    <input type="text" name="newName"><br>
                    <input type="submit" name="save">
                </form> 

                <?php 
                    if(isset($_POST['save'])){
                        $id = $_POST['id'];
                        $q1 = "SELECT * FROM categories WHERE id='$id';";

                        $res1 = mysqli_query($conn, $q1);
                        $resultCheck = mysqli_num_rows($res1);

                        if($resultCheck == 0){
                            echo "<h3 style='text-align:center;'>No Category with id $id exists!</h3>";
                        }
                        else if($res1){
                            $new_name = $_POST['newName'];
                            $row = mysqli_fetch_all($res1, MYSQLI_ASSOC);
                            $q2 = "UPDATE categories SET category_name = '$new_name' WHERE id='$id';";
                            $res2 = mysqli_query($conn, $q2);
                            if($res2){
                                echo "<h3 style='text-align:center;'>Category $id was Updated Successfully!!</h3>";
                            }
                            else{;
                                echo "<h3>Error: </h3>".mysqli_error($conn);
                            }
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