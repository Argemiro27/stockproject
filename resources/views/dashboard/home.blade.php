<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programa</title>
  <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="css/styleDashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/regular.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-cqa8U6O14z6EwU+vOG02pW5b5bbmb0p0eSwgC9E5aUmfrssx53mjjm1bkl7JhMVprwt/0W/IN2X9NC+ws75BQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;1,200;1,300&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 bg-dark text-light">
        <nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="sidebarMenu">
              <img src="{{ asset('img/stock.png') }}" alt="Logo" style="height: 15vh; width: 15vh; display: flex; margin: auto; ">
              <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i>Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-table"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-mobile"></i>Baixe o App</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-chart-line"></i>Gráficos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-building"></i>Minhas ações</a>
                </li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" id="logout" class="nav-link" style="border-top:none;border-right:none">
                        <i class="fa fa-sign-out"></i>Logout
                    </button>
                </form>
              </ul>
            </div>
        </nav>
      </div>
      <div class="col-md-10">
        <div class="container mt-4">
          <h1 class="mb-4">TOP 3 AÇÕES</h1>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Ação 1</h5>
                  <p class="card-text">Descrição da ação 1</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Ação 2</h5>
                  <p class="card-text">Descrição da ação 2</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Ação 3</h5>
                  <p class="card-text">Descrição da ação 3</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"> </script>

