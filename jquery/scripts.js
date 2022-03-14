/*!
(function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using anime.js
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').on('click', function () {
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ?
                target :
                $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                anime({
                    targets: 'html, body',
                    scrollTop: target.offset().top - 72,
                    duration: 1000,
                    easing: 'easeInOutExpo'
                });
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function () {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 75
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-scrolled");
        } else {
            $("#mainNav").removeClass("navbar-scrolled");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);

    // Magnific popup calls
    $('#portfolio').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });

})(jQuery); */

window.onload = function () {
    // productos
    var baseDeDatos = [
        {
            id: 1,
            nombre: 'Smartwatch Xiaomi Mi Band 5 Negro',
            precio: 5.599,
            imagen: 'img/Productos/accesorios/1.jpg'
               },
        {
            id: 2,
            nombre: 'Monitor Samsung LS24F350 24"',
            precio: 23.999,
            imagen: 'img/Productos/accesorios/2.jpg'
               },
        {
            id: 3,
            nombre: 'Impresora Láser HP 107W',
            precio: 16.499,
            imagen: 'img/Productos/accesorios/3.jpg'
               },
        {
            id: 4,
            nombre: 'Tablet Lenovo 10.1" ZA4G0077AR',
            precio: 19.999,
            imagen: 'img/Productos/accesorios/4.jpg'
               },
        {
            id: 5,
            nombre: 'Tablet Samsung 10.1” SMT510',
            precio: 28.999,
            imagen: 'img/Productos/accesorios/5.jpg'
               },
        {
            id: 6,
            nombre: 'Notebook Acer Aspire 3 15,6" Intel Celeron ICDN4000 4GB 500GB A315-34-C7RP',
            precio: 54.999,
            imagen: 'img/Productos/accesorios/6.jpg'
               },
        {
            id: 7,
            nombre: 'Lavarropas Carga Frontal Electrolux 8 KG 1200 RPM ELAF08W',
            precio: 49.999,
            imagen: 'img/Productos/electro/1.jpg'
               },
        {
            id: 8,
            nombre: 'Cocina Whirlpool WFB57DI 56 cm BlancoCocina Whirlpool WFB57DI 56 cm Blanco',
            precio: 53.099,
            imagen: 'img/Productos/electro/2.jpg'
               },
        {
            id: 9,
            nombre: 'Batidora de Pie Smartlife 300W 3,4Lts 5 Velocidades SL-HM5035PN',
            precio: 5.299,
            imagen: 'img/Productos/electro/3.jpg'
               },
        {
            id: 10,
            nombre: 'Secarropas Centrifugo KOH-I-NOOR A-665/2 6,5 Kg',
            precio: 13.999,
            imagen: 'img/Productos/electro/4.jpg'
               },
        {
            id: 11,
            nombre: 'Microondas Atma 700W 20Lt MD1720N',
            precio: 21.999,
            imagen: 'img/Productos/electro/5.jpg'
               },
        {
            id: 12,
            nombre: 'Heladera Cíclica Peabody 2F1200P 239lt',
            precio: 39.999,
            imagen: 'img/Productos/electro/6.jpg'
               },
        {
            id: 13,
            nombre: 'Celular Libre LG K20 Negro',
            precio: 14.999,
            imagen: 'img/Productos/celu/1.jpg'
               },
        {
            id: 14,
            nombre: 'Celular Libre Motorola One Fusion Azul',
            precio: 31.999,
            imagen: 'img/Productos/celu/2.jpg'
               },
        {
            id: 15,
            nombre: 'Celular Libre Motorola E6 Play 32GB Azul',
            precio: 15.499,
            imagen: 'img/Productos/celu/3.jpg'
               },
        {
            id: 16,
            nombre: 'Celular Libre Samsung A01 Core Negro',
            precio: 14.999,
            imagen: 'img/Productos/celu/4.jpg'
               },
        {
            id: 17,
            nombre: 'Celular Libre Samsung Galaxy A01 Negro',
            precio: 19.999,
            imagen: 'img/Productos/celu/5.jpg'
               },
        {
            id: 18,
            nombre: 'Celular Libre Samsung Galaxy A11 Azul',
            precio: 23.999,
            },



           ]
    var $items = document.querySelector('#items');
    var carrito = [];
    var total = 0;
    var $carrito = document.querySelector('#carrito');
    var $total = document.querySelector('#total');
    var $botonVaciar = document.querySelector('#boton-vaciar');
    var $botonComprar = document.querySelector('#boton-comprar');

    // Funciones
    function renderItems() {
        for (var info of baseDeDatos) {
            // Estructura
            var miNodo = document.createElement('div');
            miNodo.classList.add('card', 'col-sm-4');
            // Body
            var miNodoCardBody = document.createElement('div');
            miNodoCardBody.classList.add('card-body');
            // Titulo
            var miNodoTitle = document.createElement('h5');
            miNodoTitle.classList.add('card-title');
            miNodoTitle.textContent = info['nombre'];
            // Imagen
            var miNodoImagen = document.createElement('img');
            miNodoImagen.classList.add('img-fluid');
            miNodoImagen.setAttribute('src', info['imagen']);
            // Precio
            var miNodoPrecio = document.createElement('p');
            miNodoPrecio.classList.add('card-text');
            miNodoPrecio.textContent = '$' + info['precio'];
            // Boton 
            var miNodoBoton = document.createElement('button');
            miNodoBoton.classList.add('btn', 'btn-info');
            miNodoBoton.textContent = 'Comprar';
            miNodoBoton.setAttribute('marcador', info['id']);
            miNodoBoton.addEventListener('click', anyadirCarrito);
            // Insertamos
            miNodoCardBody.appendChild(miNodoImagen);
            miNodoCardBody.appendChild(miNodoTitle);
            miNodoCardBody.appendChild(miNodoPrecio);
            miNodoCardBody.appendChild(miNodoBoton);
            miNodo.appendChild(miNodoCardBody);
            $items.appendChild(miNodo);
        }
    }

    function anyadirCarrito() {

        carrito.push(this.getAttribute('marcador'))

        calcularTotal();

        renderizarCarrito();
    }

    function renderizarCarrito() {

        $carrito.textContent = '';

        var carritoSinDuplicados = [...new Set(carrito)];

        carritoSinDuplicados.forEach(function (item, indice) {

            var miItem = baseDeDatos.filter(function (itemBaseDatos) {
                return itemBaseDatos['id'] == item;
            });
            // repeticion del producto
            var numeroUnidadesItem = carrito.reduce(function (total, itemId) {
                return itemId === item ? total += 1 : total;
            }, 0);

            var miNodo = document.createElement('li');
            miNodo.classList.add('list-group-item', 'text-right', 'mx-2');
            miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0]['nombre']} - ${miItem[0]['precio']}$`;
            // Boton de borrar
            var miBoton = document.createElement('button');
            miBoton.classList.add('btn', 'btn-danger', 'mx-5');
            miBoton.textContent = 'X';
            miBoton.style.marginLeft = '1rem';
            miBoton.setAttribute('item', item);
            miBoton.addEventListener('click', borrarItemCarrito);

            miNodo.appendChild(miBoton);
            $carrito.appendChild(miNodo);
        })
    }

    function borrarItemCarrito() {
        console.log()

        var id = this.getAttribute('item');
        // Borramos todos los productos
        carrito = carrito.filter(function (carritoId) {
            return carritoId !== id;
        });

        renderizarCarrito();

        calcularTotal();
    }

    function calcularTotal() {

        total = 0;
        // Recorremos el array del carrito
        for (var item of carrito) {
            // De cada elemento obtenemos su precio
            var miItem = baseDeDatos.filter(function (itemBaseDatos) {
                return itemBaseDatos['id'] == item;
            });
            total = total + miItem[0]['precio'];
        }

        var totalDosDecimales = total.toFixed(3);

        $total.textContent = totalDosDecimales;
    }

    function vaciarCarrito() {

        carrito = [];

        renderizarCarrito();
        calcularTotal();
    }

    function comprarCarrito() {
        if (total > 0) {
            alert("Gracias por su compra, pronto recibirá su pedido")
        }

    }

    // Eventos
    $botonVaciar.addEventListener('click', vaciarCarrito);
    $botonComprar.addEventListener('click', comprarCarrito);

    // Inicio
    renderItems();
}

