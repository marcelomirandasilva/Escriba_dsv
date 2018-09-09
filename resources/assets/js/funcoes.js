funcoes = {
   notifica: function (tipo, texto1) {
      if (tipo == 'success') {
         swal({
            type: 'success',
            title: texto1,
            buttonsStyling: true,
            confirmButtonClass: 'btn btn-roxo'
         });
      } else if (tipo == 'info') {
         swal({
            type: 'info',
            title: texto1,
            buttonsStyling: true,
            confirmButtonClass: "btn btn-info"
         });
      } else if (tipo == 'aviso') {
         swal({
            type: 'warning',
            title: texto1,
            input: 'text',
            buttonsStyling: true,
            showCancelButton: true,
            cancelButtonClass: 'btn btn-roxo',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Alterar',
            confirmButtonClass: 'btn btn-danger'
         });
      }
   }, //Fim showSwal1

   notificationRight: function (from, align, cor, comentario) {
      // type = ['','info','success','warning','danger','rose','primary'];

      $.notify({
         icon: "notifications",
         message: comentario,

      }, {
            type: cor,
            timer: 3000,
            placement: {
               from: from,
               align: align
            }
         });
   }
}
