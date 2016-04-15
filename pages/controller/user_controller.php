<?php session_start(); ?> 
<?php 

/*
getApplications, a method that calls a method to get the applications given the user-id of that user
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
    $result = $app->getApplications($usercode);
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
getSchedule, a method that gets the schedule given the user_id of that user
*/

/*
addApplication, a method that redirects to the a page where an application can be made
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
deleteApplication, a method to delete an application
*/

/*
editApplication, given an application id, it allows the user to edit the application
*/

/*
submitApplication, given an application id, it changes the status of the application to submitted for review
*/

?>