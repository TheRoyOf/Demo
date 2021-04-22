<?php

use yii\db\Migration;

/**
 * Handles the creation of table `content`.
 */
class m190111_143604_create_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('content', [
            'id' => $this->primaryKey(),
            'key'=>$this->string(),
            'text'=>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('content');
    }
}
