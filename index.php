<?php


require_once './include/Ingredientes.php';


$url = 'http://localhost/recetas2/servicio.php';
$uri = 'http://localhost/recetas2/';
$cliente = new SoapClient(null, array('location' => $url, 'uri' => $uri));

echo $cliente->obtenerNombreReceta(1);
echo '<br>';
echo $cliente->obtenerTipoReceta(1);
echo '<br>';
echo $cliente->obtenerPreparacionReceta(1);
echo '<br>';
echo $cliente->obtenerPresentacionReceta(1);
echo '<br>';

$ingredientes = $cliente->obtenerIngredientesReceta(1);

for ($index = 0; $index < count($ingredientes); $index++) {
    
    $temporal = get_object_vars($ingredientes[$index]);

        $p = new Ingredientes($temporal);
    
    echo $p->muestra();
    
}