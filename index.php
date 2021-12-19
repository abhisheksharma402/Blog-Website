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
            .page{
                padding: 20px;
                line-height: 2em;
                font-size: 16px;
                background-color: #A7C4BC;
                border-radius: 20px;
                margin-bottom: 70px;
                box-shadow: 2px 2px #333;
                color: #333;
            }
            .page:hover{
                opacity: 0.8;
            }
            .page h3{
                letter-spacing: 2px;
                font-size: 20px;
            }
            .page span{
                font-size: 13px;
            }
            .summary{
                font-size: 1.1em;
            }
            .summary a{
                color:teal;
                text-decoration: none;
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
                    if(!empty($_GET["category_id"]))
                    {
                        $id = $_GET['category_id'];
                        $query = "SELECT * from articles where category_id = $id;";
                        $res = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                            ?>
                            <div class="page">
                                <h3><?php echo $row['title'] ?></h3>
                                <div class='summary'>
                                    <?php echo $row['summary'] ?>
                                    <a href="display_article.php?article_id=<?php echo $row['article_id']?>">Read More</a>
                                </div>
                                <span> Date Posted: <?php echo $row['post_date'] ?></span>
                            </div>
                            <?php
                        }
                    }
                    ?>
            </div>
        </div>
        
        <script src="assets/script.js"></script>
    </body> 
</html>