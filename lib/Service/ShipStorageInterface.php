<?php

interface ShipStorageInterface
{
    /**
     * Returns an array
     *
     * @return array
     */
    public function fetchAllShipsData();


    /**
     * @param $id
     * @return array()
     */
    public function fetchSingleShipData($id);
}