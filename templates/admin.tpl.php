<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Painel Administrativo da School of net</title>
  </head>
  <body class="d-flex flex-column">
    <div id="header">
        <nav class="navbar  navbar-dark bg-dark">
            <a href="" class="navbar-brand">AdminSon</a>
            <span class="navbar-text">
              Painel Administrativo da School of net
            </span>
        </nav>


    </div>
    <div id="main">
        <div class="row">
          <div class="col">
            <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
                <li class="nav-item">
                    <span class="nav-link text-white-50"><small>MENU</small></span>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link active">Páginas</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Usuarios</a>
                </li>
            </ul>
          </div>
          <div id="content" class="col-10">
              <?php include $content ?>  
          </div>
               
        </div>
    
         
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    
  </body>
</html>
