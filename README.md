# Recanto Camargo — Sistema de Reservas (PHP + MySQL)

Projeto de site para hospedagem em Aparecida/SP com páginas institucionais e sistema de reservas com autenticação.

## Funcionalidades
- Home (vitrine do espaço)
- Galeria por ambientes
- Contato (WhatsApp/Instagram/Facebook)
- Reserva com registro no banco
- Confirmação da reserva + botão para WhatsApp
- Cadastro/Login
- Área do hóspede: Minhas Reservas

## Stack
- PHP 8 (XAMPP)
- MySQL/MariaDB
- Bootstrap 5

## Como rodar localmente (Windows + XAMPP)
1. Instale o XAMPP e ligue **Apache** e **MySQL**
2. Coloque o projeto em:
   `C:\xampp\htdocs\recantocamargo`
3. Crie um arquivo local de configuração:
   `app/config.local.php`

Exemplo:
```php
<?php
$host = "127.0.0.1";
$port = "3306";
$db   = "recanto_camargo";
$user = "root";
$pass = "";
$charset = "utf8mb4";
