<?php
Class suites extends Controller {
    function __construct() 
    {
        # code...
        $this->user = $this->loadModel("User");
        // $this->user->checklog();
    }
    public function index()
    {
        $data = [];
        $this->view('hotel/suites',$data);
    }
}