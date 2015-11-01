<!DOCTYPE html>
<html>
    <head>
        <title>CEP</title>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="js/gmaps.js" type="text/javascript"></script>
        <script src="js/cep.js" type="text/javascript"></script>
        <link href="css/main.css" rel="stylesheet" />

        <script>
            $(function(){
                wscep({map: 'map1',auto:true});
            })
        </script>
    </head>
    <body>


        <div class="container_12">
            
            <div class="grid_12 form-cep">

                <form onsubmit="return false">

                    <div class="grid_12">

                        <div class="grid_4">
                            <div class="input-prepend cep-label">
                                <span class="add-on">CEP</span>
                                <input id="cep" name="cep" type="text" maxlength="9" placeholder="Informe o CEP" />
                            </div>

                            <div class="input-prepend">
                                <span class="add-on">Rua</span>
                                <input id="rua" name="rua" type="text" placeholder="Nome da Rua / Logradouro" />
                            </div>

                            <div class="input-prepend">
                                <span class="add-on">Nº</span>
                                <input id="num" name="num" type="text" placeholder="Número" />
                            </div>

                            <div class="input-prepend">
                                <span class="add-on">Bairro</span>
                                <input id="bairro" name="bairro" type="text" placeholder="Informe o Bairro" />
                            </div>

                            <div class="input-prepend">
                                <span class="add-on">Cidade</span>
                                <input id="cidade" name="cidade" type="text" placeholder="Informe a Cidade" />
                            </div>

                            <div class="input-prepend">
                                <span class="add-on">UF</span>
                                <input id="uf" name="uf" type="text" placeholder="Informe a UF" />
                            </div>
                        </div>

                        <div class="grid_7 map" id="map1"></div>
                    </div>

                </form>
            </div>
    </body>
</html>