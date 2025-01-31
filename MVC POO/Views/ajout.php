<?php 
include "../Views/partials/header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Nouveau article</h1>
                <form action="/article/save" method="post">
                    <div class="mb-3">
                        <label>Titre :</label>
                        <input type="text" name="titre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Description : </label>
                        <textarea name="description" class="form-control" cols="10" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Photo : </label>
                        <input type="text" name="photo" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="valider">Valider</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
<?php 
include "../Views/partials/footer.php";
?>