<?php 
/*
getApplications, a method that calls a method to get the applications given the reviewer-id of that user
*/
function getApplications() {
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/WT_SW Project/pages/model/applications.php";
    include_once($path);
    
    if (isset($_REQUEST['usercode'])) {
        $usercode = $_REQUEST['usercode'];
        $app = new applications($usercode);
    }else{
        $app = new applications();
    }

    
    $result = $app->getApplications();
    if ($result == false) {
        echo "<h4>No applications to display yet</h4>";
    } else {
        echo "     
      <table>
        <thead>
          <tr>
              <th data-field=\"id\">Application Id</th>
              <th data-field=\"name\"> Application Title</th>
              <th data-field=\"name\">Actions</th>
          </tr>
        </thead>
        <tbody>
";
        while ($row = $app->fetch()) {
            echo "          
          <tr>
            <td>{$row['APPLICATION_ID']}</td>
            <td>{$row['TITLE_OF_PROJECT']}</td>
            <td><a class=\"waves-effect waves-light btn\">Edit</a> <a class=\"waves-effect waves-light btn\">Delete</td>
          </tr>";
        }
        echo "        
            </tbody>
           </table>";
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