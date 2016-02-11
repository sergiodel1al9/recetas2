<?php

require_once('Ingredientes.php');

class DB {
    
  
    protected function ejecutaConsulta($sql) {
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = "mysql:host=localhost;dbname=recetas";
        $usuario = 'dwes';
        $contrasena = 'abc123.';

        $dwes = new PDO($dsn, $usuario, $contrasena, $opc);
        $resultado = null;
        if (isset($dwes))
            $resultado = $dwes->query($sql);
        return $resultado;
    }
 
    /**
     * obtiene el nombre de la receta a partir del codigo
     * @param int $codigo
     * @return string
     */
    public function obtenerNombreReceta($codigo) {
        $sql = "SELECT nombre FROM recetas";
        $sql .= " WHERE cod_rec='" . $codigo . "'";
        $resultado = self::ejecutaConsulta($sql);

        $valor = '';

        if (isset($resultado)) {
            $row = $resultado->fetch();
            $valor = $row['nombre'];
        }

        return $valor;
    }
    /**
     * obtiene el tipo de receta a partir del codigo
     * @param int $codigo
     * @return string
     */
    public function obtenerTipoReceta($codigo) {
        $sql = "SELECT tipo FROM recetas";
        $sql .= " WHERE cod_rec='" . $codigo . "'";
        $resultado = self::ejecutaConsulta($sql);

        $valor = '';

        if (isset($resultado)) {
            $row = $resultado->fetch();
            $valor = $row['tipo'];
        }

        return $valor;
    }
     /**
     * obtiene la preparacion de la receta a partir del codigo
     * @param int $codigo
     * @return string
     */
    public function obtenerPreparacionReceta($codigo) {
        $sql = "SELECT preparacion FROM recetas";
        $sql .= " WHERE cod_rec='" . $codigo . "'";
        $resultado = self::ejecutaConsulta($sql);

        $valor = '';

        if (isset($resultado)) {
            $row = $resultado->fetch();
            $valor = $row['preparacion'];
        }

        return $valor;
    }
     /**
     * obtiene la presentacion de la receta del codigo
     * @param int $codigo
     * @return string
     */
    public function obtenerPresentacionReceta($codigo) {
        $sql = "SELECT presentacion FROM recetas";
        $sql .= " WHERE cod_rec='" . $codigo . "'";
        $resultado = self::ejecutaConsulta($sql);

        $valor = '';

        if (isset($resultado)) {
            $row = $resultado->fetch();
            $valor = $row['presentacion'];
        }

        return $valor;
    }
  /**
   * obtiene los ingredientes a partir del codgio de receta
   * @param int $codigo
   * @return array
   */
    public function obtenerIngredientesReceta($codigo) {
        $sql = "SELECT nombre, cantidad, unidad FROM ingredientes";
        $sql .= " WHERE cod_rec='" . $codigo . "'";
        $resultado = self::ejecutaConsulta($sql);
        $ingredientes = array();

        if (isset($resultado)) {
            $row = $resultado->fetch();

            while ($row != null) {
                $ingredientes[] = new Ingredientes($row);
                $row = $resultado->fetch();
            }
        }

        return $ingredientes;
    }

}
