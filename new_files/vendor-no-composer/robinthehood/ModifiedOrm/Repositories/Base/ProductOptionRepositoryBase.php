<?php

namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ProductOption;

class ProductOptionRepositoryBase
{
    private $tableName = 'products_options';
    private $mapping = [
        'productOptionId' => 'products_options_id',
        'languageId' => 'language_id',
        'name' => 'products_options_name',
        'sortOrder' => 'products_options_sortorder'
    ];

    public function createObj()
    {
        return new ProductOption();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($productOptionId, $languageId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE products_options_id = '$productOptionId' and language_id = '$languageId'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        if ($obj) {
            $obj->setKey($obj->getProductOptionId(), $obj->getLanguageId());
        }
        return $obj;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        $sql = Database::createInsertSql($this->tableName, $row);
        $obj->setKey($obj->getProductOptionId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function update($obj)
    {
        $key = $obj->getKey();
        $row = Database::objToRow($obj, $this);
        $where = 'products_options_id=' . $key['productOptionId'] . ' and language_id=' . $key['languageId'];
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        $obj->setKey($obj->getProductOptionId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $key = $obj->getKey();
        $where = 'products_options_id=' . $key['productOptionId'] . ' and language_id=' . $key['languageId'];
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
