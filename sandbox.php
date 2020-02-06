<?php
// function
// function myFunc(){
//     echo $name;
// }
// myFunc(joe);
// date function - must have format parameters
// echo date('y/d/m');
// include and require - encourages modular programming

// superglobals - inbuilt variables mostly sed in form validation

//create server array
$server = [
    'Host Server Name' => $_SERVER['SERVER_NAME']
];
$client = [
    'Client System info' => $_SERVER['HTTP_USER_AGENT']
];

echo $client['Client System info'];
?>