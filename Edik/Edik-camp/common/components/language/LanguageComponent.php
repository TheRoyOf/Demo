<?php
/**
 * Файл класса LanguageComponent
 *
 * @copyright Copyright (c) 2019, Oleg Chulakov Studio
 * @link http://chulakov.com/
 */

namespace common\components\language;

use yii\di\Instance;
use yii\base\Component;
use common\components\language\adapters\StorageInterface;
//use common\components\language\models\Language;

/**
 * Класс компонент для работы с языками
 *
 * @package common\components\language
 */
class LanguageComponent extends Component
{
    /**
     * Язык по умолчанию
     *
     * @var string
     */
    public $defaultLanguage;
    /**
     * Адаптер для хранения языка
     *
     * @var StorageInterface
     */
    public $storageAdapter;
    /**
     * Текущий язык
     *
     * @var string
     */
    protected $currentLanguage;
    /**
     * Доступные языки
     *
     * @var array
     */
    protected $languages;

    /**
     * @throws \Exception
     */
    public function init()
    {
        $this->storageAdapter = Instance::ensure($this->storageAdapter, StorageInterface::class);
        // TODO: Load from DB
        // $this->languages = Language::accessLanguages();
        $this->languages = [
            'ru' => 'Русский',
            'en' => 'English',
        ];
        parent::init();
    }

    /**
     * Установить язык
     *
     * @param string|null $code
     * @throws \Exception
     */
    public function setLanguage($code = null)
    {
        if ($code) {
            if (!array_key_exists($code, $this->languages)) {
                throw new \Exception("Язык с кодом \"{$code}\" не найден.");
            }
            $this->currentLanguage = $code;
        } else {
            $this->currentLanguage = $this->defaultLanguage;
        }
        \Yii::$app->language = $this->currentLanguage;
        $this->storageAdapter->set($this->currentLanguage);
    }

    /**
     * Получить установленный язык
     *
     * @return string
     * @throws \Exception
     */
    public function getLanguage()
    {
        if (!$this->currentLanguage) {
            $this->setLanguage($this->storageAdapter->get());
        }
        return $this->currentLanguage;
    }

    /**
     * Получить наименование языка
     *
     * @param string $code
     * @return string
     */
    public function getName($code)
    {
        return $this->languages[$code];
    }

    /**
     * Получить языки
     *
     * @return array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }
}
