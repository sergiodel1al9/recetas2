<?php
/**
 * Creacion clase ingredientes
 */
class Ingredientes {

    public $nombreAlimento;
    public $cantidad;
    public $unidadMedida;
    
    function __construct($fila) {
        if(isset($fila['nombre'])){
            $this->nombreAlimento = $fila['nombre'];
        }
        if(isset($fila['nombreAlimento'])){
            $this->nombreAlimento = $fila['nombreAlimento'];
        }
        //$this->nombreAlimento = $fila['nombre'];
        $this->cantidad = $fila['cantidad'];
        
        if(isset($fila['unidad'])){
            $this->unidadMedida = $fila['unidad'];
        }
        if(isset($fila['unidadMedida'])){
            $this->unidadMedida = $fila['unidadMedida'];
        }
    }

    function getNombreAlimento() {
        return $this->nombreAlimento;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getUnidadMedida() {
        return $this->unidadMedida;
    }

    function setNombreAlimento($nombreAlimento) {
        $this->nombreAlimento = $nombreAlimento;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setUnidadMedida($unidadMedida) {
        $this->unidadMedida = $unidadMedida;
    }

    
    public function muestra() {
        print "<p> Ingrediente: " . $this->nombreAlimento . "</p>";
        print "<p> Cantidad: " . $this->cantidad . "</p>";
        print "<p> Unidad: " . $this->unidadMedida . "</p>";
    }
    
    

    

}
