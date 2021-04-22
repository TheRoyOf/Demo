<?php
/**
 * Файл класса StorageInterface
 *
 * @copyright Copyright (c) 2018, Oleg Chulakov Studio
 * @link http://chulakov.com/
 */

namespace common\components\language\adapters;

/**
 * Интерфейс для работы с языками
 *
 * @package common\components\language\adapters
 */
interface StorageInterface
{
    /**
     * Получить язык
     *
     * @return string
     */
    public function get();

    /**
     * Установить язык
     *
     * @param string $code
     */
    public function set($code);
}