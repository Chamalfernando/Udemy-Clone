<?php

/**
 * Home page
 */
class Home
{
    function __construct()
    {
        // echo "Home Page";
    }

    public function index(){
        echo "home view page ";
    }

    public function edit()
    {
        echo "home editing";
    }

    public function delete()
    {
        echo "home deleting ";
    }

    // public function delete($id1,$id2= null,$id3 = null)
    // {
    //     echo "home deleting ".$id3;
    // }
}
