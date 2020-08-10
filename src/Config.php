<?php
use \Database\Error as Error;
namespace Database;
class Config {
    public static function init(array $config = array()): object {
        $keys = ['host', 'port', 'dbname', 'charset', 'dbuser', 'dbpass'];
        foreach ($keys as $key) {
            if (!array_key_exists($key, $config)) {
                switch ($key) {
                    case "host":
                        $config['host'] = 'localhost';
                        break;
                    case "port":
                        $config['port'] = 3306;
                        break;
                    case "dbname":
                        Error::print(Error::NOT_EXISTS_DB_NAME);
                        break;
                }
            }
        }
        return (object) $config;
    }
}