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
        // $data1['var'] = "this is my variable"; 
        // array location is 'var'.
        // $this->view('home',$data1);

        $data['title'] = "Home";
        $this->view('home',$data);
    }
    // public function index(){
    //     echo "home view page ";
    // }

    // public function edit()
    // {
    //     echo "home editing";
    // }

    // public function delete()
    // {
    //     echo "home deleting ";
    // }

    // public function delete($id1,$id2= null,$id3 = null)
    // {
    //     echo "home deleting ".$id3;
    // }
}
