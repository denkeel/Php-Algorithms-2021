<?php

trait singletone {
    private static $instance;
 
    // Получение объекта (создаётся при первом вызове)
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
 
        return static::$instance;
    }
 
    private function __construct() {/* приватный */}
    private function __clone() {/* приватный */}
    private function __wakeup() {/* приватный */}
}