<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $text
 * @property string $date
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    const STATUS_ALLOW = 1;
    const STATUS_DISALLOW = 0;

    //public $reCaptcha;

    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['status'], 'integer'],
            [['name', 'email', 'text'], 'string', 'max' => 255],
            [['name', 'email', 'text'], 'required'],
            //[['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6Lfx4osUAAAAAPk-B1V-wkqEAZLjbikwII0TpXQk', 'uncheckedMessage' => 'Please confirm that you are not a bot.']

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'text' => 'Text',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }

    public function getDate()
    {
        return Yii::$app->formatter->asDate($this->date);
    }

    public function isAllowed()
    {
        return $this->status;
    }
    public function allow()
    {
        $this->status = self::STATUS_ALLOW;
        return $this->save(false);
    }
    public function disallow()
    {
        $this->status = self::STATUS_DISALLOW;
        return $this->save(false);
    }
    public function saveFeedback()
    {
        $feedback = new Feedback();
        $feedback->name = $this->name;
        $feedback->text = $this->text;
        $feedback->email = $this->email;
        $feedback->date = $this->date;
        $feedback->status = 0;
        return $feedback->save();
    }

}
