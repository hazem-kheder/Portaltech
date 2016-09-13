<?php

namespace Portaltech;


class Container
{
    private $configuration;
    private $pdo;
    private $listLoader;
    private $taskLoader;
    private $listStorage;
    private $taskStorage;
    private $listId;

    public function __construct($configuration)
    {
        $this->configuration = $configuration;

    }


    /**
     * @return \PDO
     */
    public function getPDO()
    {
        if($this->pdo === null)
        {
            $this->pdo = new \PDO($this->configuration['db_dsn'], $this->configuration['db_user'], $this->configuration['db_pass']);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

        return $this->pdo;
    }


    /**
     * @return ListLoader
     */
    public function getListLoader()
    {
        if($this->listLoader === null)
        {
            $this->listLoader =  new ListLoader($this->getListStorage());
        }

        return $this->listLoader;

    }

    /**
     * @return TaskLoader
     */
    public function getTaskLoader()
    {
        if($this->taskLoader === null)
        {
            $this->taskLoader =  new TaskLoader($this->getTaskStorage());
        }

        return $this->taskLoader;

    }

    /**
     * @param int $id
     */
    public function setListId($id)
    {
        $this->listId = $id;

    }


    /**
     * @return CRUDInterface
     */
    public function getListStorage()
    {

        if($this->listStorage === null)
        {
            $this->listStorage = new ListStorage($this->getPDO());
        }

        return $this->listStorage;
    }

    /**
     * @return CRUDInterface
     */
    public function getTaskStorage()
    {
        if($this->taskStorage === null)
        {
            $this->taskStorage = new TaskStorage($this->getPDO(), $this->listId);
        }

        return $this->taskStorage;
    }

}