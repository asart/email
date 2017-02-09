<?php

namespace Model;

use Core\BaseModel;

class User extends BaseModel
{
    protected static $table = 'user';

    public $id;
    public $email;
}
