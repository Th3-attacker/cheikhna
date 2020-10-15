<?php

$data = new CategorieController();
$categories = $data->showAllCategories();

?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Liste des catégories</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $categorie) : ?>
                                <tr>
                                    <td><?= $categorie['id'] ?></td>
                                    <td><?= $categorie['name'] ?></td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Editer</a>
                                        <a href="#" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>