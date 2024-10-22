<?php
include_once("productController.php");
$productController = new ProductController();
$product = $productController->getProductBySlug($_GET['slug']);
?>
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
    <div class="bg-dark text-white p-3 min-vh-100 w-35 d-none d-md-block">
      <h4 class="text-white">Sidebar</h4>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="">Customers</a>
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

        <div class="container-fluid">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <h2 class="list-group-item">Información del producto</h2>
                </ul>
                <div class="card-body input-group">
                    <div class="col-4">
                    <img src="<?= $product->cover ?>" class="img-fluid d-none d-md-block mw-100" style="max-height: 300px;" alt="producto">
                    </div>
                    <div class="list-group col-8">
                        <h5 class="card-title mt-3"><?= $product->name ?></h5>
                        <h3>$<?= $product->presentations[0]->price[0]->amount ?></h3>
                        <p class="card-text"><?= $product->description ?></p>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
