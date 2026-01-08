<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function base_url(): string
{
    $script = $_SERVER['SCRIPT_NAME'] ?? '';
    $parts = explode('/', trim($script, '/'));
    return isset($parts[0]) && $parts[0] !== '' ? '/' . $parts[0] : '';
}

function url(string $path): string
{
    return base_url() . '/' . ltrim($path, '/');
}

function redirect(string $path): void
{
    header('Location: ' . url($path));
    exit;
}

function is_logged_in(): bool
{
    return !empty($_SESSION['user_id']);
}

function current_user_id(): int
{
    return (int) ($_SESSION['user_id'] ?? 0);
}

function require_login(string $to = 'pages/login.php'): void
{
    if (!is_logged_in()) {
        redirect($to);
    }
}
