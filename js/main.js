/*	gallery */
$(document).ready(function () {

    $(".filter-button").click(function () {
        var value = $(this).attr('data-filter');

        if (value === "all")
        {
            $('.filter').show('1000');
        } else
        {
            $(".filter").not('.' + value).hide('3000');
            $('.filter').filter('.' + value).show('3000');

        }

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");
    });
});
/*	end gallery */

$(document).ready(function () {
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});

///////////////////////////////////////////////////////////////////////////////
////////////////////////////////VOZNI PARK/////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
$(function () {

    const imgs = [
        {
            descripcion: 'Volkswagen Golf 7, predstavljen 2012. godine, brzo je postao \n\
                         popularan među auto školama i vozačima početnicima zahvaljujući svojoj pouzdanosti, \n\
                         ekonomičnosti i lakoći upravljanja. Ovaj kompaktni automobil spada u B kategoriju, što \n\
                         znači da je prilagođen vozačima sa standardnom vozačkom dozvolom.',
            titulo: 'GOLF 7 TRIO',
            url: 'images/golfs1.webp'
        },
        {
            descripcion: 'Volkswagen Golf 7, predstavljen 2012. godine, brzo je postao \n\
                         popularan među auto školama i vozačima početnicima zahvaljujući svojoj pouzdanosti, \n\
                         ekonomičnosti i lakoći upravljanja. Ovaj kompaktni automobil spada u B kategoriju, što \n\
                         znači da je prilagođen vozačima sa standardnom vozačkom dozvolom.',
            titulo: 'GOLF 7 TRIO',
            url: 'images/golfs2.webp'
        },
        {
            descripcion: 'Volkswagen Golf 7, predstavljen 2012. godine, brzo je postao \n\
                         popularan među auto školama i vozačima početnicima zahvaljujući svojoj pouzdanosti, \n\
                         ekonomičnosti i lakoći upravljanja. Ovaj kompaktni automobil spada u B kategoriju, što \n\
                         znači da je prilagođen vozačima sa standardnom vozačkom dozvolom.',
            titulo: 'GOLF 7 TRIO',
            url: 'images/b-vozni-park1.webp'
        },
        {
            descripcion: 'Volkswagen Golf 7, predstavljen 2012. godine, brzo je postao\n\
                          popularan među auto školama i vozačima početnicima zahvaljujući svojoj pouzdanosti,\n\
                          ekonomičnosti i lakoći upravljanja. Ovaj kompaktni automobil spada u B kategoriju, što \n\
                          znači da je prilagođen vozačima sa standardnom vozačkom dozvolom.',
            titulo: 'GOLF 7 TRIO',
            url: 'images/b-vozni-park2.webp'
        },
        {
            descripcion: 'Volkswagen Golf 7, predstavljen 2012. godine, brzo je postao\n\
                          popularan među auto školama i vozačima početnicima zahvaljujući svojoj pouzdanosti,\n\
                          ekonomičnosti i lakoći upravljanja. Ovaj kompaktni automobil spada u B kategoriju, što \n\
                          znači da je prilagođen vozačima sa standardnom vozačkom dozvolom.',
            titulo: 'GOLF 7 TRIO',
            url: 'images/b-vozni-park3.webp'
        },
        {
            descripcion: 'Volkswagen Golf 7 dolazi sa visokim ocenama za sigurnost, uključujući napredne\n\
                          sigurnosne funkcije kao što su sistem za nadzor trake, automatsko kočenje u slučaju nužde i \n\
                          višestruki vazdušni jastuci. Ove karakteristike pružaju dodatni sloj sigurnosti za početnike \n\
                          koji se još uvek navikavaju na vožnju.',
            titulo: 'GOLF 7 RED',
            url: 'images/red7golf.webp'
        },
        {
            descripcion: 'Golf 7 ima kompaktne dimenzije koje olakšavaju manevrisanje kroz gradske\n\
                          gužve i parkiranje na uskim mestima. Preciznost u upravljanju pruža solidan \n\
                          osećaj kontrole, što je izuzetno važno za neiskusne vozače.',
            titulo: 'GOLF 7 DARK GRAY',
            url: 'images/black7golf.webp'
        },
        {
            descripcion: 'Golf 7 ima kompaktne dimenzije koje olakšavaju manevrisanje kroz gradske gužve\n\
                          i parkiranje na uskim mestima. Preciznost u upravljanju pruža solidan osećaj \n\
                          kontrole, što je izuzetno važno za neiskusne vozače.',
            titulo: 'GOLF 7 GRAY',
            url: 'images/gray7golf.webp'
        },
        /////////////////////////////////////////////
        {
            descripcion: 'Golf 7 ima kompaktne dimenzije koje olakšavaju manevrisanje kroz gradske gužve\n\
                          i parkiranje na uskim mestima. Preciznost u upravljanju pruža solidan osećaj \n\
                          kontrole, što je izuzetno važno za neiskusne vozače.',
            titulo: 'GOLF 7 RED',
            url: 'images/golf7red.webp'
        },
        {
            descripcion: 'Golf 7 ima kompaktne dimenzije koje olakšavaju manevrisanje kroz gradske\n\
                          gužve i parkiranje na uskim mestima. Preciznost u upravljanju pruža solidan \n\
                          osećaj kontrole, što je izuzetno važno za neiskusne vozače.',
            titulo: 'GOLF 7 DARK GRAY',
            url: 'images/golf7black.webp'
        },
        {
            descripcion: 'Volkswagen Golf 7 dolazi sa visokim ocenama za sigurnost, uključujući napredne\n\
                          sigurnosne funkcije kao što su sistem za nadzor trake, automatsko kočenje u slučaju nužde i \n\
                          višestruki vazdušni jastuci. Ove karakteristike pružaju dodatni sloj sigurnosti za početnike \n\
                          koji se još uvek navikavaju na vožnju.',
            titulo: 'GOLF 7 GRAY',
            url: 'images/golf7gray.webp'
        },
        //////////////////////////////////////////
        {
            descripcion: 'Auto škola za Suzuki SV650 nudi detaljan i stručan program obuke namenjen polaznicima\n\
                          koji žele da steknu vozačku dozvolu kategorije A, specifično za upravljanje snažnim i \n\
                          agilnim motociklima kao što je Suzuki SV650. Ovaj program je dizajniran kako bi polaznicima\n\
                          pružio sve potrebne veštine i znanje potrebno za sigurno i odgovorno upravljanje motociklom na javnim putevima.',
            titulo: 'SUZUKI SV650',
            url: 'images/suzukiSV650.webp'
        }
        
    ];

    $.each(imgs, function (i, img) {
        $('.galeria .contenedorImgs').append(`
    
        <div class="imagen" style="background-image:url('${img.url}')">
            <p class="nombre">${img.titulo}</p>
        </div>
    
`
                );
    });
    setTimeout(() => {
        $('.galeria').addClass('vis');
    }, 1000);
    $('.galeria').on('click', '.contenedorImgs .imagen', function () {
        var imagen = imgs[$(this).index()].url;
        var titulo = imgs[$(this).index()].titulo;
        var descripcion = imgs[$(this).index()].descripcion;
        $('.galeria').addClass('scale');
        $(this).addClass('activa');
        if (!$('.fullPreview').length) {
            $('body').append(`
        <div class="fullPreview">
          <div class="cerrarModal"></div>
          <div class="wrapper">
            <div class="blur" style="background-image:url(${imagen})"></div>
            <p class="titulo">${titulo}</p>
            <img src="${imagen}">
            <p class="desc">${descripcion}</p>
          </div>
          <div class="controles">
            <div class="control av"></div>
            <div class="control ret"></div>
          </div>
        </div>`
                    );
            $('.fullPreview').fadeIn().css('display', 'flex');
        }
    });
    $('body').on('click', '.fullPreview .cerrarModal', function () {
        $('.contenedorImgs .imagen.activa').removeClass('activa');
        $('.galeria').removeClass('scale');
        $(this).parent().fadeOut(function () {
            $(this).remove();
        });
    });
    $('body').on('click', '.fullPreview .control', function () {
        var activa = $('.contenedorImgs .imagen.activa');
        var index;
        if ($(this).hasClass('av')) {
            index = activa.next().index();
            if (index < 0)
                index = 0;
        } else {
            index = activa.prev().index();
            if (index < 0)
                index = imgs.length - 1;
        }
        $('.fullPreview').addClass('anim');
        setTimeout(() => {
            $('.contenedorImgs .imagen.activa').removeClass('activa');
            $('.contenedorImgs .imagen').eq(index).addClass('activa');
            $('.fullPreview').find('.blur').css('background-image', 'url(' + imgs[index].url + ')');
            $('.fullPreview').find('img').attr('src', imgs[index].url);
            $('.fullPreview').find('.titulo').text(imgs[index].titulo);
            $('.fullPreview').find('.desc').text(imgs[index].descripcion);
            $('.fullPreview').removeClass('anim');
        }, 500);
    });
});

/////////////////////////////////////////////////////////////////////////////
/////////////////////////////VOZNI PARK END///////////////////////////////
/////////////////////////////////////////////////////////////////////////////