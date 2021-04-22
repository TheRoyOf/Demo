<?php
/**
 * Файл класса CookieAdapter
 *
 * @copyright Copyright (c) 2019, Oleg Chulakov Studio
 * @link http://chulakov.com/
 */

namespace common\components\language\adapters;

use yii\web\Cookie;

/**
 * Класс адаптер для работы для хранения и получения информации о языках в cookie
 *
 * @package common\components\language\adapters
 */
class CookieAdapter implements StorageInterface
{
    /**
     * @var string Наименование cookie
     */
    public $storageName;

    /**
     * Получить язык
     *
     * @return string
     */
    public function get()
    {
        return \Yii::$app->request->cookies->getValue($this->storageName);
    }

    /**
     * Установить язык
     *
     * @param string $code
     */
    public function set($code)
    {
        $cookie = \Yii::$app->request->cookies;
        $cookie->remove($this->storageName);
        $cookie->add(new Cookie([
            'name' => $this->storageName,
            'value' => $code,
        ]));
    }
}
