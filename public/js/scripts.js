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

