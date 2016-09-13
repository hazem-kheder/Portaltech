<?php

namespace Portaltech;


class TaskStorage implements CRUDInterface
{
    private $listId;
    private $pdo;

    /**
     * TaskStorage constructor.
     * @param \PDO $pdo
     * @param int $listId
     */
    public function __construct(\PDO $pdo , $listId)
    {
        $this->listId = $listId;
        $this->pdo = $pdo;
    }

    /**
     * @return array
     */
    public function fetchAll()
    {
        $pdo = $this->pdo;
        $statement = $pdo->prepare("SELECT * FROM task WHERE list_id = :listId LIMIT 0,20");
        $statement->execute(array('listId'=>$this->listId));
        $tasksArray = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $tasksArray;

    }

    /**
     * @param $id
     * @return array
     */
    public function findOneById($id)
    {
        $pdo = $this->pdo;
        $statement = $pdo->prepare("SELECT * FROM list WHERE id = :id");
        $statement->execute(array('id'=>$id));
        $taskArray = $statement->fetch(\PDO::FETCH_ASSOC);

        return $taskArray;

    }


}