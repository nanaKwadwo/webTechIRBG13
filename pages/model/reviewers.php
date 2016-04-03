<?php 
include_once("adb.php");

class reviewers extends adb {
    function reviewers() {

    }
    /**
     *function to get the reviewers in the database
     *@return list of reviewers
     */
    function getReviewers() {
        $strQuery = "SELECT * FROM `users` WHERE `user_status` like '%Reviewer%'";

        return $this->query($strQuery);
    }
}
?>