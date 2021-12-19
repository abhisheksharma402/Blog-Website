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
        <title>Add Articles</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cantora+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/style.css">

        <style>
            
            



        </style>
        

        <!-- <script src="https://cdn.tiny.cloud/1/xslavvuf8c4jacao833iojjgaospo8jyw4ls0v1so7w710s8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
        

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
                <h1>Add a New Article</h1>
                <form method="post">
                    <label for="id">Category Id:</label><br>
                    <input type="number" name="id"><br>
                    <label for="title">Title: </label><br>
                    <input type="text" name="title"><br>
                    <label for="title">Content: </label><br>
                    <textarea name="content" id="" cols="30" rows="5"></textarea><br>
                    <!-- <input id="mytextarea" name="content"> -->
                    <input type="submit" name="save"> 
                </form>

                <?php 
                    if(isset($_POST['save'])){
                        if(!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['content'])){
                            $cat_id = $_POST['id'];
                            $title = $_POST['title'];
                            $content = strip_tags($_POST['content']);

                            $summary = substr($content, 0, 100);
                            $date_posted = date("Y-m-d");

                            $qry = "INSERT INTO articles (category_id, title, summary, content, post_date) values
                                ('$cat_id', '$title', '$summary', '$content', '$date_posted');";
                            
                            $res1 = mysqli_query($conn, $qry);
                            if($res1){
                                echo "<h3 style='text-align:center;'>Article Added Successfully!!</h3>";
                            }
                            else{
                                echo "<h3>Error: </h3>".mysqli_error($conn);
                            }


                        }
                    }
                ?>
            </div>
        </div>
        

        <script src="ckeditor5/ckeditor.js"></script>
        <script>
            // tinymce.init({
            //     selector: '#mytextarea',
            //     // menubar: false
            // });
            CKEDITOR.replace('mytextarea');
        </script>
        
        <script>
            window.history.forward();
        </script>
        <script src="assets/script.js"></script>
    </body> 
</html>