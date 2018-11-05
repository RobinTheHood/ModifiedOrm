<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ProductToCategory;

class ProductToCategoryRepositoryBase
{
    private $tableName = 'products_to_categories';
    private $mapping = [
        'productId' => 'products_id',
        'categoryId' => 'categories_id'
    ];

    public function createObj()
    {
        return new ProductToCategory();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function getAllByProductId($productId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE products_id = '$productId'";
        $rows = Database::getRowsFromSql($sql);
        $objs = Database::rowsToObjs($rows, $this);
        foreach($objs as $obj) {
            $obj->setKey($obj->getProductId(), $obj->getCategoryId());
        }
        return $objs;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        $sql = Database::createInsertSql($this->tableName, $row);
        $obj->setKey($obj->getProductId(), $obj->getCategoryId());
        Database::execute($sql);
    }


    public function update($obj)
    {
        $key = $obj->getKey();
        $row = Database::objToRow($obj, $this);
        $where = 'products_id=' . $key['productId'] . ' and categories_id=' . $key['categoryId'];
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        $obj->setKey($obj->getProductId(), $obj->getCategoryId());
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $key = $obj->getKey();
        $where = 'products_id=' . $key['productId'] . ' and categories_id=' . $key['categoryId'];
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
