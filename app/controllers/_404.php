<?php

/**
 * 404 class for page not found error
 */
class _404 extends Controller
{
    function __construct()
    {
        // echo "Page not found";
    }

    public function index(){

        $data['title'] = "404";
        $this->view('404',$data);
    }
}
