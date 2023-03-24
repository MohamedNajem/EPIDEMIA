<div class="container mt-5">
    <h2 class='pt-3 text-center'><?php echo $mode ?> une zone</h2>
    <form action="index.php?uc=zone&action=validerForm" method="post"
          class="col-md-6 offset-md-3 border border-primary p-3 rounded">
        <div class="form-group">
            <label for='nomZ'> Nom </label>
            <input type="text" class='form-control' id='nomZ' placehoder='Saisir le nom' name='nomZ'
                   value='<?= $mode == "Modifier" ? $laZone['nomZ'] : '' ?>'>
        </div>
        <div class="form-group">
            <label for='nbPersonnesTotal'> Nombre Personnes Total </label>
            <input type="number" class='form-control' id='nbPersonnesTotal' placehoder='Saisir le nombre total de personnes' name='nbPersonnesTotal'
                   value='<?php if($mode == "Modifier") {echo $laZone['nbPersonnesTotal'] ;} ?>'>
        </div>
        <div class="form-group">
            <label for='nbPersonnesSympt'> Nombre Personnes presentant des symptomes </label>
            <input type="number" class='form-control' id='nbPersonnesSympt' placehoder='Saisir le nombre de personnes ayant des symptomes' name='nbPersonnesSympt'
                   value='<?php if($mode == "Modifier") {echo $laZone['nbPersonnesSympt'] ;} ?>'>
        </div>
        <div class="form-group">
            <label for='nbPersonnesPosi'> Nombre Personnes Positives </label>
            <input type="number" class='form-control' id='nbPersonnesPosi' placehoder='Saisir le nombre de personnes positives' name='nbPersonnesPosi'
                   value='<?php if($mode == "Modifier") {echo $laZone['nbPersonnesPosi'] ;} ?>'>
        </div>
        <div class="form-group">
            <label for='idPays'> Pays </label>
            <select name="idPays" class="form-control">
                <?php
                foreach ($lesPays as $pays) {
                    if($mode=="Modifier"){
                        $selection = $pays['idP'] == $laZone['idPays'] ? 'selected' : '';
                    }
                    echo "<option value='".$pays['idP'] ."'". $selection.">".$pays['nomP']."</option>";
                }
                ?>
            </select>
        </div>
        <input type="hidden" id="idZ" name="idZ" value="<?php if($mode == "Modifier") {echo $laZone['idZ'] ;} ?>">
        <div class="row">
            <div class="col"> <a href="index.php?uc=zone&action=list" class='btn btn-warning btn-block'>Revenir à
                    la liste</a>
            </div>
            <div class="col"><button type='submit' class='btn btn-success btn-block'> <?php echo $mode ?> </button>
            </div>
        </div>
    </form>
</div>