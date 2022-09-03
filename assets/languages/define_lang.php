<?php
session_start();

    if(!isset($_SESSION['lang'])){
        $_SESSION['lang']=2;
    }

    if($_SESSION['lang']==1){
        include('assets/languages/lang_en.php');

    }else if ($_SESSION['lang']==2) {
        include('assets/languages/lang_fr.php');
    }

 ?>
