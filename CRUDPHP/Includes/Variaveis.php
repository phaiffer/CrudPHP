<?php
#Cadastro Empresa
if(isset($_POST['Nome'])){
    $Nome=filter_input(INPUT_POST,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['Nome'])) {
    $Nome=filter_input(INPUT_GET,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
    $Nome="";
}

if(isset($_POST['Cnpj'])){
    $Cnpj=filter_input(INPUT_POST,'Cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['Cnpj'])) {
    $Cnpj=filter_input(INPUT_GET,'Cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
    $Cnpj="";
}

if(isset($_POST['Uf'])){
    $Uf=filter_input(INPUT_POST,'Uf', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['Uf'])) {
    $Uf=filter_input(INPUT_GET,'Uf', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
    $Uf="";
}

#Cadastro Cliente

if(isset($_POST['Nome'])){
    $Nome=filter_input(INPUT_POST,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['Nome'])) {
    $Nome=filter_input(INPUT_GET,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
    $Nome="";
}

if(isset($_POST['cpf_cnpj'])){
    $cpf_cnpj=filter_input(INPUT_POST,'cpf_cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['cpf_cnpj'])) {
    $cpf_cnpj=filter_input(INPUT_GET,'cpf_cnpj', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
    $cpf_cnpj="";
}

if(isset($_POST['Rg'])){
    $Rg=filter_input(INPUT_POST,'Rg', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif (isset($_GET['Rg'])) {
    $Rg=filter_input(INPUT_GET,'Rg', FILTER_SANITIZE_SPECIAL_CHARS);
}else {
    $Rg=""; 
}