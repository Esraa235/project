<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-scroll">
          <div class="container-fluid">
            <a class="navbar-brand" href="#!">PROJECT 5</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
              data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#!">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#!">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#!">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#!">Students</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#!">Review</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#!">Contact</a>
                </li>
              </ul>
              <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#!">
                    <i class="fas fa-shopping-cart"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#!">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                  <a class="nav-link" href="#!">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      
        <!--Section: Design Block-->
        <section>
          <div id="intro" class="bg-image" style="
              background-image: url('C:\Users\PC\Desktop\laravel\dash-app\public\background.jpg');
              height: auto;
            ">
            <div class="mask" style="background-color: rgba(103, 136, 211, 0.2);">
              <div class="container d-flex justify-content-center align-items-center h-100">
                <div class="row align-items-center">
                  <div class="col-12">
                    <h1 class="mb-0 text-white display-1"></h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section: Design Block-->
      </header>
      
       <main>
         <div class="container my-5 py-5"> @yield('content')</div>
      </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>