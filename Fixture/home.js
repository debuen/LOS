$(document).ready(function(){
  $('#searcher').keyup(function(){
     var nombres = $('.names');
     var buscando = $(this).val();
     var item='';
     for( var i = 0; i < nombres.length; i++ ){
         item = $(nombres[i]).html().toLowerCase();
          for(var x = 0; x < item.length; x++ ){
              if( buscando.length === 0 || item.indexOf( buscando ) > -1 ){
                  $(nombres[i]).parents('.item').show(); 
              }else{
                   $(nombres[i]).parents('.item').hide();
              }
          }
     }
  });
});

function showMenu(e){
  e.preventDefault();
  $("#menu").slideToggle();
}
function hideMenu(){
  $("#menu").slideUp();
}