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
                wsmap('08615-000','555','map2');
            })
        </script>
    </head>
    <body>
		
        <div class="container_12">

            <div class="grid_12">			
                <p class="alert alert-info"><i class="icon-search"></i> Buscar Endereço por Cep - Autocomplete</p>
            </div>
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

                <div class="grid_4">
                    <br />
                    <a class="btn btn-success" href="botao.php"><i class="icon-fire icon-white"></i> Exemplo com Botão</a>
                </div>                 
            </div>
            <div class="grid_12">
                <br />
                <pre>
<strong>Exemplo de Uso:</strong>
            // Busca automatica sem mapa
            $(function(){
                wscep();
            })

            // Busca automatica + mapa
            $(function(){
                wscep('auto':true, 'map':'mydiv')
            })

            // Busca manual (botão buscar) sem Mapa
            $(function(){
                wscep({'auto':false,'map':'mydiv'})
            })
            &#60;div id="mydiv" style="height:90px"&#62;&#60;/div&#62;

            // Após a exibição do mapa, latitude e longitude ficam disponiveis:
            alert(lat + '  ' + lng)
            
            Se dejesar, pode criar seu próprio script utilizando nosso WebService
            http://clareslab.com.br/ws/cep/json/08615-000/
                </pre>

            </div>

            <div class="grid_12">
                <br />
                <p class="alert alert-info"><i class="icon-search"></i> Exibindo Google Maps à partir do CEP</p>
            </div>

            <div class="grid_12">
                <pre>
<strong>Exemplo de Uso Independente do Mapa (apenas mapa):</strong>
            // Recebe CEP + Número + ID Elemento (div)
            $(function(){
               wsmap('08665-500','100','div_1');
            })
            &#60;div id="div_1" style="height:90px"&#62;&#60;/div&#62;
                </pre>
            </div>

            <div class="grid_12 map" id="map2"></div>

            <div class="grid_10">
                <div class="grid_4 push_4">
                    <br />
                    <a class="btn btn-info" href="cep.rar"><i class="icon-fire icon-white"></i> Download - CEP AutoComplete</a>
                    <br />
                    <br />
                    <br />
                    <br />
                </div>
            </div>
    </body>
</html>