<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php include "./style.php"; ?>

<head>
    <!-- PARTE SUPERIOR -->
    <div class=superior>
        <h1 class=titulo>Formulário de Celulares</h1>
        <div class="logo"><img src="./Imagens/logo.png" alt="Logo Sampaio"></div>
        <button onClick=Teste() class="button buttontopo">Selecionar Formulário</button>
    </div>


</head>

<body>
    <!-- PARTE DO FILTRO -->
    <?php
    $options = [0 => "AR", 1 => "SP", 2 => "RS", 3 => "PR"];
    ?>
    <button id="bt-filtros" class="button buttonfiltros">Meses</button>
    
    <div class="filtro" style="display: flex; position:absolute; z-index:1;">
        <menu class="menu" style="display:flex">
        <button onClick="Filtragem()" id="AplicarF" class="button buttonfiltros">Aplicar</button>
        <div class="abaf" style="flex-grow: 1; background-color: whitesmoke"></div>
        <div>
            <label class="Unidade" for="unidade">Unidade:</label>
            <br>
            <div class="unidade">
                <button class="button buttonteste" id=teste style="background-color: white; border: red solid 2px; color:black;"></button>
                <div class="Menu" style="display: none;">
                    <?php
                    foreach ($options as $key => $reg) {
                        echo '<button  onClick="Filtro(id, ' . "'" . $reg . "'" . ')" class="button buttonteste" id=teste' . $key . '>' . $reg . '</button><br>';
                    }

                    ?>
                </div>
            </div>
        </div>
        </menu>
    </div>

    <script>
        $(".filtro").hide()
        $("#AplicarF").hide()
        $(".Menu").mouseleave(function() {
            $(".Menu").show()
            $("body").mousedown(function() {
                $(".Menu").hide()

            });
        })
        $("#bt-filtros").click(function(r) {
            $(".abaf").toggle(200)
            $(".filtro").toggle(200)
            $("#AplicarF").toggle(250)
        })

        $("#teste").click(function(r) {
            $(".Menu").toggle(250)
        })
    </script>
    <!-- PARTE DO MEIO -->
    <div class=lista>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">ID</div>
                <div class="col col-2">Email</div>
                <div class="col col-3">NR Linha</div>
                <div class="col col-4">Modelo</div>
                <div class="col col-5">Série</div>
                <div class="col col-6">NR Modelo</div>
                <div class="col col-7">IMEI1</div>
                <div class="col col-8">IMEI2</div>
                <div class="col col-9">Carregador</div>
                <div class="col col-10">Capa de Celular</div>
                <div class="col col-11">Capa Protetora</div>
                <div class="col col-12">Operadora</div>
                <div class="col col-13">Observação</div>
                <div class="col col-14">Media Access</div>
                <div class="col col-15">Unidade</div>
                <div class="col col-16">Status</div>
                <div class="col col-17">Data</div>
                <div class="col col-18">Nome</div>
            </li>
            <div class=listasTabela>
                <div id="tbody" class=separacao>
                </div>
            </div>
    </div>
    <div class=meio id=menudomeio>
        <!-- OPÇÕES DE CADASTRO-->
        <div class=cadastrar id=popcadastro style=display:none>

            <label for="ID">ID:</label>
            <input type="text" data-ls-module="charCounter" maxlength="20" id="ID" name="cell_id">

            <label for="email">Email:</label>
            <input type="email" data-ls-module="charCounter" maxlength="200" id="email" name="user_email">

            <label for="linha">NR Linha:</label>
            <input type="text" data-ls-module="charCounter" maxlength="100" id="linha" name="cell_linha">

            <label for="modelo">Modelo:</label>
            <input type="text" data-ls-module="charCounter" maxlength="100" id="modelo" name="cell_modelo">

            <label for="serie">Série:</label>
            <input type="text" data-ls-module="charCounter" maxlength="100" id="serie" name="cell_serie">

            <label for="NRmodelo">NR Modelo:</label>
            <input type="text" data-ls-module="charCounter" maxlength="100" id="Nrmodelo" name="cell_NRModelo">

            <label for="IMEI1">IMEI1:</label>
            <input type="text" data-ls-module="charCounter" maxlength="100" id="IMEI1" name="cell_IMEI1">

            <label for="IMEI2">IMEI2:</label>
            <input type="text" data-ls-module="charCounter" maxlength="100" id="IMEI2" name="cell_IMEI2">

            <label class="itens">Itens:</label>
            <br>
            <input type="checkbox" id="carregador" value="carregador" name="cell_carregador" checked><label class="light" for="carregador">Carregador</label><br>
            <input type="checkbox" id="capac" value="capac" name="cell_capac" checked><label class="light" for="capac">Capa de Celular</label><br>
            <input type="checkbox" id="capap" value="capap" name="cell_capap" checked><label class="light" for="capap">Capa Protetora</label><br>
            <br>

            <label for="operadora">Operadora:</label>
            <input type="text" data-ls-module="charCounter" maxlength="100" id="operadora" name="cell_operadora">

            <label for="observacao">Observação:</label>
            <input type="text" data-ls-module="charCounter" maxlength="255" id="observacao" name="cell_obs">

            <label for="mac">MAC:</label>
            <input type="text" data-ls-module="charCounter" maxlength="100" id="mac" name="cell_mac">

            <label for="unidade">Unidade:</label>
            <select id="unidade" name="unidade">
                <option value="AR">Araquari/SC</option>
                <option value="RS">Porto Alegre/RS</option>
                <option value="PR">Curitiba/PR</option>
                <option value="SP">São Paulo/SP</option>
            </select>

            <label for="status">Status:</label>
            <input type="text" data-ls-module="charCounter" maxlength="2" id="status" name="cell_status">

            <label for="data">Data:</label>
            <input type="date" id="data" name="cell_data">

            <label for="hostname">Nome do Host:</label>
            <input type="text" data-ls-module="charCounter" maxlength="100" id="hostname" name="cell_host">

            <button onClick=FinalizarCadastro() class="button buttonFinalizarCadastro">Finalizar Cadastro</button>

        </div>
        <!-- BOTÕES -->
        <button onClick=Cadastro() id="cadastro" class="button buttoncadastro">Cadastrar</button>
        <button onClick=Apagar() id="apagador" class="button buttonapagar">Apagar</button>
    </div>

</body>

<script>
    Ler()

    var Lista = []
    contIds = [];

    function Filtragem() {
        $.ajax({
            url: "./function.php",
            type: "post",
            async: true,
            data: {
                acao: "lerFormulario",
                filtros: {
                    teste: Lista
                }
            },
            dataType: "json",
            success: function(result) {
                contIds = [];
                let lbd = result.historico;
                $(".dados").remove();
                $(":checkbox").remove("display", "none");
                Listar(lbd)

            },
            error: function(data) {
                console.log(data);
                alert('error handling here');
            }
        });
    }

    function onlyNotUnique(value, array) {
        return array.indexOf(value) != value;
    }

    function Filtro(id, valor) {
        if (Lista.includes(valor)) {
            $("#" + id).css("background-color", "red");

            Lista = Lista.filter(function(r) {
                return r != valor;
            })
        } else {
            $("#" + id).css("background-color", "blue");
            Lista.push(valor);
        }

        document.getElementById("teste").innerHTML = Lista.join(";");
    }

    function Teste() {
        location.reload()
    }

    function Excluir() {
        //COLOCAR ID EM CADA UM DOS DADOS
        if (document.getElementById("apagador").innerHTML === "Apagar") {
            for (let i = 0; i < contID; i++) {
                contador = i
                dados = document.getElementById(`${contIds[contador]}`).checked;
                if (dados) {
                    $.ajax({
                        url: "./function.php",
                        type: "post",
                        async: true,
                        data: {
                            acao: "apagarHistorico",
                            filtros: {
                                lista: contIds
                            }
                        },
                        dataType: "json",
                        success: function(result) {
                            console.log(result);
                            Teste()
                        },
                        error: function(data) {
                            console.log(data);
                            alert('error handling here');
                        }
                    });
                }
            }
        }
    }

    function Apagar() {
        if (document.getElementById("apagador").innerHTML == "Apagar") {
            document.getElementById("apagador").innerHTML = "Excluir";
        } else {
            document.getElementById("apagador").innerHTML = "Apagar"
        }
        Excluir()
    }

    function Cadastro() {
        var cadastro = document.getElementById("popcadastro");
        if (cadastro.style.display === "none") {
            cadastro.style.display = "inline";
        } else {
            cadastro.style.display = "none";
        }
    }

    function FinalizarCadastro() {

        let formulario = []
        var cadastro = document.getElementById("popcadastro");
        if (cadastro.style.display === "none") {
            cadastro.style.display = "inline";
        } else {
            cadastro.style.display = "none";
        }

        formulario = [
            ID = document.getElementById("ID").value,
            Email = document.getElementById("email").value,
            Linha = document.getElementById("linha").value,
            modelo = document.getElementById("modelo").value,
            Serie = document.getElementById("serie").value,
            Nrmodelo = document.getElementById("Nrmodelo").value,
            IMEI1 = document.getElementById("IMEI1").value,
            IMEI2 = document.getElementById("IMEI2").value,
            carregador = document.getElementById("carregador").checked,
            capac = document.getElementById("capac").checked,
            capap = document.getElementById("capap").checked,
            operadora = document.getElementById("operadora").value,
            observacao = document.getElementById("observacao").value,
            mac = document.getElementById("mac").value,
            unidade = document.getElementById("unidade").value,
            status = document.getElementById("status").value,
            data = document.getElementById("data").value,
            hostname = document.getElementById("hostname").value,
        ]
        for (let i = 0; i < formulario.length; i++) {
            if (formulario[i] == null) {
                alert("Preencha os espaços corretamente!")
            }
        }
        $.ajax({
            url: "./function.php",
            type: "post",
            async: true,
            data: {
                acao: "gravarFormulario",
                filtros: {
                    ID: formulario[0],
                    email: formulario[1],
                    linha: formulario[2],
                    modelo: formulario[3],
                    serie: formulario[4],
                    nrmodelo: formulario[5],
                    IMEI1: formulario[6],
                    IMEI2: formulario[7],
                    carregador: formulario[8],
                    capac: formulario[9],
                    capap: formulario[10],
                    operadora: formulario[11],
                    observacao: formulario[12],
                    mac: formulario[13],
                    unidade: formulario[14],
                    status: formulario[15],
                    data: formulario[16],
                    hostname: formulario[17],
                }
            },
            dataType: "json",
            success: function(result) {
                alert("Cadastro Concluído!")
                Teste()
            },
            error: function(data) {
                console.log(data);
                alert('Algo deu errado no seu cadastro');
            }
        });
    }

    function Ler() {
        $.ajax({
            url: "./function.php",
            type: "post",
            async: true,
            data: {
                acao: "lerFormulario"
            },
            dataType: "json",
            success: function(result) {
                contIds = [];
                let lbd = result.historico;
                Listar(lbd)

            },
            error: function(data) {
                console.log(data);
                alert('error handling here');
            }
        });
    }

    function Listar(lista) {
        for (var i = 0; i < lista.length; i++) {
            contID = i + 1
            console.log(lista)
            let Listaunica = lista[i];
            let valor = Listaunica[0]
            contIds.push(`${valor}`);
            const h2 = document.getElementById("tbody");
            let paragrafos = null
            for(var j=0; j < Listaunica.length; j++){
                switch(j){
                case 0:
                    paragrafos = `<input type="checkbox" class="dados" id="${valor}" value="${valor}" name="${valor}"><label class="apagavel" for="carregador"></label>`
                    paragrafos = paragrafos + `<div class = "dados"><textarea disabled id="definicaifont" class="col col-1">${Listaunica[j]}</textarea>`
                    break;
                case 1:
                    paragrafos = paragrafos + `<textarea disabled class="col col-2" id="definicaifont">${Listaunica[j]}</textarea>`
                    break;  
                case 2:
                    paragrafos = paragrafos + `<textarea disabled class="col col-3" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 3:
                    paragrafos = paragrafos + `<textarea disabled class="col col-4" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 4:
                    paragrafos = paragrafos + `<textarea disabled class="col col-5" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 5:
                    paragrafos = paragrafos + `<textarea disabled class="col col-6" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 6:
                    paragrafos = paragrafos + `<textarea disabled class="col col-7" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 7:
                    paragrafos = paragrafos + `<textarea disabled class="col col-8" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 8:
                    paragrafos =paragrafos + `<textarea disabled class="col col-9" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 9:
                    paragrafos = paragrafos + `<textarea disabled class="col col-10" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 10:
                    paragrafos = paragrafos + `<textarea disabled class="col col-11" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 11:
                    paragrafos = paragrafos + `<textarea disabled class="col col-12" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 12:
                    paragrafos = paragrafos + `<textarea disabled class="col col-13" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 13:
                    paragrafos = paragrafos + `<textarea disabled class="col col-14" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 14:
                    paragrafos = paragrafos + `<textarea disabled class="col col-15" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 15:
                    paragrafos = paragrafos + `<textarea disabled class="col col-16" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 16:
                    paragrafos = paragrafos + `<textarea disabled class="col col-17" id="definicaifont" >${Listaunica[j]}</textarea>`
                    break;
                case 17:
                    paragrafos = paragrafos + `<textarea disabled class="col col-18" id="definicaifont" >${Listaunica[j]}</textarea></div>`
                    break;
            }
            }
            
            if (valor == null) {
                alert("O valor é nulo")
            } else {
                let text = paragrafos 
                h2.insertAdjacentHTML("afterend", text)
            }

        }

    }
</script>

</html>