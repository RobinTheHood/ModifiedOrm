<?php

namespace RobinTheHood\ModifiedOrm\Models\Base;

// use RobinTheHood\ModifiedOrm\Repositories\ProductRepository;
// use RobinTheHood\ModifiedOrm\Repositories\CategoryRepository;

class ProductTagValueBase
{
    protected $productTagValueId;
    protected $productTagOptionId;
    protected $name;
    protected $description;
    protected $image;
    protected $contentGroup;
    protected $sortOrder;
    protected $languageId;
    protected $status;
    protected $filter;
    protected $lastModified;
    protected $dateAdded;
    protected $productOptionValueId;

    protected $key;

    public function getProductTagValueId()
    {
        return $this->productTagValueId;
    }

    public function getProductTagOptionId()
    {
        return $this->productTagOptionId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getContentGroup()
    {
        return $this->contentGroup;
    }

    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    public function getLanguageId()
    {
        return $this->languageId;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getFilter()
    {
        return $this->filter;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }

    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    public function getProductOptionValueId()
    {
        return $this->productOptionValueId;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setProductTagValueId($productTagValueId)
    {
        $this->productTagValueId = $productTagValueId;
    }

    public function setProductTagOptionId($productTagOptionId)
    {
        $this->productTagOptionId = $productTagOptionId;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setContentGroup($contentGroup)
    {
        $this->contentGroup = $contentGroup;
    }

    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setFilter($filter)
    {
        $this->filter = $filter;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;
    }

    public function setProductOptionValueId($productOptionValueId)
    {
        $this->productOptionValueId = $productOptionValueId;
    }

    public function setKey($productTagValueId, $languageId)
    {
        $this->key = [
            'productTagValueId' => $productTagValueId,
            'languageId' => $languageId
        ];
    }
}
