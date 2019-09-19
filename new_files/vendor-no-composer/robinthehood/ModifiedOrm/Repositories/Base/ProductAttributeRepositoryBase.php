<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ProductAttribute;

class ProductAttributeRepositoryBase
{
    private $tableName = 'products_attributes';
    private $mapping = [
        'id' => 'products_attributes_id',
        'productId' => 'products_id',
        'optionId' => 'options_id',
        'optionValueId' => 'options_values_id',
        'optionValuePrice' => 'options_values_price',
        'pricePrefix' => 'price_prefix',
        'model' => 'attributes_model',
        'stock' => 'attributes_stock',
        'optionValueWeight' => 'options_values_weight',
        'weightPrefix' => 'weight_prefix',
        'sortOrder' => 'sortorder',
        'ean' => 'attributes_ean',
        'vpeId' => 'attributes_vpe_id',
        'vpeValue' => 'attributes_vpe_value'
    ];

    public function createObj()
    {
        return new ProductAttribute();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE products_attributes_id = '$id'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        return $obj;
    }

    public function getAllByProductId($productId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE products_id = '$productId'";
        $rows = Database::getRowsFromSql($sql);
        $objs = Database::rowsToObjs($rows, $this);
        return $objs;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        unset($row['products_attributes_id']);
        $sql = Database::createInsertSql($this->tableName, $row);
        Database::execute($sql);
        $id = xtc_db_insert_id();
        $obj->setId($id);
        return $id;
    }

    public function update($obj)
    {
        $row = Database::objToRow($obj, $this);
        $where = 'products_attributes_id=' . $obj->getId();
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $where = 'products_attributes_id=' . $obj->getId();
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
