<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F2F2F2;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .card {
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h3 class="text-center">Login</h3>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" 
                    id="usuario"
                    name="usuario" 
                    class="form-control">
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" 
                    id="senha"
                    name="senha" 
                    class="form-control">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
