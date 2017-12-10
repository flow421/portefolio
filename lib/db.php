<?php
/**
 * Created by PhpStorm.
 * User: florianbuis
 * Date: 08/12/2017
 * Time: 01:46
 */
try {
    $db = new PDO( "mysql:host=localhost;dbname=portefolio" , 'root' , '' );
    $db->setAttribute ( PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC );
    $db->setAttribute ( PDO::ATTR_ERRMODE , PDO::ERRMODE_WARNING );
}
catch ( Exception $e ) {
    echo 'Impossible de se connecter à la base de données ';
    echo $e->getMessage ();
    die();
}

