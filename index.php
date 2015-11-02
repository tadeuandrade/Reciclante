
<?php
include "pagina_inicial.php";

//se existir variavel de sessao erro apresenta na pagina
if (isset($_SESSION["erro"])) {
    echo("<script>alert('" . $_SESSION["erro"] . "');</script>");
    unset($_SESSION["erro"]);
}


?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="./img/logo.png" class="center-block img-responsive">
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <h1 class="text-info text-center">Saiba Mais sobre a reciclagem</h1>
                                <p class="text-info ">Faça sua parte e aprenda reciclando,  <a href="./informação.php">clique aqui</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form role="form" action="validar_usuario.php" method="post">
                    <div class="form-group">
                        <label class="control-label cadastro" for="exampleInputEmail1">Login</label>
                        <input class="form-control" id="exampleInputEmail1" name="login" placeholder="Digite seu usuário" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label cadastro" for="exampleInputEmail1">Senha</label>
                        <input class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua Senha" type="password">
                    </div>
                    <button type="submit" class="btn btn-info">Enviar</button>     
                    <a href="cadastro.php"><input type="button" class="btn btn-info" value="Cadastrar"/></a>
                </form>

            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="./img/papel.png" class="img-responsive">
                <h2 class="text-info">Papel
                    <br>
                </h2>
                <p class="text-info" align="justify">A reciclagem de papéis velhos visa o 
                    aproveitamento de fibras celulósicas 
                    dos papéis e cartões usados para a 
                    produção de papéis novos. É um importante 
                    fator de ordem econômica e social, pela 
                    sua contribuição para a conservação de 
                    recursos naturais e energéticos e para 
                    a proteção do ambiente, sendo a forma 
                    mais adequada da redução de deposição 
                    dos Resíduos em Aterro.</p>
            </div>
            <div class="col-md-3">
                <img src="./img/plastico.png" class="img-responsive">
                <h2 class="text-info">Plástico</h2>
                <p class="text-info" align="justify">
                    Reciclagem primária<br />
                    É a conversão de resíduos plásticos por tecnologia convencionais de processamento 
                    em produtos com características de desempenho equivalentes às daqueles produtos 
                    fabricados a partir de resinas virgens.
                    Reciclagem secundária<br />
                    É a conversão de resíduos plásticos de lixo por um processo ou por uma combinação 
                    de operações. Os materiais que se inserem nessa classe provêm de lixões, sistema 
                    de coleta seletiva, sucatas, etc. são constituídos pelos mais diferentes tipos de 
                    material e resina, o que exige uma boa preparação, para poderem ser aproveitados.
                </p>
            </div>
            <div class="col-md-3">
                <img src="./img/metal.png" class="img-responsive img-rounded">
                <h2 class="text-info">Metal</h2>
                <p class="text-info" align="justify">O metal é um dos produtos mais utilizados nas tarefas 
                    do dia-a-dia. Encontramos embalagens de metais, fios e outros produtos metálicos em 
                    diversos produtos. Ao ser descartado por pessoas e empresas, pode passar por um processo 
                    de reciclagem que garante seu reaproveitamento na produção do metal reciclado.O metal 
                    reciclado tem praticamente todas as características do metal comum. Ele pode ser reciclado 
                    muitas vezes sem perder suas características e qualidade. O alumínio, por exemplo, pode ser 
                    usado sem limites. O aço após ser reciclado volta para a cadeia produtiva para ser transformado 
                    em latas e peças automotivas, por exemplo.</p>
            </div>
            <div class="col-md-3">
                <img src="./img/vidro.png" class="img-responsive">
                <h2 class="text-info">Vidro</h2>
                <p class="text-info" align="justify">A Reciclagem do vidro é o processo pelo qual o vidro é reaproveitado 
                    para criar novos materiais, o processo se dá basicamente derretendo o vidro para sua reutilização. 
                    Dependendo da finalidade do seu uso, pode ser necessário separá-lo em cores diferentes. As três cores principais são:
                    <br />Vidro incolor<br />
                    Vidro verde<br />
                    Vidro marrom/âmbar</p>
            </div>
        </div>
    </div>
</div>
<footer class="section section-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <h4 class="text-center">Todos os Direitos Reservados a Grupo3</h4>
                <div class="col-md-12 hidden-xs text-center">
                    <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                    <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                    <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                    <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>