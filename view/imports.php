<?php
$active = null;
$textopadrao = "http://api.whatsapp.com/send?phone=5581996163108&text=Olá gostaria de saber informações sobre os cursos da *Zentrum Akademie BR*";
$textopromo = "http://api.whatsapp.com/send?phone=5581996163108&text=Olá gostaria de saber informações sobre os preços promocionais dos cursos da *Zentrum Akademie BR*";

$post   = array_change_key_case($_POST ?? [], CASE_LOWER);
$get    = array_change_key_case($_GET  ?? [], CASE_LOWER);

$active = $get['link'] ?? "";

?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- Custom styles for this template -->
<link href="assets/css/stylescustom.css" rel="stylesheet">

<!-- jQuery (online) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JS para Modal de Promoções -->

<script type="text/javascript">
    $(window).on('load', function() {
        $('#promocoes').modal('show');
    });
</script>

<!-- Modal de Promoções -->

<div class="modal fade" id="promocoes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="text-align: center;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-block">
                <h3>Promoções da Zentrum</h3>
            </div>
            <div class="modal-body">
                <h5>Aproveite nossas promoções nos cursos.<br>
                    Visite nossa página do <b>Instagram</b> ou converse conosco atráves do <b>Whatsapp</b> e consulte os preços!
                </h5>
            </div>
            <div class="modal-footer d-block">
                <a class="me-3 py-2 text-dark text-decoration-none" href="https://www.instagram.com/zentrumakademiebr/" target="_blank" class="list-group-item bg-transparent list-group-item-action">
                    <img src="images/logo/instagram-48.png" alt="" width="40" height="40"></a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="<?php echo $textopromo ?>" target="_blank" class="list-group-item bg-transparent list-group-item-action">
                    <img src="images/logo/whatsapp-48.png" alt="" width="40" height="40"></a>
                <button type="button" class="btn btn-outline-Matricula" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Ajuste de Mascara de Célular -->
<script type="text/javascript">
    function mascara(o, f) {
        v_obj = o
        v_fun = f
        setTimeout("execmascara()", 1)
    }

    function execmascara() {
        v_obj.value = v_fun(v_obj.value)
    }

    function mtel(v) {
        v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
        v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }

    function id(el) {
        return document.getElementById(el);
    }
    window.onload = function() {
        id('validationCelular').onkeyup = function() {
            mascara(this, mtel);
        }
    }
</script>