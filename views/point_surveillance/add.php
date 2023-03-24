<div class="container mt-5">
    <h2 class='pt-3 text-center'><?php echo $mode ?> un point de surveillance</h2>
    <form action="index.php?uc=pointSurveillance&action=validerForm" method="post"
          class="col-md-6 offset-md-3 border border-primary p-3 rounded">
        <div class="form-group">
            <label for='nomPs'> Nom </label>
            <input type="text" class='form-control' id='nomPs' placehoder='Saisir le nom' name='nomPs'
                   value='<?= $mode == "Modifier" ? $ps['nomPs'] : '' ?>'>
        </div>
        <div class="form-group">
            <label for='idZone'> Role </label>
            <select name="idZone" class="form-control">
                <?php
                foreach ($lesZones as $zone) {
                    if($mode=="Modifier"){
                        $selection = $zone['idZ'] == $zone['idZone'] ? 'selected' : '';
                    }
                    echo "<option value='".$zone['idZ'] ."'". $selection.">".$zone['nomZ']."</option>";
                }
                ?>
            </select>
        </div>
        <input type="hidden" id="idPs" name="idPs" value="<?php if($mode == "Modifier") {echo $ps['idPs'] ;} ?>">
        <div class="row">
            <div class="col"> <a href="index.php?uc=pointSurveillance&action=list" class='btn btn-warning btn-block'>Revenir à
                    la liste</a>
            </div>
            <div class="col"><button type='submit' class='btn btn-success btn-block'> <?php echo $mode ?> </button>
            </div>
        </div>
    </form>
</div>