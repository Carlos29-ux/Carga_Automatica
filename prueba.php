<?php

use App\User;
use Database\Model\ProductModel;    

require "vendor/autoload.php";

$user = new User();
echo $user->getname();
echo "\n";

$product = new ProductModel();
echo $product->getId();

?>