<?php
require_once __DIR__ . "/../config.php";
require_once __DIR__ . "/helpers.php";

function clean($v)
{
  return trim($v ?? "");
}

$email = strtolower(clean($_POST["email"] ?? ""));
$senha = (string) ($_POST["senha"] ?? "");

if ($email === "" || $senha === "") {
  http_response_code(400);
  die("Informe email e senha.");
}

$stmt = $pdo->prepare("SELECT id, nome, senha_hash FROM usuarios WHERE email = :email LIMIT 1");
$stmt->execute([":email" => $email]);
$user = $stmt->fetch();

if (!$user || !password_verify($senha, $user["senha_hash"])) {
  http_response_code(401);
  die("Email ou senha incorretos.");
}

$_SESSION["user_id"] = (int) $user["id"];
$_SESSION["user_nome"] = $user["nome"];

redirect("pages/minhasreservas.php");

