<?php
class User {

    private $DB;
    function __construct() 
    {
        $this->DB = new Database();;
    }

    public function sign_up($arr)
    {
        $query = "INSERT INTO users (USERNAME,PASSWORD,EMAIL) VALUES (:username,:password,:email)";
		$data = $this->DB->write($query,$arr);
        return $data;
    }

    public function login($arr)
    {
        $query = "SELECT * FROM users WHERE EMAIL = :email && PASSWORD = :password LIMIT 1";
        $data = $this->DB->read($query,$arr);
        if(is_array($data)){
            $_SESSION['user_name'] = $data[0]->USERNAME;
			$_SESSION['iduser'] = $data[0]->ID;
            $_SESSION['login'] = "YES";
            return 1;
        }else{
            return 0;
        }
    }

    public function checklog()
    {
        # code...
        if(!isset($_SESSION['login'])){
            header("Location:". ROOT . "registre");
            die;
        }
    }
            

    public function logout()
    {
        session_destroy();
        header("Location:". ROOT . "registre");
        die;
    }
}