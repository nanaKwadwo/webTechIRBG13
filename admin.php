
<?php
Include_once("adb.php");
Class admin extends adb{

function deleteStudent ($id)
$strQuery = "delete * from student where student_id =$id";
return $this->query($strQuery);


function deleteApplication($id)
$strQuery = "delete from application where application_id = $id";
return $this->query($strQuery);



?>