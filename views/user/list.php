<div class="container mt-5">

    <div class="row pt-3">
        <div class="col-9">
            <h2>Liste des utilisateurs</h2>
        </div>
        <div class="col-3"><a href="index.php?uc=user&action=add" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer un utilisateur</a> </div>

    </div>

    <form id="formRecherche" action="index.php?uc=user&action=list" method="post" class="border border-primary rounded p-3 mt-3 mb-3">
        <div class="row">
            <div class="col">
                <input type="text" class='form-control' id='nom' onInput="document.getElementById('formRecherche').submit()" placehoder='Saisir le nom' name='nom' value="<?php echo $nom; ?>">
            </div>
            <div class="col">
                <select name="role" class="form-control" onChange="document.getElementById('formRecherche').submit()">
                    <?php
                    echo "<option value='Tous'>Tous les roles</option>";
                    foreach ($lesRoles as $r) {
                        $selection = $r['idR'] == $roleSel ? 'selected' : '';
                        echo "<option value='".$r['idR']."'". $selection.">".$r['nomR']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success btn-block"> Rechercher</button>
            </div>
        </div>
    </form>


    <table class="table table-hover table-striped">
        <thead>
        <tr class="d-flex">
            <th scope="col" class="col-md-2">Id</th>
            <th scope="col" class="col-md-2">Nom</th>
            <th scope="col" class="col-md-2">Prenom</th>
            <th scope="col" class="col-md-2">Email </th>
            <th scope="col" class="col-md-2">Role</th>
            <th scope="col" class="col-md-2" colspan="2">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($lesUsers as $user => $value) {
            echo "<tr class='d-flex'>";
            echo "<td class='col-md-2'>".$value['id']."</td>";
            echo "<td class='col-md-2'>".$value['nomUser']."</td>";
            echo "<td class='col-md-2'>".$value['prenom']."</td>";
            echo "<td class='col-md-2'>".$value['email']."</td>";
            echo "<td class='col-md-2'>".$value['nomRole']."</td>";
            echo "<td class='col-md-2'>
                <a href='index.php?uc=user&action=update&id=". $value['id'] . "' class='btn btn-primary'><i class='fas fa-pen'></i></a>
                <a href='#modalSuppression' data-toggle='modal' data-message='Voulez vous supprimer cet utilisateur ?' data-suppression='index.php?uc=user&action=delete&id=".$value['id'] ."' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
            </td>";
            echo "</tr>";
        }

        ?>

        </tbody>
    </table>

</div>