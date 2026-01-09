<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Recanto Camargo</title>
    <link rel="icon" href="assets/img/icone.png" type="image/png">
</head>

<body class="d-flex flex-column min-vh-100">

    <?php include __DIR__ . "/components/navbar.php"; ?>

    <main class="flex-grow-1">

        <section class="py-5 border-bottom">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6">
                        <h1 class="display-6 fw-bold ">Recanto Camargo</h1>
                        <p class="lead mb-4">
                            Uma hospedagem completa em Aparecida/SP, pensada para descanso, conforto e praticidade. Seu
                            descanso à 5 minutos da casa da mãe!
                        </p>

                        <div class="d-flex gap-2 mt-3">
                            <a href="pages/reservar.php" class="btn btn-success btn-lg">Ver disponibilidade</a>
                            <a href="pages/galeria.php" class="btn btn-outline-secondary btn-lg">Ver fotos</a>
                        </div>


                        <div class="col-12 w-100 col-lg-6 py-1">

                            <iframe class=" py-3 "
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.8161486185204!2d-45.2394404883204!3d-22.846290535627052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ccc3693a7941e1%3A0x2548617aaa9c827a!2sR.%20Jos%C3%A9%20Ourives%2C%2076%2C%20Aparecida%20-%20SP%2C%2012570-000!5e0!3m2!1sen!2sbr!4v1767623943974!5m2!1sen!2sbr"
                                width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div id="heroCarousel" class="carousel slide border rounded overflow-hidden"
                            data-bs-ride="carousel">

                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                            </div>


                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/FRENTE.jpg" class="d-block w-100 hero-img"
                                        alt="Recanto Camargo - foto 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/SALA.jpg" class="d-block w-100 hero-img"
                                        alt="Recanto Camargo - foto 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/QUARTO.jpg" class="d-block w-100 hero-img"
                                        alt="Recanto Camargo - foto 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/LAZER.jpg" class="d-block w-100 hero-img"
                                        alt="Recanto Camargo - foto 4">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Próximo</span>
                            </button>
                        </div>
                    </div>
                    <div class="container py-3">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="p-3 border rounded">Casa completa</div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 border rounded">Conforto e privacidade</div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 border rounded">Próximo às atrações</div>
                            </div>
                        </div>

                        <div class="row g-3 py-3">
                            <div class="col-md-4">
                                <div class="p-3 border rounded">Até 10 pessoas</div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 border rounded">Área gourmet com churrasqueira</div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 border rounded">À 5 min do santuário!</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </section>

        <section id="pontos" class="py-5 bg-recanto border-top">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h2 class="h4 mb-0">Pontos turísticos próximos</h2>
                    <a class="small text-decoration-none" href="#">voltar ao topo ↑</a>
                </div>
                <p class="text-muted mb-4">
                    Explore atrações a poucos minutos do Recanto Camargo. Dicas rápidas para planejar sua visita.
                </p>

                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <div class="col">
                        <div class="card poi-card h-100 shadow-sm">
                            <img src="assets/img/Basilica.png" class="card-img-top" alt="Basílica de Aparecida">
                            <div class="card-body">
                                <h3 class="h6 card-title mb-1">Basílica de Aparecida</h3>
                                <p class="card-text small text-muted mb-2">a ~1,2 km • 5–8 min</p>
                                <p class="card-text small">O maior santuário mariano do mundo, com arquitetura
                                    monumental e extensa área de visitação.</p>
                                <a href="https://maps.app.goo.gl/iPTv5fxxN47X3MEM6">Ver rota</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card poi-card h-100 shadow-sm">
                            <img src="assets/img/passarela.jpg" class="card-img-top" alt="Passarela da Fé">
                            <div class="card-body">
                                <h3 class="h6 card-title mb-1">Passarela da Fé</h3>
                                <p class="card-text small text-muted mb-2">a ~1,4 km • 6–9 min</p>
                                <p class="card-text small">Caminho icônico que liga a Basílica Velha ao Santuário
                                    Nacional, com vista da cidade.</p>
                                <a href="https://maps.app.goo.gl/kDD2NNewE6ysTQue6">Ver rota</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card poi-card h-100 shadow-sm">
                            <img src="assets/img/mirante.png" class="card-img-top" alt="Bondinho e Mirante">
                            <div class="card-body">
                                <h3 class="h6 card-title mb-1">Bondinho & Mirante</h3>
                                <p class="card-text small text-muted mb-2">a ~2,5 km • 8–12 min</p>
                                <p class="card-text small">Teleférico com vista panorâmica do Santuário e da região do
                                    Vale do Paraíba.</p>
                                <a href="https://maps.app.goo.gl/PCWE2SGCzYw2EXv2A">Ver rota</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card poi-card h-100 shadow-sm">
                            <img src="assets/img/caminho-do-rosario.jpg" class="card-img-top" alt="Porto Itaguaçu">
                            <div class="card-body">
                                <h3 class="h6 card-title mb-1">Caminho do Rosário</h3>
                                <p class="card-text small text-muted mb-2">a ~3,0 km • 10–14 min</p>
                                <p class="card-text small">Local histórico onde, segundo a tradição, a imagem de Nossa
                                    Senhora Aparecida foi encontrada.</p>
                                <a href="https://maps.app.goo.gl/9yhr3ppbCcV3tduE6">Ver rota</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card poi-card h-100 shadow-sm">
                            <img src="assets/img/images.jfif" class="card-img-top" alt="Mercado de Aparecida">
                            <div class="card-body">
                                <h3 class="h6 card-title mb-1">Feira Livre</h3>
                                <p class="card-text small text-muted mb-2">a ~1,8 km • 6–10 min</p>
                                <p class="card-text small">Artesanato, lembranças e culinária local para levar um
                                    pouquinho da viagem.</p>
                                <a href="https://maps.app.goo.gl/kDD2NNewE6ysTQue6">Ver rota</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card poi-card h-100 shadow-sm">
                            <img src="assets/img/Morro2Bdo2BCruzeiro2BEntrada2B-2BThiago2BLeon.jpg" class="card-img-top"
                                alt="Morro do Cruzeiro">
                            <div class="card-body">
                                <h3 class="h6 card-title mb-1">Morro do Cruzeiro</h3>
                                <p class="card-text small text-muted mb-2">a ~2,9 km • 9–12 min</p>
                                <p class="card-text small">Vista elevada e a tradicional Via Sacra — ideal para fotos e
                                    contemplação.</p>
                                <a href="https://maps.app.goo.gl/4sqocHpRpw7egeSV6">Ver rota</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <h3 class="mb-2">Pronto pra reservar?</h3>
                    <p class="text-muted mb-3">Confira datas e envie sua solicitação em 1 minuto.</p>
                    <a href="pages/reservar.php" class="btn btn-primary btn-lg">Pedir reserva</a>
                </div>

            </div>
        </section>

        <section id="reserva" class="py-5 bg-recanto-2 border-top">
            <div class="container">
                <div class="row g-4 align-items-stretch">
                    <div class="col-12 col-lg-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title">Reserve agora</h4>
                                <p class="text-muted mb-3">
                                    Veja disponibilidade e envie a solicitação pelo WhatsApp.
                                </p>

                                <ul class="small text-muted mb-3">
                                    <li>Até 10 pessoas</li>
                                    <li>Área gourmet com churrasqueira</li>
                                    <li>5 min do Santuário</li>
                                    <li>Ventilador em todos os quartos</li>
                                    <li>Cozinha completa</li>
                                    <li>TV Smart's em todos os quartos</li>
                                    <li>Garagem para um carro</li>
                                    <li>Toalha, roupas de cama, mantas inclusos</li>
                                </ul>

                                <a href="pages/reservar.php" class="btn btn-success w-100">Ver disponibilidade</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h2 class="h4 mb-3">Localização</h2>
                                <p class="small text-muted mb-0">Perfeita localização, pertinho da casa da mãe!</p>
                                <div class="ratio ratio-3x3 mb-3">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.8161486185204!2d-45.2394404883204!3d-22.846290535627052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ccc3693a7941e1%3A0x2548617aaa9c827a!2sR.%20Jos%C3%A9%20Ourives%2C%2076%2C%20Aparecida%20-%20SP%2C%2012570-000!5e0!3m2!1sen!2sbr!4v1767623655994!5m2!1sen!2sbr"
                                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <iframe class="w-100 py-1 "
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.8161486185204!2d-45.2394404883204!3d-22.846290535627052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ccc3693a7941e1%3A0x2548617aaa9c827a!2sR.%20Jos%C3%A9%20Ourives%2C%2076%2C%20Aparecida%20-%20SP%2C%2012570-000!5e0!3m2!1sen!2sbr!4v1767623943974!5m2!1sen!2sbr"
                                    width="1200" height="170" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <p class="small text-muted mt-2 mb-0">
                                    Próximo à Basílica de Aparecida, Aparecida/SP.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <div id="footer" class="mt-auto"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>



</html>