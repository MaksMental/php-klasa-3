<?php
        session_start();
        require_once "connectm.php";


        mysqli_report(MYSQLI_REPORT_STRICT);

        try{
            $baza = new mysqli($server,$user,$haslo,$nazwabazy);
            if($baza->connect_errno!=0){
                    throw new Exception(mysqli_connect_errno());
                 }else{
                    if(!empty($_POST['login'])){
                        $login = $_POST['login'];
                        $login=htmlentities($login,ENT_QUOTES,"UTF-8");
                        }
                        if(!empty($_POST['pass'])){
                        $haslo = $_POST['pass'];
                        }
                        if($rezultat=@$baza->query(sprintf("SELECT * FROM users WHERE user='%s'",
                        mysqli_real_escape_string($baza,$login))))
                        {
                            
                            $ilosc=$rezultat->num_rows;
                            if($ilosc>0){
                            $linia=$rezultat->fetch_assoc();
        
                            if(password_verify($haslo,$linia['pass'])){
                                $_SESSION['zalogowany']=true;
                                $_SESSION['id']=$linia['id'];
                                $_SESSION['user']=$linia['user'];
                                $_SESSION['pass']=$linia['pass'];
                                $_SESSION['email']=$linia['email'];
                            
                                $rezultat->free_result();
                                header('Location: indexm.php');
                            }else{
                                $_SESSION['error']='<span style="color:red">Nieprawidłowy login lub hasło</span>';
                                header('Location:logowaniem.php');
                            }
                            
                            }else{
                                $_SESSION['error']='<span style="color:red">Nieprawidłowy login lub hasło</span>';
                                header('Location:logowaniem.php');
                            }
                        }
                    
                        $baza->close();
                 }
        }catch(Exception $e){
            echo '<span style="color:red;">Błąd serwera!</span><br>'.$e;
        }
	
?>
