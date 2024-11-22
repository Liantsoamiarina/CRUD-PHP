<?php
require_once "../Controller/personnes/showControl.php";
include "../Views/partials/header.php";
?>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="d-flex flex-row justify-content-end w-100">
                    <a href="/inscription" class="btn btn-primary">Ajouter</a>
                </div>
                <div>
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Noms</th>
                            <th>Ages</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php foreach ($listOfPersons as $personList) : ?>
                                <tr>
                                    <td><?=$personList->id?></td>
                                    <td><?=$personList->nom?></td>
                                    <td><?=$personList->age?></td>
                                    <td>
                                        <button type="button" onclick="deletePerson(<?=$personList->id?>)" class="btn btn-danger">Supprimer</button>

                                        <button type="button" onclick="updatePerson(<?=$personList->id?>,'<?=$personList->nom?>',<?=$personList->age?>)" class="btn btn-success">Modifier</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


    <!-- Modal de suppression -->
    <div class="modal fade" id="deletePerson" tabindex="-1" aria-labelledby="deletePersonLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered text-center">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title text-center text-danger" id="deletePersonLabel">Suppression</h5>
                </div>
                <div class="modal-body">
                    Êtes vous sûr de vouloir supprimer cette personne ?
                </div>
                <div class="modal-footer">
                    <form action="/deletePerson" method="post">
                        <input type="hidden" name="id" id="idPerson">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" name="deletePers" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de mise à jour -->
    <div class="modal fade" id="updatePerson" tabindex="-1" aria-labelledby="updatePersonLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title text-center text-danger" id="updatePersonLabel">Mise à jour</h5>
                </div>
                <form action="/updatePerson" method="post" class="form-with-regexlib">
                    <div class="modal-body d-flex flex-column gap-3">
                        <input type="hidden" class="form-control" name="id" id="idUp" required>
                        <div class="form-group">
                            <label for="name">Nom :</label>
                            <input type="text" class="form-control" name="name" id="nameUp" required>
                            <div class="invalide-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label for="age">Age :</label>
                            <input type="text" class="form-control" name="age" id="ageUp" required>
                            <div class="invalide-feedback"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" name="updatePers" class="btn btn-success">Modifer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include "../Views/partials/footer.php"; ?>
