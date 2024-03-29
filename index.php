<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Informações Climaticas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>     
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="js/clima.js"></script>
        
        <!-- Tags Gerais -->
            <meta NAME="DESCRIPTION" CONTENT="Site de informações climaticas da cidade de Brusque, Santa Catarina. Desenvolvido por Fabiula Eduarda Squine. "/>
            <meta NAME="ABSTRACT" CONTENT="Informações Climaticas"/>
            <meta name="keywords" content="clima, tempo, previsão do tempo, temperatura,temperatura do municipio de Brusque, temperatura em Brusque, tempo para Brusque, clima para Brusque, temperatura minima, temperatura atual,
                  clima atual, clima atual em Brusque, Clima Brusque SC, Umidade do ar em Brusque,  Umidade atual, previsão de hoje, Por do sol horario. "/>
            <meta NAME="title" CONTENT="Informações Climaticas" />
            <meta NAME="identifier-url" content="https://fabiula-clima-senai.herokuapp.com" />
            <meta NAME="author" content="Fabiula Eduarda Squine" />
            <meta NAME="ROBOTS" CONTENT="All" />
            <meta NAME="RATING" CONTENT="general" />
            <meta NAME="DISTRIBUTION" CONTENT="global" />
            <meta NAME="LANGUAGE" CONTENT="pt-br" />
            <meta name="content-language" content="portuguese" />
            <meta name="doc-class" content="Completed" /> 
            <meta name="reply-to" content="fabiula.squine@gmail.com"/>
            
            <!-- Tags Para rede social Facebook -->
            <meta property="og:url" content="https://fabiula-clima-senai.herokuapp.com" />
            <meta property="og:locale" content="pt_BR" />
            <meta property="og:type" content="website" />
            <meta property="og:site_name" content="Informações Climaticas" />
            <meta property="og:title" content="Informações Climaticas" />
            <meta property="og:description" content="Site de informações climaticas da cidade de Brusque, Santa Catarina. Desenvolvido por Fabiula Eduarda Squine." />
            <meta property="og:image" content="https://fabiula-clima-senai.herokuapp.com/img/icones/maxima.png" />
            <meta property="og:image:width" content="400" />
            <meta property="og:image:height" content="120" />
            <meta property="fb:app_id" content="" />
            
            <!-- Tags Para rede social Twitter -->
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:description" content="Site de informações climaticas da cidade de Brusque, Santa Catarina. Desenvolvido por Fabiula Eduarda Squine." />
            <meta name="twitter:title" content="Informações Climaticas" />

        
    </head>
    <body>
        
        <div class="row">

            <div class="col-md-12">
           
                <div class="jumbotron" style="background-color: MediumSpringGreen ">

                    <h1>Previsão do Tempo para Brusque-SC | <span id="temperatura" ></span></h1>

                    <p>
                        <span id="situacao"></span>

                        <img id="icone" src="img/icones/02d.png"/>

                    </p>

                </div>

                <div class="jumbotron" style="background-color: SeaGreen ">

                    <center>

                        <h1>Umidade do ar, Brusque-SC: <span id="umidade"></span></h1>

                        <p>

                        <h3><span id="situacao">  </span> <img src="img/icones/umidade3.png"/></h3>
                      
                        </p>

                    </center>

                </div>

                <div class="jumbotron" style="background-color: SeaGreen ">

                    <center>

                        <h1>Pressão do ar, Brusque-SC:<span id="pressao" ></span></h1>

                        <p>

                        <h3><span id="situacao">  </span><img src="img/icones/pressão.png" width="100px"/> </h3>

                        </p>

                    </center>

                </div>

                <div class="jumbotron"  style="background-color: SeaGreen  ">

                    <center>

                        <h1>Temperaturas Brusque-SC</h1>

                    </center>

                    </br>

                    <div class="row mx-lg-n5">



                        <div class="col py-3 px-lg-5 border bg-light">
                            

                            
                            <h2>Temperatura Máxima: <span id="tempMax" ></span></h2>

                            <p>

                            <h3><span id="situacao"> </span><img src="img/icones/maxima.png" width="100px"/> </h3>

                            </p>

                        </div>

                        <div class="col py-3 px-lg-5 border bg-light">

                            <h1>Temperatura Mínima: <span id="tempMin" ></span></h1>

                            <p>

                            <h3><img src="img/icones/minima.png" width="100px"/><span id="situacao"></span></h3>

                            </p>

                        </div>

                    </div>

                </div>

                <div class="jumbotron" style="background-color: SeaGreen ">

                    <center>

                        <h1>Velocidade do Vento, Brusque-SC: <span id="velocidade" ></span></h1>

                        <p>

                        <h3><img src="img/icones/vento.png" width="100px"/><span id="situacao" style="font-size: 70px"></span></h3>
                    </p>

                    </center>

                </div>
                
               <div class="jumbotron"  style="background-color: SeaGreen  ">

                    <center>

                        <h1>Brusque-SC</h1>

                    </center>

                    </br>
                    <div class="row mx-lg-n5">



                        <div class="col py-3 px-lg-5 border bg-light">
                            

                            
                            <h2>Nascer do sol, Brusque-SC: <span id="nascer" ></span></h2>

                            <p>

                            <h3><span id="situacao"> </span><img src="img/icones/sol3.png" width="150px"/> </h3>

                            </p>

                        </div>

                        <div class="col py-3 px-lg-5 border bg-light">

                            <h1>Por do sol, Brusque-SC: <span id="por" ></span></h1>

                            <p>

                            <h3><img src="img/icones/por.png" width="100px"/><span id="situacao"></span></h3>

                            </p>

                        </div><br><br>

                    </div>

            </div>     
        </div>
            
        </div>
        
          
            <a href="#" class="btn btn-success btn-lg btn-block" role="button" aria-pressed="true">::Voltar ao início::</a>
        
    </body>
</html>

