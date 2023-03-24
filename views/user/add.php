<div class="container mt-5">
    <h2 class='pt-3 text-center'><?php echo $mode ?> un utilisateur</h2>
    <form action="index.php?uc=user&action=validerForm" method="post"
          class="col-md-6 offset-md-3 border border-primary p-3 rounded">
        <div class="form-group">
            <label for='nom'> Nom </label>
            <input type="text" class='form-control' id='nom' placehoder='Saisir le nom' name='nom'
                   value='<?= $mode == "Modifier" ? $user['nom'] : '' ?>'>
        </div>
        <div class="form-group">
            <label for='prenom'> Prénom </label>
            <input type="text" class='form-control' id='prenom' placehoder='Saisir le prénom' name='prenom'
                   value='<?php if($mode == "Modifier") {echo $user['prenom'] ;} ?>'>
        </div>
        <div class="form-group">
            <label for='email'> Email </label>
            <input type="text" class='form-control' id='email' placehoder="Saisir l'email" name='email'
                   value='<?php if($mode == "Modifier") {echo $user['email'] ;} ?>'>
        </div>
        <div class="form-group">
            <label for='password'> NPassword </label>
            <input type="password" class='form-control' id='password' placehoder='Saisir le mot de passe' name='password'
                   value='<?php if($mode == "Modifier") {echo $user['password'] ;} ?>'>
        </div>
        <div class="form-group">
            <label for='idRole'> Role </label>
            <select name="idRole" class="form-control">
                <?php
                foreach ($lesRoles as $role) {
                    if($mode=="Modifier"){
                        $selection = $role['idR'] == $user['idRole'] ? 'selected' : '';
                    }
                    echo "<option value='".$role['idR'] ."'". $selection.">".$role['nomR']."</option>";
                }
                ?>
            </select>
        </div>
        <input type="hidden" id="id" name="id" value="<?php if($mode == "Modifier") {echo $user['id'] ;} ?>">
        <div class="row">
            <div class="col"> <a href="index.php?uc=user&action=list" class='btn btn-warning btn-block'>Revenir à
                    la liste</a>
            </div>
            <div class="col"><button type='submit' class='btn btn-success btn-block'> <?php echo $mode ?> </button>
            </div>
        </div>
    </form>
</div>