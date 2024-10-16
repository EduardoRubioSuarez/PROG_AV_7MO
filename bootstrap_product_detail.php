<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Sidebar -->
<div class="d-flex bg-secondary">
    <div class="bg-dark text-white p-3 vh-120 w-35 d-none d-md-block">
      <h4 class="text-white">Sidebar</h4>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Customers</a>
        </li>
      </ul>
    </div>

    <!-- Main content -->
    <div class="flex-grow-1">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar scroll</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ms-3">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  mdo
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <hr>

        <div class="container-fluid">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <h2 class="list-group-item">Info del carro</h2>
                </ul>
                <div class="card-body input-group">
                    <div class="col-4">
                        <img src="media/ae86.png" class="img-fluid d-none d-md-block w-70" alt="AE86">
                    </div>
                    <div class="list-group col-8">
                        <h5 class="card-title mt-3">Corolla AE86</h5>
                        <h3>$100,000 MXN</h3>
                        <p class="card-text">La generación Toyota AE86 del Toyota Corolla Levin y Toyota Sprinter Trueno, es un pequeño cupé ligero o hatchback introducido por Toyota en 1983 como parte de la quinta generación del Toyota Corolla. También es conocido como "Hachi-Roku (ハチロク?)", por 8 y 6 en japonés, gracias al Manga/Anime "頭文字D/ Initial D". Para el propósito de la brevedad, el código privilegiado del chasis "AE86" muestra el modelo de tracción trasera (RWD) de 1600 cc de la gama. En el clásico código de Toyota, la "A" representa el motor que llegó en el coche de la serie 4A-GE, mientras que la "E" representa el Corolla, "8" representa la quinta generación (serie E80) y "6" representa la variación dentro de esta generación, ya que algunos han pensado que el "86" representaba el año 1986 como su año de fabricación.</p>
                        <a href="#" class="btn btn-primary col-2">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
