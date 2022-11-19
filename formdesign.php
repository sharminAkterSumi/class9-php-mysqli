<?php
session_start();
include "./include/mysql.php";
//echo"sumi";
// var_dump($_POST);
 if(isset($_POST['submit'])){
    $array=[];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $comment=$_POST["com"];

    $button=$_POST["submit"];
    //var_dump($_POST);
    
    
if(empty($name)){
    //echo"plz enter your name";
    $array["name1"]="plz enter your name";
    
}elseif (strlen($name>30)){
        //echo"plz enter your name in 30 character";
    $array["name1"]="plz enter your name in 30 character";
}

if(empty($email)){
    //echo"plz enter your email address ";
    $array['email2']="plz enter your email address";

 }elseif(strlen($email>20)){
  //echo"plz enter your email address with @";
     $array['email2']="plz enter your email address with @";

}

if(empty($pass)){
   // echo"plz Enter your password";
    $array['password']="plz Enter your password";
}/*elseif(strlen($pass>7)){
    //echo"plz Enter your password in 7 int";
    $array['password']="plz Enter your password in 7 int";
}*/
if(empty($comment)){
    //echo"Enter your openion";
    $array['detail']="Enter your opinions";
}elseif(str_word_count($comment>100)){
   // echo"Enter your openion is overflow";
    $array['detail']="Enter your opinions is over";
}


if(count($array)>0){
    $_SESSION['errors']= $array;
   $_SESSION["oldarray"]=$_POST;
    header("location:form1.php");
}
else{
    $query= "INSERT INTO post( Name, Email, password, msg) 
    VALUES ('$name','$email','$pass','$comment')";
    $stor=mysqli_query($mysqlconn,$query);
    //  var_dump($stor);
    if($stor){
       header("location:form1.php");
       $_SESSION['success']="Your sign in is successful.";
    }else{
        echo"try it again";
    }
}


 //print_r($array);

 //var_dump($_POST);



 }
 else{
     echo"try again";
 }
//echo"sumi";
// var_dump($_POST);
// 
 
 
 ?>