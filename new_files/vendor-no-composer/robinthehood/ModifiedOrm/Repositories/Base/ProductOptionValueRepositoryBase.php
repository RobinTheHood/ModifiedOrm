<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ProductOptionValue;

class ProductOptionValueRepositoryBase
{
    private $tableName = 'products_options_values';
    private $mapping = [
        'productOptionValueId' => 'products_options_values_id',
        'languageId' => 'language_id',
        'name' => 'products_options_values_name'
    ];

    public function createObj()
    {
        return new ProductOptionValue();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($productOptionValueId, $languageId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE products_options_values_id = '$productOptionValueId' and language_id = '$languageId'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        if ($obj) {
            $obj->setKey($obj->getProductOptionValueId(), $obj->getLanguageId());
        }
        return $obj;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        $sql = Database::createInsertSql($this->tableName, $row);
        $obj->setKey($obj->getProductOptionValueId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function update($obj)
    {
        $key = $obj->getKey();
        $row = Database::objToRow($obj, $this);
        $where = 'products_options_values_id=' . $key['productOptionValueId'] . ' and language_id=' . $key['languageId'];
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        $obj->setKey($obj->getProductOptionValueId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $key = $obj->getKey();
        $where = 'products_options_values_id=' . $key['productOptionValueId'] . ' and language_id=' . $key['languageId'];
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
