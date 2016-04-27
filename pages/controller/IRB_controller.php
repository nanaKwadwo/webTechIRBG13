<?php 

/*
Command Switch case
*/ 
if(isset($_REQUEST['cmd'])){
    $command = $_REQUEST['cmd'];
    	switch($command){
		case 1:
			saveApplication();		
			break;
        case 2:
            getApplication();
            break;
        case 3:
            saveChange();
            break;
	}
}
/*
saveApplication, a method to save to the database with the status saved
*/
function saveApplication(){
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
    $applicationState = $_REQUEST['status'];
    $review = "PENDING_REVIEW";
    echo "include";

    include_once("../model/irb_application_class.php");


    echo "Adding Application";
    $application = new irb_application();
    $application->addApplication($applicantId, $title, $principalInvestigator, $coprincipaliInvestigator, $grants, $requestForExemption, $characteristics, $specialCases,
    $recruitment, $exemptInfo, $researchMethod, $dataSources, $researchCriteria, $procedure, $confidentalityinfo,
    $hanglingData, $dissemination, $informed, $confidetiality, $comphenstion, $benefits,
    $rationale, $applicationState, $review);
    echo "Application Added";


    header('Location: ../../Applicant.php');
}
}

function getReviewers() {
    include 'pages/model/reviewers.php';
    $rev = new reviewers();
    $result = $rev->getReviewers();
    if ($result != null) {
        while ($row = $rev->fetch()) {
                echo "<option value=\"{$row['user_id']}\">{$row['username']}</option>";
        }
    }
}



/*
getApplication, gets all the information in the document, for saving 
*/
 function getApplication(){
  include_once("../model/irb_application_class.php");
  $application = new irb_application();
  $applicationId = 0;
  if(isset($_REQUEST['application_id'])){
      $applicationId = $_REQUEST['application_id'];
  }
  $result=  $application->getApplication($applicationId);
  $data = $application->fetch();
  echo "{
  \"id\": \"{$data['APPLICATION_ID']}\",
  \"TITLE_OF_PROJECT\": \"{$data['TITLE_OF_PROJECT']}\",
  \"SOURCES_OF_FINANCE\": \"{$data['SOURCES_OF_FINANCE']}\",
  \"REQUEST_FOR_EXEMPTION\": \"{$data['REQUEST_FOR_EXEMPTION']}\",
  \"CHARACTERISTICS_OF_SUBJECTS\": \"{$data['CHARACTERISTICS_OF_SUBJECTS']}\",
  \"SPECIAL_CASES\": \"{$data['SPECIAL_CASES']}\",
  \"METHOD_OF_RECRUITMENT\": \"{$data['METHOD_OF_RECRUITMENT']}\",
  \"EXTENT_OF_INFORMATION\": \"{$data['EXTENT_OF_INFORMATION']}\",
  \"RESEARCH_METHOD\": \"{$data['RESEARCH_METHOD']}\",
  \"DATA_SOURCES\": \"{$data['DATA_SOURCES']}\",
  \"RESEARCH_INVOLVES\": \"{$data['RESEARCH_INVOLVES']}\",
  \"PROCEDURE_OF_RESEARCH\": \"{$data['PROCEDURE_OF_RESEARCH']}\",
  \"CONFIDENTIALITY_OF_INFORMATION\": \"{$data['CONFIDENTIALITY_OF_INFORMATION']}\",
  \"HANDLING_DATA\": \"{$data['HANDLING_DATA']}\",
  \"DISSEMINATION_OF_DATA\": \"{$data['DISSEMINATION_OF_DATA']}\",
  \"INFORMING_SUBJECT\": \"{$data['INFORMING_SUBJECT']}\",
  \"CONFIDENTIALITY_PROCEDURES\": \"{$data['CONFIDENTIALITY_PROCEDURES']}\",
  \"PARTICIPANT_REWARD\": \"{$data['PARTICIPANT_REWARD']}\",
  \"PARTICIPANT_BENEFITS\": \"{$data['PARTICIPANT_BENEFITS']}\",
  \"RATIONALE_FOR_EXCLUSION\": \"{$data['RATIONALE_FOR_EXCLUSION']}\"
}";
 }


/*
saveChange, a method to take the new information as well as the the feild to be updated and using the id 
update the irb application as required. Constructs the JSON which is sent to the ajax call
cmd 3
@author Delanyo Aborchie
*/
function saveChange(){
    if (isset($_REQUEST['data'])) {
        $data = $_REQUEST['data'];
        $feild = $_REQUEST['feild'];
        $id = $_REQUEST['id'];
    }
  include_once("../model/irb_application_class.php");
  $application = new irb_application();
  $result=$application->saveChange($id,$data,$feild);
  
  if ($result==true) {
      echo "{\"result\":\"1\"}";
  }else {
     echo "{\"result\":\"0\"}";
  }
}
?>