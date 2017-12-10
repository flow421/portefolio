<?php
$auth = 0;
include "lib/includes.php";

/**
 * TRAITEMENT DU FORMULAIRE
 **/

if ( isset( $_POST[ 'username' ] ) && isset( $_POST[ 'password' ] ) ) {
    $username = $db->quote ( $_POST[ 'username' ] );
    $password = sha1 ( $_POST[ 'password' ] );
    $sql
        = "SELECT * FROM users WHERE username=$username
    AND password='$password'";
    $select = $db->query ( $sql );
    var_dump ( $select->rowCount () );
    if ( $select->rowCount () > 0 ) {
        $_SESSION[ 'Auth' ] = $select->fetch ();
        setflash ( 'vous etes maintenant connecter' );
        header ( "Location: admin/index.php" );
        die();
    }
}
/**
 * Inclusion du header
 */
include 'partials/header.php';
?>

<form action="#" method="post">
    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <?= input ( 'username' ); ?>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">

        <button type="submit" class="btn btn-default">Se connecter</button>
    </div>
</form>

<?php include "partials/footer.php";
include "lib/debug.php"; ?>
