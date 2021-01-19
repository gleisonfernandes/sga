<?php
?>
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SGA</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    
    <?php
        include_once("header.php");
    ?>

    <main class="container">

    <div class="starter-template text-center py-5 px-3">
        <h3>Cadastro de regra de atendimento.</h3>
        <form class="row g-3" method="POST" action="validarCadastro.php">
            <div class="col-md-3">
              <label for="tipo" class="form-label">tipo</label>
              <select class="form-select" id="tipo" name="tipo" aria-label="Default select example" onchange="verificarSelect(this.value), verificarSelect2(this.value)" required>
                <option></option>
                <option value="Um dia especifico">Um dia especifico</option>
                <option value="Diariamente">Diariamente</option>
                <option value="Semanalmente">Semanalmente</option>
              </select>
            </div>
            <div class="col-md-3">
                <label for="horario" class="form-label">Horário inicial</label>
                <input type="time" name="horarioInicial" id="horarioInicial" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label for="horario" class="form-label">Horário final</label>
                <input type="time" name="horarioFinal" id="horarioFinal" class="form-control" required>
            </div>
            <div id="data" class="col-md-3" hidden>
                <label for="data" class="form-label">Data</label>
                <input type="date"  name="data" class="form-control">
            </div>
            <div id="dias" class="col-md-3" hidden>
              <label for="dias" class="form-label">Dias da Semana</label>
              <select class="form-select" name="dias" aria-label="Default select example">
                <option></option>
                <option value="Segunda">Segunda</option>
                <option value="Terça">Terça</option>
                <option value="Quarta">Quarta</option>
                <option value="Quinta">Quinta</option>
                <option value="Sexta">Sexta</option>
                <option value="Sábado">Sábado</option>
              </select>
            </div>
            <div class="col-md-12">
                <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>

    </main>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
      function verificarSelect(value){
        var div = document.getElementById("data");

        if(value == "Um dia especifico"){
          div.hidden = false;
        }else{
          div.hidden = true;
        }
      };
      function verificarSelect2(value){
        var div = document.getElementById("dias");

        if(value == "Semanalmente"){
          div.hidden = false;
        }else{
          div.hidden = true;
        }
      };
    </script>

      
  </body>
</html>
