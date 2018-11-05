<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\PersonalOffer;

class PersonalOfferRepositoryBase
{
    private $tableName = 'personal_offers_by_customers_status_';
    private $mapping = [
        'id' => 'price_id',
        'productId' => 'products_id',
        'quantity' => 'quantity',
        'personalOffer' => 'personal_offer'
    ];

    public function createObj()
    {
        return new PersonalOffer();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function getByCustomerStatusId($productId, $customerStatusId)
    {
        $table = $this->tableName . $customerStatusId;
        $sql = "SELECT * FROM $table WHERE products_id = '$productId'";
        $rows = Database::getRowsFromSql($sql);
        $objs = Database::rowsToObjs($rows, $this);
        return $objs;
    }

    public function insert($obj, $customerStatusId)
    {
        $table = $this->tableName . $customerStatusId;
        $row = Database::objToRow($obj, $this);
        unset($row['price_id']);
        $sql = Database::createInsertSql($table, $row);
        Database::execute($sql);
        $id = xtc_db_insert_id();
        $obj->setId($id);
        return $id;
    }

    public function update($obj, $customerStatusId)
    {
        $table = $this->tableName . $customerStatusId;
        $row = Database::objToRow($obj, $this);
        $where = 'price_id=' . $obj->getId();
        $sql = Database::createUpdateSql($table, $row, $where);
        Database::execute($sql);
    }

    public function delete($obj, $customerStatusId)
    {
        $table = $this->tableName . $customerStatusId;
        $where = 'price_id=' . $obj->getId();
        $sql = "DELETE FROM $table WHERE $where";
        Database::execute($sql);
    }
}
