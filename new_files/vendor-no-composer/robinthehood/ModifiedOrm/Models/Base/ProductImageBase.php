<?php

namespace RobinTheHood\ModifiedOrm\Models\Base;

class ProductImageBase
{
    protected $id;
    protected $productId;
    protected $sort;
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function getSort()
    {
        return $this->sort;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
