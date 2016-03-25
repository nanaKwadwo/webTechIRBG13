
<?php

include_once("adb.php");

class admin extends adb {


	/**
	*constructor function
	*/
	function admin() {
	}

	/**
	*function used to search for a user record with the student_id and the yearGroup
	*@param int student_id, user student_id (initialised to false with option of it being omitted for other type of search)
	*@param int yearGroup, user/applicant yearGroup (initialised to false with option of it being omitted for other type of search)
	*@return getUsers(), uses the getUsers function to search for required output with the filter variable
	*/
	function search($studentID = false, $yearGroup = false) {

		/**
		*@var string filter, for additional sql command to update getUser() function
		*/

		$filter = false;

		if ($studentID and $yearGroup == false) {

		$filter = " where is_applicant = '1' and student_id = '$studentID'";

		}

		if ($yearGroup and $studentID == false) {

		$filter = " where is_applicant = '1' and yearGroup = $yearGroup";

		}

		if ($studentID and $yearGroup) {

			$filter = " where is_applicant = '1' and student_id = '$studentID' and yearGroup = '$yearGroup'";
		}		

		return $this->getUsers($filter);
	}

	/**
	*function to get all users, with paramater for more detailes or speciied searches.
	*@param string filter, filter for accepting more input for sql statement for ospecofoed searches if necessary
	*@return query funtion from adb class with strQuery paramater for executing sql command
	*/
	function getUsers($filter = false) {

		/**
		*@var string strQuery, string to accept sql query
		*/
		$strQuery = "select * from student";

		if ($filter) {

			$strQuery = $strQuery . "$filter";
		}

		return $this->query($strQuery);
	}

	/**
	*function to add applicant as an IRB applicant
	*@param string studentID, student_id used to identify user
	*@return query funtion from adb class with strQuery paramater for executing sql command
	*/
	function addApplicant($studentID) {

		/*
		*@var string strQuery, for mysql command to update is_applicant column value in user table
		*/
		$strQuery = "update users set is_applicant = '1' where user_id = '$studentID'";

		return $this->query($strQuery);
	}


	/**
	*function to remove applicant as an IRB applicant
	*@param string studentID, student_id used to identify user
	*@return query funtion from adb class with strQuery paramater for executing sql command
	*/
	function removeApplicant($studentID) {

		/**
		*@var string strQuery, for mysql command to update is_applicant column value in user table
		*/
		$strQuery = "update student set is_applicant = '0' where student_id = '$studentID'";

		return $this->query($strQuery);
	}
}

?>