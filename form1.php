
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>sign in page</title>
    <style>
.clear{overflow:hidden;}
    body{
            
        background-color:rgb(85, 84, 79);;
    }
    .header{
        color:white;
        padding:5px;
        font-size:25px;
        
    }
	 .menu{background:pink;} 
	.menu ul{margin:0;padding:0;list-style:none;padding:5px 30px;}
	.menu ul li {float:left;display:block;margin:25px;}
	.menu ul li a{text-decoration:none;margin:20px;padding: 10px 30px;background:blue;
    color:white;text-decoration:none;font-size:20px;border:2px solid yellow;border-radius:5px;}
	.menu ul li a:hover{background:yellow;color:black;border:2px solid red;}
    
    .submit button{background-color:rgb(4, 122, 0)}
    .submit button:hover{background:blue;}
        
    }
    </style>
</head>
<body>

<div class="menu templete clear">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Add post</a></li>
        <li><a href="table.php">All post</a></li>
        

    </ul>
</div>
<!-- <?=$_SESSION['success']?> -->
<?php 
if(isset( $_SESSION["success"])){?>
    
    <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" style="position:absolute;bottom:30px;right:50px;width:200px ">
  <div class="toast-body" >
  <strong class="me-auto">Add post</strong></br>
   Thank you .</br>
   <?php
   echo  $_SESSION["success"];
   ?>
    <!-- <div class="mt-2 pt-2 border-top">
      <button type="button" class="btn btn-primary btn-sm">Take action</button>
      <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
    </div> -->
  </div>
</div>
<?php
}
?> 


    <div class="col-5 mx-auto mt-5 bg-info">

<div class="header">
    <strong >
        Add Post
    </strong>
</div>
    <form action="formdesign.php" method="POST">
        <div>
        <label class="w-100">
            Name :
            </label>
            <input type="text" class="form-control" name="name" id="name"
            value="<?php
            if(isset($_SESSION["oldarray"]['name1'])){
              echo$_SESSION["oldarray"]['name1'];  
            }else{
                echo"";
            }
           
            ?>">
            <!-- <?php 
            print_r($_SESSION["errors"]) ;
            ?> -->
            <?php
                if(isset($_SESSION["errors"]['name1'])){?>
                    <span class="text-danger">
                <?php
                    echo $_SESSION["errors"]['name1'] ;
                ?>

            </span>
             <?php   }
                 ?>
            
            
        
        </div>
            
        <div>

        <label class="w-100">
            Email Address :
            </label>
            <input type="email" class="form-control" name="email" 
            value="<?=isset($_SESSION["oldarray"]['email2'])? $_SESSION["oldarray"]['email2'] : '' 
            ?>">
            <?php
                if(isset($_SESSION["errors"]['email2'])){?>
                    <span class="text-danger">
                <?php
                    echo $_SESSION["errors"]['email2'] ;
                ?>

            </span>
             <?php   }
                 ?>
            
        
        </div>
       
        <div class=mb-3>
        <label class="w-100 ">
            password :
                
            <input type="password" class="form-control " name="password" valu="123">
            <?php
                if(isset($_SESSION["errors"]['password'])){?>
                    <span class="text-danger">
                <?php
                    echo $_SESSION["errors"]['password'] ;
                ?>

            </span>
             <?php   }
                 ?>
        </label>
        </div>
        

        <label class="w-100  ">
            comments :
            <!-- <input type="detail" class="form-control mb-3" name="com"> -->
            <textarea class="form-control"  name="com" value="sumi"></textarea>
            <?php
                if(isset($_SESSION["errors"]['detail'])){?>
                    <span class="text-danger">
                <?php
                    echo $_SESSION["errors"]['detail'] ;
                ?>

            </span>
             <?php   }
                 ?>
        </label>

        <div  class="submit">
            <button type="submit" name="submit" valu="submit" class="btn btn-primary w-100 mb-4">Submit</button>
        </div>
    
    </form>
    
    
    </div>
</body>
</html>
<?php
    session_unset();
?>