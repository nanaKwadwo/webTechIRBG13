<?php 
include_once("adb.php");

class applications extends adb {
    function applications() {

    }

    function getApplications($usercode = false) {
        if ($usercode != false) {
            $strQuery = "select * from irb_application where applicant_id = $usercode";
        } else {
            $strQuery = "select * from irb_application";
        }
        return $this->query($strQuery);

    }
}

?>