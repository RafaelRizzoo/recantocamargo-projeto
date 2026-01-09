<?php
declare(strict_types=1);

$host = "127.0.0.1";
$port = "3306";
$db = "recanto_camargo";
$user = "root";
$pass = "";
$charset = "utf8mb4";

$local = __DIR__ . "/config.local.php";
if (file_exists($local)) {
    require $local;
}

$dsn = "mysql:host={$host};port={$port};dbname={$db};charset={$charset}";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Erro na conexão com o banco: " . $e->getMessage());
}
