function send(){
  number=$('input').val();
  if(number!='' && number.length > 8){
    url='https://api.whatsapp.com/send?phone='+number+'&text=Olá!';
    $('input').val('');
    window.open(url, '_blank');
  }else{
    $('#help').modal('toggle');
    // $('#myModal').modal('show');
    // $('#myModal').modal('hide');
    $('input').val('');
  }
}

$('button[name="create"]').click(send);

$("input").keypress(function(e){//Adiciona ação de actionkey no input
  if(e.which == 13) {
   send();
  }
});