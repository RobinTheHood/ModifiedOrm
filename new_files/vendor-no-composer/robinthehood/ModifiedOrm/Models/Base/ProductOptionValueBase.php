<?php
namespace RobinTheHood\ModifiedOrm\Models\Base;


class ProductOptionValueBase
{
    protected $productOptionValueId;
    protected $languageId;
    protected $name;

    protected $key;

    public function getProductOptionValueId()
    {
        return $this->productOptionValueId;
    }

    public function getLanguageId()
    {
        return $this->languageId;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setProductOptionValueId($productOptionValueId)
    {
        $this->productOptionValueId = $productOptionValueId;
    }

    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setKey($productOptionValueId, $languageId)
    {
        $this->key['productOptionValueId'] = $productOptionValueId;
        $this->key['languageId'] = $languageId;
    }
}
