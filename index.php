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


</head>
<body class="background">

      <!-- NAVBAR -->
     
      <nav class="navbar pb-0 navbar-secondary bg-secondary fixed-top">
        <ul class="nav nav-pills center">
            <li class="nav-item">
                <a class="nav-link active btn btn-outline-danger" href="index.php">Calcular</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-secondary" href="montar.php">Montar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-secondary" href="lista.php">Lista</a>
            </li>
          </ul>
    </nav>


    <div class="container h-100">  
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-sm-3">
            <div class="card bg-danger border-dark">
                <div class="card-header">
                    <img class="img-size mr-2" src="img/broke1.png"><strong>Calculadora de Broke</strong>
                </div>
                <div class="card-body bg-secondary text-white">
                    <label for="balls">Qual Ball você usou?</label>
                    <i title="Selecione a Ball que foi usada para começar a broke" class="fa-regular fa-circle-question"></i><br>
                    <select name="balls" id="balls">
                        <option value="#">--Selecione--</option>
                        <option value="1">Pokeball</option>
                        <option value="2">Greatball</option>
                        <option value="3">Ultraball</option>
                        <option value="4">Mastery/Saffari</option>
                    </select>
                    
                    <p class="pt-2">
                        <label for="used">Com quantas saiu dos 10k?</label>
                        <i title="Quantidade de balls que fez o pokemon sair do x/10000. &#013;Ex: [3/10000] Você gastou 67 ultra balls para capturar.&#013;[3/150] Você gastou 68 ultra balls para capturar.&#013;Nesse caso você deve usar o número 68." class="fa-regular fa-circle-question"></i>
                        <input type="number" id="used" min="0">
                    </p>
                    <p>
                        <label for="trevo">Usar trevo?</label>
                        <input type="checkbox" id="trevo" name="trevo" value="1">
                    </p>
                    
                    <p>
                        <hr>
                        <button onclick="calcularBroke()" class="btn btn-success ml-3 mr-2">Calcular</button>
                        <button onclick="limparCampos()" class="btn btn-danger">Limpar</button>
                    </p>
                    <p>
                        <p id="resultado"></p>
                    </p>
                </div>
            </div>
          </div>              
        </div> 

        <script>(function(d,z,s){s.src='https://'+d+'/400/'+z;try{(document.body||document.documentElement).appendChild(s)}catch(e){}})('vooculok.com',5411712,document.createElement('script'))</script>

      </div>

      <footer class="page-footer bg-secondary font-small fixed-bottom">

        
        <div class="footer-copyright text-center py-3">Shiny Broke PSOUL (criado por player) © 2022 Copyright:
        <a class="badge badge-pill badge-secondary" href="https://psoul.com.br/player/30406"> Gkill</a>
        </div>
        
    
    </footer>

        
    
    
</body>

<script src="scripts.js"></script>
</html>