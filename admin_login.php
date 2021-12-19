<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cantora+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <style>
        body {
            background-color: #2F5D62;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cantora One', sans-serif;
            text-align: center;
        }

        .form{
            background-color: #A7C4BC;
            padding: 50px 0px;
            width: 50%;
            margin: auto;
            margin-bottom: 50px;
            border-radius: 20px;
            box-shadow: 2px 2px #333;
        }

        form {
            text-align: center;
            font-size: 1.2em;
        }

        input[type=text], input[type=password] {
            width: 50%;
            padding: 12px 20px;
            margin: 20px 20px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 1em;
        }

        input[type=submit] {
            background-color: teal;;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
        }

        
        input[type=submit]:hover {
            opacity: 0.8;
        }
        
        .error {
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }
        
    </style>
</head>
<body>
    <h1>CHARLIE'S FACTORY ADMIN PORTAL</h1>

    <div class="form">
        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <form action="login.php" method="post">
            Username: <input type="text" name="uname"><br>
            Password: <input type="password" name="pword"><br>
            <input type="submit" name="save">
        </form>
    </div>
    <script>
        window.history.forward();
    </script>
</body>
</html>