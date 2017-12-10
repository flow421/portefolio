<?php
/**
 * Created by PhpStorm.
 * User: florianbuis
 * Date: 08/12/2017
 * Time: 15:43
 */
function flash ()
{
    if ( isset( $_SESSION[ 'Flash' ] ) ) {
        extract ( $_SESSION[ 'Flash' ] );
        unset( $_SESSION[ 'Flash' ] );
        $message = "success";
        return "<div class ='alert alert-type'>$message</div>";
    };
}

;

/**
 * @param $message
 * @param string $type
 */
function setflash ( $message , $type = 'success' )
{
    $_SESSION[ 'Flash' ][ 'message' ] = $message;
    $_SESSION[ 'Flash' ][ 'typ' ] = $type;
}

;