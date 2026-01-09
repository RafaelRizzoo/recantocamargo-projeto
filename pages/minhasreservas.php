<?php
require_once __DIR__ . "/../app/config.php";
require_once __DIR__ . "/../app/auth/helpers.php";

require_login();

$userId = current_user_id();


$stmt = $pdo->prepare("
  SELECT id, checkin, checkout, hospedes, status, created_at
  FROM reservas
  WHERE user_id = :uid
  ORDER BY id DESC
");
$stmt->execute([":uid" => $userId]);
$reservas = $stmt->fetchAll();
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Minhas Reservas | Recanto Camargo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="icon" href="../assets/img/icone.png" type="image/png">
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include __DIR__ . "/../components/navbar.php"; ?>

  <div class="container py-5" style="max-width: 980px;">
    <div class="d-flex justify-content-between align-items-end flex-wrap gap-2 mb-4">
      <div>
        <h1 class="fw-bold mb-1">Minhas Reservas</h1>
        <p class="text-muted mb-0">Olá, <?= htmlspecialchars($_SESSION["user_nome"] ?? "hóspede") ?> 👋</p>
      </div>
      <div class="d-flex gap-2">
        <a class="btn btn-primary" href="reservar.php">Nova reserva</a>
        <a class="btn btn-outline-secondary" href="../app/auth/logout.php">Sair</a>
      </div>
    </div>

    <div class="card shadow-sm">
      <div class="card-body p-0">
        <?php if (empty($reservas)): ?>
          <div class="p-4">
            <p class="mb-2">Você ainda não tem reservas.</p>
            <a class="btn btn-success" href="reservar.php">Fazer a primeira reserva</a>
          </div>
        <?php else: ?>
          <div class="table-responsive">
            <table class="table table-striped mb-0 align-middle">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Check-in</th>
                  <th>Check-out</th>
                  <th>Hóspedes</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($reservas as $r): ?>
                  <tr>
                    <td>#<?= htmlspecialchars($r["id"]) ?></td>
                    <td><?= htmlspecialchars($r["checkin"]) ?></td>
                    <td><?= htmlspecialchars($r["checkout"]) ?></td>
                    <td><?= htmlspecialchars($r["hospedes"]) ?></td>
                    <td><?= htmlspecialchars($r["status"]) ?></td>
                    <td class="text-end">
                      <a class="btn btn-sm btn-outline-primary" href="../app/confirmacao.php?id=<?= (int) $r["id"] ?>">
                        Ver detalhes
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php include __DIR__ . "/../components/footer.php"; ?>
</body>

</html>