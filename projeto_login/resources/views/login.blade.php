<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <title>LOGIN</title>
        {{-- Font awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .login-form {
                background-size: cover;
                min-height: 100vh;
                max-height: 100%;
                max-width: 100%;
                margin: 0;
            }

            .card {
                width: 100%;
            }
        </style>
    </head>
    <body>
        <main class="login-form row justify-content-center">
            <div class="col-md-4 d-flex align-self-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Login</h5>
                        <form action="{{ route('auth.user') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="sr-only">E-mail</label>
                                <input type="email" id="email" class="form-control" name="email"  placeholder="Digite seu E-mail"  autofocus autocomplete="off">
                            </div>
        
                            <div class="mb-3">
                                <label for="password" class="sr-only">Senha</label>
                                <input type="password" id="password" class="form-control" name="password" placeholder="Digite sua Senha" >
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>