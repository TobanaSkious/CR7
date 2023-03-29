<?php
class guest {
    private $DB;
    function __construct() 
    {
        $this->DB = new Database();;
    }
    public function show($arr)
    {
        $query = "SELECT * FROM guests WHERE ID_RES = :id_res";
        $data = $this->DB->read($query,$arr);
        return $data;
    }
    public function store($arr)
    {
        # code...
        $query = "INSERT INTO guests (ID_RES,NAME,BIRTH) VALUES (:id_res,:name,:birth)";
		$data = $this->DB->write($query,$arr);
        return $data;
    }
    public function update($arr)
    {
        # code...
        $query = "UPDATE guests SET NAME = :name, BIRTH = :birth WHERE ID =:ID ";
        $data = $this->DB->write($query,$arr);
        return $data;
    }
    public function delete($arr)
    {
        # code...
        $query = "DELETE FROM guests WHERE ID= :ID";
        $data = $this->DB->write($query,$arr);
        return $data;
    }
}