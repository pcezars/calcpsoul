<?php

    require 'buscar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Broke</title>

    <script src="https://kit.fontawesome.com/b93f9b3c01.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">

    
    
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5240859085453706"
     crossorigin="anonymous"></script>

</head>
<body class="background">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5240859085453706"
     crossorigin="anonymous"></script>
    
    <script>(function(d,z,s){s.src='https://'+d+'/400/'+z;try{(document.body||document.documentElement).appendChild(s)}catch(e){}})('vooculok.com',5411712,document.createElement('script'))</script>
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5240859085453706"
     crossorigin="anonymous"></script>

    <script async="async" data-cfasync="false" src="//arsnivyr.com/1?z=5411838"></script>

      <!-- NAVBAR -->
     
      <nav class="navbar pb-0 navbar-secondary bg-secondary fixed-top">
        <ul class="nav nav-pills center">
            <li class="nav-item">
                <a class="nav-link btn btn-secondary" href="index.php">Calcular</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-secondary" href="montar.php">Montar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active btn btn-outline-danger" href="lista.php">Lista</a>
            </li>
          </ul>
    </nav>


    <div class="container h-100">  
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-sm-5">
            <div class="card bg-danger border-dark">
                <div class="card-header">
                    <img class="img-size2 mr-5" src="img/arcanine.png"><strong>Lista de pontos</strong>
                </div>
                <br>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Atenção!</h4>
                    <p>As brokes mostradas aqui são feitas por players, sempre confira a broke na nossa calculadora.</p>
                    <p>Os pontos mostrados são o total, reduza os 10% e arredonde como preferir.</p>
                    <hr>
                    <p class="mb-0">Caso deseje adicionar uma broke a nossa lista, entre em contato in-game ou pelo email: broke@shbroke.com.br</p>
                    </div>
                <br>
                <div class="form-group ml-4">
                <form method="GET">
                    <div class="form-group row ml-4">
                    <label for="pokemon">Selecione um Pokémon</label>
                    </div>
                    <div class="col-sm-12">
                    <select class="form-control" name="pokemon" id="pokemon">
                        <option value="">-- Selecione --</option>
                        
                        <?php
                            foreach ($lista as $lista) {        
                        ?>
                            <option value="<?php echo $lista["id"];?>"><?php echo $lista["id"].' - '.$lista["nome"];?></option>

                            <?php
                                };
                            ?>
                        
                    </select> 
                    </div><br>
                    <div class="col-sm-12">
                    <input class="btn btn-success" type="submit" value="Busca">
                    </div>
                </form>
                </div>

                <?php
                if (isset($_GET['pokemon'])){

                    if (count($poke) > 0){
                        echo '<div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead class="thead-secondary table-secondary">
                                            <tr>
                                                <th scole="col">#</th>
                                                <th scope="col"></th>
                                                <th scope="col">Num. Dex</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Broke</th>
                                                
                                                </tr>
                                        </thead>
                                        <tbody class="table-striped">
                                            <tr>
                                                <th scope="col">#</th>
                                                <td><img src="'.$poke[0]['imagem'].'"></td>
                                                <td>' .$poke[0]['id']. '</td>
                                                <td>' .$poke[0]['nome'] . '</td>
                                                <td>' .$poke[0]['pontos'] . ' pontos</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>';
                    }else {
                        echo "<div>Pokémon não encontrado</div>";
                    }
                }
                ?>

                
            </div>
          </div>              
        </div> 

        <<script>(function(d,z,s){s.src='https://'+d+'/400/'+z;try{(document.body||document.documentElement).appendChild(s)}catch(e){}})('vooculok.com',5411712,document.createElement('script'))</script>

      </div>

      <footer class="page-footer bg-secondary font-small fixed-bottom">

        
        <div class="footer-copyright text-center py-3">Shiny Broke PSOUL (criado por player) © 2022 Copyright:
        <a class="badge badge-pill badge-secondary" href="https://psoul.com.br/player/30406"> Gkill</a>
        </div>
        
    
    </footer>

        
    
    
</body>

<script src="scripts.js"></script>
</html>