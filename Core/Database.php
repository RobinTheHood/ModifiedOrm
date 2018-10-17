<?php
namespace RobinTheHood\ModifiedOrm\Core;

require_once __DIR__ . '/Debug.php';
use RobinTheHood\ModifiedOrm\Core\Debug;

class Database
{
    public static function error()
    {
        global $db_link;
        Debug::out(mysqli_error($db_link));
    }

    public static function execute($sql)
    {
        $query = xtc_db_query($sql);
        self::error();
    }

    public static function getRowFromSql($sql)
    {
        $query = xtc_db_query($sql);

        self::error();
        $row = xtc_db_fetch_array($query);
        return $row;
    }

    public static function getRowsFromSql($sql)
    {
        $query = xtc_db_query($sql);
        self::error();

        $rows = array();
        while($row = xtc_db_fetch_array($query)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public static function createInsertSql($tableName, $row)
    {
        $size = count($row);
        foreach($row as $columnName => $columnValue) {
            $columnNames .= $columnName;
            $columnValues .= "'" . $columnValue . "'";

            if (++$count < $size) {
                $columnNames .= ', ';
                $columnValues .= ', ';
            }
        }

        $sql = "INSERT INTO $tableName ($columnNames) VALUES ($columnValues)";
        return $sql;
    }

    public static function createUpdateSql($tableName, $row, $where)
    {
        $size = count($row);
        foreach($row as $columnName => $columnValue) {
            $set .= $columnName . "='" . $columnValue . "'";
            if (++$count < $size) {
                $set .= ', ';
            }
        }

        $sql = "UPDATE $tableName SET $set WHERE $where";
        return $sql;
    }

    public static function rowToObj($row, $repo)
    {
        if ($row) {
            $mapping = $repo->getMapping();
            $obj = $repo->createObj();
            foreach($mapping as $key => $value) {
                $methodName = 'set' . ucfirst($key);
                $columnName = $value;
                $obj->$methodName($row[$columnName]);
            }
            return $obj;
        }
        return null;
    }

    public static function rowsToObjs($rows, $repo)
    {
        $objs = array();
        foreach($rows as $row) {
            $obj = self::rowToObj($row, $repo, $mapping);
            if ($obj) {
                $objs[] = $obj;
            }
        }
        return $objs;
    }


    public static function objToRow($obj, $repo)
    {
        if ($obj) {
            $mapping = $repo->getMapping();
            $row = array();
            foreach($mapping as $key => $value) {
                $methodName = 'get' . ucfirst($key);
                $columnName = $value;
                $row[$columnName] = $obj->$methodName();
            }
            return $row;
        }
        return null;
    }
}
