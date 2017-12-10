<?php
/**
 * Created by PhpStorm.
 * User: florianbuis
 * Date: 08/12/2017
 * Time: 02:15
 **/


$directory = basename ( dirname ( dirname ( __FILE__ ) ) );
/** @var TYPE_NAME $url */
$url = explode ( $directory , $_SERVER[ 'REQUEST_URI' ] );
if ( count ( $url ) == 1 ) {
    define ( 'WEBROOT' , '/' );
}
else {
    define ( 'WEBROOT' , $url[ 0 ] . 'portefolio/' );

}

