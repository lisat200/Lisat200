<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset-UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css"

</head>
    <body>
<div id="wrapper">
    <div id="banner">

    </div>

    <nav id="navigation">
        <ul id="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="viewcart.php">View Cart</a></li>

        </ul>
    </nav>
<div id="frm">
    <form action="process.php" method="POST">
        <p>
            <label> Username:</label>
            <input type="text" id="user" name="user" />
        </p>
        <p>
            <label> Password:</label>
            <input type="password" id="pass" name="pass" />
        </p>
        <p>
        <input type="submit" id="btn" value="submit"/>
        </p>
    </form>
</div>













    <div id="content area">
        <?php echo $content;
        ?>
    </div>
    <footer>
        Lisa Trawally (c) 2017 itb.
    </footer>
    </div>

</div>
</body>
</html>