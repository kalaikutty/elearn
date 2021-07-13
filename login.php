<?php

$con=mysqli_connect('localhost','id13076923_root','kalaikutty22','id13076923_kalai');

function function_alert($msg) {
echo "<script type='text/javascript'>alert('$msg');</script>";}
 

if(isset($_POST['sub'])){
    $em=$_POST['mail'];
    $pas=$_POST['pass'];
   
    $ch_em="select * from form where Email='$em' ";
    $ch_pas="select * from form where password='$pas' ";
    
    $re_em=mysqli_query($con, "select * from form where Email='$em' ");
    $re_pas=mysqli_query($con,"select * from form where password='$pas' ");
    
	 if(mysqli_num_rows($re_em)){
      function_alert ('Already in use.You can Log in.');
    }
    elseif(mysqli_num_rows($re_pas)){
       function_alert ('Already in use.You can log in.' );
    }
    else{
        $qury=mysqli_query($con, "insert into form (Email,password)
        values  ('$em','$pas')");
  }
 
    
} 

?>


<!DOCTYPE html>
<html lang='en-us'>
    <head>
       <meta charset='utf-8'/>
	   <title>Log in page</title>
	   <style>
	   .k{float:left;
	       color:brown;
	       font-size:25px;
	   }
	       
	       
	   body{background-image:url('login.jpg');
	        background-repeat:no-repeat;
	   background-size:100%;
	   background-color:#FAEBD7;
	   }
	 
	 	.logo{width:150px;
	border-radius:100%;
	float:left;
	}
	.over{position:relative;
	color:white;
	}
	.text{
	position:absolute;
	 bottom: 20px;
  left: 16px;}
  
  button{float:right;}
	   </style>
       
    
    </head>
    

    <body>
		<a href='index.html'> <button>Home</button></a><br/>
	<a href='harvesting.html'> <button>Tamil cultivation Time Table</button></a>
	
	<div class='over'>
	<img src='download.jpg'  class='logo'/>
	<div class='text'> AgriFam</div>
	</div>
	
        <form method="POST" action='welcome.php'>
            <table>
                <tr>
                    <td><strong><h2><label for="email">Enter your Email</label></strong></h2></td> 
                    <td><input type="email" name="mail" required /></td>
                </tr><br/>
                <tr>
                    <td><strong><label><h2> Enter your password</h2>(for this site)</label></strong></td>
                    <td><input type='password' name="pass" required /></td>
                </tr><br/>
    

                <tr><td><input type="submit" name='sub' value='log in' /></td>
                </tr>
            </table> 
  </form>
	
  	<div class='k'>	&copy; Kalai
	</div>
	
    </body>

</html>