<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/auth/helpers.php";
require_login();

$userId = current_user_id();
function clean($v)
{
    return trim($v ?? "");
}

$nome = clean($_POST["nome"] ?? "");
$whats = clean($_POST["whats"] ?? "");
$checkin = clean($_POST["checkin"] ?? "");
$checkout = clean($_POST["checkout"] ?? "");
$hospedes = (int) ($_POST["hospedes"] ?? 0);
$obs = clean($_POST["obs"] ?? "");


if ($nome === "" || $whats === "" || $checkin === "" || $checkout === "" || $hospedes <= 0) {
    http_response_code(400);
    die("Preencha todos os campos obrigatórios.");
}

if (strtotime($checkout) <= strtotime($checkin)) {
    http_response_code(400);
    die("A data de check-out precisa ser maior que a de check-in.");
}

$stmt = $pdo->prepare("
  INSERT INTO reservas (user_id, nome, whatsapp, checkin, checkout, hospedes, observacoes)
  VALUES (:user_id, :nome, :whats, :checkin, :checkout, :hospedes, :obs)
");

$stmt->execute([
    ":user_id" => $userId,
    ":nome" => $nome,
    ":whats" => $whats,
    ":checkin" => $checkin,
    ":checkout" => $checkout,
    ":hospedes" => $hospedes,
    ":obs" => $obs !== "" ? $obs : null,
]);

$id = (int) $pdo->lastInsertId();

header("Location: confirmacao.php?id=" . $id);
exit;
