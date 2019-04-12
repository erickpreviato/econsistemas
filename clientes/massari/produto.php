<?php
define('HOME', 'http://143.107.231.229/econ/clientes/massari');
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
                    <a href="<?php echo HOME; ?>" class="navbar-brand">
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


                    <?php
                    if (isset($_GET['show'])) {
                        ?>


                        <div class="album py-4 detalhe-produto">
                            <div class="container">
                                <h4 class="titulo">Título do produto selecionado</h4>
                                <p>Breve descrição do produto</p>

                                <div class="row">

                                    <div class="col-sm-6 col-md-3">
                                        <div class="card mb-4 shadow-sm">
                                                <img id="img1" src="<?php echo HOME;?>/img/img1.jpg" width="100%" data-zoom-image="<?php echo HOME;?>/img/img1.jpg" title="img1" alt="img1" />
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <img class="img-zoom" src="<?php echo HOME;?>/img/img2.jpg" width="100%" data-zoom-image="<?php echo HOME;?>/img/img2.jpg" title="img2" alt="img2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-9">
                                        <h3>Descrição</h3>
                                        <p></p><p>Funciona com 6 formas para 28 picolés.</p>
                                        <p>Produção de 450/550 picolés horas.</p>
                                        <p>Sistema de agitação com motor em cima! Maior vida útil e segurança!</p>
                                        <p>Compressor de baixa pressão de evaporação.</p>
                                        <p>Gás refrigerante R404A Dupont.</p>
                                        <p>Nas tensões 220/380V. 50/60 HZ- Baixo consumo de energia 3.2 K.W.</p>
                                        <p>Fabricado com tanque de fibra e chapa inox 304.</p><p></p>
                                        <br>
                                        <h3>Tabela de medida</h3>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Largura</th>
                                                    <th>Altura</th>
                                                    <th>Comprimento</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>790 mm</td>
                                                    <td>950 mm</td>
                                                    <td>700 mm</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Solicitar orçamento</a>
                                    </div>    
                                </div>
                            </div>
                        </div>



                        <?php
                    } else {
                        ?>

                        <div class="album py-4 lista-produtos">
                            <div class="container">
                                <h4 class="titulo">Produtos da Induscomel</h4>
                                <p>Selecione o produto abaixo para visualizar mais detalhes</p>

                                <div class="row">
                                    <div class="col-lg-2 col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                            <div class="card-body">
                                                <p class="card-text">Produto 1</p>
                                                <a href="<?php echo HOME; ?>/produto.php?show=1" class="btn btn-primary">Ver mais detalhes</a>
                                            </div>
                                            <img src="img/img1.jpg" class="card-img-bottom" />
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                            <a href="<?php echo HOME; ?>/produto.php">
                                                <div class="card-body">
                                                    <p class="card-text">METALÚRGICA CIAR<br />
                                                        Marretas e ferramentas manuais</p>
                                                </div>
                                                <img src="img/img2.jpg" class="card-img-bottom" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                            <a href="<?php echo HOME; ?>/produto.php">
                                                <div class="card-body">
                                                    <p class="card-text">COFERCAL<br />
                                                        Selaria e ferragens</p>
                                                </div>
                                                <img src="img/img3.jpg" class="card-img-bottom" />
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                            <a href="<?php echo HOME; ?>/produto.php">
                                                <div class="card-body">
                                                    <p class="card-text">INDUSCOMEL<br />
                                                        Correntes de elos soldados, vitória e antiderrapantes</p>
                                                </div>
                                                <img src="img/img1.jpg" class="card-img-bottom" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                            <a href="<?php echo HOME; ?>/produto.php">
                                                <div class="card-body">
                                                    <p class="card-text">METALÚRGICA CIAR<br />
                                                        Marretas e ferramentas manuais</p>
                                                </div>
                                                <img src="img/img2.jpg" class="card-img-bottom" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                            <a href="<?php echo HOME; ?>/produto.php">
                                                <div class="card-body">
                                                    <p class="card-text">COFERCAL<br />
                                                        Selaria e ferragens</p>
                                                </div>
                                                <img src="img/img3.jpg" class="card-img-bottom" />
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    ?>

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
        <script src="<?php echo HOME; ?>/js/jquery.elevatezoom.min.js"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

    </body>
</html>