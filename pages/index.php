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

    </header>
    <main>
        <div class="container">
            <form class="card medium center-align  valign-wrapper" method="POST" action="pages/controller/login_controller.php">
                    <div class="container">
                        <div class="container">
                            <h3>Sign In</h3></div>
                        <div class="input-field col s6">
                            <input id="Username" type="text" class="validate" name="username">
                            <label for="Username">Username</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="Password" type="password" class="validate" name="password">
                            <label for="Password">Password</label>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <select name="usersgroup">
                                    <option value="" disabled selected>Choose your Usergroup</option>
                                    <option value="faculty">Faculty</option>
                                    <option value="student">Student</option>
                                </select>
                                <label>Usergroup</label>
                            </div>
                        </div>
                        <label class="lbl" name="lbl">
                        </label>
                        <button class="btn waves-effect waves-light"  value="submit" name="submit"type="submit">Login
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
   
        <script type="text/javascript" src="js/jqueryfile.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>


</html>
