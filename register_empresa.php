<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<div class="bg-light py-5">
    <h4 class="card-title mt-3 text-center">Crear cuenta de empresa</h4>
    <article class="card-body mx-auto" style="max-width: 400px;">
        <form>
            <div class="d-block my-3">
                <div onclick="tipo_persona('1')" class="custom-control custom-radio custom-control-inline">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" >
                    <label class="custom-control-label" for="credit">Personal</label>
                </div>
                <div onclick="tipo_persona('2')" class="custom-control custom-radio custom-control-inline">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" checked>
                    <label class="custom-control-label" for="debit">Empresa</label>
                </div>
            </div>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <select class="custom-select" style="max-width: 50px;">
                    <option value="">+971</option>
                    <option value="1">+972</option>
                    <option value="2">+198</option>
                    <option value="3">+701</option>
                </select>
                <input name="" class="form-control" placeholder="Phone number" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Full name" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Email address" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <select class="custom-select" style="max-width: 120px;">
                    <option selected="">+971</option>
                    <option value="1">+972</option>
                    <option value="2">+198</option>
                    <option value="3">+701</option>
                </select>
                <input name="" class="form-control" placeholder="Phone number" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                </div>
                <select class="form-control">
                    <option selected=""> Select job type</option>
                    <option>Designer</option>
                    <option>Manager</option>
                    <option>Accaunting</option>
                </select>
            </div> <!-- form-group end.// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="Create password" type="password">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="Repeat password" type="password">
            </div> <!-- form-group// -->                                      
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
            </div> <!-- form-group// -->      
            <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
        </form>
    </article>
</div> <!-- card.// -->
<script>
    function tipo_persona(value) {
        if (value == 1) {
            window.location.href = '/gestion_pqrsdf/registrate.php';
        }else if (value == 2) {
            //window.location.href = '/gestion_pqrsdf/login_empresa.php';
        }
    }

</script>
