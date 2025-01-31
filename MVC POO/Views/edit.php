<?php 
    include "../Views/partials/header.php";
    $url = $_SERVER["REQUEST_URI"];
$chaine = explode("/",$url);
$id = $chaine[count($chaine)-1];
require "../Controller/article/show.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 class="text-center">Details</h1>
            <form action="/article/update/<?=$article->id?>" method="post">
                <div class="mb-3">
                    <input type="text" name="titre" value="<?=$article->nom?>" class="form-control">
                </div>
                <div class="mb-3">
                    <textarea name="description" class="form-control">
                        <?=$article->description?>
                    </textarea>
                </div> 
                <div class="mb-3">
                    <input type="text" name="photo" class="form-control" value="<?=$article->photo?>">
                </div>
                <button type="submit" name="modifier" class="btn btn-primary w-100">Modifier</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php 
    include "../Views/partials/footer.php";
?>