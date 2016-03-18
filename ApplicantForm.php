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
        <?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/WT_SW Project/pages/controller/admin_controller.php";
include_once($path);
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/WT_SW Project/pages/model/applicants.php";
include_once($path);
$id = $_REQUEST['id'];
$username = $_REQUEST['username'];
$applicant = new applicants();
$result = $applicant->getByUsernameAndId($id, $username);
$data = $applicant->fetch();

?>
    </header>
    <main>
        <div class="container">
            <form class="card medium center-align  valign-wrapper" action="pages/controller/admin_controller.php">
                <div class="container">
                    <div class="container">
                        <h3>Applicant Information</h3></div>
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" name="id" type="hidden" class="validate" value="<?php echo $id;?>">
                                <input id="first_name" name="username" type="hidden" class="validate" value="<?php echo $username;?>">
                                <input id="first_name" name="userName" type="text" class="validate" value="<?php echo $data['userName']; ?>">
                                <label for="first_name">Username</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="first_name" name="password" type="password" class="validate" value="<?php echo $data['password']; ?>">
                                <label for="first_name">Password</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="first_name" name="firstname" type="text" class="validate" value="<?php echo $data['firstName']; ?>">
                                <label for="first_name">First name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="first_name" type="text" name="lastname" class="validate" value="<?php echo $data['lastName']; ?>">
                                <label for="first_name">Last Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="first_name" type="text" name="email" class="validate" value="<?php echo $data['email']; ?>">
                                <label for="first_name">Email</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="first_name" type="text" name="address" class="validate" value="<?php echo $data['address']; ?>">
                                <label for="first_name">Address</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="first_name" type="text" name="phonenumber" class="validate" value="<?php echo $data['phoneNumber']; ?>">
                                <label for="first_name">Phone</label>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit">Validate
                            <i class="material-icons right">send</i>
                        </button>
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