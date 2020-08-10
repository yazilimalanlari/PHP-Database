<?php
use \Database\Language as Language;
namespace Database;

class Error {
    public const NOT_EXISTS_DB_NAME = 0;
    public static function print(int $code) {
        echo Language::get($code);
    }
}