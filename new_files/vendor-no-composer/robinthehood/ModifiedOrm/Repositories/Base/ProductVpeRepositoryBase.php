<?php

namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ProductVpe;

class ProductVpeRepositoryBase
{
    private $tableName = 'products_vpe';
    private $mapping = [
        'productVpeId' => 'products_vpe_id',
        'languageId' => 'language_id',
        'name' => 'products_vpe_name'
    ];

    public function createObj()
    {
        return new ProductVpe();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($productVpeId, $languageId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE products_vpe_id = '$productVpeId' and language_id = '$languageId'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        if ($obj) {
            $obj->setKey($obj->getProductVpeId(), $obj->getLanguageId());
        }
        return $obj;
    }

    public function getAllByName($name, $languageId)
    {
        $name = Database::escape($name);
        $sql = "SELECT * FROM " . $this->tableName . " WHERE products_vpe_name = '$name' AND language_id = '$languageId'";
        $rows = Database::getRowsFromSql($sql);
        $objs = Database::rowsToObjs($rows, $this);
        foreach ($objs as $obj) {
            $obj->setKey($obj->getProductVpeId(), $obj->getLanguageId());
        }
        return $objs;
    }

    public function insert($obj)
    {
        if (!$obj->getProductVpeId()) {
            $obj->setProductVpeId($this->getLastId() + 1);
        }

        $row = Database::objToRow($obj, $this);
        $sql = Database::createInsertSql($this->tableName, $row);
        $obj->setKey($obj->getProductVpeId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function update($obj)
    {
        $key = $obj->getKey();
        $row = Database::objToRow($obj, $this);
        $where = 'products_vpe_id=' . $key['productVpeId'] . ' and language_id=' . $key['languageId'];
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        $obj->setKey($obj->getProductVpeId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $key = $obj->getKey();
        $where = 'products_vpe_id=' . $key['productVpeId'] . ' and language_id=' . $key['languageId'];
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }

    public function getLastId()
    {
        $sql = "SELECT products_vpe_id FROM $this->tableName ORDER BY products_vpe_id DESC LIMIT 1";
        $row = Database::getRowFromSql($sql);
        return $row['products_vpe_id'];
    }
}
