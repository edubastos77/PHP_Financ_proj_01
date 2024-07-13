<?php 

require_once 'UtilDAO.php';

class MovimentoDAO{
    
    public function CadastrarMovimento($tipo, $data, $valor, $categoria, $empresa, $conta, $obs){

        if($tipo == '' || $data == '' || $valor == '' || $categoria == '' || $empresa == '' | $conta == ''){
            return 0;
        }else{
            return 1;
        }
    }
    public function FiltrarMovimento($tipoMov, $dtInicio, $dtFinal){
        if($tipoMov == '' || $dtInicio == '' || $dtFinal == ''){
            return 0;
        }else{
            return 1;
        }
    }
    
}