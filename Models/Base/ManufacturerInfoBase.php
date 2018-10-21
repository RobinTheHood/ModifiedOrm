<?php
namespace RobinTheHood\ModifiedOrm\Models\Base;

require_once __DIR__ . '/../../Repositories/ManufacturerRepository.php';
use RobinTheHood\ModifiedOrm\Repositories\ManufacturerRepository;

class ManufacturerInfoBase
{
    protected $manufacturerId;
    protected $languageId;
    protected $description;
    protected $metaTitle;
    protected $metaDescription;
    protected $metaKeywords;
    protected $url;
    protected $urlClicked;
    protected $dateLastClick;

    protected $key;

    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    public function getLanguageId()
    {
        return $this->languageId;
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

    public function getUrl()
    {
        return $this->url;
    }

    public function getUrlClicked()
    {
        return $this->urlClicked;
    }

    public function getDateLastClick()
    {
        return $this->dateLastClick;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;
    }

    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
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

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function setUrlClicked($urlClicked)
    {
        $this->urlClicked = $urlClicked;
    }

    public function setDateLastClick($dateLastClick)
    {
        $this->dateLastClick = $dateLastClick;
    }

    public function setKey($manufacturerId, $languageId)
    {
        $this->key['manufacturerId'] = $manufacturerId;
        $this->key['languageId'] = $languageId;
    }

    // GET OBJECTS
    public function getManufacturer()
    {
        $repo = new ManufacturerRepository();
        $manufacturer = $repo->get($this->manufacturerId);
        return $manufacturer;
    }

    public function getLanguage()
    {
        $repo = new LanguageRepository();
        $language = $repo->get($this->languageId);
        return $language;
    }
}
