let testimony = ['/criamas/assets/images/img_photos/testimonio01.jpg', '/criamas/assets/images/img_photos/testimonio02.jpg', '/criamas/assets/images/img_photos/testimonio03.jpg'];
let clientes= [
    {
        id: 0,
        name: 'Yamila Rodriguez',
        occupation: 'Secretaria',
        image: testimony[0],
        testimony: "Gracias Criamas, me lleve una gran sorpresa al recibir a mi cachorro con su kit de bienvenida, cuidan cada detalle para poder hacer el cuidado mas adecuado a nueatras mascotas."
    },
    {
        id: 1,
        name: 'Agustín Gomez',
        occupation: 'Arquitecto',
        image: testimony[1],
        testimony: "La orientación que me dieron en Criamas para el cuidado de  mi cachorro supero mis expectativas, realmente son cachorros criados con amor y eso se nota"
    },
    {
        id: 2,
        name: 'Candela Sánchez',
        occupation: 'Traductora',
        image: testimony[2],
        testimony: "Antes de llegar al encuentro de mi nuevo amor estaba llena de dudas, ustedes las disiparon todas, lo mejor es que ahora formo parte de una comunidad de dueños de cachorros que esta en la misma sintonia"
    }    
]

let counter = 0;
let box_testimony = document.querySelector('.box_comments');

box_testimony.addEventListener('click', function(e){
    let atrascomments = document.querySelector('.prev');
    let adelantecomments = document.querySelector('.next');
    let image = document.querySelector('.image_cliente');
    let name = document.querySelector('.nombre_cliente');
    let profesion = document.querySelector('.cliente_occupation');
    let comentario = document.querySelector('.testimony_cliente');
    let target = e.target;

    if (target == atrascomments) {
        if (counter > 0) {
        image.src = clientes[counter-1].image;
        name.innerHTML = clientes[counter-1].name;
        profesion.innerHTML = '·'+' ' + clientes[counter-1].occupation;
        comentario.innerHTML = clientes[counter-1].testimony;
        counter--; 


        } else {
            image.src = clientes[clientes.length-1].image;
            name.innerHTML = clientes[clientes.length-1].name;
            profesion.innerHTML = '·' +' '+ clientes[clientes.length-1].occupation;
            comentario.innerHTML = clientes[clientes.length-1].testimony;
            counter = clientes.length-1;
        }

    } else if(target == adelantecomments) {
        if (counter < clientes.length - 1) {
            image.src = clientes[counter+1].image;
            name.innerHTML = clientes[counter+1].name;
            profesion.innerHTML = '·' + ' ' + clientes[counter+1].occupation;
            comentario.innerHTML = clientes[counter+1].testimony;
            counter++; 

        } else {
            image.src = clientes[0].image;
            name.innerHTML= clientes[0].name;
            profesion.innerHTML = '·' + ' ' + clientes[0].occupation;
            comentario.innerHTML = clientes[0].testimony;
            counter = 0; 
        }

    }
})
