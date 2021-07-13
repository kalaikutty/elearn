<?php


$con=mysqli_connect('localhost','id13076923_root','kalaikutty22','id13076923_kalai');

if(isset($_POST['sub'])){
	$em=$_POST['mail'];
	$ps=$_POST['pass'];
    

	 $sql= "select * from form ;" ;
	$res = mysqli_query($con,$sql);
	if(mysqli_num_rows($res) > 0){
		$row=mysqli_fetch_assoc($res);
	if($em == $row['Email'] && $ps== $row['password']){
			echo " <h1>" ."Welcome"."</h1>" ;
		}
		//else{
		//	 echo 'Password or Email is wron. Log in again';}
	}
    
}
?>


<!DOCTYPE html>
<html>
    <head>
	
	<style>
	.h{
		float : centre;
		
	}
	.c{float:right;}
	body{
	background-color:#FAEBD7;
	}
	
	
	
	</style>
	
	</head>
	<body  class='h'>
		<a href='index.html'> <button>Home</button></a><br/>
	<a href='harvesting.html'> <button>Tamil cultivation Time Table</button></a><br/>
	<a href="farming.html"><button>Types Farming </button> </a>
	
	
	<p >Hi.Friends Welcome here.You can drop a message with me about any doubts.I am able to give solution to your questions. </p>
	
	<div><form method='POST'>
	<table>
	    <tr>
		<td>Email</td>
		<td><input type='mail' name='mil'></input></td>
		</tr>
	    <tr>
		 <td> Name :</td>
		 <td><input type='text' placeholder='Enter your name' name='na'></input></td>
		</tr>
	
	    <tr>
		  <td> Type your comment :</td>
		  <td> <input type='text' name='cmt'> </input>
		  
		</tr>
		</table>
		<button type='submit' name='su'>Post</button>
	</form>	
	<?php

	$cot=mysqli_connect('localhost','id13076923_root','kalaikutty22','id13076923_kalai');
	if(isset($_POST['su'])){
	$em=$_POST['mil'];
	 $na=$_POST['na']; 
     $cm=$_POST['cmt'];
	 
	 $qr="insert into Comment (Email,Name,cmt) values ('$em','$na','$cm')";
	 if($em=' ' || $na=' '){
	 
	 $res=mysqli_query($cot,$qr);
	 echo 'Your message added successfully';
	 }
	 else{echo 'failed' ;}
	 

	echo "<br/>";
	 echo $na;
	 echo "<br/>";
	echo $cm;
	}

    ?>
	</div>
	
	
	
	<a href="home.html"> Register here </a><br/>
	<a href="login.php">Log In here </a>
	
	<div class='c'>	&copy; Kalai
	</div>
	
	</body>
	
	
	
   




</html>