<?php
include "./include/mysql.php";
$query= "SELECT * FROM post ";
$connestion=mysqli_query($mysqlconn,$query);
$posts=mysqli_fetch_all($connestion,1);
//var_dump($posts);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>

    <title>table</title>
    <style>
    /* .table tr th{
        
    } */
    .clear{overflow:hidden;}
    .menu{background:pink;} 
    .menu ul{margin:0;padding:0;list-style:none;padding:5px 30px;}
	.menu ul li {float:left;display:block;margin:25px;}
	.menu ul li a{text-decoration:none;margin:20px;padding: 10px 30px;background:blue;
    color:white;text-decoration:none;font-size:20px;border:2px solid yellow;border-radius:5px;}
	.menu ul li a:hover{background:yellow;color:black;border:2px solid red;}
    
    .submit button{background-color:rgb(4, 122, 0)}
    .submit button:hover{background:blue;}
    .tab{
        margin:50px;
    }
        
     .btn-group a{
         color:white;
     }
    
    </style>
</head>
<body>


<div class="menu templete clear">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="./form1.php">Add post</a></li>
        <li><a href="#">All post</a></li>
        

    </ul>
</div>

 <div class="tab">
 <table class="table table-striped">
        <tr class="bg-info" style="font-size:20px;color:white;">
            <th >id</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>password</th>
            <th>message</th>
            <th>button</th>
        </tr>
        <?php
foreach($posts as $key=> $post){?>
    <tr>
    <td><?=++$key?></td>
    <td><?php
    echo $post['Name'];
    ?></td>
    <td><?=$post["Email"]?></td>
    <td><?=$post["password"]?></td>
    <td><?php
    if(strlen($post["msg"])>40){
        echo substr($post["msg"],0,40)."....";
       
    } 
    else{
       echo substr($post["msg"],0,40);
    } ?></td>
    <td>
            <div class="btn-group"style="margin:3px;">
            <a href="showmore.php?id=<?=$post["id"]?>" class="btn  btn-sm btn-primary"style="margin:3px;">see more</a>
             <a href="edit.php?id=<?=$post["id"]?>" class="btn  btn-sm btn-danger"style="margin:3px;">Edit</a>
             <a href="delete.php?id=<?=$post['id']?>" class="btn  btn-sm btn-warning"style="margin:3px;">Delete</a>
        
            </div>
        
    </td>
</tr>
<?php }

?>
       
</table>
 </div>   


</body>
</html>