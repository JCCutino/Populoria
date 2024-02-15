"use strict"

let dinamic = document.querySelector(".dinamicBackground");
let i = 0;

function rotate() {
    i++;
    dinamic.setAttribute("transform", 'rotate(-' + i + ' 0 0)');
    if(i>360){
        i=0;
    }

}
setInterval(rotate, 30);