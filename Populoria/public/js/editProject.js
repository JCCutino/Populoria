"use strict"

let appliances = document.querySelector(".appliances")

if(appliances.nextElementSibling.tagName != 'DIV'){
    appliances.nextElementSibling.removeAttribute("hidden")
    console.log(appliances.nextElementSibling)
}else{
    
    console.log(appliances.nextElementSibling)
}

