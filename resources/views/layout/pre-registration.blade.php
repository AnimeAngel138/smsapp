@extends('layout.app')
@section('content')
<nav class="navbar navbar-light navbar-expand-lg navigation-clean-button" style="background: #0d1b28;">
    <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">Bula Central School</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login" href="/login" style="color: rgb(255,255,255);">Log In</a><a class="btn btn-light action-button" role="button" href="/register">Sign Up</a></span>
        </div>
    </div>
</nav>
            <section class="clean-hero">
                <div style="height: 100%;background-position: center;background-size: cover;background-repeat: no-repeat;">
                    <div class="d-flex justify-content-center align-items-center" style="height: inherit;min-height: initial;position: absolute;left: 0;width: 100%;">
                        <div class="container bg-white" style="padding-top: 40px;padding-bottom: 40px;margin-right: 12px;margin-left: 12px;padding-left: 6px;padding-right: 6px;">
                            <div class="row">
                                <div class="col-10 col-sm-10 col-md-10 offset-1 offset-sm-1 offset-md-1 text-start align-content-md-center">
                                    <form method="post">
                                        <h2 class="text-center" style="margin-bottom: 20px;color: #38414b;"><strong>Pre-Registration Form</strong></h2>
                                        <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Name</strong></label><input class="form-control" type="text" style="margin-bottom: 20px;"></div>
                                        <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;margin-top: 10px;color: #505E6C;"><strong>Usuario</strong></label><input class="form-control" type="text" style="margin-bottom: 20px;" placeholder="Nombre de usuario"></div><script>
    // Submit button made with javascript
    function changePassword() {
        var password = document.querySelector("#password").value;
        var confirmPassword = document.querySelector("#confirmPassword").value;
        
        if(password.length >= 8) {
            if(password === confirmPassword)
            {
                var btn = $('#submitButton').removeAttr("disabled");
                document.querySelector('#passwordsError').style.display = 'none';
                console.log("enabling")
            }
            else {
                var btn = $('#submitButton').attr("disabled", "true");
                document.querySelector('#passwordsError').style.display = 'block';
                document.querySelector('#errorMessage').innerHTML = 'The passwords do not match';
                console.log("disabling")
            }
        }
        else {
            var btn = $('#submitButton').attr("disabled", "true");
            document.querySelector('#passwordsError').style.display = 'block';
            document.querySelector('#errorMessage').innerHTML = 'The new password must be at least 8 characters long';
            console.log("disabling")
        }
    }
</script> 

                                        <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;margin-top: 10px;color: #505E6C;"><strong>Contraseña</strong></label><input class="form-control" type="password" id="password" placeholder="Contraseña" style="margin-bottom: 20px;" onchange="changePassword();"></div>
                                        <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;margin-top: 10px;color: #505E6C;"><strong>Confirmar Contraseña</strong></label><input class="form-control" type="password" id="confirmPassword" placeholder="Confirmación de contraseña" style="margin-bottom: 20px;" onchange="changePassword();"></div>
                                        <div id="passwordsError" class="form-group mb-3" style="display: none;margin-bottom: 18px;"><span id="errorMessage" class="text-danger" style="font-size:15px;">Text</span></div>
                                        <div class="row">
                                            <div class="col-md-6" style="margin-top: 20px;"><a class="btn btn-secondary d-block d-lg-flex justify-content-lg-center w-100" role="button" href="#">Cancelar</a></div>
                                            <div class="col-md-6" style="margin-top: 20px;"><button class="btn btn-primary d-block d-lg-flex justify-content-lg-center w-100" id="submitButton" type="submit">Guardar</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Button-modal-ecommerce.js"></script>
    <script src="assets/js/theme.js"></script>
@endsection