<?php

use yii\db\Migration;

/**
 * Handles the creation of table `feedback`.
 */
class m190111_143653_create_feedback_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('feedback', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string()->defaultValue(null),
            'text' => $this->string(),
            'status' => $this->string(),
            'date' => $this->date()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('feedback');
    }
}
