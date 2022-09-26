<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m200405_150424_create_publikasi
 */
class m200405_150424_create_publikasi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('publikasi', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
            'thumbnail' => Schema::TYPE_STRING,
            'tags' => Schema::TYPE_STRING,
            'filetype' => Schema::TYPE_STRING,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_publikasi');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200405_150424_create_publikasi cannot be reverted.\n";

        return false;
    }
    */
}
