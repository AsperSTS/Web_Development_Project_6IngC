<?php
    include('controlador.php');
    if(isset($_SESSION['login_user'])){
        header("Location: menuDeOpciones.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario de registro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="test.css" type="text/css">
        <script src="checkScript.js"></script>
        <meta charset="UTF-8">
    </head>
    <body>
        <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                <div class="row g-0">
                    <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                        <div class="text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                            style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                        </div>

                        <form method="POST" action="controlador.php">
                        <p>Please login to your account</p>

                        <div class="form-outline mb-4">
                            <input type="text" id="Usuario" name="Usuario" required class="form-control"
                            placeholder="Username or email" />
                            <label class="form-label" for="Usuario">Username</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="Contrasena" name="Contrasena"  required class="form-control" />
                            <label class="form-label" for="Contrasena">Password</label>
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" id="botonIniciarSesion" name="botonIniciarSesion" type="submit" onclick="Evaluar();">Log
                            in</button>
                            
                            <a class="text-muted" href="#!">Forgot password?</a>
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Don't have an account?</p>
                            <button type="button" class="btn btn-outline-danger">Create new</button>
                        </div>

                        </form>

                    </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                        <h4 class="mb-4">We are more than just a company</h4>
                        <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </body>
</html>