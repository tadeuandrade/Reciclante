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
<div class="container">
    <div class="col-md-6">
        <img src="./img/papel.png" class="img-responsive">
        <div class="section">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
    <div style="padding-top: 5px;">
        <div class="col-md-6">
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
                <br /><button type="submit" name="enviar" class="btn btn-info">Cadastrar coleta</button>
            </form>
            <form action="reciclar.php" method="post">
                <button type="submit" name="vercoletas" class="btn btn-info">Ver Coletas</button>
            </form>

        </div>
    </div>

    <?php
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
            $sql = "INSERT INTO `tb_coleta`(`nome`,`tipo`, `descricao`) VALUES ('" . $_SESSION["usuario_logado"]["nome"] . "','" . $option . "','" . $descricao . "')";
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

            $sql = "SELECT * FROM tb_coleta WHERE nome='" . $_SESSION["usuario_logado"]["nome"] . "'";
     
            $rs = mysqli_query($con, $sql) or die(mysqli_errno($con));


            while ($lin = mysqli_fetch_array($rs)) {

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
