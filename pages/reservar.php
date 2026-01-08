<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Reservar | Recanto Camargo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/icone.png" type="image/png">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include __DIR__ . "/../components/navbar.php"; ?>

    <main class="flex-grow-1">
        <section class="py-5">
            <div class="container">

                <div class="mb-4">
                    <h1 class="display-6 fw-bold mb-2">Faça sua reserva</h1>
                    <p class="text-muted mb-0">
                        Selecione as datas e envie sua solicitação. A confirmação final é feita no WhatsApp.
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-12 col-lg-7">
                        <div class="card shadow-sm">
                            <div class="card-body p-4">

                                <h2 class="h5 fw-bold mb-3">Dados da reserva</h2>

                                <form id="formReserva" class="row g-3" action="../app/reservar.php" method="POST">
                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="checkin">Check-in</label>
                                        <input type="date" id="checkin" name="checkin" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="checkout">Check-out</label>
                                        <input type="date" id="checkout" name="checkout" class="form-control" required>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="pessoas">Pessoas</label>
                                        <input type="number" id="pessoas" name="hospedes" class="form-control" min="1"
                                            max="10" value="2" required>
                                        <div class="form-text">Capacidade recomendada: até 10 pessoas.</div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <label class="form-label" for="whats">WhatsApp</label>
                                        <input type="tel" id="whats" name="whats" class="form-control"
                                            placeholder="(DD) 99999-9999" required>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label" for="nome">Seu nome</label>
                                        <input type="text" id="nome" name="nome" class="form-control"
                                            placeholder="Seu nome completo" required>
                                    </div>

                                    <div class="col-12 d-grid d-sm-flex gap-2 mt-2">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            Confirmar reserva
                                        </button>

                                        <a href="contato.php" class="btn btn-outline-secondary btn-lg">
                                            Outras formas de contato
                                        </a>
                                    </div>

                                    <p class="text-muted small mb-0 mt-2">
                                        * Sua solicitação será registrada e exibida na confirmação.
                                    </p>
                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- Coluna lateral (Resumo / confiança) -->
                    <div class="col-12 col-lg-5">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body p-4">
                                <h3 class="h5 fw-bold mb-3">O que você encontra</h3>

                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex gap-2 mb-2">
                                        <span>✅</span><span>Casa completa com conforto e privacidade</span>
                                    </li>
                                    <li class="d-flex gap-2 mb-2">
                                        <span>✅</span><span>Área gourmet com churrasqueira</span>
                                    </li>
                                    <li class="d-flex gap-2 mb-2">
                                        <span>✅</span><span>Perto da Basílica de Aparecida</span>
                                    </li>
                                    <li class="d-flex gap-2">
                                        <span>✅</span><span>Fácil acesso e ótima localização</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card shadow-sm">
                            <div class="card-body p-4">
                                <h3 class="h5 fw-bold mb-2">Como funciona</h3>
                                <ol class="mb-0 text-muted">
                                    <li>Você preenche as datas e seus dados</li>
                                    <li>Registramos a solicitação no sistema</li>
                                    <li>Você confirma pelo WhatsApp na próxima tela</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php include __DIR__ . "/../components/footer.php"; ?>
</body>

</html>