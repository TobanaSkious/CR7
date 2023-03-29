<?php
class room {
    private $DB;
    function __construct() 
    {
        $this->DB = new Database();;
    }
    public function show()
    {
        $arr['id_user'] = $_SESSION['iduser'];
        $query = "SELECT * FROM reservation WHERE ID_USER = :id_user";
        $data = $this->DB->read($query,$arr);
        return $data;
    }
    public function book()
    {
        # code...
    }
}