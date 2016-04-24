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

	
}

/*

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