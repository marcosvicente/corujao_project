<?php

    use Util\ConnectMysql;

    use PHPUnit\Framework\TestCase;
    include_once('./src/util/ConnectMysql.php');

    class ConnectMysqlTest extends TestCase{
        public function  testIsert(){
            $value = $this->ConnectMysql()->insert("test", name);
            $this->assertEqual($value, 'fbd');
        }

    }

?>
