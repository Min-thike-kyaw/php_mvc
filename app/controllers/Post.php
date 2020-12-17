<?php


class Post extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "I am from " . __CLASS__ . " </br>";
    }

    public function show($params = [])
    {
        echo "I am from show</br>";
        $this->view("index");
        // $this->view();
        
        // echo "<pre>". print_r($params, true)."</pre>";
    }
}

