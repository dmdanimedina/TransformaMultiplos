<?php

require './vendor/autoload.php';
include_once ("./src/TransformaMultiplos.php");

final class TransformaMultiplosTest extends PHPUnit_Framework_TestCase 
{

    public function testPrintFalabella()
    {
        $this->assertEquals(
            'Falabella',
            TransformaMultiplos::printFalabella(3,3,"Falabella")
        );
    }

    public function testPrintIT()
    {
        $this->assertEquals(
            'IT',
            TransformaMultiplos::printFalabella(10,5,"IT")
        );
    }

    public function testCreacion()
    {
        $tm = new TransformaMultiplos(1,17,[3,5]);
        echo $tm->creoLista();

        $this->assertEquals(
            $tm->creoLista(),
            "1<br>2<br>Falabella<br>4<br>IT<br>Falabella<br>7<br>8<br>Falabella<br>IT<br>11<br>Falabella<br>13<br>14<br>Integraciones<br>16<br>17<br>"
        );
    }
}
?>