<?php

namespace Portaltech;


class ListLoader
{
    private $listStorage;

    public function __construct(CRUDInterface $listStorage)
    {
        $this->listStorage = $listStorage;
    }


    /**
     * @return array
     */
    public function getLists()
    {
        try{
            $listsData = $this->listStorage->fetchAll();
        }
        catch(\PDOException $e){
            trigger_error("Database Exception :".$e->getMessage());
            return [];
        }

        return $listsData;

        /*$lists = array();

        foreach($listsData as $listData)
        {
            $list = $this->createListFromData($listData);
            $lists[] = $list;

        }

        return $lists;*/
    }

    /**
     * @param $id
     * @return array
     */
    public function getSingleList($id)
    {
        try{
            $listArray = $this->listStorage->findOneById($id);
        }
        catch(\PDOException $e){
            trigger_error("Database Exception :".$e->getMessage());
            return [];
        }


        return $listArray;

    }


    /**
     * @param array $data
     * @return TaskClass
     */
    public function createListFromData(array $data)
    {
        $list = new ListClass();

        $list->setId($data['id']);
        $list->setName($data['name']);
        $list->setStatus($data['status']);

        return $list;

    }

}