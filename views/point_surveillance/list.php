<div class="container mt-5">

    <div class="row pt-3">
        <div class="col-9">
            <h2>Liste des points de surveillance</h2>
        </div>
        
        <div class="col-3"><a href="index.php?uc=pointSurveillance&action=add" class='btn btn-success'><i class="fas fa-plus-circle"></i> Créer un point de surveillance</a> </div>

    </div>

    <form id="formRecherche" action="index.php?uc=pointSurveillance&action=list" method="post" class="border border-primary rounded p-3 mt-3 mb-3">
        <div class="row">
            <div class="col">
                <input type="text" class='form-control' id='nom' onInput="document.getElementById('formRecherche').submit()" placehoder='Saisir le nom' name='nom' value="<?php echo $nom; ?>">
            </div>
            <div class="col">
                <select name="zone" class="form-control" onChange="document.getElementById('formRecherche').submit()">
                    <?php
                    echo "<option value='Tous'>Toutes les zones</option>";
                    foreach ($lesZones as $z) {
                        $selection = $z['idZ'] == $zoneSel ? 'selected' : '';
                        echo "<option value='".$z['idZ']."'". $selection.">".$z['nomZ']."</option>";
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
            <th scope="col" class="col-md-3">Id</th>
            <th scope="col" class="col-md-3">Nom</th>
            <th scope="col" class="col-md-3">Zone</th>
            <th scope="col" class="col-md-3" colspan="2">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($lesPs as $ps => $value) {
            echo "<tr class='d-flex'>";
            echo "<td class='col-md-3'>".$value['idPs']."</td>";
            echo "<td class='col-md-3'>".$value['nomPs']."</td>";
            echo "<td class='col-md-3'>".$value['nomZone']."</td>";
            echo "<td class='col-md-3'>
                <a href='index.php?uc=pointSurveillance&action=update&id=". $value['idPs'] . "' class='btn btn-primary'><i class='fas fa-pen'></i></a>
                <a href='#modalSuppression' data-toggle='modal' data-message='Voulez vous supprimer ce point de surveillance ?' data-suppression='index.php?uc=pointSurveillance&action=delete&id=".$value['idPs'] ."' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
            </td>";
            echo "</tr>";
        }

        ?>

        </tbody>
    </table>

</div>