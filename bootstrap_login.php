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
        <h1>Esto es un login con bootstrap</h1>
    </div>
    <div class="container rounded-2">
        <div class="row col-1"></div>

        <div class="row col-mg-10">
            <div class="col bg-secondary">
                <img src="https://elcarterista.es/wp-content/uploads/2022/02/ropa_casual_al_trabajo_o_traje_si_eres_hombre.jpg" alt="" class="img-fluid">
            </div>
            <div class="col bg-dark text-white">
                <div class="container">
                    <div>
                        <h1>SIGN TO YOUR ACCOUNT</h1>
                    </div>
                    <form action="login_controller.php" method="POST">
                        <input type="hidden" name="action" value="login">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>    
                            <input type="email" class="form-control" id="exampleInputEmail1" name="correo" placeholder="Enter email" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena" placeholder="Password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block col-12">Submit</button>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>