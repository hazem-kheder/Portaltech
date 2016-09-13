<?php

namespace Test;

use Portaltech\ListClass;
class ListClassTest extends \PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        $list = new ListClass();

        $list->setId(3);
        $id = $list->getId();

        $this->assertEquals(3,$id);
    }

    public function testGetName()
    {
        $list = new ListClass();

        $list->setName('Work');
        $name = $list->getName();

        $this->assertEquals("Work",$name);
    }

    public function testStatus()
    {
        $list = new ListClass();

        $list->setStatus(1);
        $status = $list->getStatus();

        $this->assertEquals(1,$status);
    }

}