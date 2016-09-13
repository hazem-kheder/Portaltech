<?php
/**
 * Created by PhpStorm.
 * User: Pc
 * Date: 9/13/2016
 * Time: 11:12 م
 */

namespace Test;

use Portaltech\TaskClass;
class TaskClassTest extends \PHPUnit_Framework_TestCase
{

    public function testGetId()
    {
        $task = new TaskClass();

        $task->setId(1);
        $taskId = $task->getId();

        $this->assertEquals(1, $taskId);

    }

    public function testGetDescription()
    {
        $task = new TaskClass();

        $task->setDescription("Description");
        $taskDesc = $task->getDescription();

        $this->assertEquals("Description",$taskDesc);

    }

    public function testGetListId()
    {
        $task = new TaskClass();

        $task->setListId(1);
        $taskListId = $task->getListId();

        $this->assertEquals(1,$taskListId);

    }

    public function testGetStatus()
    {
        $task = new TaskClass();

        $task->setStatus(1);
        $taskStatus = $task->getStatus();

        $this->assertEquals(1,$taskStatus);

    }

}