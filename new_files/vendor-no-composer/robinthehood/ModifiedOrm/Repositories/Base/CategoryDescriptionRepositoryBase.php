<?php

namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\CategoryDescription;

class CategoryDescriptionRepositoryBase
{
    private $tableName = 'categories_description';
    private $mapping = [
        'categoryId' => 'categories_id',
        'languageId' => 'language_id',
        'name' => 'categories_name',
        'headingTitle' => 'categories_heading_title',
        'description' => 'categories_description',
        'metaTitle' => 'categories_meta_title',
        'metaDescription' => 'categories_meta_description',
        'metaKeywords' => 'categories_meta_keywords'
    ];

    public function createObj()
    {
        return new CategoryDescription();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($categoryId, $languageId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE categories_id = '$categoryId' AND language_id = '$languageId'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        if ($obj) {
            $obj->setKey($obj->getCategoryId(), $obj->getLanguageId());
        }
        return $obj;
    }

    public function getAllByName($name, $languageId)
    {
        $name = Database::escape($name);
        $sql = "SELECT * FROM " . $this->tableName . " WHERE categories_name = '$name' AND language_id = '$languageId'";
        $rows = Database::getRowsFromSql($sql);
        $objs = Database::rowsToObjs($rows, $this);
        foreach ($objs as $obj) {
            $obj->setKey($obj->getCategoryId(), $obj->getLanguageId());
        }
        return $objs;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        $sql = Database::createInsertSql($this->tableName, $row);
        $obj->setKey($obj->getCategoryId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function update($obj)
    {
        $key = $obj->getKey();
        $row = Database::objToRow($obj, $this);
        $where = 'categories_id=' . $key['categoryId'] . ' and language_id=' . $key['languageId'];
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        $obj->setKey($obj->getCategoryId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $key = $obj->getKey();
        $where = 'categories_id=' . $key['categoryId'] . ' and language_id=' . $key['languageId'];
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
