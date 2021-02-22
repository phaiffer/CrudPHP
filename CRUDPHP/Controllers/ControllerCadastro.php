<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud = new ClassCrud();
$Crud->insertDB(
    "cadastro_emp",
    "?,?,?,?",
    array(
        $Id,
        $Nome,
        $Cnpj,
        $Uf,
    )
);

echo "Cadastro Realizado com Sucesso";