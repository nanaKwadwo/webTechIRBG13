<?php session_start(); ?>
<?php 
/*
getApplications, a method that calls a method to get the applications given the reviewer-id of that user
*/
if(isset($_REQUEST['cmd'])){
    $command = $_REQUEST['cmd'];
    	switch($command){
		case 1:
			getApplications();		
			break;
	}
}
function getApplications() {
    include_once("../model/applications.php");

    
        $app = new applications();
        $usercode = $_SESSION["user_id"]; 
        $app = new applications();
        //echo "<script type='text/javascript'>alert($usercode)</script>";
    
    $result = $app->getApplicationsRev($usercode);
   if ($result == false) {      
        echo "{\"result\":false}";
    } else {
        $arr= array();
        while ($row = $app->fetch()) {
            $json ="{\"app_id\":{$row['APPLICATION_ID']},\"app_title\":\"{$row['TITLE_OF_PROJECT']}\",\"app_status\":\"{$row['REVIEWER_STATUS']}\"}";
           array_push($arr,$json);
        } 
        echo json_encode($arr); 
    }

}

if(isset($_REQUEST['search'])){	
    include_once("../model/applications.php"); 
    $app = new applications();
    $usercode = $_SESSION["user_id"]; 
    $app = new applications();
	$text = $_REQUEST['search'];

    $result = $app->searchRev($usercode,$text);
	
    if ($result == false) {      
        echo "{\"result\":false}";
    } else {
        $arr= array();
        while ($row = $app->fetch()) {
            $json ="{\"app_id\":{$row['APPLICATION_ID']},\"app_title\":\"{$row['TITLE_OF_PROJECT']}\"}";
           array_push($arr,$json);
        } 
		
        echo json_encode($arr);
	
    }
}
/*
getSchedule, a method that gets the schedule given the reviewer_id of that reviewer
*/

/*
processApplication, that redirects to application page where it can be read and approved/disapproved/pending
*/

/*
scheduleMeeting, a method that opens a modal where a meeting can be scheduled
*/

/*
deleteMeeting, a method that deletes a meeting
*/

/*
search, a method that searches the applications or schedule given a text and a selected tab
*/

/*
comment, a method that will allow the reviewer to comment on the application
*/

/*
search, given a text and a selected tab it will search the schedule or applications
*/


?>