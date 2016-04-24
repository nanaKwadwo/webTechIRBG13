<?php	
include_once("adb.php");

/* class that interacts with the IRB document table in the database*/

class irb_application extends adb{

function irb_application(){

}

/*A method that adds a new application to the irb_application_db database 
*@param  string $strQuery sql string to execute
@return boolean true if successful and false if not 
*/

function addApplication($aId, $title, $pInvestigator, $cpInvestigator, $finance, $exemption, $subjects, $special,
	$recruitement, $information, $method, $datasource, $researchInvoles, $procedure, $confidentiality,
	$dataHandling, $dissemination, $informingSubjects, $confProcedure, $parcipantReward, $participantBenefits,
	$rationale, $application_state,$reviewer_status, $attachment){
	
	$strQuery="INSERT INTO `irb_application`
	(`APPLICANT_ID`,`TITLE_OF_PROJECT`,`PRINCIPAL_INVESTIGATOR`, `CO-PRINCIPAL_INVESTIGATOR`,
	`SOURCES_OF_FINANCE`, `REQUEST_FOR_EXEMPTION`, `CHARACTERISTICS_OF_SUBJECTS`, `SPECIAL_CASES`,
	`METHOD_OF_RECRUITMENT`, `EXTENT_OF_INFORMATION`, `RESEARCH_METHOD`, `DATA_SOURCES`, `RESEARCH_INVOLVES`,
	`PROCEDURE_OF_RESEARCH`, `CONFIDENTIALITY_OF_INFORMATION`, `HANDLING_DATA`, `DISSEMINATION_OF_DATA`,
	`INFORMING_SUBJECT`, `CONFIDENTIALITY_PROCEDURES`, `PARTICIPANT_REWARD`, `PARTICIPANT_BENEFITS`,
	`RATIONALE_FOR_EXCLUSION`, `APPLICATION_STATE`, `REVIEWER_STATUS`, `ATTACHMENTS`)
	VALUES ('$aId','$title','$pInvestigator','$cpInvestigator','$finance',
	'$exemption','$subjects','$special','$recruitement','$information','$method',
	'$datasource','$researchInvoles','$procedure','$confidentiality',
	'$dataHandling','$dissemination','$informingSubjects','$confProcedure','$parcipantReward',
	'$participantBenefits','$rationale','$application_state','$reviewer_status','$attachment')
	";
	
	
	return $this->query($strQuery);
}
/*An method that edits an existing Irb Application

	@param string $strQuery sql string to execute
	@return returns true if successful and false if not
*/

function editApplication ( $applicationID, $aId, $title, $pInvestigator, $cpInvestigator, $finance, $exemption, $subjects, $special,
	$recruitement, $information, $method, $datasource, $researchInvoles, $procedure, $confidentiality,
	$dataHandling, $dissemination, $informingSubjects, $confProcedure, $parcipantReward, $participantBenefits,
	$rationale, $application_state,$reviewer_status, $attachment ){
	
	$strQuery= "
	UPDATE `irb_application` SET 
	`APPLICANT_ID`=$aId,`TITLE_OF_PROJECT`='$title',`PRINCIPAL_INVESTIGATOR`='$pInvestigator',`CO-PRINCIPAL_INVESTIGATOR`='$cpInvestigator',
	`SOURCES_OF_FINANCE`='$finance',`REQUEST_FOR_EXEMPTION`='$exemption',`CHARACTERISTICS_OF_SUBJECTS`='$subjects',`SPECIAL_CASES`='$special',
	`METHOD_OF_RECRUITMENT`='$recruitement',`EXTENT_OF_INFORMATION`='$information',`RESEARCH_METHOD`='$method',`DATA_SOURCES`='$datasource',
	`RESEARCH_INVOLVES`='$researchInvoles',`PROCEDURE_OF_RESEARCH`='$procedure',`CONFIDENTIALITY_OF_INFORMATION`='$confidentiality',
	`HANDLING_DATA`='$dataHandling',`DISSEMINATION_OF_DATA`='$dissemination',`INFORMING_SUBJECT`='$informingSubjects',
	`CONFIDENTIALITY_PROCEDURES`='$confProcedure',`PARTICIPANT_REWARD`='$parcipantReward',`PARTICIPANT_BENEFITS`='$participantBenefits',
	`RATIONALE_FOR_EXCLUSION`='$rationale',`APPLICATION_STATE`='$application_state',`REVIEWER_STATUS`='$reviewer_status',`ATTACHMENTS`='$attachment' WHERE 
   
    `APPLICATION_ID`=$applicationID";
   
	return $this->query($strQuery);
	}
	
	/*A function to delete an application from the irb table 
	*@param: string $strQuery sql string to execute
	*@return: returns true if successful and false if not successful 
	*/
	
function deleteApplication($applicationID){
	
	$strQuery = "DELETE FROM `irb_application` WHERE `APPLICATION_ID`=$applicationID ";
	
	return $this->query($strQuery);

	}	
}
/*
$obj4= new irb_application();
$obj4->deleteApplication(2);





$obj2= new irb_application();
$obj2->editApplication(3,73,'working','solved','solved',
'snake',
 'deer',
 'solved',
 'game',
 'goy',
'loud',
 'always', 
 '2',
 '3', 
 'asdfasdf',  
 'asdfasdf', 
 'asdfasdf',
 'asdfasdf', 
 'asdfasdf',
 'asdfasdf',
 'asdfasdf',
 'asdfasdf',
 'asdfasdf',
 'SUBMITTED',
 'APPROVED',
 'S');
 

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