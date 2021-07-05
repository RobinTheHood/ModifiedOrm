<?php

namespace RobinTheHood\ModifiedOrm\Models\Base;

class ShippingStatusBase
{
    protected $shippingStatusId;
    protected $languageId;
    protected $name;
    protected $image;
    protected $sortOrder;

    protected $key;

    public function getShippingStatusId()
    {
        return $this->shippingStatusId;
    }

    public function getLanguageId()
    {
        return $this->languageId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setShippingStatusId($shippingStatusId)
    {
        $this->shippingStatusId = $shippingStatusId;
    }

    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function setKey($shippingStatusId, $languageId)
    {
        $this->key['shippingStatusId'] = $shippingStatusId;
        $this->key['languageId'] = $languageId;
    }
}
