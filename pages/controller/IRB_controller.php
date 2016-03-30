<?php 

/*
fillApplication, given an irb document, it can fill the reqired slots with the data
*/
if (isset($_REQUEST['applicant_id'])) {
    $applicantId = $_REQUEST['applicant_id'];
    $usergroup = $_REQUEST['usergroup'];
    $title = $_REQUEST['title_of_project'];
    $principalInvestigator = $_REQUEST['principal_investigator'];
    $coprincipaliInvestigator = $_REQUEST['coprincipal_investigator'];
    $grants = $_REQUEST['grants'];
    $requestForExemption = $_REQUEST['request_for_exemption'];
    $characteristics = $_REQUEST['characteristics'];
    $specialCases = $_REQUEST['special_cases'];
    $recruitment = $_REQUEST['recruitment'];
    $exemptInfo = $_REQUEST['exempt_informaion'];
    $researchMethod = $_REQUEST['research_method'];
    $dataSources = $_REQUEST['data_sources'];
    $researchCriteria = $_REQUEST['research_criteria'];
    $procedure = $_REQUEST['procedure'];
    $confidentalityinfo = $_REQUEST['confidentiality_info'];
    $hanglingData = $_REQUEST['handling_data'];
    $dissemination = $_REQUEST['dissemination'];
    $informed = $_REQUEST['infomed'];
    $confidetiality = $_REQUEST['confidentality'];
    $comphenstion = $_REQUEST['comphenstion'];
    $benefits = $_REQUEST['benefits'];
    $rationale = $_REQUEST['rationale'];
    $applicationState = "SAVE";
    $review = "PENDING_REVIEW";
    echo "include";
    
    include_once("../model/irb_application_class.php");

    
    echo "Adding Application";
    $application = new irb_application();
    $application->addApplication($applicantId, $title, $principalInvestigator, $coprincipaliInvestigator, $grants, $requestForExemption, $characteristics, $specialCases,
	$recruitment, $exemptInfo, $researchMethod, $dataSources, $researchCriteria, $procedure, $confidentalityinfo,
	$hanglingData, $dissemination, $informed, $confidetiality, $comphenstion, $benefits,
	$rationale, $applicationState,$review);
    echo "Application Added";
    
    header('Location: ../../User.php');
    

}

/*
getApplication, gets all the information in the document, for saving 
*/

/*
saveApplication, a method to save to the database with the status saved
*/

/*
submitApplication, a method to send the application to the database with the status of submitted
*/
?>