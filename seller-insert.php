<?php session_start();?>
<?php
   $host="localhost";
   $username="root";
   $pass="";
   $db="SMTS";
   
   $con=mysqli_connect($host,$username,$pass,$db);
   if(!$con){
   	die("Database connection error");
   }
   
   	
   	if(isset($_POST['apply']))
   	{
   	$seller_id = isset($_SESSION['id']) ? $_SESSION['id'] : '';
 
   	$prod_name=$_POST['prod_name'];
   	$price=$_POST['price'];
   	$new_old=$_POST['new_old']; 
   	$prod_type=$_POST['prod_type'];
   	$description=$_POST['description'];  
   	$image=isset($_FILES['image'])?$_FILES['image']:'';
   	$status=$_POST['status']; 
   	
   	
   	
    
         
                                 

    $query    = "INSERT into `PRODUCT` (prod_name,new_old,prod_type,description, price,image,seller_id,status_)
                     VALUES ('$prod_name','$new_old','$prod_type','$description','$price','$image','$seller_id','$status')";
   	
   		$res=mysqli_query($con,$query);
   		
   		
   		
   	if($res){
   	
   	   
   	
   	  echo "<script>
   alert('Data updated Successfully');
  window.location.href='myad.php';
   </script>";
   	}
   	 
   	  
   	
   	 
   	  
   	  
  
       
   	}else{
   		echo "<script>
   alert('Data not updated ,try again.....!!');
  window.location.href='newad.php';
   </script>";
   	}
   	
   	
   	
   
  
   ?>

