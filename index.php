<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"><meta name="viewport" content="width=device-width, initial-scale=1.0"></head><body>
    <div class="container">
        <div class="info">
            <p>Welcome to Ashesi University Internal Review Board Portal </p>
            <div class="subhead">This application is an all in one portal to surpport the management of Research proposals which include human
                subjects
            </div>
        </div>
        <div class="login">
            <div class="head">Login</div>
            <div class="formdet">
                <form method="POST" action="pages/controller/login_controller.php" id="login">
                    <input type="text" placeholder="Username" name="username" id="username"><input type="password" placeholder="Password" name="password"><label for="">Select User Group</label>
                    <select name="usersgroup"><optgroup><option value="admin">Admin</option><option value="applicant">Appliacant</option><option value="reviewer">Reviewer</option></optgroup></select><div class="submit-btn">
                      <input type="submit" name="submit" value="submit"></div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script></body></html>
