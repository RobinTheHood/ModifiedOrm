<?php
namespace RobinTheHood\ModifiedOrm\Models\Base;

// require_once __DIR__ . '/../../Repositories/ProductRepository.php';
// require_once __DIR__ . '/../../Repositories/CategoryRepository.php';
//
// use RobinTheHood\ModifiedOrm\Repositories\ProductRepository;
// use RobinTheHood\ModifiedOrm\Repositories\CategoryRepository;

class ProductTagBase
{
    protected $productId;
    protected $productTagOptionId;
    protected $productTagValueId;
    protected $productOptionId;
    protected $productOptionValueId;

    protected $key;

    public function getProductId()
    {
        return $this->productId;
    }

    public function getProductTagOptionId()
    {
        return $this->productTagOptionId;
    }

    public function getProductTagValueId()
    {
        return $this->productTagValueId;
    }

    public function getProductOptionId()
    {
        return $this->productOptionId;
    }

    public function getProductOptionValueId()
    {
        return $this->productOptionValueId;
    }

    public function getKey()
    {
        return $this->key;
    }


    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function setProductTagOptionId($productTagOptionId)
    {
        $this->productTagOptionId = $productTagOptionId;
    }

    public function setProductTagValueId($productTagValueId)
    {
        $this->productTagValueId = $productTagValueId;
    }

    public function setProductOptionId($productOptionId)
    {
        $this->productOptionId = $productOptionId;
    }

    public function setProductOptionValueId($productOptionValueId)
    {
        $this->productOptionValueId = $productOptionValueId;
    }

    public function setKey($productId, $productTagOptionId, $productTagValueId)
    {
        $this->key = [
            'productId' => $productId,
            'productTagOptionId' => $productTagOptionId,
            'productTagValueId' => $productTagValueId
        ];
    }
}
