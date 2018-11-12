<?php
namespace RobinTheHood\ModifiedOrm\Models\Base;

use RobinTheHood\ModifiedOrm\Repositories\ProductDescriptionRepository;
use RobinTheHood\ModifiedOrm\Repositories\ProductVpeRepository;
use RobinTheHood\ModifiedOrm\Repositories\ProductToCategoryRepository;
use RobinTheHood\ModifiedOrm\Repositories\PersonalOfferRepository;
use RobinTheHood\ModifiedOrm\Repositories\ManufacturerRepository;
use RobinTheHood\ModifiedOrm\Repositories\ShippingStatusRepository;

class ProductBase
{
    protected $id;
    protected $ean;
    protected $quantity;
    protected $shippingStatusId;
    protected $model;
    protected $groupPermission0;
    protected $groupPermission1;
    protected $groupPermission2;
    protected $groupPermission3;
    protected $groupPermission4;
    protected $sort;
    protected $image;
    protected $price;
    protected $discountAllowed;
    protected $dateAdded;
    protected $lastModified;
    protected $dateAvailable;
    protected $weight;
    protected $status;
    protected $taxClassId;
    protected $template;
    protected $optionTemplate;
    protected $manufacturerId;
    protected $manufacturerModel;
    protected $ordered;
    protected $fsk18;
    protected $vpe;
    protected $vpeStatus;
    protected $vpeValue;
    protected $startpage;
    protected $startpageSort;

    public function getId()
    {
        return $this->id;
    }

    public function getEan()
    {
        return $this->ean;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getShippingStatusId()
    {
        return $this->shippingStatusId;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getGroupPermission0()
    {
        return $this->groupPermission0;
    }

    public function getGroupPermission1()
    {
        return $this->groupPermission1;
    }

    public function getGroupPermission2()
    {
        return $this->groupPermission2;
    }

    public function getGroupPermission3()
    {
        return $this->groupPermission3;
    }

    public function getGroupPermission4()
    {
        return $this->groupPermission4;
    }

    public function getSort()
    {
        return $this->sort;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDiscountAllowed()
    {
        return $this->discountAllowed;
    }

    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }

    public function getDateAvailable()
    {
        return $this->dateAvailable;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getTaxClassId()
    {
        return $this->taxClassId;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    public function getOptionTemplate()
    {
        return $this->optionTemplate;
    }

    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    public function getManufacturerModel()
    {
        return $this->manufacturerModel;
    }

    public function getOrdered()
    {
        return $this->ordered;
    }

    public function getFsk18()
    {
        return $this->fsk18;
    }

    public function getVpe()
    {
        return $this->vpe;
    }

    public function getVpeStatus()
    {
        return $this->vpeStatus;
    }

    public function getVpeValue()
    {
        return $this->vpeValue;
    }

    public function getStartpage()
    {
        return $this->startpage;
    }

    public function getStartpageSort()
    {
        return $this->startpageSort;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setEan($ean)
    {
        $this->ean = $ean;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function setShippingStatusId($shippingStatusId)
    {
        $this->shippingStatusId = $shippingStatusId;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setGroupPermission0($groupPermission0)
    {
        $this->groupPermission0 = $groupPermission0;
    }

    public function setGroupPermission1($groupPermission1)
    {
        $this->groupPermission1 = $groupPermission1;
    }

    public function setGroupPermission2($groupPermission2)
    {
        $this->groupPermission2 = $groupPermission2;
    }

    public function setGroupPermission3($groupPermission3)
    {
        $this->groupPermission3 = $groupPermission3;
    }

    public function setGroupPermission4($groupPermission4)
    {
        $this->groupPermission4 = $groupPermission4;
    }

    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setDiscountAllowed($discountAllowed)
    {
        $this->discountAllowed = $discountAllowed;
    }

    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    public function setDateAvailable($dateAvailable)
    {
        $this->dateAvailable = $dateAvailable;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setTaxClassId($taxClassId)
    {
        $this->taxClassId = $taxClassId;
    }

    public function setTemplate($template)
    {
        $this->template = $template;
    }

    public function setOptionTemplate($optionTemplate)
    {
        $this->optionTemplate = $optionTemplate;
    }

    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;
    }

    public function setManufacturerModel($manufacturerModel)
    {
        $this->manufacturerModel = $manufacturerModel;
    }

    public function setOrdered($ordered)
    {
        $this->ordered = $ordered;
    }

    public function setFsk18($fsk18)
    {
        $this->fsk18 = $fsk18;
    }

    public function setVpe($vpe)
    {
        $this->vpe = $vpe;
    }

    public function setVpeStatus($vpeStatus)
    {
        $this->vpeStatus = $vpeStatus;
    }

    public function setVpeValue($vpeValue)
    {
        $this->vpeValue = $vpeValue;
    }

    public function setStartpage($startpage)
    {
        $this->startpage = $startpage;
    }

    public function setStartpageSort($startpageSort)
    {
        $this->startpageSort = $startpageSort;
    }

    // GET OBJECTS
    public function getProductDescription($languageId)
    {
        $repo = new ProductDescriptionRepository();
        $productDescription = $repo->get($this->id, $languageId);
        return $productDescription;
    }

    public function getProductVpe($languageId)
    {
        $repo = new ProductVpeRepository();
        $productVpe = $repo->get($this->vpeStatus, $languageId);
        return $productVpe;
    }

    public function getManufacturer()
    {
        $repo = new ManufacturerRepository();
        $manufacturer = $repo->get($this->manufacturerId);
        return $manufacturer;
    }

    public function getShippingStatus($languageId)
    {
        $repo = new ShippingStatusRepository();
        $shippingStatus = $repo->get($this->shippingStatusId, $languageId);
        return $shippingStatus;
    }

    public function getProductToCategorys()
    {
        $repo = new ProductToCategoryRepository();
        $productToCategorys = $repo->getAllByProductId($this->id);
        return $productToCategorys;
    }

    public function getPersonalOffers($customerStatusId)
    {
        $repo = new PersonalOfferRepository();
        $personalOffers = $repo->getByCustomerStatusId($this->id, $customerStatusId);
        return $personalOffers;
    }
}
