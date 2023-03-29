<?php
class reserve {
    private $DB;
    function __construct() 
    {
        $this->DB = new Database();;
    }
    public function show($arr)
    {
        $query = "SELECT * FROM reservation WHERE ID_USER = :id_user";
        $data = $this->DB->read($query,$arr);
        return $data;
    }
    public function checkroomtobook($arr)
    {
        # code...
        $query = "SELECT * FROM rooms WHERE ID not in (select ID_ROOM from reservation  WHERE CHECKIN BETWEEN :chekin AND :chekout
		OR CHECKOUT BETWEEN :chekin AND :chekout) AND TYPE = :type AND TYPE_SECOND = :typerooom and SIZE >= :capacite";
        $data = $this->DB->read($query,$arr);
        return $data;
    }
    public function book($arr)
    {
        # code...
        $query = "INSERT INTO users (ID_USER,ID_ROOM,NUM_P,CHECKIN,CHECKOUT) VALUES (:id_user,:id_room,:capacite,:checkin,:checkout)";
		$data = $this->DB->write($query,$arr);
        return $data;
    }
    
    public function delete($arr)
    {
        # code...
        $query = "DELETE FROM reservation WHERE ID= :ID";
        $data = $this->DB->write($query,$arr);
        return $data;
    }
}