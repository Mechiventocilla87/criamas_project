function TipoDestino() {
    var tipoD = document.getElementById("tipo_destino").value;
    if (tipoD == 'nacional') {
        $('.nacionales').removeClass('hide');
        $('.formulario').removeClass('hide');
        $('.paises').addClass('hide');
    } else if (tipoD == 'internacional') {
        $('.nacionales').addClass('hide');
        $('.paises').removeClass('hide');
        $('.formulario').removeClass('hide');
        
    }
}



