<?php
final class TransformaMultiplos
{
    public $min,$max,$multiplo;

    public function __construct ($min,$max,$multiplo)
    {
        $this->min = $min;
        $this->max = $max;
        $this->multiplo = $multiplo;
    }

    public function creoLista(){    
        $resultado="";
        for ($i = $this->min; $i <= $this->max; $i++) {                
            $valor = $this->printFalabella($i,$this->multiplo[0],"Falabella").$this->printFalabella($i,$this->multiplo[1],"IT");
                $condicion1 = str_replace($i.$i,$i,$valor);
                $condicion2 = str_replace("Falabella".$i,"Falabella",$condicion1);        
                $condicion3 = str_replace($i."IT","IT",$condicion2);        
            $resultado.= str_replace("FalabellaIT","Integraciones",$condicion3)."<br>";            
        }
        return $resultado;
    }

    public function printFalabella($num,$multi,$text){
        if ($num % $multi == 0 ){
            $num = $text;
        }
        return $num;
    }

}
?>