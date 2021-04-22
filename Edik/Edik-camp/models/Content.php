<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string $page
 * @property string $key
 * @property string $ru_RU
 * @property string $uk_UA
 * @property string $en_US
 */
class Content extends \yii\db\ActiveRecord
{


    public static function tableName()
    {
        return 'content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ru_RU', 'uk_UA', 'en_US'], 'string'],
            [['page', 'key'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page' => 'Page',
            'key' => 'Key',
            'ru_RU' => 'Ru',
            'uk_UA' => 'Ua',
            'en_US' => 'Eng',
        ];
    }

    public function getPageText($page)
    {
        $page_text = Content::find()->where(['page'=>$page])->asArray()->all();
        if(isset($page_text))
        {
            return $page_text;
        }
        else
        {
            return 'Page not found';
        }
    }


    public function getText($prefix, $id, $type)
    {

        $page = $this->generateKey($prefix, $id);
        $key = $this->generateKey($prefix, $id, $type);

        $session = Yii::$app->session;

        $locale =  Content::findOne(['key' => $key]);

        if ($session['language']=='ru_RU')
        return $locale->ru_RU;//выбор конкретного языка

        if ($session['language']=='uk_UA')
        return $locale->uk_UA;//выбор конкретного языка

        if ($session['language']=='en_US')
        return $locale->en_US;//выбор конкретного языка


        return $session['language'];

    }

    public function generateKey($prefix, $pageId, $type = '')
    {
        return 'key_'.$prefix.'_'.$pageId.'_'.$type;
    }

    public function setTitleKey($prefix, $id, $ru_default = 'not set')
    {
        $this->page = $this->generateKey($prefix, $id);
        $this->key = $this->generateKey($prefix, $id, 'title');
        if (Content::findOne(['page' => $this->page, 'key' => $this->key])->key != $this->key)
        {
            $this->ru_RU = $ru_default;
            $this->save(false);
            return true;
        }
        return false;
    }
    public function setShiftsKey($prefix, $id, $ru_default = 'not set')
    {
        $this->page = $this->generateKey($prefix,$id);
        $this->key = $this->generateKey($prefix,$id,'shifts');
        if (Content::findOne(['page' => $this->page, 'key' => $this->key])->key != $this->key)
        {
            $this->ru_RU = $ru_default;
            $this->save(false);
            return true;
        }
        return false;
    }
    public function setDescrKey($prefix, $id, $ru_default = 'not set')
    {
        $this->page = $this->generateKey($prefix,$id);
        $this->key = $this->generateKey($prefix,$id,'description');
        if (Content::findOne(['page' => $this->page, 'key' => $this->key])->key != $this->key)
        {
            $this->ru_RU = $ru_default;
            $this->save(false);
            return true;
        }
        return false;
    }
    public function setContentKey($prefix, $id, $ru_default = 'not set')
    {
        $this->page = $this->generateKey($prefix,$id);
        $this->key = $this->generateKey($prefix,$id,'content');
        if (Content::findOne(['page' => $this->page, 'key' => $this->key])->key != $this->key)
        {
            $this->ru_RU = $ru_default;
            $this->save(false);
            return true;
        }
        return false;
    }


}
