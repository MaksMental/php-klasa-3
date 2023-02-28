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

            width: 100%;

            height: 100%;

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

            .button {
                cursor: pointer;
                padding: 13px;
                margin-left: 33%;
                border-radius: 10px;
                background-color: red;
                font-family: monospace;
                color: white;
            }

            .button2 {
                cursor: pointer;
                padding: 13px;
                border-radius: 10px;
                background-color: #4CAF50;
                font-family: monospace;
                color: white;
            }

    </style>
</head>



<body>

    <header>

        <nav>

            <label class="MMPO"><a href="#.html">MMPO</a></label>
        </nav>
    </header>
    <main>
        <section3>
            <a href="indexk.php"><button class="button" class="btn btn-primary btn-lg"><b>&nbsp;&nbsp;Kobieta&nbsp;&nbsp;</b></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="indexm.php"> <button class="button2" class="btn btn-secondary btn-lg"><b>&nbsp;&nbsp;Mężczyzna&nbsp;&nbsp;</b></button></a>
        </section3>
    </main>





</body>

</html>
