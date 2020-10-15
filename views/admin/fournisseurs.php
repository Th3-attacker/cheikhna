<?php
$data = new FournisseurController();
$fournisseurs = $data->showAllFournisseurs();
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>قائمة الموردين</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>إسم</th>
                                <th>إسم العئلي</th>
                                <th>الهاتف</th>
                                <th>المشرف</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($fournisseurs as $fournisseur) : ?>
                                <tr>
                                    <td><?= $fournisseur['id'] ?></td>
                                    <td><?= $fournisseur['firstname_f'] ?></td>
                                    <td><?= $fournisseur['lastname_f'] ?></td>
                                    <td><?= $fournisseur['phone_f'] ?></td>
                                    <td><?= $fournisseur['lastname'] ?></td>
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