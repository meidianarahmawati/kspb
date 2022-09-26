<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m200406_133551_alter_tbl_publikasi
 */
class m200406_133551_alter_tbl_publikasi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('tbl_publikasi', 'src', 'src_filename');
        $this->addColumn('tbl_publikasi','web_filename',Schema::TYPE_STRING);
        $this->addColumn('tbl_publikasi','created_at',Schema::TYPE_INTEGER);
        $this->addColumn('tbl_publikasi','updated_at',Schema::TYPE_INTEGER);
        $this->addColumn('tbl_publikasi','uploaded_by',Schema::TYPE_INTEGER);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('tbl_publikasi', 'src_filename', 'src');
        $this->dropColumn('tbl_publikasi','web_filename');
        $this->dropColumn('tbl_publikasi','created_at');
        $this->dropColumn('tbl_publikasi','updated_at');
        $this->dropColumn('tbl_publikasi','uploaded_by');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200406_133551_alter_tbl_publikasi cannot be reverted.\n";

        return false;
    }
    */
}
