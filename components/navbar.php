<?php
require_once __DIR__ . "/../app/auth/helpers.php";
$nome = $_SESSION["user_nome"] ?? "usuário";
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-4 fw-bold" href="<?= htmlspecialchars(url('index.php')) ?>">
      <img src="<?= htmlspecialchars(url('assets/img/logo.jpg')) ?>" class="logo-nav" alt="Recanto Camargo">
      <span class="brand-title d-none d-lg-inline">Recanto Camargo</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-2">
        <li class="nav-item">
          <a class="nav-link" href="<?= htmlspecialchars(url('pages/galeria.php')) ?>">Galeria</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= htmlspecialchars(url('pages/contato.php')) ?>">Contato</a>
        </li>

        <li class="nav-item">
          <a class="btn btn-primary ms-lg-2" href="<?= htmlspecialchars(url('pages/reservar.php')) ?>">Reservar</a>
        </li>

        <?php if (is_logged_in()): ?>
          <li class="nav-item dropdown ms-lg-2">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Olá, <?= htmlspecialchars($nome) ?>!
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="<?= htmlspecialchars(url('pages/minhasreservas.php')) ?>">
                  Minhas reservas
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= htmlspecialchars(url('pages/reservar.php')) ?>">
                  Nova reserva
                </a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item text-danger" href="<?= htmlspecialchars(url('app/auth/logout.php')) ?>">
                  Sair
                </a>
              </li>
            </ul>
          </li>
        <?php else: ?>
          <li class="nav-item dropdown ms-lg-2">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Conta
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="<?= htmlspecialchars(url('pages/login.php')) ?>">Entrar</a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= htmlspecialchars(url('pages/cadastro.php')) ?>">Criar conta</a>
              </li>
            </ul>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
