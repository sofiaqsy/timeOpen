function goNot() {
  var connect, form, result,id,id_ser;
    id_ser=document.getElementById('id_ser').innerHTML;
    titulo=document.getElementById('titulo').innerHTML;

      form = '&titulo=' + titulo + '&id_ser=' + id_ser;
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
      }
