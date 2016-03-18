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
        $strQuery = "SELECT`faculty_id`,`userName`,`firstName`,`lastName` FROM `faculty` WHERE `usergroup` = 'Applicant' UNION SELECT`student_id`,`userName`,`firstName`,`lastName` FROM student WHERE is_applicant = 1";

        return $this->query($strQuery);
    }

    function getByUsernameAndId($id, $username) {
        $strQuery = "SELECT `userName`,`password`,`firstName`,`lastName`,`email`,`address`,`phoneNumber` FROM `faculty` WHERE `faculty_id` = $id AND userName = '$username'
UNION
SELECT `userName`,`password`,`firstName`,`lastName`,`email`,`address`,`phoneNumber`  FROM `student` WHERE `student_id` = $id AND userName = '$username'";

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
    function updateApplicant($id, $user, $username, $password, $firstname, $lastname, $email, $address, $phonenumber) {
        $strQuery = "UPDATE `faculty` SET 
        `userName`='$username',
        `password`='$password',
        `firstName`='$firstname',
        `lastName`='$lastname',
        `email`='$email',
        `address`='$address',
        `phoneNumber`='$phonenumber'
         WHERE `faculty_id` = $id AND userName = '$user'
         ";
        $strQuery2 = "
         UPDATE `student` SET 
        `userName`='$username',
        `password`='$password',
        `firstName`='$firstname',
        `lastName`='$lastname',
        `email`='$email',
        `address`='$address',
        `phoneNumber`='$phonenumber'
         WHERE `student_id` = $id AND userName = '$user'
         ";

        $res = $this->query($strQuery);
        $res2 = $this->query($strQuery2);

        echo $strQuery;
        echo $strQuery2;

        if ($res != null) {
            return $res;
        } else {
            return $res2;
        }
    }
}
?>