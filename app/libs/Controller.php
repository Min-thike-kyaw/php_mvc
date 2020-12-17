    <?php

    class Controller 
    {
        public function __construct()
        {
            echo "hello, i'm construct of controller</br>";
        }
        public function view($file) 
        {
            echo "i m from views";
            if ( file_exists("app/views/" . $file . ".php")) {
                return require_once("app/views/" . $file . ".php"); 
            }
        }
    }