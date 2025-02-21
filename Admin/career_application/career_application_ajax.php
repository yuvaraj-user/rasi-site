<?php 
include '../../../auto_load.php';
include 'Career_Application_Details.php';

$Career_Application_Details = new Career_Application_Details($conn); 

if(isset($_POST['Action'])) {

	if($_POST['Action'] == 'get_career_application_list') {
		$Career_Application_Details = $Career_Application_Details->get_career_application_list($_POST);
		echo json_encode($Career_Application_Details);exit;
	}

}



?>