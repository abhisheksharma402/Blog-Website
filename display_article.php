<?php include('db_conn.php') ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CMS</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cantora+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/style.css">

        <style>
            body{
                background-color: #A7C4BC;
            }
            .main-content{
                padding: 20px;
                color: #333;    
            }
            .article{
                line-height: 2.5em;
                font-size: 1.2em;
            }
            @media screen and (max-width: 768px){
                .body {
                    display: block;
                }
                .side-bar {
                    position: absolute;
                }
            }
            .return{
                color:teal;
                text-decoration: none;
                font-weight: bold;
            }
            .return:hover{
                font-weight: normal;
            }
        </style>
    </head>
    <body>

        <!-- <?php include('header.php'  ) ?> -->

        <header>
            <a href="index.php" class="logo">CHARLIE'S FACTORY</a>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </header>
        <div class="body">

            <?php include('sidebar.php') ?>

            <div class="main-content">

                <?php 
                    if(!empty($_GET["article_id"]))
                    {
                        $id = $_GET['article_id'];
                        $query = "SELECT * from articles where article_id = $id;";
                        $res = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
                        ?>
                        <a class="return" href="index.php?category_id=<?php echo $row['category_id']; ?>">< Go Back</a>
                        <div class="article">
                            <h1><?php echo $row['title']; ?></h1>   
                            <p>Date Posted: <?php echo $row['post_date']; ?></p>
                            <?php echo $row['content']; ?>
                        </div>
                        <?php
                    }
                    ?>
            </div>
        </div>
        
        <script src="assets/script.js"></script>
    </body> 
</html>