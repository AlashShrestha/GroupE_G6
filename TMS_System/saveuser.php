<?php
include('connect.php');
//session_start();
$a = $_POST['user_id'];
$b = $_POST['name'];
$c = $_POST['username'];
$d = $_POST['pass'];
$e = $_POST['email'];
$f = $_POST['address'];
$g = $_POST['position'];
// query
$sql = "INSERT INTO user (user_id,name,username,pass,email,address,position) VALUES (:a,:b,:c,:d,:e,:f,:g)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$g));{
if($q){
      header("location:add-user.php?success=true");
        }else{
            header("location:add_user.php?failed=true");
        } 
		}
?>