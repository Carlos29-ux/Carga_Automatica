<?php

// Importa las clases usando su Namespace PSR-4
use App\User;
use Database\Model\ProductModel;    

// Carga el autoloader de Composer — reemplaza todos los require manuales
require "vendor/autoload.php";

// Instancia la clase User y muestra el nombre
$user = new User();
echo $user->getname();
echo "\n";

// Instancia la clase ProductModel y muestra el ID
$product = new ProductModel();
echo $product->getId();

?>