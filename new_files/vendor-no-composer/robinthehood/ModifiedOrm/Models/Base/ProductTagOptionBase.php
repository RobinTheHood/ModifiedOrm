<?php
namespace RobinTheHood\ModifiedOrm\Models\Base;

// use RobinTheHood\ModifiedOrm\Repositories\ProductRepository;
// use RobinTheHood\ModifiedOrm\Repositories\CategoryRepository;

class ProductTagOptionBase
{
    protected $productTagOptionId;
    protected $name;
    protected $description;
    protected $contentGroup;
    protected $sortOrder;
    protected $languageId;
    protected $status;
    protected $filter;
    protected $lastModified;
    protected $dateAdded;
    protected $productOptionId;

    protected $key;

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

    public function getProductOptionId()
    {
        return $this->productOptionId;
    }

    public function getKey()
    {
        return $this->key;
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

    public function setProductOptionId($productOptionId)
    {
        $this->productOptionId = $productOptionId;
    }

    public function setKey($productTagOptionId, $languageId)
    {
        $this->key = [
            'productTagOptionId' => $productTagOptionId,
            'languageId' => $languageId
        ];
    }
}
