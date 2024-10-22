<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-1"></div> 
            <div class="col-10 ">       
                <div class="row rounded shadow"> 
                    <div class="col-md-6 col-xs-12 p-0 d-none d-sm-none d-xs-none d-md-none d-lg-block">
                        <img src="https://elcarterista.es/wp-content/uploads/2022/02/ropa_casual_al_trabajo_o_traje_si_eres_hombre.jpg" class="img-fluid rounded">
                    </div> 
                    <div class="col p-5">
                        <img src="logo.tiff" class="img-thumbnail mb-4" alt="...">
                        <h2>Bienvenido de nuevo</h2>
                        <form class="mt-5" method="POST" action="AuthController.php"> 
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">
                                    Correo electrónico
                                </label>
                                <input type="email" placeholder="Correo electrónico" class="form-control" id="exampleInputEmail1" required name="correo">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">
                                    Contraseña
                                </label>
                                <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1" required name="contrasenna">
                            </div>

                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">
                                    Check me in
                                </label>
                            </div>   
                            <div class="d-grid gap-2"> 
                                <button type="submit" class="btn btn-primary">Acceder</button>
                            </div>
                            <input type="hidden" name="action" value="access">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>