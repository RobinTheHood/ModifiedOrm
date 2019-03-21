<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Core\BaseRepository;
use RobinTheHood\ModifiedOrm\Models\ContentManager;

class ContentManagerRepositoryBase extends BaseRepository
{
    protected $tableName = 'content_manager';
    protected $tableIdName = 'content_id';
    protected $mapping = [
        'id' => 'content_id',
        'categoryId' => 'categories_id',
        'parentId' => 'parent_id',
        'groupIds' => 'group_ids',
        'languageId' => 'languages_id',
        'contentTitle' => 'content_title',
        'contentHeading' => 'content_heading',
        'contentText' => 'content_text',
        'sortOrder' => 'sort_order',
        'fileFlag' => 'file_flag',
        'contentFile' => 'content_file',
        'contentStatus' => 'content_status',
        'contentGroup' => 'content_group',
        'contentDelete' => 'content_delete',
        'contentMetaTitle' => 'content_meta_title',
        'contentMetaDescription' => 'content_meta_description',
        'contentMetaKeywords' => 'content_meta_keywords',
        'contentMetaRobots' => 'content_meta_robots',
        'contentActive' => 'content_active',
        'contentGroupIndex' => 'content_group_index',
        'dateAdded' => 'date_added',
        'lastModified' => 'last_modified'
    ];

    public function createObj()
    {
        return new ContentManager();
    }

    // public function getMapping()
    // {
    //     return $this->mapping;
    // }

    // public function get($id)
    // {
    //     $sql = "SELECT * FROM " . $this->tableName . " WHERE " . $this->tableIdName . " = '$id'";
    //     $row = Database::getRowFromSql($sql);
    //     $obj = Database::rowToObj($row, $this);
    //     return $obj;
    // }

    public function getAllByContentGroupAndLangaugeId($contentGroup, $languageId)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE content_group = '$contentGroup' AND languages_id = '$languageId'";
        $rows = Database::getRowsFromSql($sql);
        $objs = Database::rowsToObjs($rows, $this);
        return $objs;
    }

    // public function insert($obj)
    // {
    //     $row = Database::objToRow($obj, $this);
    //     unset($row[$this->tableIdName]);
    //     $sql = Database::createInsertSql($this->tableName, $row);
    //     Database::execute($sql);
    //     $id = xtc_db_insert_id();
    //     $obj->setId($id);
    //     return $id;
    // }
    //
    // public function update($obj)
    // {
    //     $row = Database::objToRow($obj, $this);
    //     $where = $this->tableIdName . '=' . $obj->getId();
    //     $sql = Database::createUpdateSql($this->tableName, $row, $where);
    //     Database::execute($sql);
    // }
    //
    // public function delete($obj)
    // {
    //     $where = $this->tableIdName . '=' . $obj->getId();
    //     $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
    //     Database::execute($sql);
    // }
}
