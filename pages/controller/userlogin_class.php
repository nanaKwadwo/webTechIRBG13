 <?php
/**
*/
include_once("../model/adb.php");
/**
*Users  class
*/
class userlogin_class extends adb{
	function users(){
	}

	
	/*The function that checks for username and password
	  The function takes two parameters, password and username
	 */
	
	function login($usergroup,$username,$pword){
		echo"$usergroup";
		
		//$hash_pass = md5($pword.'@^%^TYGHys23233');
		//$strQuery="select username from $usergroup where
		// username='$username' and password='$pword'";
		$strQuery="select username from	users where username='$username'and user_status='$usergroup' and password='$pword'";
		 
		
		 return $this->query($strQuery);	
		}
}
?>