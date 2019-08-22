//declaro mi data = objetos + imagenes

let imagenes = ['view/images/img_photos/pomerania.png', 'view/images/img_photos/schnauzer.png', 'view/images/img_photos/caniche03.png']
let banners = [
    {
        id: 0,
        description:
            'Soy: Extrovertido, sociable, juguetón, amigable e inteligente.',
        raza: 'Pomerania',
        image: imagenes[0],
        url: 'https://www.mercadopago.com/mla/checkout/start?pref_id=158902303-edff6397-6700-4429-ac51-9b7dacb3e8cb'
    },
    {
        id: 1,
        description:
            'Soy: Intrépido, obediente, enérgico, amigable e inteligente',
        raza: 'Schnauzer',
        image: imagenes[1],
        url: 'https://www.mercadopago.com/mla/checkout/start?pref_id=158902303-5289b582-2fdb-4de4-a73c-892a2bd1554b'

    },
    {
        id: 2,
        description:
            'Soy: Fiel, instintivo e inteligente. Estoy siempre: Alerta y activo',
        raza: 'Caniche',
        image: imagenes[2],
        url: 'https://www.mercadopago.com/mla/checkout/start?pref_id=158902303-4b261292-5c6f-4cc1-9f65-5d30c8482f67'

    }
]

//declaro mi contador y mi caja que contiene mi slide    
let contador = 0;
let box_slide = document.querySelector('.box_slide');

//si mi slide escucha un click y es en los botones entra a la funcion:

box_slide.addEventListener('click', function (e) {
    let atras = document.querySelector('.atras');
    let adelante = document.querySelector('.adelante');
    let parrafo = document.querySelector('.p_slide');
    let imagen = document.querySelector('.image_dog');
    let raza = document.querySelector('.raza-type');
    let shop = document.getElementById('shop_button');
    let target = e.target;

    if (target == atras) {
        if (contador > 0) {
            parrafo.innerHTML = banners[contador - 1].description;
            imagen.src = banners[contador - 1].image;
            raza.innerHTML = banners[contador - 1].raza;
            shop.href = banners[contador - 1].url;
            contador--;

        } else {
            imagen.src = banners[banners.length - 1].image;
            parrafo.innerHTML = banners[banners.length - 1].description;
            raza.innerHTML = banners[banners.length - 1].raza;
            shop.href = banners[banners.length - 1].url;
            contador = banners.length - 1;
        }

    } else if (target == adelante) {
        if (contador < banners.length - 1) {
            imagen.src = banners[contador + 1].image;
            parrafo.innerHTML = banners[contador + 1].description;
            raza.innerHTML = banners[contador + 1].raza;
            shop.href = banners[contador + 1].url;
            contador++;

        } else {
            imagen.src = banners[0].image;
            parrafo.innerHTML = banners[0].description;
            raza.innerHTML = banners[0].raza;
            shop.href = banners[0].url;
            contador = 0;
        }

    }
})

// slide automático
let posicionActual = 0;
let parrafo = document.querySelector('.p_slide');
let image = document.querySelector('.image_dog');
let raza = document.querySelector('.raza-type');
let shop = document.getElementById('shop_button');

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
    parrafo.innerHTML = banners[posicionActual].description;
    raza.innerHTML = banners[posicionActual].raza;
    shop.href = banners[posicionActual].url;
}

const TIEMPO_INTERVALO_MILESIMAS_SEG = 6000;

setInterval(pasarFoto, TIEMPO_INTERVALO_MILESIMAS_SEG);


