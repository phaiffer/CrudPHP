<?php
abstract class ClassConexao{

    #Aqui que é feita a conexão com o banco
    protected function conectaDB()
    {
        try{
            $Con= new PDO("mysql:host=localhost;dbname=crudphp","root","");
            return $Con;

        }catch(PDOException $Erro){
            return $Erro -> getMessage();
        }

    }
}