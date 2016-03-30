<?php 
/*
*function getApplicants, gives a list of eligible applicants
*/
function getApplicants() {
include 'pages/model/applicants.php';

    $applicant = new applicants();

    $result = $applicant->getApplicants();
    if ($result == false) {
        echo "<h4>No applicants to display yet</h4>";
    } else {
        echo "     
      <table>
        <thead>
          <tr>
              <th data-field=\"id\">Applicant Id</th>
              <th data-field=\"name\"> Applicant Username</th>
              <th data-field=\"name\">Actions</th>
          </tr>
        </thead>
        <tbody>
";
        while ($row = $applicant->fetch()) {
            echo "          
          <tr>
            <td>{$row['user_id']}</td>
            <td>{$row['username']}</td>
            <td><a class=\"waves-effect waves-light btn\" href=\"ApplicantForm.php?id={$row['user_id']}&username={$row['username']}\">Edit</a> <a class=\"waves-effect waves-light btn\">Delete</td>
          </tr>";
        }
        echo "        
            </tbody>
           </table>";
    }


}


function getNonApplicants() {

    $applicant = new applicants();

    $result = $applicant->getNonApplicants();
    if ($result == false) {
        echo "<h4>No Nonapplicants to display yet</h4>";
    } else {
        echo "     
      <table>
        <thead>
          <tr>
              <th data-field=\"id\">Non-Applicant Id</th>
              <th data-field=\"name\"> Non-Applicant Username</th>
              <th data-field=\"name\">Actions</th>
          </tr>
        </thead>
        <tbody>
";
        while ($row = $applicant->fetch()) {
            echo "          
          <tr>
            <td>{$row['user_id']}</td>
            <td>{$row['username']}</td>
            <td><a class=\"waves-effect waves-teal btn-flat\" href=\"pages/controller/admin_controller.php?user_id={$row['user_id']}\" >Add As Applicant</a></td>
          </tr>";
        }
        echo "        
            </tbody>
           </table>";
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