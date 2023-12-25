<?php


// this is the main controller file of the system.
// Main controller class.

class Controller
{
    public function view($view,$data=[])
    {
        extract($data);
        $filename = "../app/views/".$view.".view.php";
        if(file_exists($filename))
        {
            require $filename;
        }else
        {
            echo "could not find view file: ".$filename;
        }
    }
}
