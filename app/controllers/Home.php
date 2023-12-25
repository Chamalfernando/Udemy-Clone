<?php

/**
 * Home page
 */
class Home extends Controller
{
    function __construct()
    {
        // echo "Home Page";
    }

    public function index(){
        $db = new Database();
        $db->query();

        $data['title'] = "Home";
        $this->view('home',$data);
    }
}
