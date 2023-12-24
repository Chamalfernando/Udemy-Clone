<?php

class App{
    function __construct($str='default value')
    {
        echo "here".$str."<br>";
        print_r($_GET)."<br>"; 
        echo "<br>";
        print_r($this->getURL());
    }

    function another(){

    }

    private function getURL(){
        $url = $_GET['url']??'home';
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $arr = explode('/',$url);
        return $arr;
    }
}

$app1 = new App();
echo "<br>";
$app = new App('my name','your name'); // constructor will call.