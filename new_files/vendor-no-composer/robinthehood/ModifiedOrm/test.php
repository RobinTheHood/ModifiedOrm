<?php

namespace RobinTheHood\ModifiedOrm;

define('_VALID_XTC', true);
chdir($_SERVER['DOCUMENT_ROOT']);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'includes/application_top.php';
require_once __DIR__ . '/Core/Debug.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Repositories/ProductRepository.php';
require_once __DIR__ . '/Repositories/ProductToCategoryRepository.php';

use RobinTheHood\ModifiedOrm\Core\Debug;
use RobinTheHood\ModifiedOrm\Models\Product;
use RobinTheHood\ModifiedOrm\Repositories\ProductRepository;
use RobinTheHood\ModifiedOrm\Repositories\ProductToCategoryRepository;

// $product = new Product();
// $product->setPrice(10.99);
// $product->setModel('model-123');
// $product->setEan('EAN-TEST-123');
// $product->setQuantity('99');
// $product->setWeight('0.25');
// $product->setStatus(1);
// Debug::out($product);
//
// $repo = new ProductRepository();
// $repo->insert($product);
// Debug::out($product);
// die();


$repo = new ProductRepository();
$product = $repo->get(156462);

Debug::out($product);

$productDescription = $product->getProductDescription(2);
Debug::out($productDescription);

$productVpe = $product->getProductVpe(2);
Debug::out($productVpe);

$productToCategorys = $product->getProductToCategorys();
Debug::out($productToCategorys);

foreach ($productToCategorys as $productToCategory) {
    $category = $productToCategory->getCategory();
    Debug::out($category);

    $categoryDescription = $category->getCategoryDescription(2);
    Debug::out($categoryDescription);
}

$personalOffers0 = $product->getPersonalOffers(4);
Debug::out($personalOffers0);

$product = $personalOffers0[0]->getProduct();
Debug::out($product);

$manufacturer = $product->getManufacturer();
Debug::out($manufacturer);

$shippingStatus = $product->getShippingStatus(2);
Debug::out($shippingStatus);

$repo = new ProductToCategoryRepository();
$repo->insert($productToCategorys[0]);
$repo->update($productToCategorys[0]);
