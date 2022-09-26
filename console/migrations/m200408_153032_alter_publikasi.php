<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m200408_153032_alter_publikasi
 */
class m200408_153032_alter_publikasi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('publikasi','filetype');
        $this->renameColumn('publikasi', 'thumbnail', 'thumbnail_src_filename');
        $this->addColumn('publikasi','thumbnail_web_filename',Schema::TYPE_STRING);
        $this->addColumn('publikasi','attachment_src_filename',Schema::TYPE_STRING);
        $this->addColumn('publikasi','attachment_web_filename',Schema::TYPE_STRING);
        $this->addColumn('publikasi','created_at',Schema::TYPE_INTEGER);
        $this->addColumn('publikasi','updated_at',Schema::TYPE_INTEGER);
        $this->addColumn('publikasi','uploaded_by',Schema::TYPE_INTEGER);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('publikasi','filetype',Schema::TYPE_STRING);
        $this->renameColumn('publikasi', 'thumbnail_src_filename', 'thumbnail');
        $this->dropColumn('publikasi','thumbnail_web_filename');
        $this->dropColumn('publikasi','attachment_src_filename');
        $this->dropColumn('publikasi','attachment_web_filename');
        $this->dropColumn('publikasi','created_at');
        $this->dropColumn('publikasi','updated_at');
        $this->dropColumn('publikasi','uploaded_by');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200408_153032_alter_publikasi cannot be reverted.\n";

        return false;
    }
    */
}
