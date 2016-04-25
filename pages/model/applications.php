<?php 
include_once("adb.php");

class applications extends adb {
    function applications() {

    }

    function getApplications($usercode = false) {
        if ($usercode != false) {
            $strQuery = "select * from irb_application where APPLICANT_ID = $usercode";
        } else {
            $strQuery = "select * from irb_application";
        }
        return $this->query($strQuery);

    }
        function getApplicationsRev($usercode = false) {
        if ($usercode != false) {
            $strQuery = "select * from irb_application where (`PRINCIPAL_INVESTIGATOR` = '$usercode' or `CO-PRINCIPAL_INVESTIGATOR` ='$usercode') and `APPLICANT_ID` != '$usercode' and APPLICATION_STATE = 'SUBMITTED'";
        } else {
            $strQuery = "select * from irb_application";
        }
        return $this->query($strQuery);

    }
	
	 function search($usercode,$search) {
        $strQuery = "SELECT * from irb_application where TITLE_OF_PROJECT LIKE '%$search%' and APPLICANT_ID='$usercode' ";

        return $this->query($strQuery);
    }
	function searchRev($usercode,$search){
		
            $strQuery = "SELECT * from irb_application where TITLE_OF_PROJECT LIKE '%$search%' and  (`PRINCIPAL_INVESTIGATOR` = '$usercode' or `CO-PRINCIPAL_INVESTIGATOR` ='$usercode') and `APPLICANT_ID` != '$usercode' and APPLICATION_STATE = 'SUBMITTED' ";
			return $this->query($strQuery);
        }
	
	
}

?>