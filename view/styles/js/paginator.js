
let imagesDogs = ['view/images/img_photos/beagle.jpg']
let objCachorros = [
            {
                raza: "Caniche",
                otrosNombres: "Pudle (Old English), Poodle",
                origen: "Alemania, Francia",
                tamaño: 'Pequeña',
                img: imagesDogs[0],
                colorTarjeta: 'rosa'

            }
       /*     ,
            {
                raza: "Beagle",
                otrosNombres: "Beagle Inglés",
                origen: "Reino Unido",
                tamaño: 'Pequeña',
                img: imagesDogs[0],
                colorTarjeta: 'rosa'
                
            },
            {
                raza: "Bichon Frezee",
                otrosNombres: "Bichón de Tenerife",
                origen: "España, Bélgica",
                tamaño: 'Pequeña',
                img: imagesDogs[0],
                colorTarjeta: 'rosa'

            },
            {
                raza: "Boston Terrier",
                otrosNombres: "Boston Bull Terrier, Boxwood",
                origen: "Estados Unidos",
                tamaño: 'Pequeña',
                img: imagesDogs[0],
                colorTarjeta: 'rosa'

            },
            {
                raza: "Border Collie",
                otrosNombres: "Collie de la Frontera",
                origen: "Escocia, Inglaterra",
                tamaño: 'Mediano',
                img: imagesDogs[0],
                colorTarjeta: 'celeste'
            },
            {
                raza: "Bulldog Inglés",
                otrosNombres: "Bulldog Inglés",
                origen: "Reino Unido",
                tamaño: 'Mediano',
                img: imagesDogs[0],
                colorTarjeta: 'celeste'
            },
            {
                raza: "Boxer",
                otrosNombres: "Collie de la Frontera",
                origen: "Alemania",
                tamaño: 'Mediano',
                img: imagesDogs[0],
                colorTarjeta: 'celeste'
            },
            {
                raza: "Baset Hound",
                otrosNombres: "Bulldog Inglés",
                origen: "Francia",
                tamaño: 'Mediano',
                img: imagesDogs[0],
                colorTarjeta: 'celeste'
            },
            {
                raza: "Grán Danés",
                otrosNombres: "Dogo Alemán",
                origen: "Alemania",
                tamaño: 'Grande',
                img: imagesDogs[0],
                colorTarjeta: 'crema'
            },
            {
                raza: "Dogo de Burdeos",
                otrosNombres: "Dogo de Burdeos",
                origen: "Francia",
                tamaño: 'Grande',
                img: imagesDogs[0],
                colorTarjeta: 'crema'
            },
            {
                raza: "Golden Retriever",
                otrosNombres: "Golden",
                origen: "Inglaterra, Reino Unido",
                tamaño: 'Grande',
                img: imagesDogs[0],
                colorTarjeta: 'crema'
            },
            {
                raza: "Rottweiler",
                otrosNombres: "Rottie, Rott",
                origen: "Francia",
                tamaño: 'Grande',
                img: imagesDogs[0],
                colorTarjeta: 'crema'
            }*/
        ]


console.log(objCachorros);


let botonPrev = document.getElementById("btn_prev");
let botonNext = document.getElementById("btn_next");

let current_page = 1;
let records_per_page = 6;
let temp = []; 

botonPrev.addEventListener('click', function(){
    prevPage();
});

botonNext.addEventListener('click', function(){
    nextPage()
})



function prevPage() {
    if (current_page > 1) {
        current_page--;
        changePage(current_page);
    }
}

function nextPage() {
    if (current_page < numPages()) {
        current_page++;
        changePage(current_page);
    }
}




function changePage(page) {  
    debugger;
    let section = document.querySelector(".section_small");
    let page_span = document.getElementById("page");
    if (temp.length > 0){
       temp.forEach(function(element){
           section.removeChild(element);
       });
    }
    
    //Validate page
    if (page < 1) page = 1;
    if (page > numPages()) page = numPages();
    
    for (var i = (page - 1) * records_per_page; i < (page * records_per_page) && i < objCachorros.length; i++) {
        debugger;
        //creo las cajitas de los perros
        var divContenedorDeTarjeta = document.createElement('div');
        divContenedorDeTarjeta.className = 'box_raza_small';        
        var div_image = document.createElement('div');
        div_image.className = 'box_image';
        let img_dog = document.createElement('img');
        let h6 = document.createElement('h6');
        h6.className = 'nombre-raza'; 
        section.appendChild(divContenedorDeTarjeta); 
        temp.push(divContenedorDeTarjeta);      
        divContenedorDeTarjeta.appendChild(div_image);             
        divContenedorDeTarjeta.appendChild(h6);
        div_image.appendChild(img_dog);
        img_dog.src = objCachorros[i].img;
        h6.innerHTML = objCachorros[i].raza;
        
    }
    
    
    
    page_span.innerHTML = page;

    if (page == 1) {
        botonPrev.style.visibility = "hidden";
    } else {
        botonPrev.style.visibility = "visible";
    }
    if (page == numPages()) {
        botonNext.style.visibility = "hidden";
    } else {
        botonNext.style.visibility = "visible";
    }

    
}

function numPages() {
    return Math.ceil(objCachorros.length / records_per_page);
}

window.onload = function () {
    changePage(1);
};