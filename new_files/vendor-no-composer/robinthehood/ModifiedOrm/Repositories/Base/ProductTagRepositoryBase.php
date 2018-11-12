<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ProductTag;

class ProductTagRepositoryBase
{
    private $tableName = 'products_tags';
    private $mapping = [
        'productId' => 'products_id',
        'productTagOptionId' => 'options_id',
        'productTagValueId' => 'values_id',
        'productOptionId' => 'products_options_id',
        'productOptionValueId' => 'products_options_values_id'
    ];

    public function createObj()
    {
        return new ProductTag();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function setKey($obj)
    {
        $obj->setKey(
            $obj->getProductId(),
            $obj->getProductTagOptionId(),
            $obj->getProductTagValueId()
        );
    }

    public function getKeyWhere($obj)
    {
        $key = $obj->getKey();
        $where = 'products_id=' . $key['productId'] .
                 ' AND options_id=' . $key['productTagOptionId'] .
                 ' AND values_id=' . $key['productTagValueId'];
        return $where;
    }

    public function get($productId, $productTagOptionId, $productTagValueId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE
            products_id = '$productId'
            AND options_id = '$productTagOptionId'
            AND values_id = '$productTagValueId'
        ";

        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        $this->setKey($obj);
        return $obj;
    }

    public function insert($obj)
    {
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
