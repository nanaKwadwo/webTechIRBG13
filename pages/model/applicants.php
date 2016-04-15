<?php 
include_once("adb.php");

class applicants extends adb {
    function applicants() {

    }
    /**
     *function to get the applicants in the database
     *@return list of applicants
     */
    function getApplicants() {
        $strQuery = "SELECT * FROM users WHERE is_applicant = 1";

        return $this->query($strQuery);
    }
    
    function getNonApplicants() {
        $strQuery = "SELECT * FROM users WHERE is_applicant = 0";

        return $this->query($strQuery);
    }

    function getByUsernameAndId($id, $username) {
        $strQuery = "SELECT * From users where username = '$username' and user_id  = $id";

        return $this->query($strQuery);
    }

    
    function search($search) {
        $strQuery = "SELECT * From users where username LIKE '%$search%' ";

        return $this->query($strQuery);
    }

    /**
*function to update the information of the applicants
*@pram $id is the id of the applicant
*@pram $user is the initial username of the applicant
*@pram $username is the new username of the applicant
*@pram $firstname is the firstname of the applicant
*@pram $lastname is the lastname of the applicant
*@pram $email is the email of the applicant
*@pram $address is the address of the applicant
*@pram $phonenumber is the phonenumber of the applicant
*@return query success or failure
 
*/
    function updateApplicant($id, $user, $username, $password, $userStatus, $isApplicant) {
        $strQuery = "UPDATE `users` SET 
        `username`='$username',
        `password`='$password',
        `user_status`='$userStatus[0],$userStatus[1],$userStatus[2]',
        `is_applicant`=$isApplicant
         WHERE `users`.`user_id` = $id
         ";
        $res = $this->query($strQuery);
        return $res;

    }
}
?>