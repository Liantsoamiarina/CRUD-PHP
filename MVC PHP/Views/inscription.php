<?php 
include "../Views/partials/header.php";
?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="text-center">INSCRIPTION</h1>
                <form action="/savePerson" method="post" class="form-with-regexlib d-flex flex-column gap-3">
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="name" class="form-control" required>
                        <div class="invalide-feedback"></div>
                    </div>
                    <div>
                        <label for="age">Age :</label>
                        <input type="text" id="age" name="age" class="form-control" required>
                        <div class="invalide-feedback"></div>
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit" name="ajouter">Ajouter</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

<?php include "../Views/partials/footer.php"; ?>   