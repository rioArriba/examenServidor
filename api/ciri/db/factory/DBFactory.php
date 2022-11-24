<?php

namespace Ciri\db\factory;

use Ciri\db\impl\MysqlPDO;

class DBFactory {

    public static function getConnection() {
        return new MysqlPDO();       
    }
}
