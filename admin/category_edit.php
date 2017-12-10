<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 10/12/2017
 * Time: 00:44
 */
include '../lib/includes.php';

if ( isset( $_POST[ 'name' ] ) && isset( $_POST[ 'slug' ] ) ){
    $slug = $_POST[ 'slug' ];
    if ( preg_match ( '^[a-z\-0-9]+$' , $slug ) ){
        $name = $db->quote ( $_POST[ 'name' ] );
        $name = $db->quote ( $_POST[ 'slug' ] );
    }
    else{
        setflash ( 'le slug n\'est pas valide' , 'error' );
    }
}
include '../partials/admin_header.php';


?>
<h1>Editer une catégorie</h1>


<form action="#" method="post">
    <div class="form-group">
        <label for="name">Nom de la catégorie</label>
        <?= input ( 'username' ); ?>
    </div>
    <div class="form-group">
        <label for="slug">URL de la catégorie</label>
        <?= input ( 'slug' ); ?>
    </div>
    <button type="submit" class="btn btn-default">Enregister</button>

</form>


<?php include '../partials/footer.php'; ?>
