<?php	
include_once("adb.php");

/* class that interacts with the IRB document table in the database*/

class irb_application extends adb{

function irb_application(){

}

/*A method that adds a new application to the irb_application_db database 
*@param 
@return boolean true if successful and false if not 
*/

function addApplication($aId, $title, $pInvestigator, $cpInvestigator, $finance, $exemption, $subjects, $special,
	$recruitement, $information, $method, $datasource, $researchInvoles, $procedure, $confidentiality,
	$dataHandling, $dissemination, $informingSubjects, $confProcedure, $parcipantReward, $participantBenefits,
	$rationale, $application_state,$reviewer_status){
	
	$strQuery="INSERT INTO `irb_application`
	(`APPLICANT_ID`,`TITLE_OF_PROJECT`,`PRINCIPAL_INVESTIGATOR`, `CO-PRINCIPAL_INVESTIGATOR`, `SOURCES_OF_FINANCE`, `REQUEST_FOR_EXEMPTION`, `CHARACTERISTICS_OF_SUBJECTS`, `SPECIAL_CASES`, `METHOD_OF_RECRUITMENT`, `EXTENT_OF_INFORMATION`, `RESEARCH_METHOD`, `DATA_SOURCES`, `RESEARCH_INVOLVES`, `PROCEDURE_OF_RESEARCH`, `CONFIDENTIALITY_OF_INFORMATION`, `HANDLING_DATA`, `DISSEMINATION_OF_DATA`, `INFORMING_SUBJECT`, `CONFIDENTIALITY_PROCEDURES`, `PARTICIPANT_REWARD`, `PARTICIPANT_BENEFITS`, `RATIONALE_FOR_EXCLUSION`, `APPLICATION_STATE`, `REVIEWER_STATUS`)
	VALUES ('$aId','$title','$pInvestigator','$cpInvestigator','$finance',
	'$exemption','$subjects','$special','$recruitement','$information','$method',
	'$datasource','$researchInvoles','$procedure','$confidentiality',
	'$dataHandling','$dissemination','$informingSubjects','$confProcedure','$parcipantReward',
	'$participantBenefits','$rationale','$application_state','$reviewer_status')
	";
	return $this->query($strQuery);
}

    function getApplication($applicationId){
        $strQuery = "select * from irb_application where APPLICATION_ID = $applicationId";
        return $this->query($strQuery);
    }
	
function saveChange($id,$data,$feild){
		$strQuery = "Update irb_application set `$feild`='$data' where `APPLICATION_ID` = $id";
        return $this->query($strQuery);
	}
}

/*
$obj= new irb_application();
$result=$obj->addApplication(
3,
'adsfasdf',
'laksjdfasdf',
'asdfasdf',
'asdklfjsdflkas',
 'dsfasdf',
 'fasdfasd',
 'adsfasdf',
 'asdfasdf',
'dfasdfasdf',
 'dsfasdfasdf', 
 '1',
 '2', 
 'asdfasdf',  
 'asdfasdf', 
 'asdfasdf',
 'asdfasdf', 
 'asdfasdf',
 'asdfasdf',
 'asdfasdf',
 'asdfasdf',
 'asdfasdf',
 'SAVE',
 'PENDING_REVIEW',
 'S');

var_dump($result);
*/
?>