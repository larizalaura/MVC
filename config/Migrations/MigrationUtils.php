<?php

use Migrations\AbstractMigration;

class MigrationUtils
{
    public function checkDrop($phinx, $tableName)
    {
        $table = $phinx->table($tableName);
        if($table->exists()) {
            $phinx->execute("ALTER TABLE $tableName AUTO_INCREMENT=1");
            $table->drop();
        }
    }

    public function checkDropAll($phinx, $tableNames)
    {
        foreach($tableNames as $t){
            $this->checkDrop($phinx,$t);
        }
    }

    public function deleteDataTable($phinx,$tableName,$where='1')
    {
        $phinx->execute("DELETE FROM $tableName WHERE $where");
        $phinx->execute("ALTER TABLE $tableName AUTO_INCREMENT=1");
    }

    public function deleteDataTableAll($phinx, $tableNames)
    {
        foreach($tableNames as $t){
            if ($t=='pessoas'){
                $where='id<>1';
                $this->deleteDataTable($phinx,$t,$where);
            }
            else
                $this->deleteDataTable($phinx,$t);
        }
    }

}



?>