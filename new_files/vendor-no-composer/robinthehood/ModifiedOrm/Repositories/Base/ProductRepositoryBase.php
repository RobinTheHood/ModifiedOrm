<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\Product;

class ProductRepositoryBase
{
    private $tableName = 'products';
    private $mapping = [
        'id' => 'products_id',
        'ean' => 'products_ean',
        'quantity' => 'products_quantity',
        'shippingStatusId' => 'products_shippingtime',
        'model' => 'products_model',
        'groupPermission0' => 'group_permission_0',
        'groupPermission1' => 'group_permission_1',
        'groupPermission2' => 'group_permission_2',
        'groupPermission3' => 'group_permission_3',
        'groupPermission4' => 'group_permission_4',
        'sort' => 'products_sort',
        'image' => 'products_image',
        'price' => 'products_price',
        'discountAllowed' => 'products_discount_allowed',
        'dateAdded' => 'products_date_added',
        'lastModified' => 'products_last_modified',
        'dateAvailable' => 'products_date_available',
        'weight' => 'products_weight',
        'status' => 'products_status',
        'taxClassId' => 'products_tax_class_id',
        'template' => 'product_template',
        'optionTemplate' => 'options_template',
        'manufacturerId' => 'manufacturers_id',
        'manufacturerModel' => 'products_manufacturers_model',
        'ordered' => 'products_ordered',
        'fsk18' => 'products_fsk18',
        'vpe' => 'products_vpe',
        'vpeStatus' => 'products_vpe_status',
        'vpeValue' => 'products_vpe_value',
        'startpage' => 'products_startpage',
        'startpageSort' => 'products_startpage_sort'
    ];

    public function createObj()
    {
        return new Product();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE products_id = '$id'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        return $obj;
    }

    public function getAllByModel($model)
    {
        $name = Database::escape($model);
        $sql = "SELECT * FROM " . $this->tableName . " WHERE products_model = '$model'";
        $rows = Database::getRowsFromSql($sql);
        $objs = Database::rowsToObjs($rows, $this);
        return $objs;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        unset($row['products_id']);
        $sql = Database::createInsertSql($this->tableName, $row);
        Database::execute($sql);
        $id = xtc_db_insert_id();
        $obj->setId($id);
        return $id;
    }

    public function update($obj)
    {
        $row = Database::objToRow($obj, $this);
        $where = 'products_id=' . $obj->getId();
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $where = 'products_id=' . $obj->getId();
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
