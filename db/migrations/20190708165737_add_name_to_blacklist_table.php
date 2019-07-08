<?php

use Phinx\Migration\AbstractMigration;

class AddNameToBlacklistTable extends AbstractMigration
{
    /**
      * Migrate Up.
      */
      public function up()
      {
          $table = $this->table('blacklist');
          $table->addColumn('name', 'string')
                ->save();
      }

      /**
      * Migrate Down.
      */
      public function down()
      {
          $table = $this->table('blacklist');
          $table->removeColumn('name')
                ->save();
      }
}
