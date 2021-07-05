<?php

namespace RobinTheHood\ModifiedOrm\Models\Base;

// use RobinTheHood\ModifiedOrm\Repositories\ProductRepository;
// use RobinTheHood\ModifiedOrm\Repositories\CategoryRepository;

class ProductAttributeBase
{
    protected $id;
    protected $productId;
    protected $optionId;
    protected $optionValueId;
    protected $optionValuePrice;
    protected $pricePrefix;
    protected $model;
    protected $stock;
    protected $optionValueWeight;
    protected $weightPrefix;
    protected $sortOrder;
    protected $ean;
    protected $vpeId;
    protected $vpeValue;


    public function getId()
    {
        return $this->id;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function getOptionId()
    {
        return $this->optionId;
    }

    public function getOptionValueId()
    {
        return $this->optionValueId;
    }

    public function getOptionValuePrice()
    {
        return $this->optionValuePrice;
    }

    public function getPricePrefix()
    {
        return $this->pricePrefix;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getOptionValueWeight()
    {
        return $this->optionValueWeight;
    }

    public function getWeightPrefix()
    {
        return $this->weightPrefix;
    }

    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    public function getEan()
    {
        return $this->ean;
    }

    public function getVpeId()
    {
        return $this->vpeId;
    }

    public function getVpeValue()
    {
        return $this->vpeValue;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;
    }

    public function setOptionValueId($optionValueId)
    {
        $this->optionValueId = $optionValueId;
    }

    public function setOptionValuePrice($optionValuePrice)
    {
        $this->optionValuePrice = $optionValuePrice;
    }

    public function setPricePrefix($pricePrefix)
    {
        $this->pricePrefix = $pricePrefix;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function setOptionValueWeight($optionValueWeight)
    {
        $this->optionValueWeight = $optionValueWeight;
    }

    public function setWeightPrefix($weightPrefix)
    {
        $this->weightPrefix = $weightPrefix;
    }

    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    public function setVpeId($vpeId)
    {
        $this->vpeId = $vpeId;
    }

    public function setVpeValue($vpeValue)
    {
        $this->vpeValue = $vpeValue;
    }

    /////


    // protected $productId;
    // protected $productTagOptionId;
    // protected $productTagValueId;
    // protected $productOptionId;
    // protected $productOptionValueId;
    //
    // protected $key;
    //
    // public function getProductId()
    // {
    //     return $this->productId;
    // }
    //
    // public function getProductTagOptionId()
    // {
    //     return $this->productTagOptionId;
    // }
    //
    // public function getProductTagValueId()
    // {
    //     return $this->productTagValueId;
    // }
    //
    // public function getProductOptionId()
    // {
    //     return $this->productOptionId;
    // }
    //
    // public function getProductOptionValueId()
    // {
    //     return $this->productOptionValueId;
    // }
    //
    // public function getKey()
    // {
    //     return $this->key;
    // }
    //
    //
    // public function setProductId($productId)
    // {
    //     $this->productId = $productId;
    // }
    //
    // public function setProductTagOptionId($productTagOptionId)
    // {
    //     $this->productTagOptionId = $productTagOptionId;
    // }
    //
    // public function setProductTagValueId($productTagValueId)
    // {
    //     $this->productTagValueId = $productTagValueId;
    // }
    //
    // public function setProductOptionId($productOptionId)
    // {
    //     $this->productOptionId = $productOptionId;
    // }
    //
    // public function setProductOptionValueId($productOptionValueId)
    // {
    //     $this->productOptionValueId = $productOptionValueId;
    // }
    //
    // public function setKey($productId, $productTagOptionId, $productTagValueId)
    // {
    //     $this->key = [
    //         'productId' => $productId,
    //         'productTagOptionId' => $productTagOptionId,
    //         'productTagValueId' => $productTagValueId
    //     ];
    // }
}
