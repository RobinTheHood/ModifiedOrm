<?php

namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ProductTagValue;

class ProductTagValueRepositoryBase
{
    private $tableName = 'products_tags_values';
    private $mapping = [
        'productTagValueId' => 'values_id',
        'productTagOptionId' => 'options_id',
        'name' => 'values_name',
        'description' => 'values_description',
        'image' => 'values_image',
        'contentGroup' => 'values_content_group',
        'sortOrder' => 'sort_order',
        'languageId' => 'languages_id',
        'status' => 'status',
        'filter' => 'filter',
        'lastModified' => 'last_modified',
        'dateAdded' => 'date_added',
        'productOptionValueId' => 'products_options_values_id',
    ];

    public function createObj()
    {
        return new ProductTagValue();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function setKey($obj)
    {
        $obj->setKey(
            $obj->getProductTagValueId(),
            $obj->getLanguageId()
        );
    }

    public function getKeyWhere($obj)
    {
        $key = $obj->getKey();
        $where = 'values_id=' . $key['productTagValueId'] .
                 ' AND languages_id=' . $key['languageId'];
        return $where;
    }

    public function get($productTagOptionId, $languageId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE
            values_id = '$productTagValueId'
            AND languages_id = '$languageId'
        ";

        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        $this->setKey($obj);
        return $obj;
    }

    public function getAllByName($name, $languageId)
    {
        $name = Database::escape($name);

        $sql = "SELECT * FROM " . $this->tableName . " WHERE
            values_name = '$name'
            AND languages_id = '$languageId'
        ";
        $rows = Database::getRowsFromSql($sql);
        $objs = Database::rowsToObjs($rows, $this);
        foreach ($objs as $obj) {
            $this->setKey($obj);
        }
        return $objs;
    }

    public function insert($obj)
    {
        if ($obj->getProductTagValueId() >= 0) {
            $id = Database::getNextId($this->tableName, 'values_id');
            $obj->setProductTagValueId($id);
        }
        $row = Database::objToRow($obj, $this);
        $sql = Database::createInsertSql($this->tableName, $row);
        $this->setKey($obj);
        Database::execute($sql);
    }

    public function update($obj)
    {
        $row = Database::objToRow($obj, $this);
        $where = $this->getKeyWhere();
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        $this->setKey($obj);
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $where = $this->getKeyWhere();
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
