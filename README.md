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

### 1) Instalar e iniciar o XAMPP
1. Instale o XAMPP
2. Inicie os serviços:
   - **Apache**
   - **MySQL**

### 2) Colocar o projeto no htdocs
Coloque o projeto em:
`C:\xampp\htdocs\recantocamargo`

### 3) Configurar conexão com o banco (local)
Crie o arquivo:
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

### 4) Banco de dados (primeira vez)
- Se você já tem o banco `recanto_camargo` criado, pode pular este passo.
- Se estiver rodando o projeto pela primeira vez (ex.: em outro PC):
  1. Abra `http://localhost/phpmyadmin`
  2. Crie um banco chamado `recanto_camargo`
  3. Vá em **Importar**
  4. Selecione `database/schema.sql`
  5. Clique em **Executar**
