<?php

namespace lib;


class Alphabetizer
{
    private $list;

    public function __construct(string $list)
    {
        $this->list = $list;
    }

    /*
     * Sorts list
     */
    public function sortAsc()
    {
        $listArray = explode("\n", str_replace("\r", "", $this->list));

        asort($listArray);

        return $listArray;

    }

    public function sortDesc()
    {
        $listArray = explode("\n", str_replace("\r", "", $this->list));

        rsort($listArray);

        return $listArray;
    }


}