<!DOCTYPE html>
<html>
    <head>
        <title>CEP</title>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="js/gmaps.js" type="text/javascript"></script>
        <script src="js/cep_clean.js" type="text/javascript"></script>
        <link href="css/clean.css" rel="stylesheet" />
        <script>
            $(function(){
                wscep({'auto':true, 'map':'map1'})
            })
        </script>		
    </head>
    <body>
        <form onsubmit="return false">
            <label>CEP</label>
            <input id="cep" name="cep" type="text" maxlength="9" placeholder="Informe o CEP" />

            <label>Rua</label>
            <input id="rua" name="rua" type="text" placeholder="Nome da Rua / Logradouro" />

            <label>N�</label>
            <input id="num" name="num" type="text" placeholder="N�mero" />

            <label>Bairro</label>
            <input id="bairro" name="bairro" type="text" placeholder="Informe o Bairro" />

            <label>Cidade</label>
            <input id="cidade" name="cidade" type="text" placeholder="Informe a Cidade" />

            <label>UF</label>
            <input id="uf" name="uf" type="text" placeholder="Informe a UF" />
        </form>
    </body>
</html>