<?php
include_once 'libs/imodel.php';
class Model{
    //intermediador con la base de datos
    function __construct()
    {
        $this->db=new Database();
    }

    function query($query){
        return $this->db->connect()->query($query);
    }

    function prepare($query){
        return $this->db->connect()->prepare($query);
    }

}

?>