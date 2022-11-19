<?php
include './include/mysql.php';
//print_r($_GET);
$id=$_GET['id'];
$query="SELECT * FROM `post` WHERE id='$id'";
$stor=mysqli_query($mysqlconn,$query);
$data=mysqli_fetch_all($stor,1);
//print_r($fa);
// print_r($query);

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
<?php
foreach($data as $post){?>
<table class="table" style="margin:auto;width:700px;margin-top:70px">
<tr>
<th class="bg-warning">
MESSAGE
</th>
</tr>
<tr>
<td><?=$post["msg"]?></td>
</tr>
</table>

<?php
}
?>
</body>
</html>