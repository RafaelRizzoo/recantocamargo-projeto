<?php require_once __DIR__ . "/../app/auth/helpers.php"; ?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar conta | Recanto Camargo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/icone.png" type="image/png">
</head>

<body class="d-flex flex-column min-vh-100">

    <?php include __DIR__ . "/../components/navbar.php"; ?>

    <div class="container py-5" style="max-width: 680px;">
        <h1 class="fw-bold mb-2">Criar conta</h1>
        <p class="text-muted mb-4">Crie sua conta para solicitar e acompanhar suas reservas.</p>

        <div class="card shadow-sm">
            <div class="card-body p-4">
                <form action="../app/auth/register.php" method="POST" class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Nome</label>
                        <input name="nome" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Senha</label>
                        <input name="senha" type="password" class="form-control" minlength="6" required>
                        <div class="form-text">Mínimo de 6 caracteres.</div>
                    </div>

                    <div class="col-12 d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Criar conta</button>
                    </div>
                </form>

                <p class="small text-muted mt-3 mb-0">
                    Já tem conta? <a href="login.php">Entrar</a>
                </p>
            </div>
        </div>
    </div>
    <?php include __DIR__ . "/../components/footer.php"; ?>

</body>

</html>