<?php
namespace RobinTheHood\ModifiedOrm\Models\Base;

use RobinTheHood\ModifiedOrm\Repositories\CategoryRepository;

class CategoryDescriptionBase
{
    protected $categoryId;
    protected $languageId;
    protected $name;
    protected $headingTitle;
    protected $description;
    protected $metaTitle;
    protected $metaDescription;
    protected $metaKeywords;

    protected $key;

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function getLanguageId()
    {
        return $this->languageId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHeadingTitle()
    {
        return $this->headingTitle;
    }

    public function getDescription()
    {
        return $this->description;
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

    public function getKey()
    {
        return $this->key;
    }


    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setHeadingTitle($headingTitle)
    {
        $this->headingTitle = $headingTitle;
    }

    public function setDescription($description)
    {
        $this->description = $description;
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

    public function setKey($categoryId, $languageId)
    {
        $this->key['categoryId'] = $categoryId;
        $this->key['languageId'] = $languageId;
    }

    // GET OBJECTS
    public function getCategory()
    {
        $repo = new CategoryRepository();
        $category = $repo->get($this->categoryId);
        return $category;
    }
}
