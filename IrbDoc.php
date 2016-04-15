<?php
session_start(); 
?>
<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="body">
        <main class="content-2">
            <div class="doc-start">Ashesi University</div>
            <div class="doc-start">Request for Human subjects Approval</div>
            <form class="form-el" action="pages/controller/IRB_controller.php" id="irbform">
                <div class="section">
                    <label>User Group</label>
                    <input type="hidden" value="<?php echo $_SESSION["user_id"]?>"  name="applicant_id">
                    <select name="usergroup" form="irbform">
                        <option value="" disabled selected>User Group</option>
                        <option value="student">Student</option>
                        <option value="faculty">Faculty</option>
                    </select>
                </div>
                <div class="section">
                    <input id="title" type="text" placeholder="Title Of Project" name="title_of_project">
                </div>
                <div class="section">
                    <label>Principal Investigator</label>
                    <select name="principal_investigator" form="irbform">
                        <option value="" disabled selected>Choose your Principal Investigator</option>
                    </select>
                </div>
                <div class="section">
                    <label>Co-Principal Investigator</label>
                    <select name="coprincipal_investigator" form="irbform">
                        <option value="" disabled selected>Not Selected</option>
                    </select>
                </div>
                <div class="section">
                    <label for="textarea1">Grant</label>
                    <textarea name="grants" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label>Request For Exemption</label>
                    <textarea name="request_for_exemption" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1">Numbers and Characteristics of Subjects</label>
                    <textarea name="characteristics" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1">Special Cases</label>
                    <textarea name="special_cases" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Method Of Recruitment</label>
                    <textarea name="recruitment" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Extent Of Information</label>
                    <textarea name="exempt_informaion" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Clasification Of Research Method</label>
                    <textarea name="research_method" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Data Sources for Research</label>
                    <textarea name="data_sources" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label>Does Your ressearch involve any of the following</label>
                    <select multiple name="research_criteria" form="irbform">
                        <option value="" disabled selected>None</option>
                        <option value="1">Deception of the Participant</option>
                        <option value="2">Punishment of the Participant</option>
                        <option value="3">Materials Regarded as socially Unacceptible</option>
                        <option value="4">Invasion Of Privacy</option>
                        <option value="5">Desclosure of the Name Of the Participant</option>
                        <option value="6">Physically invaisive Procedures</option>
                    </select>
                </div>
                <div class="section">
                    <label for="textarea1"> If Yes to any of the above, explain the procedure in detail and measures taken to minimise the risk</label>
                    <textarea name="procedure" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Confidentiality Of information</label>
                    <textarea name="confidentiality_info" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Procedures for handeling and Storing Data</label>
                    <textarea name="handling_data" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> How will the results be Disseminated</label>
                    <textarea name="dissemination" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> How will subjects be informed of the results</label>
                    <textarea name="infomed" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> How will Confidentiality be upheld during dissemination</label>
                    <textarea name="confidentality" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Will participants be rewarded/comphensated in any way? Please state</label>
                    <textarea name="comphenstion" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> What Intrinsic benefits will the Participants Recieve?</label>
                    <textarea name="benefits" form="irbform"></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Rationale for Exclusion of Required element(Optional)</label>
                    <textarea name="rationale" form="irbform"></textarea>
                </div>
            </form>
        </main>
        <aside class="nav">
            <div class="heading">IRB Document</div>
            <br>
            <div class="add">
                <a href="">Attach</a>
            </div>
            <div class="add">
                <button  type="submit" form="irbform" value="Submit">Save</button>
            </div>
            <div class="add">
                <a href="">Submit</a>
            </div>
        </aside>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>