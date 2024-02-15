"use strict"
let images = 0;

function addPhoto() {

    if (images < 5) {
        let primerCampoImagen = document.querySelector('#imagesContainer .col-6:first-of-type');
        let nuevoCampoImagen = primerCampoImagen.cloneNode(true);


        let numeroImagenes = document.querySelectorAll('#imagesContainer .col-6').length;


        nuevoCampoImagen.querySelector('input[type="file"]').id = 'image' + (numeroImagenes + 1);
        nuevoCampoImagen.querySelector('input[type="file"]').name = 'images[]';

        document.getElementById('imagesContainer').appendChild(nuevoCampoImagen);
        images++;
    }

    if(images>=5){
        document.querySelector(".addPhoto").setAttribute("hidden", "")
    }

}

