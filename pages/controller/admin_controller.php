<?php 
/*
*function getApplicants, gives a list of eligible applicants
*/
if(isset($_REQUEST['cmd'])){
    $command = $_REQUEST['cmd'];
    	switch($command){
		case 1:
			getApplicants();		
			break;
        case 2:
			getNonApplicants();		
			break;
        case 3:
			getReviewers();		
			break;
	}
}

function getApplicants() {
include '../model/applicants.php';
    $applicant = new applicants();
    $result = $applicant->getApplicants();
     if ($result == false) {      
        echo "{\"result\":false}";
    } else {
        $arr= array();
        while ($row = $applicant->fetch()) {
            $json =  "{\"user_id\":{$row['user_id']},\"username\":\"{$row['username']}\"}";
           array_push($arr,$json);
        } 
        echo json_encode($arr); 
}



}
function getReviewers() {
include '../model/reviewers.php';
    $reviewers = new reviewers();
    $result = $reviewers->getReviewers();
         if ($result == false) {      
        echo "{\"result\":false}";
    } else {
        $arr= array();
        while ($row = $reviewers->fetch()) {
            $json =  "{\"user_id\":{$row['user_id']},\"username\":\"{$row['username']}\"}";
           array_push($arr,$json);
        } 
        echo json_encode($arr);
    }


}

function getNonApplicants() {
    include '../model/applicants.php';
    $applicant = new applicants();
    $result = $applicant->getNonApplicants();
     if ($result == false) {      
        echo "{\"result\":false}";
    } else {
        $arr= array();
        while ($row = $applicant->fetch()) {
            $json =  "{\"user_id\":{$row['user_id']},\"username\":\"{$row['username']}\"}";
           array_push($arr,$json);
        } 
        echo json_encode($arr); 
}
}

/*
addApplicant, modal to add applicant
*/
function addApplicant($id){
    include_once("../model/applicants.php");
    include_once("../model/admin.php");
    $admin = new admin();
    $res=$admin->addApplicant($id);
    
     if($res){
        header('Location: ../../AdminPage.php');
     }
}
/*
addReviewer, modal to make a staff a reviewer
*/

/*
addSponsor, a modal to add a Sponsor to the Database
*/

/*
editApplicant, modal to add applicant
*/


 if (isset($_REQUEST['user_id'])){
     addApplicant($_REQUEST['user_id']);
}

if (isset($_REQUEST['username']) and isset($_REQUEST['password'])) {
    include_once("../model/applicants.php");
    $id = $_REQUEST['id'];
    $user = $_REQUEST['username'];
    $username = $_REQUEST['userName'];
    $password = $_REQUEST['password'];
    $userStatus =$_REQUEST['userstatus'];
    $isApplicant =$_REQUEST['isApplicant'];


    $app = new applicants();
    $result = $app->updateApplicant($id, $user,$username, $password, $userStatus, $isApplicant);
    if ($result) {
       header('Location: ../../AdminPage.php');
    }

}

if(isset($_REQUEST['searchtext'])){
    include_once("../model/applicants.php");
    $app= new applicants();
    $text = $_REQUEST['searchtext'];
    $result = $app->search($text);
    $response = "";
     if ($result == false) {      
        echo "{\"result\":false}";
    } else {
        $arr= array();
        while ($row = $app->fetch()) {
            $json =  "{\"user_id\":{$row['user_id']},\"username\":\"{$row['username']}\"}";
           array_push($arr,$json);
        } 
        echo json_encode($arr); 
}
}
/*
editReviewer, modal to make a staff a reviewer
*/

/*
editSponsor, a modal to add a Sponsor to the Database
*/

/*
disableApplicant, modal to add applicant
*/

/*
disableReviewer, modal to make a staff a reviewer
*/

/*
disableSponsor, a modal to add a Sponsor to the Database
*/

/*
search, a method that searches the applicants, reviewers or sponsors given a text and a selected tab
*/

/*
getApplicants, a method that calls a method to get the applicants 
*/

/*
getSponsors, a method that calls a method to get the sponsors 
*/

/*
getReviewers, a method that calls a method to get the reviewers 
*/

?>