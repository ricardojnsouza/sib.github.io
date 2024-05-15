<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zentrum Akademie BR</title>

    <?php
    include_once "view/imports.php";
    ?>

<body class="backgroundCor">

    <content>

        <div class="py-2 tituloCor">
            <div class="container">
                <header>
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <a href="?link=quemsomos" class="d-block align-items-center text-dark text-decoration-none">
                            <!-- <img src="images/logo/logoZentrum.jpeg" width="60" height="60" alt="" class="shadow-lg rounded-5 pr-5"> -->
                            <img src="images/logo/zentrumLotusLogo.png" width="90" height="60" alt="" class="rounded-5 pr-5">
                            <!-- <span class="fs-4">Zentrum Akademie BR</span> -->
                        </a>

                        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                            <a class="me-3 py-2 text-dark text-decoration-none" href="?link=quemsomos">
                                <h5>Quem somos</h5>
                            </a>
                            <a class="me-3 py-2 text-dark text-decoration-none" href="?link=cursos">
                                <h5>Cursos</h5>
                            </a>
                            <a class="me-3 py-2 text-dark text-decoration-none" href="?link=atendimentos">
                                <h5>Atendimentos</h5>
                            </a>
                            <a class="me-3 py-2 text-dark text-decoration-none" href="https://www.instagram.com/zentrumakademiebr/" target="_blank" class="list-group-item bg-transparent list-group-item-action">
                                <img src="images/logo/instagram-48.png" alt="" width="30" height="30"></a>
                            <a class="me-3 py-2 text-dark text-decoration-none" href="<?php echo $textopadrao ?>" target="_blank" class="list-group-item bg-transparent list-group-item-action">
                                <img src="images/logo/whatsapp-48.png" alt="" width="30" height="30"></a>
                        </nav>
                    </div>

            </div>

            </header>
        </div>

        <div>
            <?php

            switch ($active) {
                case "quemsomos":
                    include_once "view/home.php";
                    break;

                case "cursos":
                    include_once "view/cursos.php";
                    break;

                case "atendimentos":
                    include_once "view/atendimentos.php";
                    break;

                case "construcao":
                    include_once "view/underconstruction.php";
                    break;

                default:
                    include_once "view/home.php";
            }
            ?>

        </div>

        <div class="py-2">
            <div class="container">
                <footer class="my-md-4 pt-md-4 border-top">
                    <div class="row">
                        <div class="col-12 col-md pt-4 d-block">
                            <small class="d-block mb-3 text-muted">&copy; 2022 Zentrum. Todos os direitos reservados.</small>
                        </div>
                        <div class="col-6 col-md text-center">
                            <h5>Nossos parceiros</h5>
                            <ul class="list-unstyled text-small">
                                <li class="mb-1"><a class="link-dark text-decoration-none" href="?link=construcao">Aurori</a></li>
                                <li class="mb-1"><a class="link-dark text-decoration-none" href="?link=construcao">Resort Ayurveda (Pipa-RN)</a></li>
                                <li class="mb-1"><a class="link-dark text-decoration-none" href="?link=construcao">Resort Ayurveda (Aldeia-PE)</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md text-center">
                            <h5>Loja</h5>
                            <ul class="list-unstyled text-small">
                                <li class="mb-1"><a class="link-dark text-decoration-none" href="?link=construcao">Aromaterapia</a></li>
                                <li class="mb-1"><a class="link-dark text-decoration-none" href="?link=construcao">Florais</a></li>
                                <li class="mb-1"><a class="link-dark text-decoration-none" href="?link=construcao">Cosméticos</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md text-center">
                            <h5>Serviços</h5>
                            <ul class="list-unstyled text-small">
                                <li class="mb-1"><a class="link-dark text-decoration-none" href="?link=construcao">Minha Conta</a></li>
                                <li class="mb-1"><a class="link-dark text-decoration-none" href="?link=construcao">Área do Aluno</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row border-top pb-4"></div>

                    <div class="card text-center">
                        <div class="card-body">
                            <p class="card-text"><b>Formas de Pagamento:</b></p>
                            <div class="rounded pt-1 card-body">
                                <img src="images/logo/mercadopago48.png" alt="" width="40" height="40">
                                <img src="images/logo/visa48.png" alt="" width="40" height="40">
                                <img src="images/logo/mastercard48.png" alt="" width="40" height="40">
                                <img src="images/logo/pix.png" alt="" width="90" height="30">
                            </div>
                        </div>
                    </div>
                </footer>

            </div>

        </div>

    </content>

</body>

</html>