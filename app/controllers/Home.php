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
        // $res = $db->query("SELECT * from users",[],'array');
        $res = $db->query("SELECT * from users");

        // show($res);

        // $users = new User();
        // $users->insert();
        // This has to be the goal.

        $db->create_tables();

        $data['title'] = "Home";
        $this->view('home',$data);
    }
}
