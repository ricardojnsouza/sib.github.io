<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes</title>

</head>

<body>


    <script>
        async function jsonTeste() {
            const response = await fetch("../assets/json/tratamentos.json")
            const json = await response.json();
            console.log(json);
            console.log(json.Ayurveda[0]);
            document.getElementById("bigoda").innerHTML = json.Ayurveda[0];
        };

        jsonTeste().catch(error => {
            console.log('erro!');
            console.error(error);
        });



        // fetch("../assets/json/tratamentos.json").then(response => {
        //     console.log(response);
        //     return response.json();
        // }).then(response => {
        //     console.log(response);
        // }).catch(error => {
        //     console.log('Erro!')
        //     console.error(error);
        // });
    </script>

    <h1>Teste de Array</h1>
    <span id='bigoda'></span>



</body>

</html>