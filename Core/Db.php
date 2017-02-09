<?php

namespace Core;

use PDO;

class Db
{
    /** @var PDO */
    protected static $dbh = null;

    private function __construct()
    {
    }

    public function query($sql, array $data = [], $class = null)
    {
        $sth = self::$dbh->prepare($sql);
        $result = $sth->execute($data);

        if (false === $result) {
            die;
        }

        if (null === $class) {
            return $sth->fetchAll();
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
    }

    public static function getInstance()
    {
        if (self::$dbh === null) {
            $config = new Config();
            $dsn = 'mysql:host=localhost;dbname=' . $config->data['db']['dbname'];
            $user = $config->data['db']['user'];
            $password = $config->data['db']['password'];
            self::$dbh = new \PDO($dsn, $user, $password);
        }
        return new self;
    }
}
