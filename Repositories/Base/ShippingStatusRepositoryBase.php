<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

require_once __DIR__ . '/../../Core/Database.php';
require_once __DIR__ . '/../../Models/ShippingStatus.php';

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ShippingStatus;

class ShippingStatusRepositoryBase
{
    private $tableName = 'shipping_status';
    private $mapping = [
        'shippingStatusId' => 'shipping_status_id',
        'languageId' => 'language_id',
        'name' => 'shipping_status_name',
        'image' => 'shipping_status_image',
        'sortOrder' => 'sort_order'
    ];

    public function createObj()
    {
        return new ShippingStatus();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($shippingStatusId, $languageId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE shipping_status_id = '$shippingStatusId' and language_id = '$languageId'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        $obj->setKey($obj->getShippingStatusId(), $obj->getLanguageId());
        return $obj;
    }

    public function getAllByName($name, $languageId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE shipping_status_name = '$name' and language_id = '$languageId'";
        $rows = Database::getRowsFromSql($sql);
        $objs = Database::rowsToObjs($rows, $this);
        foreach($objs as $obj) {
            $obj->setKey($obj->getShippingStatusId(), $obj->getLanguageId());
        }
        return $objs;
    }

    public function insert($obj)
    {
        if ($obj->getShippingStatusId() >= 0) {
            $id = Database::getNextId($this->tableName, 'shipping_status_id');
            $obj->setShippingStatusId($id);
        }
        $row = Database::objToRow($obj, $this);
        $sql = Database::createInsertSql($this->tableName, $row);
        $obj->setKey($obj->getShippingStatusId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function update($obj)
    {
        $key = $obj->getKey();
        $row = Database::objToRow($obj, $this);
        $where = 'shipping_status_id=' . $key['shippingStatusId'] . ' and language_id=' . $key['languageId'];
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        $obj->setKey($obj->getShippingStatusId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $key = $obj->getKey();
        $where = 'shipping_status_id=' . $key['shippingStatusId'] . ' and language_id=' . $key['languageId'];
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
