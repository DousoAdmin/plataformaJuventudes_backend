
    $(".boton-prueba").on('click', function(e) {
        e.preventDefault();
        var url = '/repositorios/misionVision';
        $(".area-trabajo").load(url, function(){
            cerrarLogoCarga();
        });
        // Cerrar el acordeón correspondiente
        var parentItem = $(this).closest('.buton-menu-padre')[0];
        if (parentItem) {
            window.toggleAccordion(parentItem);
        }
        
    });
     $(".boton-prueba-2").on('click', function(e) {
        e.preventDefault();
        var url = '/repositorios/imagenes';
        $(".area-trabajo").load(url, function(){
            cerrarLogoCarga();
        });
        // Cerrar el acordeón correspondiente
        var parentItem = $(this).closest('.buton-menu-padre')[0];
        if (parentItem) {
            window.toggleAccordion(parentItem);
        }
        
        
    });
      $(".boton-prueba-servicios").on('click', function(e) {
        e.preventDefault();
        var url = '/repositorios/servicios';
        $(".area-trabajo").load(url, function(){
            cerrarLogoCarga();
        });
        // Cerrar el acordeón correspondiente
        var parentItem = $(this).closest('.buton-menu-padre')[0];
        if (parentItem) {
            window.toggleAccordion(parentItem);
        }
        
    });