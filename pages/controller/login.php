<?php session_start(); ?>
<?php
		
	
	//include 'db_config.php';
	
	include_once("adb.php");
	include_once("userlogin_class.php");	
	$obj=new userlogin_class();
	if($_POST['submit']){
		
		$username = addslashes($_POST['username']);
		$password = addslashes($_POST['password']);
		$usergroup = addslashes($_POST['usersgroup']);
		/*
		$hash_pass = md5($password.'@^%^TYGHys23233');
		
		
		$query = mysql_query("select * from user where
		 username='".$username."' and password='".$hash_pass."' limit 1");
		
	
		* $obj->getUsers())
		
			$count_user = mysql_num_rows($obj->login());
			*/
			
	if(!$obj->login($usergroup,$username,$password)){
		echo "$username";
		echo "$password";
		echo"Error getting users";
		
	}
	
	else {
		
		$count_rows=0;
		while ($row=$obj->fetch()){
			$count_rows++;
			echo"am counting rows";
		
		}
		if ($count_rows==0){
					echo" error username and password Type .. '";
			}
		if($count_rows==1){
			
			header("location:panel.php ");
			
			}	

	//header("location:panel.php ");
	}
		//	header("location:panel.php ");
		/*}
		if($count_user==1){
			
			
			$row = mysql_fetch_array($query);
			$_SESSION['id'] = $row['id'];
			header("location:panel.php ");
			
		}else{
			$error = ' error username and password Type .. ';	
		}
		
		
	}*/
	
}
/*
?>
<?php echo $error?>
* */
