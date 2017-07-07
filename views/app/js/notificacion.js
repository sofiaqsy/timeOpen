function goNot() {
  var connect, form, result,id,id_prod;
    id=document.getElementById('usuario').innerHTML;
    id_prod=document.getElementById('ida').innerHTML;
    marca=document.getElementById('marca').innerHTML;
    modelo=document.getElementById('modelo').innerHTML;
    sit=document.getElementById('sit').innerHTML;
    
    if(sit=="Activo"){
              form = 'id=' + id+ '&marca=' + marca+ '&modelo=' + modelo + '&id_prod=' + id_prod;
              connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                connect.onreadystatechange = function() {
          if(connect.readyState == 4 && connect.status == 200) {
            if(connect.responseText == 1) {
                result = '<div class="alert alert-dismissible alert-success">';
                result += '<h4>Registro completado!</h4>';
                result += '<p><strong>Estamos enviando tu notificacion...</strong></p>';
                result += '</div>';
              document.getElementById('_AJAX_NOT_').innerHTML = result;
              location.reload();
            }else{
              document.getElementById('_AJAX_NOT_').innerHTML = connect.responseText;
            }
          }else if(connect.readyState != 4){
              result = '<div class="alert alert-dismissible alert-warning">';
              result += '<button type="button" class="close" data-dismiss="alert">x</button>';
              result += '<h4>Procesando...</h4>';
              result += '<p><strong>Estamos procesando tu notificacion...</strong></p>';
              result += '</div>';
            document.getElementById('_AJAX_NOT_').innerHTML = result;
          }
              }
          connect.open('POST','ajax.php?mode=not',true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        connect.send(form);
      }else{
        result = '<div class="alert alert-dismissible alert-warning">';
        result += '<button type="button" class="close" data-dismiss="alert">x</button>';
        result += '<h4>Restringido</h4>';
        result += '<p><strong>Este producto ya ha sido reservado</strong></p>';
        result += '</div>';
      document.getElementById('_AJAX_NOT_').innerHTML = result;
      }

}
