<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ProductImage;

class ProductImageRepositoryBase
{
    private $tableName = 'products_images';
    private $mapping = [
        'id' => 'image_id',
        'productId' => 'products_id',
        'sort' => 'image_nr',
        'name' => 'image_name'
    ];

    public function createObj()
    {
        return new ProductImage();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE image_id = '$id'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        return $obj;
    }

    public function getAllByProductId($productId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE products_id = '$productId' ";
        $rows = Database::getRowsFromSql($sql);
        $objs = Database::rowsToObjs($rows, $this);
        return $objs;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        unset($row['image_id']);
        $sql = Database::createInsertSql($this->tableName, $row);
        Database::execute($sql);
        $id = xtc_db_insert_id();
        $obj->setId($id);
        return $id;
    }

    public function update($obj)
    {
        $row = Database::objToRow($obj, $this);
        $where = 'image_id=' . $obj->getId();
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $where = 'image_id=' . $obj->getId();
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
