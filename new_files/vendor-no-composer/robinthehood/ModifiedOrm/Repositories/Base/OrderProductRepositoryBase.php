<?php

namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\OrderProduct;

class OrderProductRepositoryBase
{
    private $tableName = 'orders_products';
    private $mapping = [
        'id' => 'orders_products_id',
        'orderId' => 'orders_id',
        'productId' => 'products_id',
        'productModel' => 'products_model',
        'productEan' => 'products_ean',
        'productName' => 'products_name',
        'productPrice' => 'products_price',
        'productPriceOrigin' => 'products_price_origin',
        'productDiscountMade' => 'products_discount_made',
        'productShippingTime' => 'products_shipping_time',
        'finalPrice' => 'final_price',
        'productTax' => 'products_tax',
        'productQuantity' => 'products_quantity',
        'allowTax' => 'allow_tax',
        'productOrderDescription' => 'products_order_description',
        'productWeight' => 'products_weight'
    ];

    public function createObj()
    {
        return new OrderProduct();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE orders_products_id = '$id'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        return $obj;
    }

    public function getAllByOrderId($orderId)
    {
        $name = Database::escape($model);
        $sql = "SELECT * FROM " . $this->tableName . " WHERE orders_id = '$orderId'";
        $rows = Database::getRowsFromSql($sql);
        $objs = Database::rowsToObjs($rows, $this);
        return $objs;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        unset($row['orders_products_id']);
        $sql = Database::createInsertSql($this->tableName, $row);
        Database::execute($sql);
        $id = xtc_db_insert_id();
        $obj->setId($id);
        return $id;
    }

    public function update($obj)
    {
        $row = Database::objToRow($obj, $this);
        $where = 'orders_products_id=' . $obj->getId();
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $where = 'orders_products_id=' . $obj->getId();
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
