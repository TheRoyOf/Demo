<?php

use yii\db\Migration;

/**
 * Handles the creation of table `content`.
 */
class m190123_162046_create_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('content', [
            'id' => $this->primaryKey(),
            'page' => $this->string(),
            'key' => $this->string(),
            'ru-RU' => $this->text(),
            'uk-UA' => $this->text(),
            'en-US' => $this->text(),
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
