<?php
define('HOME', 'http://143.107.231.227/econ/clientes/massari');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Massari São Carlos">
        <meta name="author" content="EC.on Sistemas">
        <title>Massari São Carlos</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo HOME; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo HOME; ?>/css/all.min.css" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="<?php echo HOME; ?>/css/massari.css" rel="stylesheet">
    </head>
    <body>

        <header>



            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                <div class="container bg-white">
                    <a href="<?php echo HOME?>" class="navbar-brand">
                        <img src="<?php echo HOME; ?>/img/logo.jpg" class="logotipo" />
                        <strong>MASSARI</strong>
                    </a>
                    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarResponsive" style="">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="<?php echo HOME?>/#quemsomos">Quem somos</a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#features">Empresas</a>
                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="<?php echo HOME?>/produtos.php">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="<?php echo HOME?>/#contact">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


        </header>

        <div class="container">
            <div class="row">

                <main role="main">

                    <div class="mosaico">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="produto">
                                    <a href="#"><div class="vermelho"></div></a>
                                    <img src="img/produtos/01.jpg" />
                                </div>
                                <div class="produto">
                                    <div></div>
                                    <img src="img/produtos/02.jpg" />
                                </div>
                                <div class="produto">
                                    <div class="vermelho"></div>
                                    <img src="img/produtos/03.jpg" />
                                </div>
                                <div class="produto">
                                    <div></div>
                                    <img src="img/produtos/04.jpg" />
                                </div>
                                <div class="produto">
                                    <div class="vermelho"></div>
                                    <img src="img/produtos/03.jpg" />
                                </div>
                                <div class="produto">
                                    <div></div>
                                    <img src="img/produtos/04.jpg" />
                                </div>
                                <div class="produto">
                                    <div></div>
                                    <img src="img/produtos/02.jpg" />
                                </div>
                                <div class="produto">
                                    <div class="vermelho"></div>
                                    <img src="img/produtos/03.jpg" />
                                </div>
                                <div class="produto">
                                    <div></div>
                                    <img src="img/produtos/04.jpg" />
                                </div>
                                <div class="produto">
                                    <div class="vermelho"></div>
                                    <img src="img/produtos/01.jpg" />
                                </div>
                                <div class="produto">
                                    <div></div>
                                    <img src="img/produtos/04.jpg" />
                                </div>
                                <div class="produto">
                                    <div class="vermelho"></div>
                                    <img src="img/produtos/01.jpg" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/banner1.jpg" class="d-block w-100" />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Primeiro slide</h5>
                                        <p>Breve descrição sobre a notícia ou evento em destaque.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/banner2.jpg" class="d-block w-100" />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Segundo slide</h5>
                                        <p>Breve descrição sobre a notícia ou evento em destaque.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/banner3.jpg" class="d-block w-100" />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Terceiro slide</h5>
                                        <p>Breve descrição sobre a notícia ou evento em destaque.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>-->


                    <section class="quemsomos py-4">
                        <div class="container">
                            <h4 class="titulo">Quem somos</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="img/quemsomos.jpg" class="img-fluid card" /> 
                                    <p class="text-muted">Com mais de 30 anos no mercado, a <b>Induscomel Indústria e Comércio de Correntes Massari Ltda.</b> é sucessora da Indústria Colmeia S/A., pioneira na fabricação de correntes, artefatos e antiderrapantes para pneus.</p>
                                    <p class="text-muted">Localizada em São Carlos - SP, possui um parque fabril com área de 3.500m². A constância na utilização de metéria-prima certificada faz de seus produtos e soluções sinônimos de qualidade e excelência na história da indústria nacional.</p>
                                    <p class="text-muted">Atualmente, a Induscomel é assiciada à <b>Indústria Metalúrgica Ciar Ltda.</b>, forjaria fundada em 1966 e especialista na confecção de ferramentas manuais. Seus produtos também são comercializados e distribuídos por <b>Cofercal Comercial de Ferragens São Carlos Ltda.</b>, empresa do mesmo Grupo que oferece, além destes, a linha de artigos para montaria, campo e pet-shop.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="album py-4 bg-light">
                        <div class="container">
                            <h4 class="titulo">Empresas</h4>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <!--<img src="img/img1.jpg" class="card-img-top" />-->
                                        <div class="card-body">
                                            <p class="card-text">
                                                INDUSCOMEL<br />
                                                Correntes de elos soldados, vitória e antiderrapantes<br />
                                                Rua Dona Ana Prado, nº 315, Vila Prado | São Carlos - SP<br />
                                                PABX: (16) 3372-2214 ou (16) 3372-9369<br />
                                                Televendas: 0800-552204
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <!--<img src="img/img2.jpg" class="card-img-top" />-->
                                        <div class="card-body">
                                            <p class="card-text">
                                                METALÚRGICA CIAR<br />
                                                Marretas e ferramentas manuais<br />
                                                Av. Giacomo Nutti, nº 680, CEAT | São Carlos - SP<br />
                                                Fone: (16) 3375-1077 ou (16) 3375-1653
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <!--<img src="img/img3.jpg" class="card-img-top" />-->
                                        <div class="card-body">
                                            <p class="card-text">
                                                COFERCAL<br />
                                                Selaria e ferragens<br />
                                                Rua Dona Ana Prado, nº 389, Vila Prado | São Carlos - SP<br />
                                                PABX: (16) 3372-2214 ou (16) 3372-1127<br />
                                                Televendas: 0800-552204
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <section class="quemsomos py-4">
                        <div class="container">
                            <h4 class="titulo">Contato</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="needs-validation" novalidate="" method="POST" action="<?php echo HOME;?>">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="firstName">Nome/Razão Social</label>
                                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="required">
                                                <div class="invalid-feedback">
                                                    Nome/Razão Social obrigatório.
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="email@examplo.com" required="required">
                                                <div class="invalid-feedback">
                                                    Digite um e-mail válido.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="country">Município</label>
                                                <input type="text" class="form-control" id="municipio" placeholder="" required="required">
                                                <div class="invalid-feedback">
                                                    Município obrigatório.
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="state">Estado</label>
                                                <select class="custom-select d-block w-100" id="state" required="required">
                                                    <option>São Paulo</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Estado obrigatório.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="telefone">Telefone</label>
                                                <input type="text" class="form-control" id="telefone" placeholder="">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="celular">Celular</label>
                                                <input type="text" class="form-control" id="celular" placeholder="">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="mensagem">Mensagem</label>
                                            <textarea class="form-control" id="mensagem" rows="4" required="required"></textarea>
                                            <div class="invalid-feedback">
                                                Mensagem obrigatória.
                                            </div>
                                        </div>

                                        <hr class="mb-4">
                                        
                                        <button class="btn btn-primary" type="submit">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>

                    <iframe src="https://www.google.com/maps/d/embed?mid=1DRyWvzyDa0OJe6ZnRw7KX1dUC7pM-8LF" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                </main>

                <footer class="text-muted">
                    <div class="container">
                        <p class="float-right">
                            Desenvolvido por <a href="http://econsistemas.com.br/" target="_blank"><img src="img/logo-econ.png" width="80" /></a>
                        </p>
                        <p>&copy; 2019 - Massari São Carlos</p>
                    </div>
                </footer>

            </div>

        </div>
        <script src="<?php echo HOME; ?>/js/jquery.min.js"></script>
        <script src="<?php echo HOME; ?>/js/massari.js"></script>
        <script src="<?php echo HOME; ?>/js/bootstrap.bundle.min.js"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

    </body>
</html>