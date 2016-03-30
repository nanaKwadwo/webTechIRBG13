<?php 

/*
getApplications, a method that calls a method to get the applications given the user-id of that user
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