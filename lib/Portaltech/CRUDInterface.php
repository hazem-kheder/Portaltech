<?php

namespace Portaltech;


interface CRUDInterface
{
    /**
     * @return array
     */
    public function fetchAll();

    /**
     * @param $id
     * @return array
     */
    public function findOneById($id);

    //Methods to add update - delete ...

}