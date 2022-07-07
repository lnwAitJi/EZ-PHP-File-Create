<?php
// ------------------------------------ \\
# Type text #
function type($input01) {
    $string = $input01;
    $c = strlen($string);
    for ($i = 0; $i < $c; $i++) {
      echo($string[$i]);
      usleep(5);
    }
}
// ------------------------------------ \\
//* Add Readline Function *//
function readline($prompt = ""):string{
    if($prompt){
        if(is_array($prompt)){
            var_dump($prompt);
        }else {
            type($prompt."");
        }
    }
    $fp = fopen("php://stdin","r");
    $line = rtrim(fgets($fp, 1024));
    if(empty($line)){
        return '';
    }
    return $line;    
}
// ------------------------------------ \\
#Start!! (～￣▽￣)～
ฺBack_ForName:
$name = readline("Enter Your Name > ");
    if (empty($name)){
        type("Please Enter Your Name\n");
     goto ฺBack_ForName;
    }
Back_ForPassword:
$password = readline("Enter Your Password > ");
    if (empty($password)){
        type("Please Enter Your Password\n");
     goto Back_ForPassword;
    }
// ------------------------------------ \\
$json = [
    "name" => $name,
    "password" => $password
];
# EZ To read Right :> #
$json = json_encode($json); # Create #
file_put_contents("UserData.json", $json); # Save #