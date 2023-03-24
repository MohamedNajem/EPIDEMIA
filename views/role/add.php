<div class="container mt-5">
    <h2 class='pt-3 text-center'><?php echo $mode ?> un role</h2>
    <form action="index.php?uc=role&action=valideForm" method="post"
          class="col-md-6 offset-md-3 border border-primary p-3 rounded">
        <div class="form-group">
            <label for='nomR'> Nom </label>
            <input type="text" class='form-control' id='nomR' placehoder='Saisir le nom' name='nomR'
                   value='<?= $mode == "Modifier" ? $leRole['nomR'] : '' ?>'>
        </div>
        <input type="hidden" id="idR" name="idR" value="<?php if($mode == "Modifier") {echo $leRole['idR'];} ?>">
        <div class="row">
            <div class="col"> <a href="index.php?uc=role&action=list" class='btn btn-warning btn-block'>Revenir à
                    la liste</a>
            </div>
            <div class="col"><button type='submit' class='btn btn-success btn-block'> <?php echo $mode ?> </button>
            </div>
        </div>
    </form>
</div>