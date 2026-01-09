<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/auth/helpers.php";

require_login();

$id = (int) ($_GET["id"] ?? 0);
if ($id <= 0) {
    http_response_code(400);
    die("Reserva inválida.");
}

$userId = current_user_id();

$stmt = $pdo->prepare("SELECT * FROM reservas WHERE id = :id AND user_id = :user_id LIMIT 1");
$stmt->execute([
    ":id" => $id,
    ":user_id" => $userId
]);
$reserva = $stmt->fetch();

if (!$reserva) {
    http_response_code(404);
    die("Reserva não encontrada.");
}

$whatsDestino = "55SEU_NUMERO_AQUI";

$mensagem =
    "Olá! Gostaria de solicitar uma reserva no Recanto Camargo.\n\n" .
    "Código: #{$reserva['id']}\n" .
    "Nome: {$reserva['nome']}\n" .
    "WhatsApp: {$reserva['whatsapp']}\n" .
    "Check-in: {$reserva['checkin']}\n" .
    "Check-out: {$reserva['checkout']}\n" .
    "Hóspedes: {$reserva['hospedes']}\n";

if (!empty($reserva["observacoes"])) {
    $mensagem .= "Obs: {$reserva['observacoes']}\n";
}

$mensagem .= "\nPode confirmar, por favor?";

$waUrl = "https://wa.me/" . $whatsDestino . "?text=" . urlencode($mensagem);
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Confirmação | Recanto Camargo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>


<body>
    <?php include __DIR__ . "/../components/navbar.php"; ?>


    <main class="container my-5">
        <div class="text-center mb-4">
            <h1 class="fw-bold text-success">Reserva registrada ✅</h1>
            <p class="text-muted">Agora é só enviar a solicitação no WhatsApp para confirmar.</p>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h4 class="card-title mb-4">Resumo da reserva</h4>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Código:</strong> #<?= htmlspecialchars($reserva["id"]) ?></li>
                    <li class="list-group-item"><strong>Nome:</strong> <?= htmlspecialchars($reserva["nome"]) ?></li>
                    <li class="list-group-item"><strong>WhatsApp:</strong> <?= htmlspecialchars($reserva["whatsapp"]) ?>
                    </li>
                    <li class="list-group-item"><strong>Check-in:</strong> <?= htmlspecialchars($reserva["checkin"]) ?>
                    </li>
                    <li class="list-group-item"><strong>Check-out:</strong>
                        <?= htmlspecialchars($reserva["checkout"]) ?></li>
                    <li class="list-group-item"><strong>Hóspedes:</strong> <?= htmlspecialchars($reserva["hospedes"]) ?>
                    </li>
                    <?php if (!empty($reserva["observacoes"])): ?>
                        <li class="list-group-item"><strong>Obs:</strong> <?= htmlspecialchars($reserva["observacoes"]) ?>
                        </li>
                    <?php endif; ?>
                </ul>

                <div class="mt-4 d-flex gap-2 flex-wrap">
                    <a href="<?= htmlspecialchars($waUrl) ?>" target="_blank" rel="noopener"
                        class="btn btn-success px-4">
                        Enviar no WhatsApp
                    </a>

                    <a href="<?= htmlspecialchars(base_url() . "/index.php") ?>" class="btn btn-outline-secondary px-4">
                        Voltar ao site
                    </a>
                </div>

                <p class="text-muted small mt-3">
                    Se o WhatsApp não abrir, clique novamente no botão acima.
                </p>
            </div>
        </div>
    </main>

    <?php include __DIR__ . "/../components/footer.php"; ?>

</body>


</html>