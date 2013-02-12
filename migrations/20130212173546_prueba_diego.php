<?php

use Phinx\Migration\AbstractMigration;

class PruebaDiego extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $personas = $this->table('personas');
        $personas->addColumn('nombre', 'string', array('limit' => 255))
              ->addColumn('apellido', 'string', array('limit' => 255))
              ->addColumn('created', 'datetime')
              ->save();

        //modificando la otra tabla
        $posts = $this->table('posts');
        $posts->addColumn('tags', 'text');
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('personas');

        $posts = $this->table('posts');
        $posts->removeColumn('tags');
    }
}