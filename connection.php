<?php

if(isset($_POST['submit'])){
    
    $link = mysqli_connect("localhost:3305", "root", "", "hospitaldbms");
    if(!$link){
        die("connecti failed " . mysqli_connect_error());
    }
   
    $fname=$_POST['fname'];
    $pnumber=$_POST['pnumber'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $password=$_POST['pass'];
    $comf = $_POST['comf'];

    include("functions.php");

    if(emptyinputs($fname, $pnumber, $email, $age,  $weight, $height, $password, $comf)!==false){
        header("location:index.php?error=emptyinputs");
        exit();
    }
    if(invalidName($fname)!==false){
        header("location:index.php?error=invalidName");
        exit();
    }
    if(invalidEmail($email)!==false){
        header("location:index.php?error=invalidPhoneEmail");
        exit();
    }
    if(invalidpNumber($pnumber)!==false){
        header("location:index.php?error=invalidPhoneNumer");
        exit();
    }
    if(invalidAge($age)!==false){
        header("location:index.php?error=invalidAge");
        exit();
    }
    if(invalidweight($weight)!==false){
        header("location:index.php?error=invalid weight");
        exit();
    }
    if(invalidheight($height)!==false){
        header("location:index.php?error=invalid height");
        exit();
    }
    if(invalidpasslength($password)!==false){
        header("location:index.php?error=password must at least six characters");
        exit();
    }
    if(passdontmatch($password,$comf)!==false){
        header("location:index.php?error=password dont match");
        exit();
    }

        $sql = ("INSERT INTO customer (Full_Name, Email_Adress, Mob_cont,
         Age, Weight_Kg, Height_cm, Password_0) VALUES (?,?,?,?,?,?,?)");
         $stmt = mysqli_stmt_init($link);
         if(!mysqli_stmt_prepare($stmt, $sql)){
             header("locatio:connection.php?error=connection failed");
             exit();
         }
         else{
            mysqli_stmt_bind_param($stmt, "sssssss", $fname,  $email, $pnumber, $age,
              $weight, $height, $password);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
         }

}