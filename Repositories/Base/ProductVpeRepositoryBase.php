<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

require_once __DIR__ . '/../../Core/Database.php';
require_once __DIR__ . '/../../Models/ProductVpe.php';

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ProductVpe;

class ProductVpeRepositoryBase
{
    private $tableName = 'products_vpe';
    private $mapping = [
        'productVpeId' => 'products_vpe_id',
        'languageId' => 'language_id',
        'name' => 'products_vpe_name'
    ];

    public function createObj()
    {
        return new ProductVpe();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($productVpeId, $languageId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE products_vpe_id = '$productVpeId' and language_id = '$languageId'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        $obj->setKey($obj->getProductVpeId(), $obj->getLanguageId());
        return $obj;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        $sql = Database::createInsertSql($this->tableName, $row);
        $obj->setKey($obj->getProductVpeId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function update($obj)
    {
        $key = $obj->getKey();
        $row = Database::objToRow($obj, $this);
        $where = 'products_vpe_id=' . $key['productVpeId'] . ' and language_id=' . $key['languageId'];
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        $obj->setKey($obj->getProductVpeId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $key = $obj->getKey();
        $where = 'products_vpe_id=' . $key['productVpeId'] . ' and language_id=' . $key['languageId'];
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
