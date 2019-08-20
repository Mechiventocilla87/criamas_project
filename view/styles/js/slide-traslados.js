//declaro mi data = objetos + imagenes

let imagenes = ['view/images/img_photos/travel.png', 'view/images/img_photos/travel02.png']
let banners = [
    {
        id: 0,
        subtitle:
            'Bienvenidos a Traslados',
        title: 'Verifica nuestras fechas, y solicita tu servicio.',
        title2: 'realiza tu consulta',
        image: imagenes[0],
    },
    {
        id: 1,
        subtitle:
            'Bienvenidos a Traslados',
        title: 'Verifica nuestras fechas, y solicita tu servicio.',
        title2: 'realiza tu consulta',
        image: imagenes[1],
    },
]

let posicionActual = 0;
let titleRed = document.querySelector('.title-red');
let title2 = document.querySelector('.title-2');
let title3 = document.querySelector('.title-3');
let image = document.querySelector('.dog_img')

function pasarFoto() {
    if (posicionActual >= banners.length - 1) {
        posicionActual = 0;
    } else {
        posicionActual++;
    }
    renderizarImagen();
}

function renderizarImagen() {
    image.src = banners[posicionActual].image;
    titleRed.innerHTML = banners[posicionActual].subtitle;
    title2.innerHTML = banners[posicionActual].title;
    title3.href = banners[posicionActual].title2;
}

const TIEMPO_INTERVALO_MILESIMAS_SEG = 5000;

setInterval(pasarFoto, TIEMPO_INTERVALO_MILESIMAS_SEG);


