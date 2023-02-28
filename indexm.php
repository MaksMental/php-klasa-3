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
            position: fixed;
            list-style: none;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 0.8%;
            z-index: -2;
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


        .chat-bar-collapsible {
            position: fixed;
            bottom: 0;
            right: 1vw;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .chat-bar-collapsible2 {
            position: fixed;
            bottom: 0;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .collapsible {
            background-color: #222831;
            color: white;
            cursor: pointer;
            padding: 10px;
            width: 350px;
            text-align: center;
            outline: none;
            font-size: 18px;
            border-radius: 10px 10px 0px 0px;
            border: 2px solid white;
            border-bottom: none;
        }

        .content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            background-color: #f1f1f1;
        }

        .full-chat-block {
            width: 350px;
            background: white;
            text-align: center;
            overflow: auto;
            scrollbar-width: none;
            height: max-content;
            transition: max-height 0.2s ease-out;
        }

        .outer-container {
            min-height: 500px;
            bottom: 0%;
            position: relative;
            background-color: #EEEEEE;
        }

        .chat-container {
            max-height: 500px;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            scroll-behavior: smooth;
            hyphens: auto;
        }

        .chat-container::-webkit-scrollbar {
            display: none;
        }

        .chat-bar-input-block {
            display: flex;
            float: left;
            box-sizing: border-box;
            justify-content: space-between;
            width: 100%;
            align-items: center;
            background-color: rgb(235, 235, 235);
            border-radius: 10px 10px 0px 0px;
            padding: 10px 0px 10px 10px;
        }

        .chat-bar-icons {
            display: flex;
            justify-content: space-evenly;
            box-sizing: border-box;
            width: 25%;
            float: right;
            font-size: 20px;
        }

        #chat-icon:hover {
            opacity: .7;
        }

        /* Chat bubbles */

        #userInput {
            width: 75%;
        }

        .input-box {
            float: left;
            border: none;
            box-sizing: border-box;
            width: 100%;
            border-radius: 10px;
            padding: 10px;
            font-size: 16px;
            color: #000;
            background-color: white;
            outline: none
        }

        .userText {
            color: white;
            font-family: Helvetica;
            font-size: 16px;
            font-weight: normal;
            text-align: right;
            clear: both;
        }

        .userText span {
            line-height: 1.5em;
            display: inline-block;
            background: #5ca6fa;
            padding: 10px;
            border-radius: 8px;
            border-bottom-right-radius: 2px;
            max-width: 80%;
            margin-right: 10px;
            animation: floatup .5s forwards
        }

        .botText {
            color: #000;
            font-family: Helvetica;
            font-weight: normal;
            font-size: 16px;
            text-align: left;
        }

        .botText span {
            line-height: 1.5em;
            display: inline-block;
            background: #e0e0e0;
            padding: 10px;
            border-radius: 8px;
            border-bottom-left-radius: 2px;
            max-width: 80%;
            margin-left: 10px;
            animation: floatup .5s forwards
        }

        @keyframes floatup {
            from {
                transform: translateY(14px);
                opacity: .0;
            }

            to {
                transform: translateY(0px);
                opacity: 1;
            }
        }

        @media screen and (max-width:600px) {
            .full-chat-block {
                width: 50vw;
                border-radius: 0px;
            }

            .chat-bar-collapsible {
                position: fixed;
                bottom: 0;
                right: 0vw;
                width: 50vw;
            }

            .chat-bar-collapsible2 {
                position: fixed;
                bottom: 0;
                width: 50vw;
            }

            .collapsible {
                width: 37vh;
                border: 0px;
                border-top: 3px solid white;
                border-radius: 0px;
            }
        }

        @media screen and (max-height:700px) {
            footer {
                bottom: 7.5vh;
            }
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

        .rightncenter {
            margin-left: 1vh;
        }

        .box {

            width: 35vw;

            background-color: rgb(74, 80, 90);

            position: absolute;

            padding: 5vh;

            border-radius: 50px;

            top: 25vh;

            left: 30vw;

            text-align: center;
            z-index: -1;

        }



        .box h1 {

            color: white;

            text-transform: uppercase;

            font-weight: 500;

        }

    </style>
</head>



<body>

    <header>

        <nav>

            <label class="MMPO"><a href="#.html">MMPO</a></label>

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
                        echo "<li><img class=zdjencie src=logout.png><a href=logoutm.php>Wyloguj</a></li>";
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

        <div class="box">
            <h1>MMPO Service</h1>
            <p>What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>


    </main>
    <footer>
    </footer>
    <script type="text/javascript" src=""></script>
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Napisz do nas !
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- kontener wiadomości -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- wiadomości -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Ładowanie...</span></p>
                        </div>

                        <!-- okienko wysyłania -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg" placeholder="Naciśnij ENTER by wysłać wiadomość">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart" onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send" onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="chat-bar-collapsible2">
        <button id="chat-button" type="button" class="collapsible">Rozmawiaj z nami !
        </button>

        <div class="content">
            <div class="glowny">
                <div class="right">
                    <div class="rightncenter"><br>Cena <br>
                        <button id="play1">Play &#9658;</button>
                        <button id="stop1">Stop &#9611;</button> <br> <br>

                        Coaching? <br>
                        <button id="play2">Play &#9658;</button>
                        <button id="stop2">Stop &#9611;</button> <br> <br>
                        Oferta <br>
                        <button id="play3">Play &#9658;</button>
                        <button id="stop3">Stop &#9611;</button> <br> <br>
                        Ilość członków <br>
                        <button id="play4">Play &#9658;</button>
                        <button id="stop4">Stop &#9611;</button> <br><br>
                        Zadowolenie <br>
                        <button id="play5">Play &#9658;</button>
                        <button id="stop5">Stop &#9611;</button> <br><br>
                        Kontakt <br>
                        <button id="play6">Play &#9658;</button>
                        <button id="stop6">Stop &#9611;</button> <br><br>

                        Godziny pracy <br>
                        <button id="play7">Play &#9658;</button>
                        <button id="stop7">Stop &#9611;</button> <br><br>

                        Kompetencja <br>
                        <button id="play8">Play &#9658;</button>
                        <button id="stop8">Stop &#9611;</button> <br><br>


                    </div>
                </div>
            </div>
        </div>

        <div id="chat-bar-bottom">
            <p></p>
        </div>

    </div>




</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="scripts/chat.js"></script>
<script src="scripts/odpowiedzi.js"></script>
<script src="scripts/audiom.js"></script>





</html>
