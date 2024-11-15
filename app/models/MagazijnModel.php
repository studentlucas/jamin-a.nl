<?php

class MagazijnModel
{
    private $db;

    public function __construct()
    {
        /**
         * Maak een nieuw database object die verbinding maakt met de 
         * MySQL server
         */
        $this->db = new Database();
    }  
    
    
    public function getAllMagazijnProduct()
    {
        $sql = "CALL spGetAllMagazijnProduct()";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}