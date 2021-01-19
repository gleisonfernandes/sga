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
  </head>
  <body>
    
    <?php
        include_once("header.php");
    ?>

    <main class="container">
        <form class="d-flex" method="POST" action="listarHorarios.php">
            <input class="form-control me-2" name="dataum" type="date" required>
            <input class="form-control me-2" name="datadois" type="date" required>
            <button class="btn btn-outline-success" name="buscar" type="submit">Buscar</button>
        </form>
        <h3>Listar de Horários</h3>
        <?php
          if(isset($_POST['buscar'])){
            $dataum = $_POST['dataum'];
            $datadois = $_POST['datadois'];
            $sql = mysqli_query($con, "SELECT * FROM agendamento WHERE data >= '$dataum' && data <= '$datadois' order by data, horarioInicial");
            $numrow = mysqli_num_rows($sql);
            
            if($numrow > 0){
                $datab = 0;
                $cont=0;
                while ($rows = mysqli_fetch_assoc($sql)){
                  
                  $data = $rows['data'];
                    if($datab != $data){
                      $cont++;
        ?>
                      <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="<?php echo $cont;?>">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $cont;?>" aria-expanded="true" aria-controls="collapse<?php echo $cont;?>">
                            <h4><?php echo date('d/m/Y',strtotime($data));?></h4>
                            </button>
                            </h2>
        <?php }?>
                          <div id="collapse<?php echo $cont;?>" class="accordion-collapse collapse show" aria-labelledby="heading<?php echo $cont;?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <ul class="list-group">
                                <li class="list-group-item">Horário Inicial: <?php echo $rows['horarioInicial'];?></li>
                                <li class="list-group-item">Horário Final: <?php echo $rows['horarioFinal'];?></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
        <?php
              $datab=$data;}
            }
          }
        ?>   
    </main>


    <script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
