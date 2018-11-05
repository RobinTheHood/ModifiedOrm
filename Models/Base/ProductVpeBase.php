<?php
namespace RobinTheHood\ModifiedOrm\Models\Base;

//use RobinTheHood\ModifiedOrm\Repositories\LanguageRepository;

class ProductVpeBase
{
    protected $productVpeId;
    protected $languageId;
    protected $name;

    protected $key;

    public function getProductVpeId()
    {
        return $this->productVpeId;
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

    public function setProductVpeId($productVpeId)
    {
        $this->productVpeId = $productVpeId;
    }

    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setKey($productVpeId, $languageId)
    {
        $this->key['productVpeId'] = $productVpeId;
        $this->key['languageId'] = $languageId;
    }

    // GET OBJECTS
    public function getLanguage()
    {
        $repo = new LanguageRepository();
        $language = $repo->get($this->languageId);
        return $language;
    }
}
