<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<style>
 body{
     background-color: #F8F9FA
 }

</style>
<div class="bg-light py-5">
    <h4 class="card-title mt-3 text-center">Crear cuenta personal</h4>
    <article class="card-body mx-auto" style="max-width: 400px;">
        <form id="form_registro" onsubmit="event.preventDefault(); return GuardarRegistro();">
            <div class="d-block my-3">
                <div onclick="tipo_persona('1')" class="custom-control custom-radio custom-control-inline">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked >
                    <label class="custom-control-label" for="credit">Personal</label>
                </div>
                <div onclick="tipo_persona('2')" class="custom-control custom-radio custom-control-inline">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input">
                    <label class="custom-control-label" for="debit">Empresa</label>
                </div>
            </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
                    </div>
                    <select name="conse_tipo_id" required class="custom-select tipo_identificaciones">
                        <option value="">Tipo identificación</option>
                    </select>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="id_tercero" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required class="form-control" placeholder="Identificación" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="nombre1" required class="form-control" placeholder="Primer nombre" type="text">
                    <input name="nombre2" class="form-control" placeholder="Segundo nombre" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="apellido1" required class="form-control" placeholder="Primer apellido" type="text">
                    <input name="apellido2" class="form-control" placeholder="Segundo apellido" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="correo" required class="form-control" placeholder="Email" type="email">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
                    </div>
                    <input name="direccion" required class="form-control" placeholder="Dirección" type="text">
                </div> <!-- form-group// -->
                <label for="">Fecha de nacimiento</label>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-birthday-cake"></i> </span>
                    </div>
                    <select name="day" required id="day" class="custom-select" style="max-width: 80px;">
                        <option value="">Día</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select name="month" required id="month" class="custom-select" style="max-width: 80px;">
                        <option value="">Mes</option>
                        <option value="01">ENERO</option>
                        <option value="02">FEBRERO</option>
                        <option value="03">MARZO</option>
                        <option value="04">ABRIL</option>
                        <option value="05">MAYO</option>
                        <option value="06">JUNIO</option>
                        <option value="07">JULIO</option>
                        <option value="08">AGOSTO</option>
                        <option value="09">SEPTIEMBRE</option>
                        <option value="10">OCTUBRE</option>
                        <option value="11">NOVIEMBRE</option>
                        <option value="12">DICIEMBRE</option>
                    </select>
                    <select name="year" required id="year" class="custom-select">
                        <option value="">Año</option>
                    </select>
                </div> <!-- form-group// -->
                <div class="d-block my-3">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input id="hombre" value="Hombre" name="sexo" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="hombre">Hombre</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input id="mujer" value="Mujer" name="sexo" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="mujer">Mujer</label>
                    </div>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input name="telefono" class="form-control" placeholder="Teléfono" type="text">
                    <input name="celular" class="form-control" placeholder="Celular" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-users"></i> </span>
                    </div>
                    <select name="id_etnia" id="etnia" required class="custom-select tipo_etnia">
                        <option value=""> Etnia</option>
                    </select>
                    <select name="id_poblacion" id="poblacion" required  class="custom-select tipo_poblacion">
                        <option value=""> Población</option>
                    </select>
                </div> <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-users"></i> </span>
                    </div>
                    <select name="id_entidad" id="eps" required class="custom-select entidades">
                        <option value=""> EPS</option>
                    </select>
                    <select name="id_ciclo_vida" id="ciclo_vida" required  class="custom-select tipo_ciclo_vida">
                        <option value=""> Ciclo de vida</option>
                    </select>
                </div> <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" name="password" id="password" required placeholder="Crear Contraseña" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" name="password_confirmar" id="password_confirmar" required placeholder="Repetir contraseña" type="password">
                </div> <!-- form-group// --> 
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Crear cuenta </button>
                </div> <!-- form-group// -->      
                <p class="text-center">¿Tienes una cuenta? <a href="/gestion_pqrsdf/">Inicia sesión</a> </p>                                                              
        </form>
    </article>
</div> <!-- card.// -->
<script>
$(function() {
    ComboAno()
    TipoIdentificacion()
    VerEntidades()
    TipoEtnia()
    TipoPoblacion()
    TipoCicloVida()
});
    function tipo_persona(value) {
        if (value == 1) {
            //window.location.href = '/gestion_pqrsdf/registrate.php';
        }else if (value == 2) {
            window.location.href = '/gestion_pqrsdf/register_empresa.php';
        }
    }

    function ComboAno(){
        var d = new Date();
        var n = d.getFullYear();
        var select = document.getElementById("year");
        for(var i = n; i >= 1900; i--) {
            var opc = document.createElement("option");
            opc.text = i;
            opc.value = i;
            select.add(opc)
        }
    }

    function GuardarRegistro() {
        if (isValidDate($("#day").val(),$("#month").val(),$("#year").val())) {
            //alert("fecha correcta")
            if ($("#password").val() !== $("#password_confirmar").val() ) {
                alert("Las contraseñas no coinciden.", "red")
                $("input[name*='password']").val("")
                $("input[name*='password_confirmar']").val("")
                return false
            }
            $.ajax({
                type : 'POST',
                data: $("#form_registro").serialize()+"&tipo_persona=1&tipo_entidad=Privada",
                url: '/gestion_pqrsdf/php/registrate/guardar_tercero.php',
                success: function(respuesta) {
                let obj = JSON.parse(respuesta)
                if (obj.success) {
                    if (obj.message != "0") {
                        alert("Registro exitoso, puedes iniciar sesión.")
                        //alert("Hemos enviado una solicitud de verificación de inicio de sesión a tu cuenta de correo.")
                        window.location.href = '/gestion_pqrsdf/registrate.php';
                    }else{
                        alert("El usuario ya se encuentra registrado.")
                    }
                }else{
                    alert('Datos invalidos para el acceso')
                }
                },
                error: function() {
                console.log("No se ha podido obtener la información");
                }
            });
      
        }else{
            alert("fecha de nacimiento es incorrecta")
        }  
    }

    function guardar_usuario() {
      
    }

    function isValidDate(day,month,year)
{
    var dteDate;
    month=month-1;
    dteDate=new Date(year,month,day);
    return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));
}

function VerEntidades() {
      let values = { 
            cod: '1',
            parametro1: "1",
            parametro2: "1"
      };
      $.ajax({
      type : 'POST',
      data: values,
      url: '/gestion_pqrsdf/php/sel_recursos.php',
      beforeSend: function() {
          $(".loader").css("display", "inline-block")
      },
      success: function(respuesta) {
        $(".loader").css("display", "none")
        let obj = JSON.parse(respuesta)
        let fila = ''
        $.each(obj[0], function( index, val ) {
          fila += '<option value="'+val.cod_entidad+'">'+val.nombre_entidad+'</option>'
        });
        $(".entidades").html('<option value="">EPS</option>'+fila)
      },
      error: function() {
        $(".loader").css("display", "none")
        console.log("No se ha podido obtener la información");
      }
    });
    
  }

  function TipoIdentificacion() {
      let values = { 
            cod: '4',
            parametro1: "1",
            parametro2: "1"
      };
      $.ajax({
      type : 'POST',
      data: values,
      url: '/gestion_pqrsdf/php/sel_recursos.php',
      beforeSend: function() {
          $(".loader").css("display", "inline-block")
      },
      success: function(respuesta) {
        $(".loader").css("display", "none")
        let obj = JSON.parse(respuesta)
        let fila = ''
        $.each(obj[0], function( index, val ) {
          if (val.conse_tipo_id != 8) {
            fila += '<option value="'+val.conse_tipo_id+'">'+val.tipo_id+'</option>'   
          }
        });
        $(".tipo_identificaciones").html('<option value="">Tipo identificación</option>'+fila)
      },
      error: function() {
        $(".loader").css("display", "none")
        console.log("No se ha podido obtener la información");
      }
    });
    
  }

  function TipoEtnia() {
      let values = { 
            cod: "5",
            parametro1: "1",
            parametro2: "1"
      };
      $.ajax({
      type : 'POST',
      data: values,
      url: '/gestion_pqrsdf/php/sel_recursos.php',
      beforeSend: function() {
          $(".loader").css("display", "inline-block")
      },
      success: function(respuesta) {
        $(".loader").css("display", "none")
        let obj = JSON.parse(respuesta)
        let fila = ''
        $.each(obj[0], function( index, val ) {
          fila += '<option value="'+val.conse+'">'+val.nombre+'</option>'
        });
        $(".tipo_etnia").html('<option value="">Etnia</option>'+fila)
      },
      error: function() {
        $(".loader").css("display", "none")
        console.log("No se ha podido obtener la información");
      }
    });
    
  }

  function TipoPoblacion() {
      let values = { 
            cod: "6",
            parametro1: "1",
            parametro2: "1"
      };
      $.ajax({
      type : 'POST',
      data: values,
      url: '/gestion_pqrsdf/php/sel_recursos.php',
      beforeSend: function() {
          $(".loader").css("display", "inline-block")
      },
      success: function(respuesta) {
        $(".loader").css("display", "none")
        let obj = JSON.parse(respuesta)
        let fila = ''
        $.each(obj[0], function( index, val ) {
          fila += '<option value="'+val.conse+'">'+val.nombre+'</option>'
        });
        $(".tipo_poblacion").html('<option value="">Población</option>'+fila)
      },
      error: function() {
        $(".loader").css("display", "none")
        console.log("No se ha podido obtener la información");
      }
    });
    
  }

  function TipoCicloVida() {
      let values = { 
            cod: "7",
            parametro1: "1",
            parametro2: "1"
      };
      $.ajax({
      type : 'POST',
      data: values,
      url: '/gestion_pqrsdf/php/sel_recursos.php',
      beforeSend: function() {
          $(".loader").css("display", "inline-block")
      },
      success: function(respuesta) {
        $(".loader").css("display", "none")
        let obj = JSON.parse(respuesta)
        let fila = ''
        $.each(obj[0], function( index, val ) {
          fila += '<option value="'+val.conse+'">'+val.nombre+'</option>'
        });
        $(".tipo_ciclo_vida").html('<option value="">Ciclo de vida</option>'+fila)
      },
      error: function() {
        $(".loader").css("display", "none")
        console.log("No se ha podido obtener la información");
      }
    });
    
  }

</script>