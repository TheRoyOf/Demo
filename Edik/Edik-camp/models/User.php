<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * Class User
 *
 * @property int $id [int(11)]
 * @property string $password [varchar(255)]
 * @property string $name [varchar(255)]
 * @property string $surname [varchar(255)]
 * @property string $number [varchar(255)]
 * @property string $email [varchar(255)]
 * @property int $isAdmin [int(11)]
 * @property string $photo [varchar(255)]
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    public static $users = [];

    public static function tableName()
    {
        return '{{%user}}';
    }

    public function rules()
    {
        return [
            [['name', 'surname', 'number', 'password', 'email', 'isAdmin', 'photo'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return User::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return User::find()->where(['email'=>$email])->one();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

//    public function setPassword($password)
//    {
//        $this->password = Yii::$app->security->generatePasswordHash($password);
//    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
//        Yii::$app->security->validatePassword($password);
        return $this->password == $password;
    }


    public function create()
    {
        return $this->save(false);
    }
}
