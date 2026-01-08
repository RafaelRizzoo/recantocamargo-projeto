<?php require_once __DIR__ . "/../app/auth/helpers.php"; ?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Entrar | Recanto Camargo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="icon" href="../assets/img/icone.png" type="image/png">
</head>

<body class="d-flex flex-column min-vh-100">

  <?php include __DIR__ . "/../components/navbar.php"; ?>

  <div class="container py-5" style="max-width: 680px;">
    <h1 class="fw-bold mb-2">Entrar</h1>
    <p class="text-muted mb-4">Entre para ver suas reservas e solicitar novas datas.</p>

    <div class="card shadow-sm">
      <div class="card-body p-4">
        <form action="../app/auth/login.php" method="POST" class="row g-3">
          <div class="col-12">
            <label class="form-label">Email</label>
            <input name="email" type="email" class="form-control" required>
          </div>
          <div class="col-12">
            <label class="form-label">Senha</label>
            <input name="senha" type="password" class="form-control" required>
          </div>

          <div class="col-12 d-grid">
            <button class="btn btn-primary btn-lg" type="submit">Entrar</button>
          </div>
        </form>

        <p class="small text-muted mt-3 mb-0">
          Não tem conta? <a href="cadastro.php">Criar agora</a>
        </p>
      </div>
    </div>
  </div>
  <?php include __DIR__ . "/../components/footer.php"; ?>

</body>

</html>