<?php
Class contactus extends Controller {
    function __construct() 
    {
        # code...
        $this->user = $this->loadModel("User");
        $this->reserve = $this->loadModel("reserve");
        // $this->user->checklog();
    }
    public function index()
    {
        $data = [];
        
        $this->view('hotel/contactus',$data);
    }

    public function checkroom()
    {
        # code...
    }
}
