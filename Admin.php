<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="body">
        <main class="content">
            <?php 
include_once("pages/controller/admin_controller.php");
getApplicants();
?>
        </main>
        <aside class="nav">
            <div class="heading">Administrator</div>
            <div class="search">
                <input type="text" placeholder="Search">
                <a href=""></a>
            </div>
            <div class="menuItems">
                <ul>
                    <li><a href="#">Applicants</a></li>
                    <li><a href="#">Reviewers</a></li>
                    <li><a href="#">Sponsors</a></li>
                </ul>
            </div>
        </aside>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>