<?php include('db_conn.php') ?>

<style>
    .lgout{
        color:#fff;
        text-decoration: none;
        font-weight: bold;
        text-transform: uppercase;
        display: block;
        margin-left: 4px;
        margin-top: 20px;
        transition: 500ms;
    }
    .lgout:hover{
        background: #127b8e;
    }
</style>

<nav class="side-bar">
    <div class="user-p">
        <img src="images/blog.png"><br>
        <!-- <a class="lgout" href='logout.php'>
            Logout
        </a> -->
        <h4>CATEGORIES</h4>
        
    </div>
    <ul class="list">
        <li >
            <a href="add_categories.php">Add New Catgories</a>
        </li>
        
        <li >
            <a href="delete_categories.php">Delete Catgories</a>
        </li>

        <li >
            <a href="update_existing_categ.php">Update Existing Categories</a>
        </li>

        <li >
            <a href="add_articles.php">Add New Articles</a>
        </li>

        <li >
            <a href='logout.php'>Logout</a>
        </li>

    </ul>
</nav>
