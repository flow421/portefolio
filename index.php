<?php $auth = 0;
include "partials/header.php";
include "lib/includes.php";
?>


    <h1> Mon Portefolio </h1>
<?php
$select = $db->query ( 'SELECT * FROM users' );
$select->setFetchMode ( PDO::FETCH_ASSOC );
var_dump ( $select->fetch () );
var_dump ( $_SERVER[ "SCRIPT_NAME" ] );


include "lib/debug.php";
include "partials/footer.php"; ?>