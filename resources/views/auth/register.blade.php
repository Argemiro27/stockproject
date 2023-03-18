
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="css/styleLoginRegister.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;1,200;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card card-login mx-auto">
                <div class="card-body">
                    <img src="{{ asset('img/stock.png') }}" alt="Logo" style="height: 30vh; width: 30vh; display: flex; margin: auto; ">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input id="name" type="name" name="name" class="form-control" value="{{ old('name') }}" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input id="password" type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirmação de senha</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn">
                            Registrar
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
