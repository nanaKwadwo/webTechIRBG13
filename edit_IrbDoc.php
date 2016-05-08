<?php
session_start(); 

include_once("irb_application_class.php");
$application_id= "";

if(isset($_REQUEST['aID']))
	$application_id=$_REQUEST['aID'];


$obj = new irb_application();
$detail=$obj->getApplication($application_id);
$detail=$obj->fetch();
$application_id=$detail['APPLICATION_ID'];


?>

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
            <form class="form-el" action="" id="irbform" method="POST">
			
                <div class="section">
                    <label>User Group</label>
					<input type="hidden" value = "<?php echo $application_id?>">
                    <input type="hidden" value="<?php echo $_SESSION["user_id"]?>"  name="applicant_id">
                    <select name="usergroup" form="irbform">
                        <option value="" disabled selected>User Group</option>
                        <option value="student">Student</option>
                        <option value="faculty">Faculty</option>
                    </select>
                </div>
                <div class="section">
					<label>Title of Research</label>
                    
					<input id="title" type="text" placeholder="Title Of Project" name="title_of_project" value="<?php echo $detail['TITLE_OF_PROJECT'] ?>" >
                </div>
                <div class="section">
                    <label>Principal Investigator</label>
                    <input type="text" name="principal_investigator" value="<?php echo $detail['PRINCIPAL_INVESTIGATOR']?>"/>
					 <!--
					<select name="principal_investigator" form="irbform">
                        <option value="" disabled selected>Choose your Principal Investigator</option>
                    </select>
					-->
                </div>
                <div class="section">
                    <label>Co-Principal Investigator</label>
					<input type="text" name="co-principal_investigator" value="<?php echo $detail['CO-PRINCIPAL_INVESTIGATOR']?>"/>
                    <!--
					<select name="coprincipal_investigator" form="irbform">
                        <option value="" disabled selected>Not Selected</option>
                    </select>
					-->
                </div>
                <div class="section">
                    <label for="textarea1">Sources of Finance</label>
                    <textarea name="sources" form="irbform" ><?php echo $detail['SOURCES_OF_FINANCE']?></textarea>
                </div>
                <div class="section">
                    <label>Request For Exemption</label>
                    <textarea name="request_for_exemption" form="irbform" ><?php echo $detail['REQUEST_FOR_EXEMPTION'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1">Numbers and Characteristics of Subjects</label>
                    <textarea name="characteristics" form="irbform"><?php echo $detail['CHARACTERISTICS_OF_SUBJECTS'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1">Special Cases</label>
                    <textarea name="special_cases" form="irbform"><?php echo $detail['METHOD_OF_RECRUITMENT'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Method Of Recruitment</label>
                    <textarea name="recruitment" form="irbform"><?php echo $detail['EXTENT_OF_INFORMATION'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Extent Of Information</label>
                    <textarea name="exempt_information" form="irbform"><?php echo $detail['EXTENT_OF_INFORMATION'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Classification Of Research Method</label>
                    <textarea name="research_method" form="irbform"><?php echo $detail['RESEARCH_METHOD'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Data Sources for Research</label>
                    <textarea name="data_sources" form="irbform"><?php echo $detail['DATA_SOURCES'] ?></textarea>
                </div>
                <div class="section">
                    <label>Does Your research involve any of the following</label>
                    <select multiple name="research_criteria" form="irbform">
                        <option value="" disabled selected>None</option>
                        <option value="1">Deception of the Participant</option>
                        <option value="2">Punishment of the Participant</option>
                        <option value="3">Materials Regarded as socially unacceptable</option>
                        <option value="4">Invasion Of Privacy</option>
                        <option value="5">Disclosure of the Name Of the Participant</option>
                        <option value="6">Physically invasive Procedures</option>
                    </select>
                </div>
                <div class="section">
                    <label for="textarea1"> If Yes to any of the above, explain the procedure in detail and measures taken to minimise the risk</label>
                    <textarea name="procedure" form="irbform"><?php echo $detail['PROCEDURE_OF_RESEARCH'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Confidentiality Of information</label>
                    <textarea name="confidentiality_info" form="irbform"><?php echo $detail['CONFIDENTIALITY_OF_INFORMATION'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Procedures for handling and Storing Data</label>
                    <textarea name="handling_data" form="irbform"><?php echo $detail['HANDLING_DATA'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> How will the results be Disseminated</label>
                    <textarea name="dissemination" form="irbform"><?php echo $detail['DISSEMINATION_OF_DATA'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> How will subjects be informed of the results</label>
                    <textarea name="infomed" form="irbform"><?php echo $detail['INFORMING_SUBJECT'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> How will Confidentiality be upheld during dissemination</label>
                    <textarea name="confidentality" form="irbform"><?php echo $detail['CONFIDENTIALITY_PROCEDURES'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Will participants be rewarded/comphensated in any way? Please state</label>
                    <textarea name="comphenstion" form="irbform"><?php echo $detail['PARTICIPANT_REWARD'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> What Intrinsic benefits will the Participants Receive?</label>
                    <textarea name="benefits" form="irbform"><?php echo $detail['PARTICIPANT_BENEFITS'] ?></textarea>
                </div>
                <div class="section">
                    <label for="textarea1"> Rationale for Exclusion of Required element(Optional)</label>
                    <textarea name="rationale" form="irbform"><?php echo $detail['RATIONALE_FOR_EXCLUSION'] ?></textarea>
                </div>
				
							
				
           
        </main>
        <aside class="nav">
            <div class="heading">IRB Document</div>
            <br>
            <div class="add">
                <button href="">Attach</button>
            </div>
            <div class="add">
                <button  type="submit" form="irbform" value="save">Save</button>
            </div>
			<div class="add">
                 <input type="submit" name="save" value="submit">
				</div>
            </form>
		
			<?php
ob_start();
include_once("irb_application_class.php");

$application_id= "";

if(isset($_REQUEST['aID']))
	$application_id=$_REQUEST['aID'];
 


if (isset($_POST['title_of_project'], $_POST['principal_investigator'], $_POST['co-principal_investigator'],
$_POST['sources'], $_POST['request_for_exemption'], $_POST['characteristics'],$_POST['special_cases'], $_POST['recruitment'],
$_POST['exempt_information'],$_POST['research_method'],$_POST['data_sources'], $_POST['research_criteria'],$_POST['procedure'],
$_POST['confidentiality_info'],$_POST['handling_data'],$_POST['dissemination'],$_POST['infomed'],$_POST['confidentality'],
$_POST['comphenstion'], $_POST['benefits'],$_POST['rationale']))
	
$obj= new irb_application();

$result=$obj->editApplication($application_id, 1, $_POST['title_of_project'], $_POST['principal_investigator'], $_POST['co-principal_investigator'],
	$_POST['sources'], $_POST['request_for_exemption'], $_POST['characteristics'], $_POST['special_cases'],
	$_POST['recruitment'], $_POST['exempt_information'], $_POST['research_method'], $_POST['data_sources'], $_POST['research_criteria'], $_POST['procedure'],
	$_POST['confidentiality_info'],$_POST['handling_data'], $_POST['dissemination'], $_POST['infomed'], $_POST['confidentality'], $_POST['comphenstion'], $_POST['benefits'],
	$_POST['rationale'], 'SAVE','REVIEW-PENDING', 'BLOB');
	

header("location:Applicant.php;")	



?>
        </aside>
		 
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>




</html>
