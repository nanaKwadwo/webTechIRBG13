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
            <div class="nav-wrapper  indigo lighten-4">
                <a href="#" class="brand-logo center">Admin</a>
                <div class="row">
                    <div class="col s4 right">
                        <form>
                            <div class="input-field">
                                <input id="search" type="search" required>
                                <label for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#applicants">Applicants</a></li>
                    <li class="tab col s3"><a href="#reviewers">Reviewers</a></li>
                    <li class="tab col s3"><a href="#sponsors">Sponsors</a></li>
                </ul>
            </div>
            <div id="applicants" class="col s12"><?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/WT_SW Project/pages/controller/admin_controller.php";
include_once($path);
getApplicants();
?></div>
            <div id="reviewers" class="col s12">Reviewers</div>
            <div id="sponsors" class="col s12">Sponsors</div>
        </div>
        <div class="fixed-action-btn" style="bottom: 250px; right: 50px;">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li>
                    <button class="btn-floating red" onclick="modalON()"><i class="material-icons">add</i></button>
                </li>
            </ul>
        </div>

            </div>
        </div>


    </main>

    <footer class="page-footer  indigo lighten-4">
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
                <a class="grey-text text-lighten-4 right" href="index.php">To login</a>
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