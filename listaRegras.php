<?php
    include_once("conexao/conexao.php");
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
    <script>
    function successfully(){
      setTimeout("window.location='listaRegras.php'", 1000);
    }
    </script>
  </head>
  <body>
    
    <?php
        include_once("header.php");
    ?>

    <main class="container">

      <h3>Lista de regras</h3>
      <?php
        $sql = mysqli_query($con, "SELECT * FROM agendamento order by tipo, data, horarioInicial");
        $numrow = mysqli_num_rows($sql);
        if($numrow > 0){
          $tipob = "";
          $cont=0;
          while ($rows = mysqli_fetch_assoc($sql)){
            $tipo = $rows['tipo'];
            $data = $rows['data'];
            if($tipob != $tipo){
              $cont++;
      ?>
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading<?php echo $cont;?>">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $cont;?>" aria-expanded="true" aria-controls="collapse<?php echo $cont;?>">
                      <h4><?php echo $tipo;}?></h4>
                    </button>
                  </h2>
                  <div id="collapse<?php echo $cont;?>" class="accordion-collapse collapse show" aria-labelledby="heading<?php echo $cont;?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="list-group">
                        <li class="list-group-item">Horário Inicial: <?php echo $rows['horarioInicial'];?></li>
                        <li class="list-group-item">Horário Final: <?php echo $rows['horarioFinal'];?></li>
                        <?php if($data != ""){?>
                        <li class="list-group-item">Data: <?php echo date('d/m/Y',strtotime($data));?></li>
                        <?php 
                        }else{
                          $data= $tipo;
                        }
                        ?>
                        <li class="list-group-item"><?php if($data == "Semanalmente"){ echo $data, ", ",$rows['dias']; }elseif($data == "Diariamente"){echo $data;}else{echo "";}?></li>
                        <?php  ?>
                        <li class="list-group-item"><form method="POST" action="listaRegras.php">
                        <input name="id" value="<?php echo $rows['id_agenda'];?>" hidden/>
                        <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
                        </form></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
      <?php
        $tipob=$tipo;  
          }
        }

        if(isset($_POST['excluir'])){
          $id = $_POST['id'];
          $con -> query("DELETE FROM agendamento WHERE agendamento.id_agenda = '$id'");
          echo "<script>alert('Regra excluida')</script>";
          echo "<script>successfully()</script>";
        }
      ?>   
    </main><!-- /.container -->


    <script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
