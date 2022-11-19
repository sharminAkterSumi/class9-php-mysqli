<?php
session_start();
//print_r($_POST);
// exit();
// echo"sumi";
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $comment=$_POST['msg'];
     $button=$_POST["submit"];
    $array=[];
    //print_r($array);
    
    
    if(empty($name)){
        
        $array["name1"]="plz enter your name";
        
    }elseif (strlen($name>30)){
            
        $array["name1"]="plz enter your name in 30 character";
    }
    
    if(empty($email)){
        
        $array['email2']="plz enter your email address";
    
     }elseif(strlen($email>20)){
     
         $array['email2']="plz enter your email address with @";
    
    }
    
    if(empty($pass)){
       
        $array['password']="plz Enter your password";
    }


    if(empty($comment)){
       
        $array['detail']="Enter your opinions";
    }elseif(str_word_count($comment>100)){
       
        $array['detail']="Enter your opinions is over";
    }


  print_r($array);

  if(count($array)==0){
       echo"good";

  }else{

    header("location:./edit.php?id=$id");
    $_SESSION['errors']=$array;
  }

}else{
    echo"try Again";
}



session_unset()
  
?>