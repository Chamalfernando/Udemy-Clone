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

    public function index($id){
        echo "home view page ".$id;
    }

    public function edit()
    {
        echo "home editing";
    }

    public function delete($id)
    {
        echo "home deleting ".$id;
    }

    // public function delete($id1,$id2= null,$id3 = null)
    // {
    //     echo "home deleting ".$id3;
    // }
}
