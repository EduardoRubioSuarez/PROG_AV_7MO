<?php
include_once("productController.php");
$productController = new ProductController();
$products = $productController->getAllProducts($_SESSION['api_token']);
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
          <a class="nav-link active text-white" aria-current="page" href="">Home</a>
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

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar scroll</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Link</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ms-3">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  mdo
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="">Profile</a></li>
                  <li><a class="dropdown-item" href="">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container-fluid">
      <br>
      <div class="container d-flex">
        <a href='#' class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#agregarModal">Agregar</a>
      </div>
      <br>
      <div class="row">
        <?php foreach ($products as $product) : ?>
          <div class="col-4 mb-3">
            <div class="card">
              <img src=<?= $product->cover ?> class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?= $product->name ?></h5>
                <p class="card-text">
                  <?= $product->description ?>
                </p>
                <a href=<?= 'bootstrap_product_detail.php?slug=' . $product->slug ?> class="btn btn-primary">Ver producto</a>
                <a href='#' class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal">Editar</a>
                <a href='#' class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal">Eliminar</a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
      
    </div>
      
  </div>

  <!-- Modal para Agregar -->
  <div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="agregarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agregarModalLabel">Agregar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Formulario de agregar -->
          <form>
            <div class="mb-3">
              <label for="nombreProducto" class="form-label">Nombre del Producto</label>
              <input type="text" class="form-control" id="nombreProducto">
            </div>
            <div class="mb-3">
              <label for="precioProducto" class="form-label">Precio</label>
              <input type="number" class="form-control" id="precioProducto">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal para Editar -->
  <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarModalLabel">Editar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Formulario de editar -->
          <form>
            <div class="mb-3">
              <label for="nombreProductoEditar" class="form-label">Nombre del Producto</label>
              <input type="text" class="form-control" id="nombreProductoEditar">
            </div>
            <div class="mb-3">
              <label for="precioProductoEditar" class="form-label">Precio</label>
              <input type="number" class="form-control" id="precioProductoEditar">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-warning">Actualizar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal para Eliminar -->
  <div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eliminarModalLabel">Eliminar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Estás seguro de que deseas eliminar este producto?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Eliminar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>
</html>
