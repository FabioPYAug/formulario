<?php
error_reporting(E_ERROR);

$acao = $_POST["acao"];
$filtros = $_POST["filtros"];

if ($acao == "gravarFormulario") {
    print json_encode(gravarFormulario($filtros));
} else if($acao == "lerFormulario") {
    print json_encode(lerFormulario($filtros));
} else if($acao == "apagarHistorico") {
    print json_encode(apagarHistorico($filtros));
}


function apagarHistorico($filtros): array
{
    $result = false;
    $debug = [];
    $contador = count($filtros);
    $conexao = mysqli_connect("localhost", "root", "", "projetoiniciante");

    for($i = 0; $i < $contador; $i++){
        $local = $filtros["lista"];
        $valor = $local[$contador];
        
        $sql = "DELETE FROM smp_hardw_cell WHERE cll_ID = $valor";
        $get = mysqli_query($conexao, $sql);
        array_push($debug, $sql);
        if ($get) {
            $result = true;
        }
    }

    return ["resultado" => $result];
}

function gravarFormulario($filtros): array
{
    $result = false;
    $debug = [];

    $conexao = mysqli_connect("localhost", "root", "", "projetoiniciante");
    $sql = "select * from smp_hardw_cell;";
    $get = mysqli_query($conexao, $sql);
    array_push($debug, $sql);

    $sql = "INSERT INTO smp_hardw_cell (cll_ID, cll_email, cll_NR_Linha, cll_Modelo, cll_Serie, cll_NR_Modelo, cll_IMEI1, cll_IMEI2, cll_caregador, cll_capa_celular, cll_capa_protetora, cll_operadora, cll_observação, cll_MAC, cll_SelecaoUnidade, cll_status, cll_data, cll_HOSTNAME) VALUES (" . $filtros["ID"] . ", '" . $filtros["email"] . "', '" . $filtros["linha"] . "', '" . $filtros["modelo"] . "', '" . $filtros["serie"] . "', '" . $filtros["nrmodelo"] . "', '" . $filtros["IMEI1"] . "', '" . $filtros["IMEI2"] . "', '" . $filtros["carregador"] . "', '" . $filtros["capac"] . "', '" . $filtros["capap"] . "', '" . $filtros["operadora"] . "', '" . $filtros["observacao"] . "', '" . $filtros["mac"] . "', '" . $filtros["unidade"] . "', '" . $filtros["status"] . "', '" . $filtros["data"] . "', '" . $filtros["hostname"] . "');";
    $get = mysqli_query($conexao, $sql);
    array_push($debug, $sql);
    if ($get) {
        $result = true;
    }

    return ["resultado" => $result, "debug" => $debug];
}

function lerFormulario($filtros): array
{
    $Lista = $filtros["teste"];
    //LISTA NAO FILTRADA
    if($Lista == null){

        $result = false;
        $debug = [];

        $conexao = mysqli_connect("localhost", "root", "", "projetoiniciante");
        $sql = "SELECT * FROM smp_hardw_cell;";
        $get = mysqli_query($conexao, $sql);
        $historico = (mysqli_fetch_all($get, MYSQLI_ASSOC));
        array_push($debug);

        if ($get) {
            $result = true;
        }
        $html = [];
        $lista = [];
        foreach ($historico as $reg) {
            foreach ($reg as $fim) {
                array_push ($lista, $fim);
            }
        array_push ($html, $lista);
        $lista = [];
        }

        return ["resultado" => $result, "debug" => $debug, "historico" => $html];
    
    //LISTA FILTRADA
    } else{
        $result = false;
        $debug = [];
        $conexao = mysqli_connect("localhost", "root", "", "projetoiniciante");
        $sql = "SELECT * FROM smp_hardw_cell WHERE cll_SelecaoUnidade = '" . $Lista[0] . "' OR cll_SelecaoUnidade = '" . $Lista[1] . "' OR cll_SelecaoUnidade = '" . $Lista[2] . "' OR cll_SelecaoUnidade = '" . $Lista[3] . "';";
        
        $get = mysqli_query($conexao, $sql);
        $historico = (mysqli_fetch_all($get, MYSQLI_ASSOC));
        array_push($debug);

        if ($get) {
            $result = true;
        }
        $html = [];
        $lista = [];
        foreach ($historico as $reg) {
            foreach ($reg as $fim) {
                array_push ($lista, $fim);
            }
        array_push ($html, $lista);
        $lista = [];
        }

        return ["resultado" => $result, "debug" => $debug, "historico" => $html];
    }
}

?>
