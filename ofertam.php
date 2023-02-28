<?php 
session_start();
?>


<!DOCTYPE html>

<html lang="pl">



<head>

    <meta charset="utf-8">

    <title>MMPO Service</title>

    <meta name="author" content="Maksymilian Tempski, Maciej Gielniak, Paweł Śliwiński, Aleksander Kucharczyk 3 iTp">

    <meta name="description" content="Opis strony">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="">

    <link rel="icon" type="image/x-icon" href="" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {

            $('#rozklad').click(function() {

                $('ul').toggleClass('pokaz');

            });

        });

    </script>

    <style>
        * {

            padding: 0;

            margin: 0;

            text-decoration: none;

            list-style: none;

        }



        body {

            background-repeat: no-repeat;

            background-attachment: fixed;

            margin: 0px;

            background-size: 100%;

            background-color: #393E46;

        }



        @font-face {

            font-family: Rineghan;

            src: url("Antiquity Bold Personal Use.otf");

        }



        nav {

            height: 80px;

            width: 100%;

            background-color: #222831;

        }



        label.MMPO a {

            font-size: 60px;

            font-weight: bold;

            color: white;

            padding: 0px;

            line-height: 80px;

            font-family: Rineghan;

            margin-left: 3%;

            letter-spacing: 4px;

        }



        nav ul {

            float: right;

            margin-right: 10%;

        }



        nav li {

            display: inline-block;

            margin: 0 8px;

            line-height: 80px;

        }



        nav a {

            color: white;

            font-size: 18px;

            text-transform: uppercase;

            border: 1px solid transparent;

            padding: 7px 10px;

            border-radius: 3px;

            font-family: Arial;
            margin-right: 20px;

        }



        a.aktywne,

        ul li a:hover {

            transition: 0.5s;

            border: 1px solid white;

            font-size: 20px;

        }



        nav #rozklad {

            color: white;

            font-size: 30px;

            line-height: 80px;

            float: right;

            margin-right: 40px;

            cursor: pointer;

            display: none;

        }



        @media (max-width: 1048px) {

            label.MMPO {

                font-size: 32px;

                padding-left: 60px;

            }



            nav ul {

                margin-right: 20px;

            }



            nav a {

                font-size: 17px;

            }

        }



        @media (max-width: 909px) {

            nav #rozklad {

                display: block;

            }



            nav ul {

                position: fixed;

                width: 100%;

                height: 100vh;

                background: #393E46;

                top: 80px;

                left: -100%;

                text-align: center;

                transition: all .5s;

            }



            nav li {

                display: block;

                margin: 50px 0;

                line-height: 30px;

            }



            nav a {

                font-size: 20px;

            }



            a.aktywne,

            a:hover {

                border: none;

                color: #00ADB5;

            }



            nav ul.pokaz {

                left: 0;

            }

        }



        footer {

            position: fixed;

            bottom: 0px;

            background: #111;

            width: 100%;



        }



        footer h2 {

            color: #fff;

            font-size: 20px;

            text-align: center;

        }



        .container ul {

            margin-left: 16%;

        }



        .sci a {

            margin-right: 23%;

            display: inline-block;

            width 40%;

            height: 20px;

            background: #222;

            align-items: center;

            text-decoration: none;

            border-radius: 5px;

            width: 20px;

            justify-content: center;

        }



        .sci {

            list-style: none;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 0.8%;

        }



        .sci a:hover {

            background: red;

        }



        .sci a .fa {

            color: #fff;

            font-size: 20px;

        }



        main {

            margin-top: 72.6vh;

            margin-left: 75vh;

        }



        footer .container .sec.aboutus p {

            color: #999;

            text-align: center;

            font-size: 13px;

        }

        .action {
            position: fixed;
            top: 10px;
            right: 90px;

        }

        .action .profile {
            position: relative;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .action .profile img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .action .menu {
            position: absolute;
            top: 80px;
            right: -10px;
            padding: 10px 20px;
            background: #fff;
            width: 200px;
            box-sizing: 0 5px 25px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            transition: 0.5s;
            visibility: hidden;
            opacity: 0;
        }

        .action .menu.active {
            visibility: visible;
            opacity: 1;
        }

        .action .menu::before {
            content: '';
            position: absolute;
            top: -5px;
            right: 28px;
            width: 20px;
            height: 20px;
            background: #fff;
            transform: rotate(45deg);
        }

        .action .menu h3 {
            width: 100%;
            text-align: center;
            font-size: 18px;
            padding: 20px 0;
            font-weight: 500;
            font-size 18px;
            color: #555;
            line-height: 1.2em;
        }

        .action .menu h3 span {
            font-size: 14px;
            color: #cecece;
            font-weight: 400;
            font-family: font-family: 'Popins', sans-serif;
        }

        .action .menu ul li {
            list-style: none;
            padding: 10px 0;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .action .menu ul li img {
            max-width: 20px;
            margin-right: 10px;
            opacity: 0.5;
            transition: 0.5s;
        }

        .action .menu ul li:hover img {
            opacity: 1
        }

        .action .menu ul li a {
            display: inline-block;
            text-decoration: none;
            color: #555;
            font-weight: 500;
            transition: 0.5s;

        }

        @media screen and (max-width:600px) {
            footer {
                bottom: 5.5vh;
            }
        }

    </style>

</head>



<body>

    <header>

        <nav>

            <label class="MMPO"><a href="#">MMPO</a></label>

            <ul>

                <li><a href="indexm.php">Strona główna</a></li>

                <li><a href="ofertam.php">Oferta</a></li>

                <li><a href="rabatym.php">Rabaty</a></li>

                <li><a href="kontaktm.php">Kontakt</a></li>
                <?php 
                if(isset($_SESSION['zalogowany'])){
                
                
                    echo "<div class=action>";
                    echo "<div class=profile onclick=menuToggle();>";
                    echo "<img src=ikona1.png>";
                    echo "</div>";
                    echo "<div class=menu>";
                        echo "<h3>";
                            echo " ",$_SESSION['user'],"<br>";
                            echo "<span>", $_SESSION['email']," ";
    echo "</span>";
                        echo "</h3>";
                        echo "<ul>";
                        echo "<li><img src=logout.png><a href=logoutm.php>Wyloguj</a></li>";
                        echo "</ul>";
                    echo "</div>";
                echo "</div>";
            }else{
                echo "<li><a href='logowaniem.php'>logowanie</a></li>";
                }
                ?>
                <script>
                    function menuToggle() {
                        const toggleMenu = document.querySelector('.menu');
                        toggleMenu.classList.toggle('active')
                    }

                </script>



            </ul>

            <label id="rozklad">

                <i class="fas fa-bars"></i>

            </label>

        </nav>

    </header>

    <main>

    </main>

    <footer>


    </footer>

    <script type="text/javascript" src=""></script>

</body>



</html>
