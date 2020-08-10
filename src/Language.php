<?php
use \Database\Error as Error;
namespace Database;
class Language {
    private static $lang = 'tr-TR';
    
    private static $TR = [
        Error::NOT_EXISTS_DB_NAME => 'Veritabanı adı bulunamadı.'        
    ];

    private static $EN = [
        Error::NOT_EXISTS_DB_NAME => 'Database name not found.'
    ];
    
    public static function get(int $code) {
        if (self::$lang === 'en-EN') {
            return self::$EN[$code] ?? null;
        } else {
            return self::$TR[$code] ?? null;
        }
    }
}