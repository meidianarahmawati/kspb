<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%visitor}}`.
 */
class m200327_112102_create_visitor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%visitor}}', [
            'id' => $this->primaryKey(),
            'namatamu' => $this->string(30)->notNull(),
            'noplat' => $this->string(10),
            'rumahtujuan' => $this->string(3)->notNull(),
            'alasan' => $this->string(100),
            'durasi' => $this->string(30),
            'expected' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%visitor}}');
    }
}
