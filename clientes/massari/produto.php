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
                                <h4 class="titulo">Corrente Antiderrapante</h4>
                                <p>Correntes antiderrapante para pneus de veículos de vários tamanhos</p>

                                <div class="row">

                                    <div class="col-sm-6 col-md-3">
                                        <div class="card mb-4 shadow-sm">
                                                <img id="img1" src="<?php echo HOME;?>/img/prod1.jpg" width="100%" data-zoom-image="<?php echo HOME;?>/img/prod1.jpg" title="prod1" alt="prod1" />
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <img class="img-zoom" src="<?php echo HOME;?>/img/prod1-min.jpg" width="100%" data-zoom-image="<?php echo HOME;?>/img/prod1-min.jpg" title="prod1-min" alt="prod1-min">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-9">
                                        <h3>Descrição</h3>
                                        <p></p><p>Fabricadas em aço BTC (Baixo Teor de Carbono).</p>
                                        <p>Variedade de tamanhos.</p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <p></p>
                                        <label class="text-danger">OBS: 15% DE IPI (O CLIENTE DEVE ESCOLHER O TRANSPORTE)</label>
                                        <br>
                                        <h3>Tabela de medida</h3>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Bitola do Pneu</th>
                                                    <th>Código</th>
                                                    <th>Veículos (entregue em pares)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>560X15 RS</td>
                                                    <td>80012</td>
                                                    <td>VW. 1300 - 1500</td>
                                                </tr>
                                                <tr>
                                                    <td>590X14 RS</td>
                                                    <td>80020</td>
                                                    <td>VW. 1600-BRASILIA-OP</td>
                                                </tr>
                                                <tr>
                                                    <td>145X13 RS</td>
                                                    <td>80039</td>
                                                    <td>FIAT.147- UNO -PICK UP - PANORAMA-DOG</td>
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
                                                <p class="card-text">Correntes Antiderrapantes</p>
                                                <a href="<?php echo HOME; ?>/produto.php?show=1" class="btn btn-primary">Ver mais detalhes</a>
                                            </div>
                                            <img src="img/prod1.jpg" class="card-img-bottom" />
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <div class="card mb-4 shadow-sm">
                                            <a href="<?php echo HOME; ?>/produto.php">
                                                <div class="card-body">
                                                    <p class="card-text">METALÚRGICA CIAR<br />
                                                        Marretas e ferramentas manuais</p>
                                                </div>
                                                <img src="img/prod2.jpg" class="card-img-bottom" />
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
                                                <img src="img/prod3.jpg" class="card-img-bottom" />
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
                                                <img src="img/prod4.jpg" class="card-img-bottom" />
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
                                                <img src="img/prod5.jpg" class="card-img-bottom" />
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
                                                <img src="img/prod6.jpg" class="card-img-bottom" />
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