<?php

namespace Portaltech;


class TaskLoader
{
    private $taskStorage;

    public function __construct(CRUDInterface $taskStorage)
    {
        $this->taskStorage = $taskStorage;
    }


    /**
     * @return array
     */
    public function getTasks()
    {
        try{
            $tasksData = $this->taskStorage->fetchAll();
        }
        catch(\PDOException $e){
            trigger_error("Database Exception :".$e->getMessage());
            return [];
        }

        return $tasksData;

        /*$tasks = array();

        foreach($tasksData as $taskData)
        {
            $task = $this->createTaskFromData($taskData);
            $tasks[] = $task;

        }

        return $tasks;*/
    }

    /**
     * @param $id
     * @return array
     */
    public function getSingleTask($id)
    {
        try{
            $taskArray = $this->taskStorage->findOneById($id);
        }
        catch(\PDOException $e){
            trigger_error("Database Exception :".$e->getMessage());
            return [];
        }

        return $taskArray;

    }


    /**
     * @param array $data
     * @return TaskClass
     */
    public function createTaskFromData(array $data)
    {
        $task = new TaskClass();

        $task->setId($data['id']);
        $task->setDescription($data['description']);
        $task->setListId($data['list_id']);
        $task->setStatus($data['status']);

        return $task;

    }

}