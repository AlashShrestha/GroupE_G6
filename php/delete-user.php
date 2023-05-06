<?php

	include'connect.php';
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM user WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
        if($result->execute()){    
      header("location:view-users.php");
        }else{
            echo 'error, Please retry';
        }     
?>