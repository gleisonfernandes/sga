<?php
    include_once("conexao/conexao.php");
    if (isset($_POST['cadastrar'])){
        $tipo = $_POST['tipo'];
        $horarioInicial = $_POST['horarioInicial'];
        $horarioFinal = $_POST['horarioFinal'];
        $data = $_POST['data'];
        $dias = $_POST['dias'];

        $sql = mysqli_query($con, "SELECT * FROM agendamento WHERE data='$data' AND horarioInicial>='$horarioInicial' AND horarioFinal<='$horarioFinal' AND dias='$dias' AND tipo='$tipo'");
        $agenda = mysqli_num_rows($sql);
        if($agenda > 0){
            
            echo "<script>alert('Regra não inserida: Já existe um cadastro com, esse tipo: $tipo, Data:, $data, e Horarios:, $horarioInicial, até, $horarioFinal, ou dentro desse intervalo de tempo.')</script>";
            echo "<script>
                 setTimeout(window.location='index.php', 2000)
                </script>";
        }
        else{
            $con -> query("INSERT INTO agendamento (tipo, horarioInicial, horarioFinal, data, dias) VALUES ('$tipo', '$horarioInicial', '$horarioFinal', '$data', '$dias')");
            if($con){
                echo "<script>alert('Regra inserida $tipo, $horarioInicial, $horarioFinal, $data;')</script>";
                echo "<script>
                       setTimeout(window.location='index.php', 2000)
                      </script>";
                $con -> close();
            }else{
                echo "<script>alert('Erro ao tentar fazer o agendamento')<script>".mysqli_error();
            }
        }
    }

?>