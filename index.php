<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <title>registerfile</title>
</head>
<body>
<br><nav>
        <div>
                <button type="button" name="a" class="btn btn-danger"> <a href="login.php">Login</a></button> 
               <button type="button" name="a" class="btn btn-danger"> <a href="createTable.php">createTable</a></button>
        </div>
    </nav><br>

    <marquee behavior="" direction="">WELCOME TO LOYAL INTERNATIONAL HOSPITAL</marquee><br>
   
<?php
if(isset($_GET['error'])){
    if($_GET['error']=='emptyinputs'){
        echo "<span style='color:red;'>Fill all fields</span>";
    }
    if($_GET['error']=='invalidName'){
        echo "<span style='color:red;'>Invalid Name</span>";
    }
    if($_GET['error']=='invalidPhoneEmail'){
        echo "<span style='color:red;'>Invali Email</span>";
    }
    if($_GET['error']=='invalidPhoneNumer'){
        echo "<span style='color:red;'>Invalid Phone Numer</span>";
    }
    if($_GET['error']=='invalidAge'){
        echo "<span style='color:red;'>Invalid Age</span>";
    }
    if($_GET['error']=='invalid weight'){
        echo "<span style='color:red;'>Invalid weight</span>";
    }
    if($_GET['error']=='invalid height'){
        echo "<span style='color:red;'>Invalid height</span>";
    }
    if($_GET['error']=='password must at least six characters'){
        echo "<span style='color:red;'>too short password</span>";
    }
    if($_GET['error']=='weak password'){
        echo "<span style='color:red;'>weak password</span>";
    }
    if($_GET['error']=='password dont match'){
        echo "<span style='color:red;'>password don't match</span>";
    }
}

?>
<br>
 <table>
 <form action="connection.php" method="post" enctype="multipart/form-data" >
<tr>
    <td style="padding: 10px 10px 10px 10px;"><input type="text" name="fname" placeholder="Enter your name"></td>
    <td style="padding: 10px 10px 10px 10px;"><input type="email" name="email" placeholder="Enter your email"></td>
</tr>
<tr>
    <td style="padding: 10px 10px 10px 10px;"><input type="number" name="pnumber" placeholder="Enter your mobile contanct"></td>
    <td style="padding: 10px 10px 10px 10px;"><input type="number" name="age" placeholder="Enter your Age"></td>
</tr>
<tr>
    <td style="padding: 10px 10px 10px 10px;"><input type="number" name="weight" placeholder="Enter your weight"></td>
    <td style="padding: 10px 10px 10px 10px;"><input type="number" name="height" placeholder="Enter your Height"></td>
</tr>
<tr>
    <td style="padding: 10px 10px 10px 10px;"><input type="password" name="pass" placeholder="Enter password"></td>
    <td style="padding: 10px 10px 10px 10px;"><input type="password" name="comf" placeholder="Comfirm password"></td>
</tr>
<tr>
    <td></td>
    <td>
    <button type="submit" class="btn btn-success" name="submit">Register</button>
    </td>
</tr>

</form>
 </table>
    
</body>
</html>