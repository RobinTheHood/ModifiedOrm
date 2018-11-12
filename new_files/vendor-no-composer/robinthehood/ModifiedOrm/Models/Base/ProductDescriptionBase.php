<?php
namespace RobinTheHood\ModifiedOrm\Models\Base;

use RobinTheHood\ModifiedOrm\Repositories\ProductRepository;
//use RobinTheHood\ModifiedOrm\Repositories\LanguageRepository;

class ProductDescriptionBase
{
    protected $productId;
    protected $languageId;
    protected $name;
    protected $description;
    protected $shortDescription;
    protected $keywords;
    protected $metaTitle;
    protected $metaDescription;
    protected $metaKeywords;
    protected $url;
    protected $viewed;
    protected $orderDescription;

    protected $key;

    public function getProductId()
    {
        return $this->productId;
    }

    public function getLanguageId()
    {
        return $this->languageId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }

    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getViewed()
    {
        return $this->viewed;
    }

    public function getOrderDescription()
    {
        return $this->orderDescription;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }

    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
    }

    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    }

    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function setViewed($viewed)
    {
        $this->viewed = $viewed;
    }

    public function setOrderDescription($orderDescription)
    {
        $this->orderDescription = $orderDescription;
    }

    public function setKey($productId, $languageId)
    {
        $this->key['productId'] = $productId;
        $this->key['languageId'] = $languageId;
    }

    // GET OBJECTS
    public function getProduct()
    {
        $repo = new ProductRepository();
        $product = $repo->get($this->productId);
        return $product;
    }

    public function getLanguage()
    {
        $repo = new LanguageRepository();
        $language = $repo->get($this->languageId);
        return $language;
    }
}
