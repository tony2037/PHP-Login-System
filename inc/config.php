<?php
    if(!defined('__CONFIG__')){
        exit("Your are not allowed to be here ");
    }
    //define __FOOTER__ for footer.php
    define("__FOOTER__",true);

    //include DB.php
    include_once "classes/DB.php";
    
    $con = DB::getConnection();
?>