<?php
Class home extends Controller {
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
        
        $this->view('hotel/home',$data);
    }
    //  public function add($x,$y)
    //  {
    //     echo $x.'+'.$y.'='. $x + $y;
    //  }
    
}
