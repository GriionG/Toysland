<script>

function buscar_usuario(id)
{
  $.getJSON("datos.php?IDUsuario=" + id).done(function(datos)  
    {
      if (datos[0][0]>0) 
      {
        alert("Usuario ya existe, inserte otro correo");
      }
        
    });  
}

</script>


data-validation-required-message="Por favor ingresa tu usuario." 
  onblur="javascript: buscar_usuario(this.value);">


  function validar()
  {
    var usuario = document.getElementById("txtCorreo").value;

    if (usuario.trim().length<1) {
      alert("Campo esta vacio");
      return false;
    }

    if (usuario.trim().length != usuario.length) {
      alert("Tienes esapcios de mas en el campo");
      return false;
    }

    return true;
  }

  onsubmit="return validar()"


  email