<?php

namespace Ciri\db;
 
interface IPDOConnection {
    public static function connect(): \PDO;
}