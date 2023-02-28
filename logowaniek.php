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



        .box {

            width: 500px;

            background-color: rgb(74, 80, 90);

            position: absolute;

            padding: 40px;

            border-radius: 50px;

            top: 50%;

            left: 50%;

            transform: translate(-50%, -50%);

            text-align: center;

            z-index: -1;

        }



        .box h1 {

            color: white;

            text-transform: uppercase;

            font-weight: 500;

        }



        .box input[type="text"],

        .box input[type="password"] {

            border: 0;

            background: none;

            display: block;

            margin: 20px auto;

            text-align: center;

            border: 2px solid #00ADB5;

            padding: 14px 10px;

            width: 200px;

            outline: none;

            color: white;

            border-radius: 24px;

            transition: 0.25s;

        }



        .box input[type="text"]:focus,

        .box input[type="password"]:focus,

        .box input[type="text"]:hover,

        .box input[type="password"]:hover {

            width: 280px;

            border-color: #EEEEEE;

        }



        .box input[type="submit"] {

            background: none;

            display: block;

            margin: 20px auto;

            text-align: center;

            border: 2px solid #FFF;

            padding: 14px 40px;

            outline: none;

            border-radius: 24px;

            color: white;

            transition: 0.25s;

        }



        .box input[type="submit"]:hover {

            cursor: pointer;

            border: 2px solid #00ADB5;

            transition: 0.6s;

        }



        form p {

            color: white;

            font-size: 17px;

        }



        form p2 a {

            color: #202327;

            text-decoration: none;

            font-size: 17px;

        }



        form p2 a:hover {

            color: #00ADB5;

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

            margin-left: 4%;

        }



        nav ul {

            float: right;

            margin-right: 40px;

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



        footer .container .sec.aboutus p {

            color: #999;

            text-align: center;

            font-size: 13px;

        }

    </style>

</head>



<body>

    <header>

        <nav>

            <label class="MMPO"><a href="#">MMPO</a></label>

            <ul>

                <li><a href="index.php">Strona główna</a></li>

                <li><a href="ofertam.php">Oferta</a></li>

                <li><a href="rabatym.php">Rabaty</a></li>

                <li><a href="kontaktm.php">Kontakt</a></li>

                <li><a href="logowaniem.php">Logowanie</a></li>

            </ul>

            <label id="rozklad">

                <i class="fas fa-bars"></i>

            </label>

        </nav>

    </header>

    <main>

        <form class="box" action="zalogujm.php" method="post">

            <h1>Logowanie</h1>

            <input type="text" name="login" placeholder="Login">

            <input type="password" name="pass" placeholder="Hasło">

            <?php
            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
            }
            ?>
            <input type="submit" name="" value="Zaloguj się">

            <p>Nie masz jeszcze konta? </p>

            <p2><a href="registerm.php">Zarejestruj się</a></p2>

        </form>

    </main>

    <footer>
    </footer>

    <script type="text/javascript" src=""></script>

</body>



</html>
