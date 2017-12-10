<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 10/12/2017
 * Time: 00:44
 */
include '../lib/includes.php';
include '../partials/admin_header.php';
/**
 * SUPRESSION
 */
if(isset($_GET['delete'])){
    checkCsrf ();
    $id=$db->quote ($_GET['delete']);
    $db->query ("DELETE FROM categories WHERE id=$id");
    setflash ('la catégorie a bien ete supprimer');
    header ('Location:category.php');
}

/**
 * Catégories
 */
$select = $db->query ( "SELECT id, name, slug FROM categories" );
$categories = $select->fetchAll ();


?>
<h1>Les catégories</h1>
<p><a href="category_edit.php" class="btn btn-success"> Ajouter une nouvelle catégorie</a> </p>

<table class="tablet table-striped">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ( $categories as $category ): ?>
        <tr>
            <td><?= $category[ 'id' ]; ?></td>
            <td><?= $category[ 'name' ]; ?></td>
            <td>
                <a href="category_edit.php?id=<?= $category[ 'id' ]; ?>" class="btn btn-default">
                    Edit</a>
                <a href="?delete=<?= $category[ 'id' ]; ?> & <?=csrf (); ?>" class="btn btn-error"
                   onclick="return confirm('sur de sur ?');">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>

<?php include '../partials/footer.php'; ?>
