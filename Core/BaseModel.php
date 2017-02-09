<?php

namespace Core;


abstract class BaseModel
{
    public $id;
    protected static $table = '';

    public static function findOne($val)
    {
        $db = Db::getInstance();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE email' . '=:val';
        $data = $db->query($sql, [':val' => $val], static::class);
        return !empty($data[0]) ? $data[0] : false;
    }

    public static function findAllByChar($char)
    {
        $db = Db::getInstance();
        $sql = 'SELECT * FROM ' . static::$table .
               ' JOIN user_info ON user.id = user_info.user_id ' .
               'WHERE user.email LIKE :val';
        $data = $db->query($sql, [':val' => $char . '%']);
        return $data;
    }
}
