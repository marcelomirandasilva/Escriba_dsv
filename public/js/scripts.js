// Sweet Alert
var helper = {

    // Como usuar no html:
    // helper.showSwal1('tipo', 'titulo')
    // helper.showSwal2('tipo', 'texto1', 'texto2','texto1Sucesso', 'texto2Sucesso', 'funcaoSucesso')
    
    showSwal1: function(tipo, texto1) {
        
        if(tipo == 'basico'){
            swal({
                title: texto1,
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-roxo'
            });
        } else if (tipo == 'info') {
            swal({
                type: 'info',
                title: texto1,
                buttonsStyling: false,
                confirmButtonClass: "btn btn-info"
            });
        } else if (tipo == 'aviso') {
            swal({
                type: 'warning',
                title: texto1,
                input: 'text',
                buttonsStyling: false,
                showCancelButton: true,
                cancelButtonClass: 'btn btn-roxo',
                cancelButtonText: 'Cancelar',
                confirmButtonText: 'Alterar',
                confirmButtonClass: 'btn btn-danger'
            });
        }
    }, //Fim showSwal1
}; //Fim Helper
    
$(function(){
    // Adicionar efeito de rotação ao ícone do objeto
    $('.rodar-icone').click(function(){
        var isto = this;
        if($(isto).find('i').hasClass('animated girar-rev')) {
            $(isto).find('i').removeClass('girar-rev').addClass('girar')
        } else if ($(isto).find('i').hasClass('animated girar')) {
            $(isto).find('i').removeClass('girar').addClass('girar-rev')
        }else {
            $(isto).find('i').addClass('animated girar')
        }
    });

});

