<?php

use yii\db\Migration;

/**
 * Handles the creation of table `program`.
 */
class m190123_162010_create_program_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('program', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'use_template' => $this->integer(),
            'description' => $this->text(),
            'shifts' => $this->text(),
            'content' => $this->text(),
            'start_date' => $this->date(),
            'end_date' => $this->date(),
            'preview_image' => $this->string(),
            'viewed' => $this->integer(),
            'season' => $this->integer(),
            'location' => $this->integer(),
            'status' => $this->integer(),
            'useLocalisation' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('program');
    }
}
