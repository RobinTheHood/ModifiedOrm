<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ProductTagOption;

class ProductTagOptionRepositoryBase
{
    private $tableName = 'products_tags_options';
    private $mapping = [
        'productTagOptionId' => 'options_id',
        'name' => 'options_name',
        'description' => 'options_description',
        'contentGroup' => 'options_content_group',
        'sortOrder' => 'sort_order',
        'languageId' => 'languages_id',
        'status' => 'status',
        'filter' => 'filter',
        'lastModified' => 'last_modified',
        'dateAdded' => 'date_added',
        'productOptionId' => 'products_options_id'
    ];

    public function createObj()
    {
        return new ProductTagOption();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function setKey($obj)
    {
        $obj->setKey(
            $obj->getProductTagOptionId(),
            $obj->getLanguageId()
        );
    }

    public function getKeyWhere($obj)
    {
        $key = $obj->getKey();
        $where = 'options_id=' . $key['productTagOptionId'] .
                 ' AND languages_id=' . $key['languageId'];
        return $where;
    }

    public function get($productTagOptionId, $languageId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE
            options_id = '$productTagOptionId'
            AND languages_id = '$languageId'
        ";

        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        $this->setKey($obj);
        return $obj;
    }

    public function getAllByName($name, $languageId)
    {
        $name = Database::escape($name);
        $sql = "SELECT * FROM " . $this->tableName . " WHERE options_name = '$name' and languages_id = '$languageId'";
        $rows = Database::getRowsFromSql($sql);
        $objs = Database::rowsToObjs($rows, $this);
        foreach($objs as $obj) {
            $this->setKey($obj);
        }
        return $objs;
    }

    public function insert($obj)
    {
        if ($obj->getProductTagOptionId() >= 0) {
            $id = Database::getNextId($this->tableName, 'options_id');
            $obj->setProductTagOptionId($id);
        }
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
