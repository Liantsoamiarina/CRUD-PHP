<?php
    include "../Views/partials/header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 class="text-center">Inscription</h1>
            <form action="/register/save" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nom" placeholder="votre nom">
                    <label>Votre nom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" placeholder="votre email">
                    <label>Votre email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="pass" placeholder="mot de passe">
                    <label>Mot de passe</label>
                </div>
                <button type="submit" name="register" class="btn btn-primary w-100">S'inscrire</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php
    include "../Views/partials/footer.php";
?>
