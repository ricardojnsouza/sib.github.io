<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>

    <?php
    include_once "view/imports.php";
    ?>
</head>

<body>

    <header>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Nossos Atendimentos</h1>
            <p class="fs-4 text-muted">Agende agora mesmo sua consulta.</p>

        </div>
    </header>

    <div class="container py-3 shadow-lg">
        <main>
            <div class="row row-cols-1 row-cols-md-4 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 colorTitleCursos">
                            <h4 class="my-0 fw-normal">Ayurveda</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Fitoterapia</li>
                                <li class="list-group-item">Nutrição - Detox</li>
                                <li class="list-group-item">Massagens</li>
                                <li class="list-group-item">Hidroterapia</li>
                                <li class="list-group-item">Nasya - Basti</li>
                                <li class="list-group-item">Karnapurana</li>
                                <li class="list-group-item">Cone Hindu</li>
                                <li class="list-group-item">Rasayana</li>
                                <li class="list-group-item"><button type="button" id="ayurveda" class="btn btn-outline-Cursos" data-bs-toggle="modal" data-bs-target="#atendimentos">Agende sua consulta</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 colorTitleCursos">
                            <h4 class="my-0 fw-normal">Naturopatia</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Fitoterapia</li>
                                <li class="list-group-item">Homeopatia</li>
                                <li class="list-group-item">Aromaterapia</li>
                                <li class="list-group-item">Florais</li>
                                <li class="list-group-item">Auriculoterapia</li>
                                <li class="list-group-item">Ginecologia Natural</li>
                                <li class="list-group-item">Drenagem</li>
                                <li class="list-group-item">Nutrição - Detox</li>
                                <li class="list-group-item"><button type="button" id="naturopatia" class="btn btn-outline-Cursos" data-bs-toggle="modal" data-bs-target="#atendimentos">Agende sua consulta</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 colorTitleCursos">
                            <h4 class="my-0 fw-normal">Holística</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cromoterapia</li>
                                <li class="list-group-item">Cristaloterapia</li>
                                <li class="list-group-item">Reiki</li>
                                <li class="list-group-item">Chakraterapia</li>
                                <li class="list-group-item">Psicoterapia</li>
                                <li class="list-group-item">Hipnose</li>
                                <li class="list-group-item">Mêsa Radiônica</li>
                                <li class="list-group-item">Anamnese da Alma</li>
                                <li class="list-group-item"><button type="button" id="holistica" class="btn btn-outline-Cursos" data-bs-toggle="modal" data-bs-target="#atendimentos">Agende sua consulta</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="col"></div> -->
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 colorTitleCursos">
                            <h4 class="my-0 fw-normal">Doula</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Assistência Geral</li>
                                <li class="list-group-item">Pré e Pós Natal</li>
                                <li class="list-group-item">Educação Pré-Natal</li>
                                <li class="list-group-item">Massagem</li>
                                <li class="list-group-item">Grupos</li>
                                <li class="list-group-item">Práticas</li>
                                <li class="list-group-item">Psicoterapia</li>
                                <li class="list-group-item">Consultas</li>
                                <li class="list-group-item"><button type="button" id="doula" class="btn btn-outline-Cursos" data-bs-toggle="modal" data-bs-target="#atendimentos">Agende sua consulta</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

<script type='text/javascript'>
    $("button").on("click", function() {
        $("option[data-atendimento]").css("display", "none");
        $("option[data-atendimento='" + this.id + "']").css("display", "inherit");
    });

    // document.querySelectorAll("button").forEach(function(button) {
    //     button.addEventListener("click", function(event) {
    //         const el = event.target || event.srcElement;
    //         const id = el.id;
    //         console.log(id);
    //     });
    // })
</script>

<div class="modal fade" id="atendimentos" tabindex="-1" aria-labelledby="atendimentos" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block text-center">
                <h3>Agende sua consulta</h3>
            </div>
            <div class="modal-body">
                <div class="content-fluid">
                    <div>
                        <div class="card-body row g-3">
                            <div class="col-md-4">
                                <label for="validationNome" class="form-label">Nome e Sobrenome</label>
                                <input type="text" class="form-control" id="validationNome" placeholder="Nome e Sobrenome">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCelular" class="form-label">Celular</label>
                                <input type="text" name="validationCelular" maxlength="15" class="form-control" id="validationCelular" placeholder="(99)9 9999-9999">
                            </div>
                            <div class="col-md-4">
                                <label for="validationEmail" class="form-label">E-mail</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" id="validationEmail" aria-describedby="inputGroupPrepend">
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <label for="atendimento" class="form-label">Tratamentos</label>
                                <select class="form-select" id="atendimento">
                                    <option selected disabled> </option>

                                    <option disabled class="option-background" data-atendimento="ayurveda">-- Ayurveda --</option>
                                    <option value="" data-atendimento="ayurveda">Fitoterapia</option>
                                    <option value="" data-atendimento="ayurveda">Nutrição - Detox</option>
                                    <option value="" data-atendimento="ayurveda">Massagens</option>
                                    <option value="" data-atendimento="ayurveda">Hidroterapia</option>
                                    <option value="" data-atendimento="ayurveda">Nasya - Basti</option>
                                    <option value="" data-atendimento="ayurveda">Karnapurana</option>
                                    <option value="" data-atendimento="ayurveda">Cone Hindu</option>
                                    <option value="" data-atendimento="ayurveda">Rasayana</option>""

                                    <option disabled class="option-background" data-atendimento="naturopatia">-- Naturopatia --</option>
                                    <option value="" data-atendimento="naturopatia">Fitoterapia</option>
                                    <option value="" data-atendimento="naturopatia">Homeopatia</option>
                                    <option value="" data-atendimento="naturopatia">Aromaterapia</option>
                                    <option value="" data-atendimento="naturopatia">Florais</option>
                                    <option value="" data-atendimento="naturopatia">Auriculoterapia</option>
                                    <option value="" data-atendimento="naturopatia">Ginecologia Natural</option>
                                    <option value="" data-atendimento="naturopatia">Drenagem</option>
                                    <option value="" data-atendimento="naturopatia">Nutrição - Detox</option>

                                    <option disabled class="option-background" data-atendimento="holistica">-- Holística --</option>
                                    <option value="" data-atendimento="holistica">Cromoterapia</option>
                                    <option value="" data-atendimento="holistica">Cristaloterapia</option>
                                    <option value="" data-atendimento="holistica">Reiki</option>
                                    <option value="" data-atendimento="holistica">Chakraterapia</option>
                                    <option value="" data-atendimento="holistica">Psicoterapia</option>
                                    <option value="" data-atendimento="holistica">Hipnose</option>
                                    <option value="" data-atendimento="holistica">Mêsa Radiônica</option>
                                    <option value="" data-atendimento="holistica">Anamnese da Alma</option>

                                    <option disabled class="option-background" data-atendimento="doula">-- Doula --</option>
                                    <option value="" data-atendimento="doula">Assistência Geral</option>
                                    <option value="" data-atendimento="doula">Pré e Pós Natal</option>
                                    <option value="" data-atendimento="doula">Educação Pré-Natal</option>
                                    <option value="" data-atendimento="doula">Massagem</option>
                                    <option value="" data-atendimento="doula">Grupos</option>
                                    <option value="" data-atendimento="doula">Práticas</option>
                                    <option value="" data-atendimento="doula">Psicoterapia</option>
                                    <option value="" data-atendimento="doula">Consultas</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="validationData" class="form-label">Data</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend"><img src="images/logo/plusbutton50.png" alt="" width="20" height="20"></span>
                                    <input type="date" class="form-control" id="validationEmail" aria-describedby="inputGroupPrepend">
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div></div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-outline-Cursos" role="button" href="http://api.whatsapp.com/send?phone=5581996163108&text=Olá gostaria de saber informações sobre os cursos de *Terapeuta Integrativo Ervas Medicinais*" target="_blank">Pré-Agendar</a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>