<?php
if (isset($_POST['email'])) {
    $arquivo = fopen('emails.txt', 'a');
    if ($arquivo == false) {
        die('Não foi possível salvar seu e-mail :(');
    }
    fwrite($arquivo, $_POST['email']."\r\n");
    fclose($arquivo);
    die('Seu e-mail foi cadastrado!');
}
?><!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="ico.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            html, body{
                height: 100%;
            }
            .coluna-email {
                background-color: #c5ab8b;
                color: white;
            }
            .coluna-email .col {
                padding-left: 50px;
                padding-right: 50px;
            }
            .coluna-fotos {
                background-image: url('wallpaper2.jpg');
                opacity: 0.5;
            }
            h2 {
                padding-top: 30px;
                padding-bottom: 20px;
                font-weight: normal;
            }
            h4 {
                padding-bottom: 30px;
                font-weight: normal;
            }
            .titulo {
                font-size: 50px;
                text-align: center;
            }
        </style>
        <title>4 Estações - Viagens e Turismo</title>

        <script src="jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#formulario').on('submit', function () {
                    $(".modal").modal("show");
                    $.post("http://localhost:8088/econsistemas/clientes/4estacoes/index.php", {email: $('#email').val()}).done(function (data) {
                        $(".modal-body").html(data);
                        $('#email').val('');
                    });
                    return false;
                });
            });
        </script>
    </head>
    <body>
        <div class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Obrigado!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Salvando...</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-md coluna-email h-100">
                    <div class="row align-items-center justify-content-center h-100">
                        <div class="col align-middle">
                            <p class="titulo">
                                4 Estações - <small>Viagens e Turismo</small>
                            </p>
                            <br /><br />
                            <h1 class="display-4"><b>Quase lá!</b></h1>
                            <h2>Estamos trabalhando para construir nosso site para você.</h2>
                            <h4>Digite seu e-mail abaixo para ser avisado quando estivermos prontos.</h4>

                            <form id="formulario" method="POST" class="form-horizontal">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" required="required" id="email" name="email" placeholder="Digite seu e-mail" aria-label="Digite seu e-mail" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-warning" type="submit" id="button-addon2">Cadastrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md coluna-fotos h-100">
                    <div class="row align-items-center justify-content-center h-100">
                        <div class="col align-middle">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>