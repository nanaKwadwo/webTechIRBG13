<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="body">
        <main class="content" id = "content">
        </main>
        <aside class="nav">
            <div class="heading">Administrator</div>
            <div class="search">
			
                <input type="text" placeholder="Search" id="searchtxt">
                <button onclick="search()" onsubmit="search()"></button>
            </div>
            <div class="menuItems">
                <ul>
                    <li><button onclick="getApplicants()">Applicants</button></li>
                    <li><button onclick="getNonApplicants()">Non Applicants</button></li>
                    <li><button onclick="getReviewers()">Reviewers</button></li>
                    <li><button href="#">Sponsors</button></li>
                </ul>
            </div>
        </aside>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="js/jqury.min.js"></script></body>

</html>