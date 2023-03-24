<div class="container mt-5">
    <h2 class='pt-3 text-center'><?php echo $mode ?> un pays</h2>
    <form action="index.php?uc=pays&action=valideForm" method="post"
          class="col-md-6 offset-md-3 border border-primary p-3 rounded">
        <div class="form-group">
            <label for='nomP'> Nom </label>
            <input type="text" class='form-control' id='nomP' placehoder='Saisir le nom' name='nomP'
                   value='<?= $mode == "Modifier" ? $lePays['nomP'] : '' ?>'>
        </div>
        <div class="form-group">
            <label for='population'> Population </label>
            <input type="number" class='form-control' id='population' placehoder='Saisir la population' name='population'
                   value='<?php if($mode == "Modifier") {echo $lePays['population'] ;} ?>'>
        </div>
        <input type="hidden" id="idP" name="idP" value="<?php if($mode == "Modifier") {echo $lePays['idP'];} ?>">
        <div class="row">
            <div class="col"> <a href="index.php?uc=pays&action=list" class='btn btn-warning btn-block'>Revenir à
                    la liste</a>
            </div>
            <div class="col"><button type='submit' class='btn btn-success btn-block'> <?php echo $mode ?> </button>
            </div>
        </div>
    </form>
</div>