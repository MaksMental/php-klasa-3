<?php
session_start();
if(isset($_SESSION['rej'])){
    header('Location:logowaniem.php');
}else{
    header('Location:logowaniem.php');
}
session_unset();
?>
