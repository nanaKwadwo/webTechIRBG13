<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center">IRB Document</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <form class="card center-align  valign-wrapper" id="irbform">
                <div class="container">
                    <div class="container">
                        <h3>Ashesi University</h3>
                        <h4>Request for human subjects approval</h4>
                    </div>

                    <div style="margin-top: 20px">
                        <div class="input-field col s12">
                            <select name="ug" form="irbform">
                                <option value="" disabled selected>User Group</option>
                                <option value="student">Student</option>
                                <option value="faculty">Faculty</option>
                            </select>
                            <label>Choose one</label>
                        </div>
                    </div>

                    <div>
                        <div class="row" >
                            <div class="input-field col s12">
                                <input id="title" type="text" class="validate" name="tp">
                                <label for="title">Title Of Project</label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="input-field col s12">
                            <select name="pin" form="irbform">
                                <option value="" disabled selected>Choose your Principal Investigator</option>
                                <option value="1">Option 1</option>
                            </select>
                            <label>Principal Investigator</label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <select multiple name="cpi" form="irbform">
                            <option value="" disabled selected>Not Selected</option>
                            <option value="1">Option 1</option>
                        </select>
                        <label>Co-Principal Investigator</label>
                    </div>

                    <div>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="g" form="irbform"></textarea>
                                        <label for="textarea1">Grant</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="re" form="irbform"></textarea>
                                        <label for="textarea1">Request For Exemption</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="cs" form="irbform"></textarea>
                                        <label for="textarea1">Numbers and Characteristics of Subjects</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="sc" form="irbform"></textarea>
                                        <label for="textarea1">Special Cases</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="mr" form="irbform"></textarea>
                                        <label for="textarea1"> Method Of Recruitment</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="ei" form="irbform"></textarea>
                                        <label for="textarea1"> Extent Of Information</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="rm" form="irbform"></textarea>
                                        <label for="textarea1"> Clasification Of Research Method</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="ds" form="irbform"></textarea>
                                        <label for="textarea1"> Data Sources for Research</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div class="input-field col s12">
                            <select multiple name="ri" form="irbform">
                                <option value="" disabled selected>None</option>
                                <option value="1">Deception of the Participant</option>
                                <option value="2">Punishment of the Participant</option>
                                <option value="3">Materials Regarded as socially Unacceptible</option>
                                <option value="4">Invasion Of Privacy</option>
                                <option value="5">Desclosure of the Name Of the Participant</option>
                                <option value="6">Physically invaisive Procedures</option>
                            </select>
                            <label>Does Your ressearch involve any of the following</label>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="p" form="irbform"></textarea>
                                        <label for="textarea1"> If Yes to any of the above, explain the procedure in detail and measures taken to
                                            minimise the risk</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea" name="ci" form="irbform"></textarea>
                                        <label for="textarea1"> Confidentiality Of information</label>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea" name="hs" form="irbform"></textarea>
                                            <label for="textarea1"> Procedures for handeling and Storing Data</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea" name="rd" form="irbform"></textarea>
                                            <label for="textarea1"> How will the results be Disseminated</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea" name="pi" form="irbform"></textarea>
                                            <label for="textarea1"> How will subjects be informed of the results</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea" name="cd" form="irbform"></textarea>
                                            <label for="textarea1"> How will Confidentiality be upheld during dissemination</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea" name="pr" form="irbform"></textarea>
                                            <label for="textarea1"> Will participants be rewarded/comphensated in any way? Please state</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea" name="pb" form="irbform"></textarea>
                                            <label for="textarea1"> What Intrinsic benefits will the Participants Recieve?</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" class="materialize-textarea" name="rer" form="irbform"></textarea>
                                            <label for="textarea1"> Rationale for Exclusion of Required element(Optional)</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div>
                            <div class="fixed-action-btn" style="bottom: 210px; right: 175px;">
                                <a class="btn-floating btn-large blue">
                                    <i class="large material-icons">attach_file</i>
                                </a>
                            </div>
                        </div>

                        <div>
                            <a class="waves-effect waves-light btn" action="pages/controller/IRB_controller.php"><i class="material-icons left">done_all</i>Submit</a>
                            <button class="waves-effect waves-light btn" action="pages/controller/IRB_controller.php"><i class="material-icons left">done</i>Save</button>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </main>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">IRB Application</h5>
                    <p class="grey-text text-lighten-4">This application is to manage the submission and review or research proposals</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="AdminPage.php">To Admin</a>
                <a class="grey-text text-lighten-4 right" href="User.php">To User</a>
            </div>
        </div>
    </footer>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>