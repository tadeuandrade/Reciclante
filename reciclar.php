<?php
include "./pagina_inicial.php";

$validabemvindo = isset($_SESSION["ja_acessou"]) ? $_SESSION["ja_acessou"] : 0;
// Verifica se o usuáro está logado
if (!isset($_SESSION["usuario_logado"])) {

// Cria uma mensagem de erro
    $_SESSION["erro"] = "Você precisa estar logado para acessar essa funcionalidade!";

// Redireciona o usuário para o INDEX
    header("location:index.php");
} else if ($validabemvindo != $_SESSION["usuario_logado"]) {
    echo ("<script>alert('Bem Vindo " . $_SESSION["usuario_logado"]["nome"] . "');</script>");
    $_SESSION["ja_acessou"] = $_SESSION["usuario_logado"];
}
?>
<head>
    <title>CEP</title>
    <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="busca_endereco/js/gmaps.js" type="text/javascript"></script>
    <script src="busca_endereco/js/cep_clean.js" type="text/javascript"></script>
    <script>
        $(function () {
            wscep({'auto': true, 'map': 'map1'})
        })
    </script>

</head>
<div class="container">
    <div class="col-md-6">
        <label class="control-label text-danger">Cadastrar Coleta</label>
        <form role="form" action="reciclar.php" method="post">
            <div class="form-group">
                <label class="control-label cadastro">Tipo de reciclavel</label>
                <select style="color: #000" name="tipo">
                    <option value="papel">Papel</option>
                    <option value="plastico">Plastico</option>
                    <option value="metal">Metal</option>
                    <option value="vidro">Vidro</option>
                    <option value="outros">Outros</option>                    
                </select>
            </div>

            <textarea style="color: #000" name="descricao" type="text" rows="4" cols="50" placeholder="Descrever material"></textarea>

            <div class="form-group">
                <label class="control-label cadastro">CEP</label>
                <input class="form-control" id="cep" name="cep" type="text" maxlength="9" placeholder="Informe o CEP" required="Entre com cep" />
            </div>
            <div class="form-group">
                <label class="control-label cadastro">Rua</label>
                <input class="form-control" id="rua" name="rua" type="text" placeholder="Nome da Rua / Logradouro" />
            </div>
            <div class="form-group">
                <label class="control-label cadastro">Número</label>
                <input class="form-control" id="num" name="num" type="text" placeholder="Número" />
            </div>
            <div class="form-group">
                <label class="control-label cadastro">Bairro</label>
                <input class="form-control" id="bairro" name="bairro" type="text" placeholder="Informe o Bairro" />
            </div>
            <div class="form-group">
                <label class="control-label cadastro">Cidade</label>
                <input class="form-control" id="cidade" name="cidade" type="text" placeholder="Informe a Cidade" />
            </div>
            <div class="form-group">
                <label class="control-label cadastro">UF</label>
                <input class="form-control" id="uf" name="uf" type="text" placeholder="Informe a UF" />
            </div>
            <button type="submit" name="enviar" class="btn btn-info">Enviar</button>
        </form>
        <form action="reciclar.php" method="post">
            <button type="submit" name="vercoletas" class="btn btn-info">Ver Coletas</button>
        </form>

    </div>

    <?php
    $nome = $_SESSION["usuario_logado"]["nome"];
    $cep = isset($_POST["cep"]) ? $_POST["cep"] : 0;
    $rua = isset($_POST["rua"]) ? $_POST["rua"] : 0;
    $numero = isset($_POST["num"]) ? $_POST["num"] : 0;
    $bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : 0;
    $cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : 0;
    $uf = isset($_POST["uf"]) ? $_POST["uf"] : 0;
    $option = isset($_POST["tipo"]) ? $_POST["tipo"] : 0;
    $descricao = isset($_POST["descricao"]) ? $_POST["descricao"] : 0;

    function get_post_action($name) {
        $params = func_get_args();

        foreach ($params as $name) {
            if (isset($_POST[$name])) {
                return $name;
            }
        }
    }

    $con = @mysqli_connect("localhost", "root", "", "bd_aula") or die("Erro ao conectar no banco: " . mysqli_connect_error());

    switch (get_post_action('enviar', 'vercoletas')) {
        case 'enviar':

            // Cria o SQL
            $sql = "INSERT INTO `tb_coleta`(`nome`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `tipo`, `descricao`) VALUES ('" . $nome . "','" . $cep . "','" . $rua . "'," . $numero . ",'" . $bairro . "','" . $cidade . "','" . $uf . "','" . $option . "','" . $descricao . "')";
            \var_dump($sql);

            // Executa o SQL
            mysqli_query($con, $sql) or die("Erro de SQL: " . mysqli_error($con)); //save article and keep editing

            echo("<script>alert('Cadastrado com sucesso');</script>");

            break;

        case 'vercoletas':


            echo("<div class='col-md-6'><table class='table'  style='color: #000' border = '1'>
                    <tr>
                    <th>Tipo</th>
                    <th>Descricao</th>                    
                    </tr>");

            $sql = "SELECT * FROM tb_coleta WHERE nome='$nome'";
            $rs = mysqli_query($con, $sql) or die(mysqli_errno($con));
            $lin = mysqli_fetch_assoc($rs);
            $item = array($lin);

            for ($i = 0; $i < count($item); $i++) {

                if ($lin["nome"] == $_SESSION["usuario_logado"]["nome"]) {
                    // IMPREME OS DADOS DO PRODUTO
                    echo("<tr>");
                    echo("<td>" . $lin["tipo"] . "</td>");
                    echo("<td>" . $lin["descricao"] . "</td>");
                    echo("</tr></div>");
                }
            }
            break;
    }
    ?>
</div>
