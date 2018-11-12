<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\ManufacturerInfo;

class ManufacturerInfoRepositoryBase
{
    private $tableName = 'manufacturers_info';
    private $mapping = [
        'manufacturerId' => 'manufacturers_id',
        'languageId' => 'languages_id',
        'description' => 'manufacturers_description',
        'metaTitle' => 'manufacturers_meta_title',
        'metaDescription' => 'manufacturers_meta_description',
        'metaKeywords' => 'manufacturers_meta_keywords',
        'url' => 'manufacturers_url',
        'urlClicked' => 'url_clicked',
        'dateLastClick' => 'date_last_click'
    ];

    public function createObj()
    {
        return new ManufacturerInfo();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($manufacturerId, $languageId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE manufacturers_id = '$manufacturerId' AND languages_id = '$languageId'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        $obj->setKey($obj->getManufacturerId(), $obj->getLanguageId());
        return $obj;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        $sql = Database::createInsertSql($this->tableName, $row);
        $obj->setKey($obj->getManufacturerId(), $obj->getLanguageId());

        Database::execute($sql);
    }

    public function update($obj)
    {
        $key = $obj->getKey();
        $row = Database::objToRow($obj, $this);
        $where = 'manufacturers_id=' . $key['manufacturerid'] . ' and languages_id=' . $key['languageId'];
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        $obj->setKey($obj->getManufacturerId(), $obj->getLanguageId());
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $key = $obj->getKey();
        $where = 'manufacturers_id=' . $key['manufacturerid'] . ' and languages_id=' . $key['languageId'];
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
