<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\Category;

class CategoryRepositoryBase
{
    private $tableName = 'categories';
    private $mapping = [
        'id' => 'categories_id',
        'image' => 'categories_image',
        'parentId' => 'parent_id',
        'status' => 'categories_status',
        'template' => 'categories_template',
        'groupPermission0' => 'group_permission_0',
        'groupPermission1' => 'group_permission_1',
        'groupPermission2' => 'group_permission_2',
        'groupPermission3' => 'group_permission_3',
        'groupPermission4' => 'group_permission_4',
        'listingTemplate' => 'listing_template',
        'sortOrder' => 'sort_order',
        'productSorting' => 'products_sorting',
        'productSorting2' => 'products_sorting2',
        'dateAdded' => 'date_added',
        'lastModified' => 'last_modified'
    ];

    public function createObj()
    {
        return new Category();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE categories_id = '$id'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        return $obj;
    }

    public function insert($obj, $forceKey)
    {
        $row = Database::objToRow($obj, $this);
        if (!$forceKey) {
            unset($row['categories_id']);
        }
        $sql = Database::createInsertSql($this->tableName, $row);
        Database::execute($sql);

        if (!$forceKey) {
            $id = xtc_db_insert_id();
            $obj->setId($id);
        } else {
            $id = $row['categories_id'];
        }
        
        return $id;
    }

    public function update($obj)
    {
        $row = Database::objToRow($obj, $this);
        $where = 'categories_id=' . $obj->getId();
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $where = 'categories_id=' . $obj->getId();
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
