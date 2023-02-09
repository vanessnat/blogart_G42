<?php
include '../../header.php';

?>

<!--Bootstrap form to create a new member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Inscription</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new member-->
            <form action="<?php echo ROOT_URL . '/api/users/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" required>
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" required>
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" required>
                    <label for="pseudoMemb">Mot-de-passe</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" required>
                    <label for="passMemb">Confimez le mot-de-passe</label>
                    <input id="passMemb" class="form-control" type="password" name="passMemb"  minlength="8" required>
                    <label for="eMailMemb">E-mail</label>
                    <input id="eMailMemb" class="form-control" type="email" name="eMailMemb"  size="30" required>
                    <label for="eMailMemb">Confirmez l'e-mail</label>
                    <input id="eMailMemb" class="form-control" type="email" name="eMailMemb"  size="30" required>
                    <input id="numStat" style="display: none" class="form-control" type="text" name="numStat" >
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>
</div>