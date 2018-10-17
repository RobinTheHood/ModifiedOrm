<?php
namespace RobinTheHood\ModifiedOrm\Models\Base;

require_once __DIR__ . '/../../Repositories/CategoryRepository.php';
require_once __DIR__ . '/../../Repositories/CategoryDescriptionRepository.php';
use RobinTheHood\ModifiedOrm\Repositories\CategoryRepository;
use RobinTheHood\ModifiedOrm\Repositories\CategoryDescriptionRepository;

class CategoryBase
{
    protected $id;
    protected $image;
    protected $parentId;
    protected $status;
    protected $template;
    protected $groupPermission0;
    protected $groupPermission1;
    protected $groupPermission2;
    protected $groupPermission3;
    protected $groupPermission4;
    protected $listingTemplate;
    protected $sortOrder;
    protected $productSorting;
    protected $productSorting2;
    protected $dateAdded;
    protected $lastModified;

    public function getId()
    {
        return $this->id;
    }

    public function getImage()
    {
      return $this->image;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getTemplate()
    {
        return $this->template;
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

    public function getListingTemplate()
    {
        return $this->listingTemplate;
    }

    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    public function getProductSorting()
    {
        return $this->productSorting;
    }

    public function getProductSorting2()
    {
        return $this->productSorting2;
    }

    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setImage($image)
    {
      $this->image = $image;
    }

    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setTemplate($template)
    {
        $this->template = $template;
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

    public function setListingTemplate($listingTemplate)
    {
        $this->listingTemplate = $listingTemplate;
    }

    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function setProductSorting($productSorting)
    {
        $this->productSorting = $productSorting;
    }

    public function setProductSorting2($productSorting2)
    {
        $this->productSorting2 = $productSorting2;
    }

    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }


    // GET OBJECTS
    public function getParent()
    {
        $repo = new CategoryRepository();
        $category = $repo->get($this->parentId);
        return $category;
    }

    public function getCategoryDescription($languageId)
    {
        $repo = new CategoryDescriptionRepository();
        $categoryDescription = $repo->get($this->id, $languageId);
        return $categoryDescription;
    }
}
