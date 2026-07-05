<?php

namespace Core;

use PDO;
use Exception;

abstract class Model {
    protected static function getDB() {
        static $db = null;

        if ($db === null) {
            $config = require dirname(__DIR__) . '/config/config.php';
            try {
                $dsn = 'mysql:host=' . $config['db_host'] . ';dbname=' . $config['db_name'] . ';charset=utf8';
                $db = new PDO($dsn, $config['db_user'], $config['db_pass']);

                // Throw an Exception when an error occurs
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                // For this demo, if DB fails, we'll return null and handle it gracefully in the Model
                return null;
            }
        }

        return $db;
    }
}
