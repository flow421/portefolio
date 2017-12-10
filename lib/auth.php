<?php

session_start ();
var_dump ( $_SESSION );
if ( !isset( $auth ) ) {

    if ( !isset( $_SESSION[ 'Auth' ][ 'id' ] ) ) {
        header ( 'location:' . WEBROOT . 'login.php' );
        die();
    }
}

if(!isset($_SESSION['csfr'])){
    $_SESSION['csfr'] = md5 (time () + rand ());
}

function csrf(){
    return 'csfr=' . $_SESSION['csfr'];
}

/**
 *
 */
function checkCsrf(){
    /** @noinspection PhpVoidFunctionResultUsedInspection */
    if (!isset($_GET['csfr']) || $_GET['csfr'] != $_SESSION['csfr']){
        header ('Location:' . WEBROOT . 'csrf.php');
        die();
    }
}
?>
