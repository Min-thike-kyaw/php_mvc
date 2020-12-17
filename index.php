<?php

require_once("app/bootstrap.php");
new Core();
// new Controller();


// $className = "Home";
// $methodName = "index";
// $params = [];

// $url = isset($_SERVER['PATH_INFO']) ? rtrim(substr($_SERVER['PATH_INFO'], 1), '/') : '';

// $url = explode( '/' , $url );

// if (!empty($url[0])) {
//     if( file_exists(ucfirst($url[0]).".php")) {
//         $className = ucfirst($url[0]);
//         unset($url[0]);
//     }
// }
// if (!empty($url[1])) {
//     $methodName = $url[1];
//     unset($url[1]);
// }

// require_once($className .".php");
// $object = new $className();
// $params = !empty($url) ? array_values($url) : [];

// call_user_func([$className,$methodName],$params);

// echo "</br></br><hr>"; 


// echo "<pre>".  print_r($url, true) . "</pre>";
