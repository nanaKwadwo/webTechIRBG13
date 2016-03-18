

<?php

include_once("admin.php");

$obj = new admin();

//switching user isApplicant value from 0 to 1
$obj -> addApplicant('1');
$obj -> addApplicant('2');

//gettign all users in the database
$obj -> getUsers();

//fetching dataset for getUsers() function
$usersResult = $obj -> fetch();

//displaying users in database
echo "<table>";

while ($usersResult) {

	echo "<tr>

		<td>" .$usersResult['userName']. "</td>
		<td>" .$usersResult['is_applicant']. "</td>
		<td>" .$usersResult['yeargroup']. "</td>

		 </tr>";

	$usersResult = $obj -> fetch();
}

echo "</table>
		<br>";

//searching for useruserName only
$obj -> search("1");

$searchResult = $obj -> fetch();

echo "userName: ".$searchResult['userName']." || yeargroup: ".$searchResult['yeargroup']."<br>";

//searching for yeargroup only
$obj -> search("",'2017');

$searchResult = $obj -> fetch();

echo "userName: ".$searchResult['userName']." || yeargroup: ".$searchResult['yeargroup']."<br>";

//searching for userName and yeargroup
$obj -> search('2','2016');

$searchResult = $obj -> fetch();

echo "userName: ".$searchResult['userName']." || yeargroup: ".$searchResult['yeargroup']."<br>";


?>