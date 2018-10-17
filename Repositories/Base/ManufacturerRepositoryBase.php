<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

require_once __DIR__ . '/../../Core/Database.php';
require_once __DIR__ . '/../../Models/Manufacturer.php';

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\Manufacturer;

class ManufacturerRepositoryBase
{
    private $tableName = 'manufacturers';
    private $mapping = [
        'id' => 'manufacturers_id',
        'name' => 'manufacturers_name',
        'image' => 'manufacturers_image',
        'dateAdded' => 'date_added',
        'lastModified' => 'last_modified'
    ];

    public function createObj()
    {
        return new Manufacturer();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE manufacturers_id = '$id'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        return $obj;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        unset($row['manufacturers_id']);
        $sql = Database::createInsertSql($this->tableName, $row);
        Database::execute($sql);
        $id = xtc_db_insert_id();
        $obj->setId($id);
        return $id;
    }

    public function update($obj)
    {
        $row = Database::objToRow($obj, $this);
        $where = 'manufacturers_id=' . $obj->getId();
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $where = 'manufacturers_id=' . $obj->getId();
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
