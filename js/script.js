function send(){
  number=$('input').val();
  if(number==''){
    $('#help').modal('toggle');
    // $('#myModal').modal('show');
    // $('#myModal').modal('hide');
  }else{
    url='https://api.whatsapp.com/send?phone='+number+'&text=';
    $('input').val('');
    window.open(url, '_blank');
  }
}

$('button[name="create"]').click(send);

$("input").keypress(function(e){//Adiciona ação de actionkey no input
  if(e.which == 13) {
   send();
  }
});