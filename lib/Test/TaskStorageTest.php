<?php

namespace Test;

use Portaltech\TaskStorage;
class TaskStorageTest extends \PHPUnit_Framework_TestCase
{
    private $pdo;

    public function testFetchAllForResult()
    {
        $list = new TaskStorage($this->getPDO(), 1);
        $allLists = $list->fetchAll();

        $this->assertInternalType('array', $allLists);

    }


    public function testFindOneById()
    {
        $list = new TaskStorage($this->getPDO(),1);
        $allLists = $list->findOneById(1);

        $this->assertInternalType('array', $allLists);
    }

    public function getPDO()
    {
        if($this->pdo === null)
        {
            $this->pdo = new \PDO('mysql:host=localhost;dbname=portaltech_test','root', '');
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

        return $this->pdo;
    }


}