
// let objCachorros = [
//             {
//                 raza: "Caniche",
//                 otrosNombres: "Pudle (Old English), Poodle",
//                 origen: "Alemania, Francia",
//                 tamaño: 'Pequeña',
//                 img: imagesDogs[0],
//                 colorTarjeta: 'rosa'

//             }
//        /*   
//             {
//                 raza: "Pato",
//                 otrosNombres: "Collie de la Frontera",
//                 origen: "Alemania",
//                 tamaño: 'Mediano',
//                 img: imagesDogs[0],
//                 colorTarjeta: 'celeste'
//             },
//             {
//                 raza: "Loro",
//                 otrosNombres: "Bulldog Inglés",
//                 origen: "Francia",
//                 tamaño: 'Mediano',
//                 img: imagesDogs[0],
//                 colorTarjeta: 'celeste'
//             },
//             {
//                 raza: "Grán Danés",
//                 otrosNombres: "Dogo Alemán",
//                 origen: "Alemania",
//                 tamaño: 'Grande',
//                 img: imagesDogs[0],
//                 colorTarjeta: 'crema'
//             },
//             {
//                 raza: "Dogo de Burdeos",
//                 otrosNombres: "Dogo de Burdeos",
//                 origen: "Francia",
//                 tamaño: 'Grande',
//                 img: imagesDogs[0],
//                 colorTarjeta: 'crema'
//             },
//             {
//                 raza: "Golden Retriever",
//                 otrosNombres: "Golden",
//                 origen: "Inglaterra, Reino Unido",
//                 tamaño: 'Grande',
//                 img: imagesDogs[0],
//                 colorTarjeta: 'crema'
//             },
//             {
//                 raza: "Rottweiler",
//                 otrosNombres: "Rottie, Rott",
//                 origen: "Francia",
//                 tamaño: 'Grande',
//                 img: imagesDogs[0],
//                 colorTarjeta: 'crema'
//             }*/
//         ]


// console.log(objCachorros);


// let botonPrev = document.getElementById("btn_prev");
// let botonNext = document.getElementById("btn_next");

// let current_page = 1;
// let records_per_page = 6;
// let temp = []; 

// botonPrev.addEventListener('click', function(){
//     prevPage();
// })



// function prevPage() {
//     if (current_page > 1) {
//         current_page--;
//         changePage(current_page);
//     }
// }

// document.getElementById("btn_next").addEventListener('click', function(){
//    nextPage()
// })

// function nextPage() {
//     if (current_page < numPages()) {
//         current_page++;
//         changePage(current_page);
//     }
// }




// function changePage(page) {  
//     // debugger;
//     let section = document.querySelector(".section_small");
//     let page_span = document.getElementById("page");
//     if (temp.length > 0){
//        temp.forEach(function(element){
//            section.removeChild(element);
//        });
//     }
    
//     //Validate page
//     if (page < 1) page = 1;
//     if (page > numPages()) page = numPages();
    
//     for (var i = (page - 1) * records_per_page; i < (page * records_per_page) && i < objCachorros.length; i++) {
//         // debugger;
//         //creo las cajitas de los perros
//         var divContenedorDeTarjeta = document.createElement('div');
//         divContenedorDeTarjeta.className = 'box_raza_small';        
//         var div_image = document.createElement('div');
//         div_image.className = 'box_image';
//         let img_dog = document.createElement('img');
//         let h6 = document.createElement('h6');
//         h6.className = 'nombre-raza'; 
//         section.appendChild(divContenedorDeTarjeta); 
//         temp.push(divContenedorDeTarjeta);      
//         divContenedorDeTarjeta.appendChild(div_image);             
//         divContenedorDeTarjeta.appendChild(h6);
//         div_image.appendChild(img_dog);
//         img_dog.src = objCachorros[i].img;
//         h6.innerHTML = objCachorros[i].raza;
        
//     }
    
    
    
//     page_span.innerHTML = page;
//     if (page == 1) {
//         botonPrev.style.visibility = "hidden";
//     } else {
//         botonPrev.style.visibility = "visible";
//     }
//     if (page == numPages()) {
//         botonNext.style.visibility = "hidden";
//     } else {
//         botonNext.style.visibility = "visible";
//     }

    
// }

// function numPages() {
//     return Math.ceil(objCachorros.length / records_per_page);
// }
// console.log( Math.ceil(objCachorros.length/records_per_page));

// window.onload = function () {
//     changePage(1);
// };

fetch('http://localhost/criamas/index.php/api/CachorroRest')
  .then(response => response.json())
  .then( data => {
      for (let i = 0; i < data.records.length; i++) {
        let section = document.querySelector(".section_small");
        section.innerHTML += `<div class='box_raza'>
        <div class='box_image'>
            <img src=${data.records[i].img} alt="beagle">
        </div>
          <div class='datos ${data.records[i].tamanio}'>
              <div class='titulos'>
                  <div class='iconos'>
                      <i class="fas fa-dog"></i>
                      <div class='box_heart'>
                          <i class="fas fa-heart"></i> 
                      </div>
                  </div>
                  <h6 class='nombre-raza'>${data.records[i].raza}</h6>
              </div>
              <div class='descripcion'>
                  <p class='first_p'>${data.records[i].nombres}</p>
                  <p class='second_p'><span class='bold_origin'>Origen: </span>${data.records[i].origen}</p>
                  <button class='boton_compracachorros'>Comprar</button>
              </div>
          </div>
    </div> `
    }
          
  })
  .catch(err => console.log(err))
