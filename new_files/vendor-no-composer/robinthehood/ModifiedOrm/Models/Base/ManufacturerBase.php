<?php

namespace RobinTheHood\ModifiedOrm\Models\Base;

//use RobinTheHood\ModifiedOrm\Repositories\ProductRepository;

class ManufacturerBase
{
    protected $id;
    protected $name;
    protected $image;
    protected $dateAdded;
    protected $lastModified;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImage()
    {
        return $this->image;
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

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setImage($image)
    {
        $this->image = $image;
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
