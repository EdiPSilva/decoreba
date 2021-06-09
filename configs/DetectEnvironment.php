<?php
class DetectEnvironment {
    private static $localEnvironment = array(
        '127.0.0.1',
        '::1'
    );

    public static function isProduction() {
        return !in_array($_SERVER['REMOTE_ADDR'], self::$localEnvironment);
    }
}
?>