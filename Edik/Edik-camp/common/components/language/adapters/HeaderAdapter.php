<?php
/**
 * Файл класса HeaderAdapter
 *
 * @copyright Copyright (c) 2019, Oleg Chulakov Studio
 * @link http://chulakov.com/
 */

namespace common\components\language\adapters;

use Yii;

class HeaderAdapter implements StorageInterface
{
    const LANG = 'X-Language';

    /**
     * Получить язык
     *
     * @return string
     */
    public function get()
    {
        return Yii::$app->request->headers->get(self::LANG);
    }

    /**
     * Установить язык
     *
     * @param string $code
     */
    public function set($code)
    {
        Yii::$app->request->headers->set(self::LANG, $code);
    }
}
