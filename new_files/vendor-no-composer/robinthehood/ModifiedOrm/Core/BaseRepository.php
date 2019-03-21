<?php
namespace RobinTheHood\ModifiedOrm\Core;

use RobinTheHood\ModifiedOrm\Core\Database;

class BaseRepository
{
    protected $tableName = '';
    protected $tableIdName = '';
    protected $mapping = [];

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE " . $this->tableIdName . " = '$id'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        return $obj;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        unset($row[$this->tableIdName]);
        $sql = Database::createInsertSql($this->tableName, $row);
        Database::execute($sql);
        $id = xtc_db_insert_id();
        $obj->setId($id);
        return $id;
    }

    public function update($obj)
    {
        $row = Database::objToRow($obj, $this);
        $where = $this->tableIdName . '=' . $obj->getId();
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $where = $this->tableIdName . '=' . $obj->getId();
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
