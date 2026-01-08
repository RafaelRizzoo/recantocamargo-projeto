<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Galeria | Recanto Camargo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/icone.png" type="image/png">

    <style>
        .gallery-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 12px;
            cursor: pointer;
            transition: transform .15s ease;
        }

        .gallery-img:hover {
            transform: scale(1.01);
        }

        @media (max-width: 576px) {
            .gallery-img {
                height: 170px;
            }
        }

        .section-title {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 14px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <?php include __DIR__ . "/../components/navbar.php"; ?>

    <main class="flex-grow-1">
        <section class="py-5">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-12 col-lg-8">
                        <h1 class="display-6 fw-bold mb-2">Galeria</h1>
                        <p class="text-muted mb-0">
                            Explore cada ambiente do Recanto Camargo. Clique em uma foto para ampliar.
                        </p>
                    </div>

                    <div class="col-12 col-lg-4 d-grid">
                        <a href="reservar.php" class="btn btn-success btn-lg">Ver disponibilidade</a>
                    </div>
                </div>
                <div class="mt-4 p-3 border rounded-3 bg-body-tertiary">
                    <div class="d-flex flex-wrap gap-2">
                        <a class="btn btn-outline-secondary btn-sm" href="#fachada">Fachada</a>
                        <a class="btn btn-outline-secondary btn-sm" href="#sala">Sala de estar</a>
                        <a class="btn btn-outline-secondary btn-sm" href="#quarto1">Quarto nº 1</a>
                        <a class="btn btn-outline-secondary btn-sm" href="#banheiro">Banheiro</a>
                        <a class="btn btn-outline-secondary btn-sm" href="#quarto2">Quarto nº 2</a>
                        <a class="btn btn-outline-secondary btn-sm" href="#cozinha">Cozinha</a>
                        <a class="btn btn-outline-secondary btn-sm" href="#gourmet">Área gourmet</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="fachada" class="py-4">
            <div class="container">
                <div class="section-title">
                    <h2 class="h4 fw-bold m-0">Fachada</h2>
                    <a class="small text-decoration-none" href="#topo"
                        onclick="window.scrollTo({top:0, behavior:'smooth'})">Voltar ao topo ↑</a>
                </div>

                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-3">
                        <img class="gallery-img" src="../assets/img/galeria/fachada/fachada.jpeg" alt="Fachada 01"
                            data-bs-toggle="modal" data-bs-target="#imgModal"
                            data-img="../assets/img/galeria/fachada/fachada.jpeg">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img class="gallery-img" src="../assets/img/galeria/fachada/fachada2.jpeg" alt="Fachada 02"
                            data-bs-toggle="modal" data-bs-target="#imgModal"
                            data-img="../assets/img/galeria/fachada/fachada2.jpeg">
                    </div>
                </div>
            </div>
        </section>

        <section id="sala" class="py-4">
            <div class="container">
                <div class="section-title">
                    <h2 class="h4 fw-bold m-0">Sala de estar</h2>
                </div>

                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-3">
                        <img class="gallery-img" src="../assets/img/galeria/sala/sala.jpeg" alt="Sala 01"
                            data-bs-toggle="modal" data-bs-target="#imgModal"
                            data-img="../assets/img/galeria/sala/sala.jpeg">
                    </div>

                </div>
            </div>
        </section>


        <section id="quarto1" class="py-4">
            <div class="container">
                <div class="section-title">
                    <h2 class="h4 fw-bold m-0">Quarto nº 1</h2>
                </div>

                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-3">
                        <img class="gallery-img" src="../assets/img/galeria/quarto1/quarto1.jpeg" alt="Quarto 1 - 01"
                            data-bs-toggle="modal" data-bs-target="#imgModal"
                            data-img="../assets/img/galeria/quarto1/quarto1.jpeg">
                    </div>

                </div>
            </div>
        </section>

        <!-- Banheiro -->
        <section id="banheiro" class="py-4">
            <div class="container">
                <div class="section-title">
                    <h2 class="h4 fw-bold m-0">Banheiro</h2>
                </div>

                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-3">
                        <img class="gallery-img" src="../assets/img/galeria/banheiro/banheiro.jpeg" alt="Banheiro 01"
                            data-bs-toggle="modal" data-bs-target="#imgModal"
                            data-img="../assets/img/galeria/banheiro/banheiro.jpeg">
                    </div>
                </div>
            </div>
        </section>

        <section id="quarto2" class="py-4">
            <div class="container">
                <div class="section-title">
                    <h2 class="h4 fw-bold m-0">Quarto nº 2</h2>
                </div>

                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-3">
                        <img class="gallery-img" src="../assets/img/galeria/quarto2/guarto2.jpeg" alt="Quarto 2 - 01"
                            data-bs-toggle="modal" data-bs-target="#imgModal"
                            data-img="../assets/img/galeria/quarto2/guarto2.jpeg">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img class="gallery-img" src="../assets/img/galeria/quarto2/jardimdeinverno.jpeg"
                            alt="Quarto 2 - 02" data-bs-toggle="modal" data-bs-target="#imgModal"
                            data-img="../assets/img/galeria/quarto2/jardimdeinverno.jpeg">
                    </div>
                </div>
            </div>
        </section>

        <section id="cozinha" class="py-4">
            <div class="container">
                <div class="section-title">
                    <h2 class="h4 fw-bold m-0">Cozinha</h2>
                </div>

                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-3">
                        <img class="gallery-img" src="../assets/img/galeria/cozinha/cozinha1.jpeg" alt="Cozinha 01"
                            data-bs-toggle="modal" data-bs-target="#imgModal"
                            data-img="../assets/img/galeria/cozinha/cozinha1.jpeg">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img class="gallery-img" src="../assets/img/galeria/cozinha/cozinha2.jpeg" alt="Cozinha 02"
                            data-bs-toggle="modal" data-bs-target="#imgModal"
                            data-img="../assets/img/galeria/cozinha/cozinha2.jpeg">
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <img class="gallery-img" src="../assets/img/galeria/cozinha/cozinha3.jpeg" alt="Cozinha 02"
                            data-bs-toggle="modal" data-bs-target="#imgModal"
                            data-img="../assets/img/galeria/cozinha/cozinha3.jpeg">
                    </div>
                </div>
            </div>
        </section>

        <section id="gourmet" class="py-4 pb-5">
            <div class="container">
                <div class="section-title">
                    <h2 class="h4 fw-bold m-0">Área gourmet com churrasqueira</h2>
                </div>

                <div class="row g-3">
                    <div class="col-6 col-md-4 col-lg-3">
                        <img class="gallery-img" src="../assets/img/galeria/gourmet/gourmet.jpeg" alt="Área Gourmet 01"
                            data-bs-toggle="modal" data-bs-target="#imgModal"
                            data-img="../assets/img/galeria/gourmet/gourmet.jpeg">
                    </div>
                </div>

                <!-- CTA final -->
                <div class="text-center mt-5">
                    <h3 class="fw-bold mb-2">Curtiu o espaço?</h3>
                    <p class="text-muted mb-3">Veja datas e envie sua solicitação em menos de 1 minuto.</p>
                    <a href="reservar.php" class="btn btn-success btn-lg">Ver disponibilidade</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-top py-4 mt-auto">
        <div class="container d-flex justify-content-between flex-wrap gap-2">
            <small class="text-muted">© Recanto Camargo</small>
            <a class="small" href="contato.php">Fale conosco</a>
        </div>
    </footer>

    <!-- Modal (imagem ampliada) -->
    <div class="modal fade" id="imgModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-2">
                    <img id="modalImg" src="" alt="Imagem ampliada"
                        style="width:100%; height:auto; border-radius: 10px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>F
</body>

</html>