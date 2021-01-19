<?php
echo "
    <nav class='navbar navbar-expand-md navbar-dark bg-primary fixed-top'>
    <div class='container-fluid'>
        <a class='navbar-brand' href='#'>SGA</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarsExampleDefault' aria-controls='navbarsExampleDefault' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
        </button>

        <div class='collapse navbar-collapse' id='navbarsExampleDefault'>
        <ul class='navbar-nav me-auto mb-2 mb-md-0'>
            <li class='nav-item active'>
            <a class='nav-link' aria-current='page' href='index.php'>Cadastrar regras</a>
            </li>
            <li class='nav-item'>
            <a class='nav-link' href='listaRegras.php' >Listar regras</a>
            </li>
            <li class='nav-item'>
            <a class='nav-link' href='listarHorarios.php'>Listar horários</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
";
?>