<?php 
/**
 * 
 */
class Career_Application_Details 
{
	public $conn;
	function __construct($conn) {
    	$this->conn = $conn;
  	}

  	public function get_career_application_list($request)
  	{
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

  		$emp_id = $_SESSION['EmpID'];

		// $Qry     = "SELECT * FROM Rasi_portal_career_application WHERE 1=1";
		$Qry     = "SELECT * from Rasi_portal_career_application
		inner join Rasi_portal_jobs on Rasi_portal_jobs.Job_no = Rasi_portal_career_application.Job_id 
		WHERE Rasi_portal_jobs.Created_by = '".$emp_id."'";

		$QryExec = sqlsrv_query($this->conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec))
			{
				$resArr[] = $row;
			}
			$response['status']  = 200;
  			$response['message'] = "Career applications fetched successfully.";
		}

		$response['data'] = $resArr;

		return $response;
  	} 

}

?>