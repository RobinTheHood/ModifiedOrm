<?php

namespace RobinTheHood\ModifiedOrm\Models\Base;

use RobinTheHood\ModifiedOrm\Repositories\ProductRepository;

class PersonalOfferBase
{
    protected $id;
    protected $productId;
    protected $quantity;
    protected $personalOffer;

    public function getId()
    {
        return $this->id;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getPersonalOffer()
    {
        return $this->personalOffer;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function setPersonalOffer($personalOffer)
    {
        $this->personalOffer = $personalOffer;
    }

    public function getProduct()
    {
        $repo = new ProductRepository();
        $product = $repo->get($this->productId);
        return $product;
    }
}
