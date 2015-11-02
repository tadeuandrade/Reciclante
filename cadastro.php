<?php
include './pagina_inicial.php';

if (isset($_SESSION["erro_login"])) {
    echo("<script>alert('Login já existe');</script>");
    unset($_SESSION["erro_login"]);
}
?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="./img/metal.png" class="img-responsive">
                <div class="section">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form role="form" action="./cadastro.php" method="post">
                    <div class="form-group">
                        <label class="control-label cadastro" for="exampleInputEmail1">Nome</label>
                        <input class="form-control" id="exampleInputEmail1" name="nome" placeholder="Digite seu usuário" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label cadastro" for="exampleInputEmail1">Login</label>
                        <input class="form-control" id="exampleInputEmail1" name="login" placeholder="Digite seu usuário" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label cadastro" for="exampleInputEmail1">Senha</label>
                        <input class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua Senha" type="password">
                    </div>
                    <div class="form-group">
                        <label class="control-label cadastro">CEP</label>
                        <input class="form-control" id="cep" name="cep" type="text" maxlength="9" placeholder="Informe o CEP"  />
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
                    <button type="submit" name="cadastrado" class="btn btn-info">Enviar</button>
                </form>

                <?php
                $con = @mysqli_connect("localhost", "root", "", "bd_aula") or die("Erro ao conectar no banco: " . mysqli_connect_error());

                $nome = isset($_POST["nome"]) ? $_POST["nome"] : 0;
                $senha = isset($_POST["nome"]) ? $_POST["nome"] : 0;
                $login = isset($_POST["login"]) ? $_POST["login"] : 0;
                $cep = isset($_POST["cep"]) ? $_POST["cep"] : 0;
                $rua = isset($_POST["rua"]) ? $_POST["rua"] : 0;
                $numero = isset($_POST["num"]) ? $_POST["num"] : 0;
                $bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : 0;
                $cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : 0;
                $uf = isset($_POST["uf"]) ? $_POST["uf"] : 0;

                function get_post_action($name) {
                    $params = func_get_args();

                    foreach ($params as $name) {
                        if (isset($_POST[$name])) {
                            return $name;
                        }
                    }
                }

//var_dump($rs);

                switch (get_post_action('cadastrado')) {
                    case 'cadastrado':
                        // Cria o SQL
                        $sql = "INSERT INTO `tb_usuarios`(`nome`,`login`,`senha`,`cep`,`rua`,`numero`,`bairro`,`cidade`,`uf`) VALUES ('" . $nome . "','" . $login . "','" . $senha . "','" . $cep . "','" . $rua . "','" . $numero . "','" . $bairro . "','" . $cidade . "','" . $uf . "')";
                        \var_dump($sql);

                        // Executa o SQL
                        mysqli_query($con, $sql) or die("Erro de SQL: " . mysqli_error($con)); //save article and keep editing

                        echo("<script>alert('Cadastrado com sucesso');</script>");

                        break;
                }
                ?>
            </div>
        </div>
    </div>
</div>