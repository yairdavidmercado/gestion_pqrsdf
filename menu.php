<?php
 if (!isset($_SESSION['idUser'])) {
    header ("Location:/gestion_pqrsdf/index.php"); 
 }
?>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div onload="validar()" class="container">
        <a class="navbar-brand" href="#"><img src="assets/img/logos.png" width="140px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="pqrsdf.php">PQRSDF</a>
            </li>
            <li id="li_glosas" class="nav-item">
            <a class="nav-link" href="glosas.php">Glosas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="http://190.121.135.236:8091/gestion_documental/home.php">Consultar radicados</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="http://190.121.135.236:8091/gestion_documental/view/respuesta.php">Subir respuesta de radicado recibido</a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['nameUser'];?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="php/cerrar_sesion.php">Cerrar sesión</a>
                </div>
                </li>
            </ul>
        </div>
        </div>
    </div>
  </nav>
  <script>
  var tipo_persona = "<?php echo $_SESSION['Tipo_persona']?>";
  window.onload = function() {
    validar();
  };
  function validar() {
    if (tipo_persona = 1) {
        document.getElementById("li_glosas").style.display = "none";
    }
  }
  </script>