<?php

namespace RobinTheHood\ModifiedOrm\Models\Base;

use RobinTheHood\ModifiedOrm\Repositories\ProductRepository;
use RobinTheHood\ModifiedOrm\Repositories\CategoryRepository;

class ProductToCategoryBase
{
    protected $productId;
    protected $categoryId;

    protected $key;

    public function getProductId()
    {
        return $this->productId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function setKey($productId, $categoryId)
    {
        $this->key['productId'] = $productId;
        $this->key['categoryId'] = $categoryId;
    }



    public function getProduct()
    {
        $repo = new ProductRepository();
        $product = $repo->get($this->productId);
        return $product;
    }

    public function getCategory()
    {
        $repo = new CategoryRepository();
        $category = $repo->get($this->categoryId);
        return $category;
    }
}
