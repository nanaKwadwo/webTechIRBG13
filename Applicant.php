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
                <input type="text" placeholder="Search" id="search">
                <button onclick="searchApplications()"></button>
            </div>
            <div class="add">
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
   <script src="js/jqury.min.js"></script></body>
</body>

</html>