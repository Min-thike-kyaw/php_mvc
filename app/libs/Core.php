<?php

class Core 
{
    private $className = "Home";
    private $methodName = "index";
    private $params = [];

    public function __construct()
    {
        
        $this->geturl();
        
    }

    public function getUrl()
    {
        $url = isset($_SERVER['PATH_INFO']) ? rtrim(substr($_SERVER['PATH_INFO'], 1), '/') : '';

            $url = explode( '/' , $url );
            
            if (!empty($url[0])) {
                if( file_exists("app/controllers/".ucfirst($url[0]).".php")) {
                    $this->className = ucfirst($url[0]);
                    unset($url[0]);
                }
            }

            require_once("app/controllers/".$this->className .".php");
            $this->className = new $this->className();

            if (!empty($url[1])) {
                if (method_exists($this->className,$url[1])) {
                    $this->methodName = $url[1];
                    unset($url[1]);
                }
            }
            // $className->view();
            $this->params = !empty($url) ? array_values($url) : [];

            call_user_func([$this->className,$this->methodName],$this->params);

            echo "</br></br><hr>"; 
            echo "<pre>".  print_r($url, true) . "</pre>";

    }
}
