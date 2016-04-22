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
        <main class="content" id="content">
            
        </main>
        <aside class="nav">
            <div class="heading">Applicant</div>
            <div class="search">
                <input type="text" placeholder="Search">
                <button onclick="search()"></button>
            </div>
            <div class="add" id="add_save">
                <a href="IrbDoc.php">Add Application</a>
            </div>
            <div class="menuItems">
                <ul>
                    <li><button onclick="getApplications()">Applications</button></li>
                    <li><button href="#">Schedule</button></li>
                </ul>
            </div>
        </aside>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>

</html>