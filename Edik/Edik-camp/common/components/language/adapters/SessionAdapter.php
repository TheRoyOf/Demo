<?php
/**
 * Файл класса SessionAdapter
 *
 * @copyright Copyright (c) 2018, Oleg Chulakov Studio
 * @link http://chulakov.com/
 */

namespace common\components\language\adapters;

/**
 * Класс адаптер для работы для хранения и получения информации о языках в сессии
 *
 * @package common\components\language\adapters
 */
class SessionAdapter implements StorageInterface
{
    /**
     * @var string Наименование сесии
     */
    public $storageName;

    /**
     * Получить язык
     *
     * @return string
     */
    public function get()
    {
        return \Yii::$app->session->get($this->storageName);
    }

    /**
     * Установить язык
     *
     * @param string $code
     */
    public function set($code)
    {
        \Yii::$app->session->set($this->storageName, $code);
    }
}