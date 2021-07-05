<?php

namespace RobinTheHood\ModifiedOrm\Models\Base;

class ContentManagerBase
{
    protected $id;
    protected $categoryId;
    protected $parentId;
    protected $groupIds;
    protected $languageId;
    protected $contentTitle;
    protected $contentHeading;
    protected $contentText;
    protected $sortOrder;
    protected $fileFlag;
    protected $contentFile;
    protected $contentStatus;
    protected $contentGroup;
    protected $contentDelete;
    protected $contentMetaTitle;
    protected $contentMetaDescription;
    protected $contentMetaKeywords;
    protected $contentMetaRobots;
    protected $contentActive;
    protected $contentGroupIndex;
    protected $dateAdded;
    protected $lastModified;

    public function getId()
    {
        return $this->id;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function getParentId()
    {
        return $this->parentId;
    }

    public function getGroupIds()
    {
        return $this->groupIds;
    }

    public function getLanguageId()
    {
        return $this->languageId;
    }

    public function getContentTitle()
    {
        return $this->contentTitle;
    }

    public function getContentHeading()
    {
        return $this->contentHeading;
    }

    public function getContentText()
    {
        return $this->contentText;
    }

    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    public function getFileFlag()
    {
        return $this->fileFlag;
    }

    public function getContentFile()
    {
        return $this->contentFile;
    }

    public function getContentStatus()
    {
        return $this->contentStatus;
    }

    public function getContentGroup()
    {
        return $this->contentGroup;
    }

    public function getContentDelete()
    {
        return $this->contentDelete;
    }

    public function getContentMetaTitle()
    {
        return $this->contentMetaTitle;
    }

    public function getContentMetaDescription()
    {
        return $this->contentMetaDescription;
    }

    public function getContentMetaKeywords()
    {
        return $this->contentMetaKeywords;
    }

    public function getContentMetaRobots()
    {
        return $this->contentMetaRobots;
    }

    public function getContentActive()
    {
        return $this->contentActive;
    }

    public function getContentGroupIndex()
    {
        return $this->contentGroupIndex;
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

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

    public function setGroupIds($groupIds)
    {
        $this->groupIds = $groupIds;
    }

    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
    }

    public function setContentTitle($contentTitle)
    {
        $this->contentTitle = $contentTitle;
    }

    public function setContentHeading($contentHeading)
    {
        $this->contentHeading = $contentHeading;
    }

    public function setContentText($contentText)
    {
        $this->contentText = $contentText;
    }

    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function setFileFlag($fileFlag)
    {
        $this->fileFlag = $fileFlag;
    }

    public function setContentFile($contentFile)
    {
        $this->contentFile = $contentFile;
    }

    public function setContentStatus($contentStatus)
    {
        $this->contentStatus = $contentStatus;
    }

    public function setContentGroup($contentGroup)
    {
        $this->contentGroup = $contentGroup;
    }

    public function setContentDelete($contentDelete)
    {
        $this->contentDelete = $contentDelete;
    }

    public function setContentMetaTitle($contentMetaTitle)
    {
        $this->contentMetaTitle = $contentMetaTitle;
    }

    public function setContentMetaDescription($contentMetaDescription)
    {
        $this->contentMetaDescription = $contentMetaDescription;
    }

    public function setContentMetaKeywords($contentMetaKeywords)
    {
        $this->contentMetaKeywords = $contentMetaKeywords;
    }

    public function setContentMetaRobots($contentMetaRobots)
    {
        $this->contentMetaRobots = $contentMetaRobots;
    }

    public function setContentActive($contentActive)
    {
        $this->contentActive = $contentActive;
    }

    public function setContentGroupIndex($contentGroupIndex)
    {
        $this->contentGroupIndex = $contentGroupIndex;
    }

    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }
}
