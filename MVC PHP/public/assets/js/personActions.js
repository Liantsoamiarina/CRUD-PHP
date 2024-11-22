function deletePerson(id){
    const myModal = new bootstrap.Modal(document.getElementById('deletePerson'));
    inputId = document.getElementById('idPerson');
    myModal.show();
    inputId.value = id;
}

function updatePerson(id,nom,age){
    const myModalUp = new bootstrap.Modal(document.getElementById('updatePerson'));
    inputId = document.getElementById('idUp');
    inputName = document.getElementById('nameUp');
    inputAge = document.getElementById('ageUp');
    myModalUp.show();
    inputId.value = id;
    inputName.value = nom;
    inputAge.value = age; 
}