<?php

namespace Portaltech;


class ListStorage implements CRUDInterface
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return array
     */
    public function fetchAll()
    {
        $pdo = $this->pdo;
        $statement = $pdo->prepare("SELECT * FROM list LIMIT 0,20");
        $statement->execute();
        $listsArray = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $listsArray;

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
        $listArray = $statement->fetch(\PDO::FETCH_ASSOC);

        return $listArray;
    }


}