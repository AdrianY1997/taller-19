<!DOCTYPE html>
<html lang="es">

<head>
    <title>CRUD MVC PHP + MySQL</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/boostrap.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
    <script src="assets/js/fontawesome.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#"><i class="fa-solid fa-home fa-lg mb-1"></i> MVC PHP</a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-light"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
                    <li class="nav-item dropdown text-center mx-2 mx-lg-1">
                        <a class="nav-link dropdown-toggle" href="#" id="provDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            <div>
                                <i class="fa-solid fa-city" style="color: #ffffff;"></i>
                                <span class="badge rounded-pill badge-notification bg-primary">11</span>
                            </div>
                            Proveedores
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="provDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown text-center mx-2 mx-lg-1">
                        <a class="nav-link dropdown-toggle" href="#" id="prodDropdown" role="button"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            <div>
                                <i class="fa-solid fa-kiwi-bird" style="color: #ffffff;"></i>
                                <span class="badge rounded-pill badge-notification bg-primary">11</span>
                            </div>
                            Productos
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="prodDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Search form -->
                <form class="d-flex input-group w-auto ms-lg-3 my-3 my-lg-0">
                    <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-primary" type="button" data-mdb-ripple-color="dark">
                        Search
                    </button>
                </form>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <div class="container">