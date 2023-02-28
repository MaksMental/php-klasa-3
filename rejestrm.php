<?php
session_start();

        $login = $_POST['login'];
        $haslo1 = $_POST['pass1'];
        $haslo2 = $_POST['pass2'];
        $email = $_POST['email'];
        $spr=1;

        if((strlen($login)<4)||(strlen($login)>18)){
            $_SESSION['login_e']='<span style="color:red">Login musi zawierać od 4 do 20 znaków</span><br>';
            header('Location:registerm.php');
            $spr=0;
        }

        if(ctype_alnum($login)==false){
            $_SESSION['login_e']='<span style="color:red">Login musi składać się tylko z liter i cyfr</span><br>';
            header('Location:registerm.php');
            $spr=0;
        }

        if((strlen($haslo1)<8)||(strlen($haslo1)>18)){
            $_SESSION['haslo_e']='<span style="color:red">Hasło musi posiadać od 8 do 18 znaków</span><br>';
            header('Location:registerm.php'); 
            $spr=0;   
        }

        if($haslo1!=$haslo2){
            $_SESSION['haslo_e']='<span style="color:red">Hasła muszą się zgadzać</span><br>';
            header('Location:registerm.php');
            $spr=0;
        }
        if(!isset($_POST['regulamin'])){
            $_SESSION['reg_e']='<br><span style="color:red">Musisz zaakceptować regulamin</span>';
            header('Location:registerm.php');
            $spr=0;
        }
        
        require_once "connectm.php";
        mysqli_report(MYSQLI_REPORT_STRICT);

        try{
            $baza = new mysqli($server,$user,$haslo,$nazwabazy);
            if($baza->connect_errno!=0){
                    throw new Exception(mysqli_connect_errno());
                 }else{
                    $rezultat=$baza->query("SELECT id FROM users WHERE email='$email'");
                    if(!$rezultat) throw new Exception($baza->error);
                    $ile=$rezultat->num_rows;
                    if($ile>0){
                        $_SESSION['mail_e']='<span style="color:red">Konto o podanym mailu już istnieje</span><br>';
                        header('Location:registerm.php');
                        $spr=0;
                    }
                    $rezultat=$baza->query("SELECT id FROM users WHERE user='$login'");
                    if(!$rezultat) throw new Exception($baza->error);
                    $ile=$rezultat->num_rows;
                    if($ile>0){
                        $_SESSION['login_e']='<span style="color:red">Konto o podanej nazwie już istnieje</span><br>';
                        header('Location:registerm.php');
                        $spr=0;
                    }
                    if($spr==1){
                        $haslo1=password_hash($haslo1,PASSWORD_DEFAULT);
                        if($baza->query("INSERT INTO users VALUES(NULL,'$login','$haslo1','$email')")){
                           $_SESSION['rej']=1; 
                           header('Location:zarejm.php');
                        }
                    }
                    $baza->close();


                 }
        }catch(Exception $e){
            echo '<span style="color:red;">Błąd serwera!</span><br>'.$e;
        }




        



         
    
        

        
        



?>
