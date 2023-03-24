<div class="container mt-5">

    <div class="row pt-3">
        <div class="col-9">
            <h2>Liste des roles</h2>
        </div>
        
        <?php  if( $_SESSION['idRole'] == 1){?>
        <div class="col-3"><a href="index.php?uc=role&action=add" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer un role</a> </div>
        <?php }?>
    </div>

    <table class="table table-hover table-striped">
        <thead>
        <tr class="d-flex">
            <th scope="col" class="col-md-4">Id</th>
            <th scope="col" class="col-md-4">Nom</th>
            <th scope="col" class="col-md-4">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($lesRoles as $role => $value) {
            echo "<tr class='d-flex'>";
            echo "<td class='col-md-4'>".$value['idR']."</td>";
            echo "<td class='col-md-4'>".$value['nomR']."</td>";
            echo "<td class='col-md-4'>
            <a href='index.php?uc=role&action=update&id=". $value['idR'] . "' class='btn btn-primary'><i class='fas fa-pen'></i></a>
            <a href='#modalSuppression' data-toggle='modal' data-message='Voulez vous supprimer ce role ?' data-suppression='index.php?uc=role&action=delete&id=".$value['idR'] ."' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
        </td>";
            echo "</tr>";
        }

        ?>

        </tbody>
    </table>

</div><?php
