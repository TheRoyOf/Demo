<?php
/**
 * Файл класса DefaultAdapter
 *
 * @copyright Copyright (c) 2019, Oleg Chulakov Studio
 * @link http://chulakov.com/
 */

namespace common\components\language\adapters;

class DefaultAdapter implements StorageInterface
{
    /**
     * @var string
     */
    public $defaultLanguage;

    /**
     * Получить язык
     *
     * @return string
     */
    public function get()
    {
        return $this->defaultLanguage;
    }

    /**
     * Установить язык
     *
     * @param string $code
     */
    public function set($code)
    {
        return; // Set only in configuration
    }
}
