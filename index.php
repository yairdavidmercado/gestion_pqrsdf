
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Iniciar sesión</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

        html,
        body {
        height: 100%;
        }

        body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        }

        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }
        .form-signin .checkbox {
        font-weight: 400;
        }
        .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
        }
        .form-signin .form-control:focus {
        z-index: 2;
        }
        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
    </style>
  </head>
  <body class="text-center">
    <form onsubmit="validar_sesion(); return false;" methods="POST" class="form-signin">
      <img class="mb-4" src="assets/img/logo.svg" alt="" width="80" height="80">
      <p>Iniciar sesión</p>
      <label for="inputEmail" class="sr-only">Usuario</label>
      <input type="text" id="usuario" class="form-control" placeholder="Usuario" required autofocus>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="password" class="form-control" placeholder="Contraseña" required>
      <button class="btn btn-lg btn-primary btn-block" style="color:#fff" type="submit"><b>Iniciar sesión</b></button>
      <p class="text-center">¿No tienes una cuenta? <a href="/gestion_pqrsdf/registrate.php">Registrate</a> </p>
    </form>

    <script src="assets/js/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  function validar_sesion() {
    var values = { 
        parametro1: $('#usuario').val(),
        parametro2: $('#password').val()
    };
    $.ajax({
    type : 'POST',
    data: values,
    url: 'php/sel_usuarios.php',
    success: function(respuesta) {
       let obj = JSON.parse(respuesta)
       //alert(JSON.stringify(obj[0].length))
       if (obj[0].length > 0 ) {
          window.location.href = "pqrsdf.php";
       }else{
         alert('Datos invalidos para el acceso')
       }
    },
    error: function() {
      console.log("No se ha podido obtener la información");
    }
  });
    
  }
</script>
</body>
</html>
