<?php
namespace RobinTheHood\ModifiedOrm\Models\Base;


class ProductOptionBase
{
    protected $productOptionId;
    protected $languageId;
    protected $name;
    protected $sortOrder;

    protected $key;

    public function getProductOptionId()
    {
        return $this->productOptionId;
    }

    public function getLanguageId()
    {
        return $this->languageId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    public function getKey()
    {
        return $this->key;
    }


    public function setProductOptionId($productOptionId)
    {
        $this->productOptionId = $productOptionId;
    }

    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function setKey($productOptionId, $languageId)
    {
        $this->key['productOptionId'] = $productOptionId;
        $this->key['languageId'] = $languageId;
    }
}
