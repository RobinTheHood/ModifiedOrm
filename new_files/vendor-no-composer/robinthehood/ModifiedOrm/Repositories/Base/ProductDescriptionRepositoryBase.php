<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ProductDescription;

class ProductDescriptionRepositoryBase
{
    private $tableName = 'products_description';
    private $mapping = [
        'productId' => 'products_id',
        'languageId' => 'language_id',
        'name' => 'products_name',
        'description' => 'products_description',
        'shortDescription' => 'products_short_description',
        'keywords' => 'products_keywords',
        'metaTitle' => 'products_meta_title',
        'metaDescription' => 'products_meta_description',
        'metaKeywords' => 'products_meta_keywords',
        'url' => 'products_url',
        'viewed' => 'products_viewed',
        'orderDescription' => 'products_order_description'
    ];

    public function createObj()
    {
        return new ProductDescription();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($productId, $languageId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE products_id = '$productId' and language_id = '$languageId'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        $obj->setKey($obj->getProductId(), $obj->getLanguageId());
        return $obj;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        $sql = Database::createInsertSql($this->tableName, $row);
        $obj->setKey($obj->getProductId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function update($obj)
    {
        $key = $obj->getKey();
        $row = Database::objToRow($obj, $this);
        $where = 'products_id=' . $key['productId'] . ' and language_id=' . $key['languageId'];
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        $obj->setKey($obj->getProductId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $key = $obj->getKey();
        $where = 'products_id=' . $key['productId'] . ' and language_id=' . $key['languageId'];
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
