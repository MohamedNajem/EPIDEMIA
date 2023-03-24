<div class="container mt-5">

    <div class="row pt-3">
        <div class="col-9">
            <h2>Liste des pays</h2>
        </div>
        <?php  if( $_SESSION['idRole'] == 1){?>
        <div class="col-3"><a href="index.php?uc=pays&action=add" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer un pays</a> </div>
        <?php }?>
    </div>

    <table class="table table-hover table-striped">
        <thead>
        <tr class="d-flex">
            <th scope="col" class="col-md-2">Id</th>
            <th scope="col" class="col-md-5">Nom</th>
            <th scope="col" class="col-md-3">Population</th>
            <th scope="col" class="col-md-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($lesPays as $pays => $value) {
            echo "<tr class='d-flex'>";
            echo "<td class='col-md-2'>".$value['idP']."</td>";
            echo "<td class='col-md-5'>".$value['nomP']."</td>";
            echo "<td class='col-md-3'>".$value['population']."</td>";
            echo "<td class='col-md-2'>
            <a href='index.php?uc=pays&action=update&id=". $value['idP'] . "' class='btn btn-primary'><i class='fas fa-pen'></i></a>
            <a href='#modalSuppression' data-toggle='modal' data-message='Voulez vous supprimer ce pays ?' data-suppression='index.php?uc=pays&action=delete&id=".$value['idP'] ."' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
        </td>";
            echo "</tr>";
        }

        ?>

        </tbody>
    </table>

</div>