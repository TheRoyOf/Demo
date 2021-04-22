<?php
/**
 * Файл класса RequestAdapter
 *
 * @copyright Copyright (c) 2019, Oleg Chulakov Studio
 * @link http://chulakov.com/
 */

namespace common\components\language\adapters;

use Yii;

class RequestAdapter implements StorageInterface
{
    /**
     * @var string
     */
    public $requestName = 'lang';

    /**
     * Получить язык
     *
     * @return string
     */
    public function get()
    {
        return Yii::$app->request->get($this->requestName);
    }

    /**
     * Установить язык
     *
     * @param string $code
     */
    public function set($code)
    {
        return; // Set only by request
    }
}
