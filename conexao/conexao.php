<?php

    $con = new mysqli ("localhost", "root", "", "gerenciamentohorario");
    if(!$con){
        echo "Erro ao tentar conexão com banco de dados";
    }
    else{
        //echo "Conexão com banco de dados realizada";
    }
;?>