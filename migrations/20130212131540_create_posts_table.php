<?php

use Phinx\Migration\AbstractMigration;

class CreatePostsTable extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $posts = $this->table('posts');
        $posts->addColumn('title', 'string', array('limit' => 40))
              ->addColumn('body', 'text')
              ->addColumn('created', 'datetime')
              ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('posts');
    }
}