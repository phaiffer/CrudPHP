<?php
include("../Class/ClassConexao.php");

class ClassCrud extends ClassConexao{
    private $Crud;
    private $Contador;

    private function preparedStatements($Query, $Parametros)
    {
        $this->countParametros($Parametros);
        $this->Crud=$this->conectaDB()->prepare($Query);
        
        if($this->Contador > 0){
            for($i=1; $i <= $this->contador; $i++){
                $this->Crud->bindValue($i, $Parametros[$i-1]);
            }
        }

        $this->Crud->execute();
    }

    private function countParametros($Parametros)
    {
        $this->Contador=count($Parametros);
    }

    #insert DB
    public function insertDB($Table, $Condition, $Parameters){
        $this->preparedStatements("insert into {$Table} values ({$Condition})", $Parameters);
        return $this->Crud;
    }




}