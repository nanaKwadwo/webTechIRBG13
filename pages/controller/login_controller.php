<?php session_start(); ?> <?php 


//include 'db_config.php';

include_once("../model/adb.php");
include_once("userlogin_class.php");
$obj = new userlogin_class();
if ($_POST['submit']) {
    if (isset($_POST['usersgroup'])) {
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        $usergroup = addslashes($_POST['usersgroup']);



        if (!$obj->login($usergroup, $username, $password)) {
            echo "$username";
            echo "$password";
            echo "Error getting users..like der";

        } else {

            $count_rows = 0;
            while ($row = $obj->fetch()) {
                $is_applicant = $row['is_applicant'];
                $status = $row['user_status'];
                $userId = $row['user_id'];
                $count_rows++;
            }

            if ($count_rows == 0 || $count_rows > 1) {
                header("location:../../errorlogin.php");
            }

            if ($count_rows == 1) {
                if ($usergroup == 'applicant') {
                    if ($is_applicant == 0) {
                        header("location:../../errorlogin.php");
                    } else {
                        $_SESSION["user_id"] = $userId;
                        header("location:../../User.php");
                        }
                }
                if ($usergroup == 'reviewer') {
                    $_SESSION["user_id"] = $userId;
                    header("location:../../Reviewer.php");
                }
                if ($usergroup == 'admin') {
                     $_SESSION["user_id"] = $userId;
                    header("location:../../AdminPage.php");
                }
            }

        }
    } else header("location:../../errorlogin.php");
}
?>