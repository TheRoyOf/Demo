<?php
/**
 * Файл класса LanguageBehavior
 *
 * @copyright Copyright (c) 2018, Oleg Chulakov Studio
 * @link http://chulakov.com/
 */

namespace common\components\language\behaviors;

use yii\di\Instance;
use yii\db\BaseActiveRecord;
use yii\base\Behavior;
use yii\base\InvalidConfigException;
use common\components\language\LanguageComponent;

class LanguageBehavior extends Behavior
{
    /**
     * @var LanguageComponent
     */
    public $component = 'languageManager';
    /**
     * @var string Языковой атрибут
     */
    public $attribute = 'lang';

    /**
     * Инициализация с подтягиванием компонента
     *
     * @throws InvalidConfigException
     */
    public function init()
    {
        $this->component = Instance::ensure($this->component);
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function events()
    {
        return [
            BaseActiveRecord::EVENT_BEFORE_INSERT => 'setCurrentLanguage',
        ];
    }

    /**
     * Назначение языка модели при создании
     */
    public function setCurrentLanguage()
    {
        if (empty($this->owner->{$this->attribute})) {
            $this->owner->{$this->attribute} = $this->component->getLanguage();
        }
    }
}
