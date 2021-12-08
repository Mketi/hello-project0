<?php
//check for empty inputs
function emptyinputs($fname, $pnumber, $email, $age, $weight, $height, $password, $comf){
    $result;
    if(empty($fname)||empty($pnumber)||empty($email)||empty($age)||empty( $weight)||empty($height)||empty($password)||empty($comf)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
//check for invalid Name
function invalidName($fname){
    $result;
    if(!preg_match("/^[A-Z a-z]*$/",$fname)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
//check for invalid email
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
//check for invalid mobile number
function invalidpNumber($pnumber){
    $result;
    if(!preg_match("/^[0-9]*$/",$pnumber)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidAge($age){
    $result;
    if(!preg_match("/^[0-9]*$/", $age)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidweight($weight){
    $result;
    if(!preg_match("/^[0-9]*$/", $weight)){
        $result = true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidheight($height){
    $result;
    if(!preg_match("/^[0-9]*$/", $height)){
        $result = true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidpasslength($password){
    $result;
    if(strlen($password)<6){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function passdontmatch($password, $comf){
    $result;
    if($password !== $comf){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
