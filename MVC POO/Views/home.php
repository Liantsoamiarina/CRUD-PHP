<?php 
include "../Views/partials/header.php";
require "../Controller/article/all.php";
?>
    <h1>kaiza <?=$_SESSION["user"]["nom"];?></h1>
    <a href="/register">Inscription</a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-end my-3">
                    <a href="/nouveau" class="btn btn-primary">Nouveau</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($articles as $article): ?>
                        <tr>
                            <td><?=$article->id?></td>
                            <td><?=$article->nom?></td>
                            <td><?=$article->description?></td>
                            <td><?=$article->photo?></td>
                            <td>
                                <a href="/article/delete/<?=$article->id?>" class="btn btn-danger">Supprimer</a>
                                <a href="/article/show/<?=$article->id?>" class="btn btn-success">Editer</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php include "../Views/partials/footer.php"; ?>   
