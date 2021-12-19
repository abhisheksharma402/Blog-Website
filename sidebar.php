<?php include('db_conn.php') ?>

<nav class="side-bar">
    <div class="user-p">
        <img src="images/blog.png">
        <h4>CATEGORIES</h4>
    </div>
    <ul class="list">

        <?php 

            $qry = "SELECT * FROM categories;";
            $result = mysqli_query($conn, $qry);
            $resultCheck = mysqli_num_rows($result);

            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            // print_r($row);
            if($resultCheck > 0){
                foreach($row as $categories){
                    // print_r($categories);
                    
                    ?>
                    <li >
                        <a style="color:aliceblue" href='?category_id=<?php echo $categories['id']?>'>
                            <span><?php echo $categories['category_name'] ?></span>
                        </a>
                    </li>
                    <?php
                }
            }
        ?>
        <li>
            <a href="admin_login.php">Admin Login</a>
        </li>
    </ul>
</nav>