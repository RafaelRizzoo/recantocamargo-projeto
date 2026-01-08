<?php
require_once __DIR__ . "/../config.php";
require_once __DIR__ . "/helpers.php";

function clean($v)
{
  return trim($v ?? "");
}

$nome = clean($_POST["nome"] ?? "");
$email = strtolower(clean($_POST["email"] ?? ""));
$senha = (string) ($_POST["senha"] ?? "");

if ($nome === "" || $email === "" || $senha === "") {
  http_response_code(400);
  die("Preencha nome, email e senha.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400);
  die("Email inválido.");
}

if (strlen($senha) < 6) {
  http_response_code(400);
  die("Senha muito curta. Use pelo menos 6 caracteres.");
}

$hash = password_hash($senha, PASSWORD_DEFAULT);

// tenta inserir
try {
  $stmt = $pdo->prepare("
    INSERT INTO usuarios (nome, email, senha_hash)
    VALUES (:nome, :email, :hash)
  ");
  $stmt->execute([
    ":nome" => $nome,
    ":email" => $email,
    ":hash" => $hash,
  ]);
} catch (PDOException $e) {
  // 23000 geralmente = email duplicado
  if ($e->getCode() === "23000") {
    die("Esse email já está cadastrado.");
  }
  throw $e;
}

// loga automaticamente após cadastro
$_SESSION["user_id"] = (int) $pdo->lastInsertId();
$_SESSION["user_nome"] = $nome;

redirect('pages/minhasreservas.php');

