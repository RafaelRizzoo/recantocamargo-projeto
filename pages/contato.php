<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contato | Recanto Camargo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/icone.png" type="image/png">

    <style>
        .contact-card {
            transition: transform .15s ease;
        }

        .contact-card:hover {
            transform: translateY(-2px);
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <?php include __DIR__ . "/../components/navbar.php"; ?>

    <main class="flex-grow-1">

        <section class="py-5">
            <div class="container" style="max-width: 980px;">
                <div class="row g-4 align-items-center">
                    <div class="col-12 col-lg-8">
                        <h1 class="display-6 fw-bold mb-2">Contato</h1>
                        <p class="text-muted mb-0">
                            Fale com a gente pelo WhatsApp ou acompanhe as redes sociais do Recanto Camargo.
                        </p>
                    </div>
                    <div class="col-12 col-lg-4 d-grid">
                        <a class="btn btn-success btn-lg" href="https://wa.link/cxwdyx" target="_blank" rel="noopener">
                            Chamar no WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5">
            <div class="container" style="max-width: 980px;">
                <div class="row g-4">

                    <div class="col-12 col-md-4">
                        <div class="card shadow-sm contact-card h-100">
                            <div class="card-body p-4">
                                <h2 class="h5 fw-bold mb-2">WhatsApp</h2>
                                <p class="text-muted mb-3">Atendimento rápido para dúvidas e reservas.</p>
                                <a class="btn btn-success w-100" href="https://wa.link/cxwdyx" target="_blank"
                                    rel="noopener">
                                    Abrir WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card shadow-sm contact-card h-100">
                            <div class="card-body p-4">
                                <h2 class="h5 fw-bold mb-2">Instagram</h2>
                                <p class="text-muted mb-3">Fotos, novidades e bastidores do espaço.</p>
                                <a class="btn btn-outline-primary w-100" href="https://instagram.com/recantocamargoo"
                                    target="_blank" rel="noopener">
                                    Acessar Instagram
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card shadow-sm contact-card h-100">
                            <div class="card-body p-4">
                                <h2 class="h5 fw-bold mb-2">Facebook</h2>
                                <p class="text-muted mb-3">Informações e atualizações do Recanto Camargo.</p>
                                <a class="btn btn-outline-primary w-100"
                                    href="https://www.facebook.com/share/1CiMoLtYGC/?mibextid=wwXIfr" target="_blank"
                                    rel="noopener">
                                    Acessar Facebook
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card shadow-sm mt-4">
                    <div class="card-body p-4">
                        <h3 class="h6 fw-bold mb-2">Dica rápida</h3>
                        <p class="text-muted mb-0">
                            Para agilizar, envie no WhatsApp: <strong>datas</strong>, <strong>quantidade de
                                pessoas</strong> e o <strong>horário aproximado de chegada</strong>.
                        </p>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <h3 class="fw-bold mb-2">Já sabe quando pretende ir?</h3>
                    <p class="text-muted mb-3">Faça a solicitação em menos de 1 minuto.</p>
                    <a href="reservar.php" class="btn btn-primary btn-lg">Ir para reserva</a>
                </div>

            </div>
        </section>

    </main>

    <?php include __DIR__ . "/../components/footer.php"; ?>

</body>

</html>