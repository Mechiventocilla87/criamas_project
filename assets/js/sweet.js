$(document).ready(function(){
    $('#contact-form').on('submit',function(e) {  //Don't foget to change the id form
    $.ajax({
        url:'enviar.php', //===PHP file name====
        data:$(this).serialize(),
        type:'POST',
        success:function(data){
          console.log(data);
          //Success Message == 'Title', 'Message body', Last one leave as it is
          Swal.fire({
            title: 'Mensaje Enviado!',
            text: 'Pronto nos comunicaremos.',
            imageUrl: '/assets/images/img_photos/caniche02.png',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
            animation: false
          })
        },
        error:function(data){
          //Error Message == 'Title', 'Message body', Last one leave as it is
          swal("Oops...", "Something went wrong :(", "error");
        }
      });
      e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
    });
});

$(document).ready(function(){
    $('#traslados-form').on('submit',function(e) {  //Don't foget to change the id form
    $.ajax({
        url:'enviartras.php', //===PHP file name====
        data:$(this).serialize(),
        type:'POST',
        success:function(data){
          console.log(data);
          //Success Message == 'Title', 'Message body', Last one leave as it is
          Swal.fire({
            title: 'Solicitud Recibida!',
            text: 'Pronto nos comunicaremos.',
            imageUrl: 'view/images/img_photos/bulldog-oferta-02.png',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
            background: 'url(view/images/img_photos/marco-huella.jpg)',
            width: 620,
            height: 400,
            animation: false
          })
        },
        error:function(data){
          //Error Message == 'Title', 'Message body', Last one leave as it is
          swal("Oops...", "Something went wrong :(", "error");
        }
      });
      e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
    });
});
