<?php
//простір імен
namespace singleton;

//клас, екземпляр якого може бути тільки 1
final class Singleton
{
    //об'єкт класу
    private static $copy = null;

    //отримання екземпляру класу
    public static function get_copy()
    {
        if (self::$copy == null) {
            self::$copy = new self();
        }
        return self::$copy;
    }

    //вимкнення конструктору
    private function __construct()
    {
    }

    //вимкнення клонування
    private function __clone()
    {
    }

    //вимкнення десереалізації
    public function __wakeup()
    {
        throw new Exception("Cant unserialize singleton");
    }
}
?>