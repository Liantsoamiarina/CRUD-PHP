<?php 
    include "../Views/partials/header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="/login" method="post">
                        <h3 class="card-text text-center">Se connecter</h3>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Votre email">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="pass" class="form-control" placeholder="Mot de passe">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary w-100">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<?php 
    include "../Views/partials/footer.php";
?>