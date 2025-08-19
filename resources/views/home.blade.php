<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Rodagem - Soluções Inteligentes para Pneus</title>
    <link rel="icon" href="{{ asset('img/logo_empresa.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        /* CORES PERSONALIZADAS */
        :root {
            --cor-fundo-escuro: #121212;
            --cor-fundo-secao: #1c1c1e;
            --cor-primaria: #0d6efd;
            --cor-texto: #f8f9fa;
            --cor-texto-muted: #adb5bd;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--cor-fundo-escuro);
            color: var(--cor-texto);
            padding-top: 56px;
        }

        .carousel-item-custom {
            height: 60vh;
            /* Altura relativa à tela, fica melhor em vários dispositivos */
            min-height: 450px;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }

        .carousel-item-custom::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .carousel-item-custom .carousel-caption {
            z-index: 2;
            top: 50%;
            transform: translateY(-50%);
            bottom: auto;
        }

        /* Ajuste de cor para seções específicas */
        #quem-somos {
            background-color: var(--cor-fundo-escuro);
        }

        #contato {
            background-color: var(--cor-fundo-secao);
        }

        .lead-muted {
            color: var(--cor-texto-muted);
        }

        .card {
            background-color: var(--cor-fundo-secao) !important;
            border: 1px solid #333 !important;
        }

        .meu-elemento {
            color: white;
            /* Correto */
            background-color: blue;
        }

        .minha-div {
            background-image: url('caminho/para/imagem.jpg');
            background-size: cover;
            height: 300px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo_empresa.png') }}" alt="Logo da Gestão de Rodagem" width="48" height="34"
                    class="d-inline-block align-text-top me-2">
                Gestão de Rodagem
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#quem-somos">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section id="topo" class="py-0">
            <div id="carouselHome" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active carousel-item-custom"
                        style="background-image: url('{{ asset('img/imagem1.png') }}')">
                        <div class="carousel-caption d-none d-md-block text-start">
                            <h1 class="display-4 fw-bold">Foco em Tecnologia e Dados</h1>
                            <p class="lead">Uma imagem que destaca a inteligência por trás do seu sistema, mostrando
                                dados em tempo real sobre um pneu. Perfeita para o slide de "O Futuro da Gestão".</p>
                        </div>
                    </div>
                    <div class="carousel-item carousel-item-custom"
                        style="background-image: url('{{ asset('img/imagem2.png') }}')">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="display-4 fw-bold">Organização e Grande Escala</h1>
                            <p class="lead">
                                Organização e Grande Escala
                                Uma visão aérea de uma frota de caminhões perfeitamente alinhados ao pôr do sol. Esta
                                imagem transmite profissionalismo, organização e a capacidade de gerenciar grandes
                                operações.</p>
                        </div>
                    </div>
                    <div class="carousel-item carousel-item-custom"
                        style="background-image: url('{{ asset('img/imagem3.png') }}')">
                        <div class="carousel-caption d-none d-md-block text-end">
                            <h1 class="display-4 fw-bold">Detalhe, Segurança e Durabilidade</h1>
                            <p class="lead">Uma foto macro da banda de rodagem de um pneu novo, com uma iluminação
                                dramática. Esta imagem foca na qualidade, textura e segurança que um pneu novo oferece,
                                reforçando a importância da boa manutenção.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </section>

        <section id="quem-somos" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-4">Inteligência Pura para uma Gestão de Pneus Eficiente.</h2>
                        <p class="lead lead-muted mb-5">
                            A Gestão de Rodagem nasceu com um propósito claro: democratizar o acesso à tecnologia de
                            ponta para o controle de pneus. Em um mercado onde muitas soluções exigem investimentos
                            altos em equipamentos específicos, nós seguimos um caminho diferente, focando no que
                            realmente gera valor: a inteligência do software.

                            Somos uma empresa de tecnologia pura. Nossa equipe de especialistas se dedica dia e noite a
                            aprimorar uma única coisa: nossa plataforma de software. Isso nos permite ser ágeis,
                            inovadores e entregar um sistema sempre atualizado com as melhores práticas do setor. Para
                            nossos clientes, isso significa uma experiência sem atritos, onde a gestão de pneus se torna
                            uma tarefa simples, acessível e totalmente digital.

                            Com a Gestão de Rodagem, você não fica preso a nenhum hardware. Você ganha um parceiro
                            estratégico focado em fornecer os dados e as análises que sua frota precisa para rodar mais,
                            gastar menos e operar com total segurança.
                        </p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4 mb-4">
                        <div class="text-center p-3">
                            <i class="bi bi-graph-up-arrow h1 text-primary"></i>
                            <h4 class="my-3">Eficiência e Economia</h4>
                            <p class="lead-muted">Reduza custos operacionais com um monitoramento preciso do desgaste e
                                da vida útil dos pneus.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="text-center p-3">
                            <i class="bi bi-shield-check h1 text-primary"></i>
                            <h4 class="my-3">Segurança Aumentada</h4>
                            <p class="lead-muted">Aumente a segurança da sua frota com alertas de manutenção e controle
                                de calibragem.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="text-center p-3">
                            <i class="bi bi-card-checklist h1 text-primary"></i>
                            <h4 class="my-3">Controle Total</h4>
                            <p class="lead-muted">Tenha acesso a relatórios completos e tome decisões baseadas em dados
                                confiáveis.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="contato" class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="display-5 fw-bold mb-4">Fale Conosco</h2>
                        <p class="lead lead-muted mb-5">Entre em contato para saber mais sobre nossas soluções de gestão
                            de pneus.</p>
                    </div>
                    <div class="col-lg-7 col-md-9">
                        <div class="card shadow-sm">
                            <div class="card-body p-4 p-md-5">
                                <ul class="list-unstyled text-start">
                                    <li class="d-flex align-items-center mb-4">
                                        <i class="bi bi-person-fill h4 me-3 text-primary"></i>
                                        <div>
                                            <strong class="d-block">Representante</strong>
                                            <span class="lead-muted">Juliano Cardoso de Souza</span>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mb-4">
                                        <i class="bi bi-whatsapp h4 me-3 text-success"></i>
                                        <div>
                                            <strong class="d-block">WhatsApp</strong>
                                            <span class="lead-muted">(48) 99683-0416</span>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mb-4">
                                        <i class="bi bi-instagram h4 me-3" style="color: #E4405F;"></i>
                                        <div>
                                            <strong class="d-block">Instagram</strong>
                                            <a href="https://instagram.com/Gestao_Rodagem" target="_blank"
                                                class="text-decoration-none">@gestao_rodagem</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mb-4">
                                        <i class="bi bi-envelope-fill h4 me-3 text-secondary"></i>
                                        <div>
                                            <strong class="d-block">E-mail</strong>
                                            <a href="mailto:gestaorodagem@gmail.com"
                                                class="text-decoration-none">gestaorodagem@gmail.com</a>
                                        </div>
                                    </li>
                                </ul>

                                <div class="d-grid pt-3">
                                    <a href="https://wa.me/5548996830416" target="_blank"
                                        class="btn btn-success btn-lg">
                                        <i class="bi bi-whatsapp me-2"></i>Falar no WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Gestão de Rodagem. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>