<?php 
include '../../../auto_load.php';
include 'Post_Job_Details.php';

$Post_Job_Details = new Post_Job_Details($conn); 

if(isset($_POST['Action'])) {

	if($_POST['Action'] == 'save_job_form') {
		$save_job_form_Details = $Post_Job_Details->save_job_form($_POST);
		echo json_encode($save_job_form_Details);exit;
	} elseif($_POST['Action'] == 'get_job_state') {
		$get_job_location_Details = $Post_Job_Details->get_job_state($_POST);
		echo json_encode($get_job_location_Details);exit;
	} elseif($_POST['Action'] == 'get_department') {
		$get_department_Details = $Post_Job_Details->get_department($_POST);
		echo json_encode($get_department_Details);exit;
	} elseif($_POST['Action'] == 'get_job_qualification') {
		$get_job_qualification_Details = $Post_Job_Details->get_job_qualification($_POST);
		echo json_encode($get_job_qualification_Details);exit;
	} elseif($_POST['Action'] == 'get_job_experience') {
		$get_job_experience_Details = $Post_Job_Details->get_job_experience($_POST);
		echo json_encode($get_job_experience_Details);exit;
	} elseif($_POST['Action'] == 'get_job_salary') {
		$get_job_salary_Details = $Post_Job_Details->get_job_salary($_POST);
		echo json_encode($get_job_salary_Details);exit;
	} elseif($_POST['Action'] == 'get_job_list') {
		$get_job_list_Details = $Post_Job_Details->get_job_list($_POST);
		echo json_encode($get_job_list_Details);exit;
	} elseif($_POST['Action'] == 'delete_job_post') {
		$delete_job_post_Details = $Post_Job_Details->delete_job_post($_POST);
		echo json_encode($delete_job_post_Details);exit;
	}elseif($_POST['Action'] == 'get_job_details_img') {
		$get_job_details_img_Details = $Post_Job_Details->get_job_details_img($_POST);
		echo json_encode($get_job_details_img_Details);exit;
	} elseif($_POST['Action'] == 'get_job_district') {
		$get_job_district = $Post_Job_Details->get_job_district($_POST);
		echo json_encode($get_job_district);exit;
	}


}



?>