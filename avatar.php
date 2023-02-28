<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Example Title</title>
    <meta name="author" content="Your Name">
    <meta name="description" content="Example description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="icon" type="image/x-icon" href="" />
    <style>
        *{
            margin: 0;
            font-family: 'Popins', sans-serif;
        }
    </style>
</head>

<body>
    <header></header>
    <main>
        <div class="action">
            <div class="profile">
                <img src="thumb-161135.jpg">
            </div>
            <div class="menu"></div>
            <h3><?php
    echo " ",$_SESSION['user'],"<br>";?></h3>
            <span><?php echo " ",$_SESSION['email']," ";
    ?></span>
            <ul>
                <li><img src="logout.png"><a href="logout.php">Wyloguj</a></li>
            </ul>
        </div>
    </main>
    <footer></footer>
    <script type="text/javascript" src=""></script>
</body>

</html>
