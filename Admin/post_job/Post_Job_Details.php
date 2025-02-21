<?php 
/**
 * 
 */
class Post_Job_Details 
{
	public $conn;
	function __construct($conn) {
    	$this->conn = $conn;
  	}

  	public function get_job_list($request)
  	{
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

  		$emp_id = $_SESSION['EmpID'];

		$Qry     = "SELECT * FROM Rasi_portal_jobs WHERE 1=1 AND is_deleted IS NULL AND Created_by = '".$emp_id."'";

		if(isset($request['id'])) {
			$Qry .= " AND Id = '".$request['id']."'";
		}

		$QryExec = sqlsrv_query($this->conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec))
			{
				$resArr[] = $row;
			}
			$response['status']  = 200;
  			$response['message'] = "Job list fetched successfully.";
		}

		$response['data'] = $resArr;

		return $response;
  	} 

  	public function get_job_state()
  	{
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

		// $Qry     = "SELECT DISTINCT [Location(HQ)] FROM HR_Master_Table where [Location(HQ)] IS NOT NULL AND [Location(HQ)] != ''";
  		$Qry = "SELECT * from state_master";
		$QryExec = sqlsrv_query($this->conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec,SQLSRV_FETCH_ASSOC))
			{
				$dataArr = array();
				// $dataArr['location'] = $row['Location(HQ)'];
				// $resArr[] = $dataArr;
				$resArr[] = $row;

			}
			$response['status']  = 200;
  			$response['message'] = "Location data retrived successfully.";
		}

		$response['data'] = $resArr;

		return $response;
  	}

   	public function get_job_district($request)
  	{
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

		// $Qry     = "SELECT DISTINCT [Location(HQ)] FROM HR_Master_Table where [Location(HQ)] IS NOT NULL AND [Location(HQ)] != ''";
  		$Qry = "SELECT * from district_master where 1=1";
  		
  		if($request['state_code'] != '') {
			$Qry .= " AND REGION_CODE = '".$request['state_code']."'";
  		}

  		// echo $Qry;exit; 

		$QryExec = sqlsrv_query($this->conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec,SQLSRV_FETCH_ASSOC))
			{
				$dataArr = array();
				// $dataArr['location'] = $row['Location(HQ)'];
				// $resArr[] = $dataArr;
				$resArr[] = $row;

			}
			$response['status']  = 200;
  			$response['message'] = "Location data retrived successfully.";
		}

		$response['data'] = $resArr;

		return $response;
  	}	

  	

  	public function get_department()
  	{
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

		$Qry     = "SELECT DISTINCT department as department_desc,
					(CASE
					WHEN department = 'Corporate Functions' THEN 'Corporate Functions' 
					WHEN department = 'Breeding & Bio-tech' THEN 'Breeding and Bio-tech' 
					WHEN department = 'Sales & Marketing' THEN 'Sales and Marketing' 
					WHEN department = 'Processing' THEN 'Processing' 
					WHEN department = 'Production' THEN 'Production' 
					WHEN department = 'Quality' THEN 'Quality' 
					END
					) as department

					FROM (select 
					(CASE 
					WHEN Department = 'Information Technology' OR Department ='Administration' OR Department ='Financial Accounting' OR Department ='%HR%' THEN 'Corporate Functions' 

					WHEN Department LIKE 'Breeding%' OR Department LIKE 'R&D%' THEN 'Breeding & Bio-tech' 
					 
					WHEN Department = 'Sales & Marketing' OR Department LIKE 'S&M%' THEN 'Sales & Marketing'  

					WHEN Department LIKE 'Processing%' THEN 'Processing'

					WHEN Department LIKE 'Production%' THEN 'Production' 

					WHEN Department LIKE 'Quality%' THEN 'Quality' 

					ELSE
					'Corporate Functions'
					END
					) as department
					from (select DISTINCT Department,Sub_Department from HR_Master_Table 
					where Department IS NOT NULL  AND Sub_Department IS NOT NULL
					AND Department != ''  AND Sub_Department != '') as department_master) as final_department";

		$QryExec = sqlsrv_query($this->conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec))
			{
				$dataArr = array();
				$dataArr['department']            = $row['department'];
				$dataArr['department_description'] = $row['department_desc'];

				$resArr[] = $dataArr;
			}
			$response['status']  = 200;
  			$response['message'] = "Department data retrived successfully.";
		}

		$response['data'] = $resArr;

		return $response;
  	}

  	public function get_job_qualification()
  	{
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

		$Qry     = "SELECT DISTINCT Education from PMS_Education_Master";
		$QryExec = sqlsrv_query($this->conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec))
			{
				$dataArr = array();
				$dataArr['qualification'] = $row['Education'];
				$resArr[] = $dataArr;
			}
			$response['status']  = 200;
  			$response['message'] = "qualification data retrived successfully.";
		}

		$response['data'] = $resArr;

		return $response;
  	}


  	public function get_job_experience()
  	{
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

		$Qry     = "SELECT * FROM Rasi_portal_experience_master WHERE status = 'Active'";
		$QryExec = sqlsrv_query($this->conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec))
			{
				$dataArr = array();
				$dataArr['Experience_text'] = $row['Experience_text'];
				$resArr[] = $dataArr;
			}
			$response['status']  = 200;
  			$response['message'] = "Experience master data retrived successfully.";
		}

		$response['data'] = $resArr;

		return $response;
  	}

  	public function get_job_salary()
  	{
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

		$Qry     = "SELECT * FROM Rasi_portal_salary_master WHERE status = 'Active'";
		$QryExec = sqlsrv_query($this->conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec))
			{
				$dataArr = array();
				$dataArr['Salary_text'] = $row['Salary_text'];

				$resArr[] = $dataArr;
			}
			$response['status']  = 200;
  			$response['message'] = "Salary master data retrived successfully.";
		}

		$response['data'] = $resArr;

		return $response;
  	}  	

  	public function get_job_display_image($job_id)
  	{
  		$image_name = '';
  		if($job_id != '') {
	  		$Qry        = "SELECT job_display_image FROM Rasi_portal_jobs WHERE Id = '".$job_id."'";
			$QryExec    = sqlsrv_query($this->conn, $Qry);
			$image_name = sqlsrv_fetch_array($QryExec)['job_display_image'];
  		}
		
		return $image_name; 
  	}

  	public function generate_job_no()
  	{
  		$job_no_prefix = 'RS-';
  		$random_no     = rand(1000000,9000000);
  		$job_no        = $job_no_prefix.str_pad($random_no, 10,0,STR_PAD_LEFT);
  		return $job_no;
  	}

  	public function get_state_name($state_code)
  	{
  		$STATE_NAME = '';
  		if($state_code != '' && $state_code != 'PAN INDIA') {
	  		$Qry        = "SELECT * from state_master WHERE REGION_CODE = '".$state_code."'";
			$QryExec    = sqlsrv_query($this->conn, $Qry);
			$STATE_NAME = sqlsrv_fetch_array($QryExec)['STATE_NAME'];
  		} elseif($state_code != '' && $state_code == 'PAN INDIA') {
			$STATE_NAME = 'PAN INDIA';
  		} 
		
		return $STATE_NAME; 
  	}  

  	 public function get_district_name($district_code)
  	{
  		$DISTRICT = '';
  		if($district_code != '') {
	  		$Qry        = "SELECT * from district_master WHERE DISTRICT_CODE = '".$district_code."'";
			$QryExec    = sqlsrv_query($this->conn, $Qry);
			$DISTRICT = sqlsrv_fetch_array($QryExec)['DISTRICT'];
  		}
		
		return $DISTRICT; 
  	}  	

  	public function save_job_form($request)
  	{	
		$request = array_map(function($value) { 
	         if(is_array($value)){
	                 $mArr = array_map(function($value1) { 
	                     return str_replace("'","''", $value1); 
	                 },$value);
	                 return $mArr;
	         }else{
	             return str_replace("'","''", $value); 
	         }
	  	}, $request);

		$job_description = preg_replace('/(<p><br><\/p>\s*)+$/', '', $request['job_description']);
		$key_responsibilities = preg_replace('/(<p><br><\/p>\s*)+$/', '', $request['key_responsibilities']);
		$skills = preg_replace('/(<p><br><\/p>\s*)+$/', '', $request['skills']);


  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

		if(isset($_SESSION['EmpID']) && $_SESSION['EmpID'] != '') {

	  		// echo "<pre>";print_r($request);exit;
			$state_name    = $this->get_state_name($request['job_state']);
			$district_name = $this->get_district_name($request['job_district']);

	  		$emp_id = $_SESSION['EmpID'];
	  		$current_timestamp = date('Y-m-d H:i:s');
	  		$job_title = $request['job_title'];
	  		$position_code = $request['position_code'];
	  		$job_description = $job_description;
	  		$gender = $request['gender'];
	  		$job_state_code = ($request['job_state'] != '' && $request['job_state'] != 'Please Select Location') ? $request['job_state'] : '';
	  		$job_district_code = ($request['job_district'] != 'Please Select Location') ? $request['job_district'] : '';
	  		$salary_range = ($request['salary_range'] != '') ? $request['salary_range'].' Lakhs' : '';
	  		$experience = ($request['experience'] != '') ? $request['experience'].' Years' : '';
	  		$department = $request['department'];
	  		$division = $request['division'];
	  		$job_type = $request['job_type'];
	  		$job_qualification = (COUNT($request['job_qualification']) > 1) ? implode(',',$request['job_qualification']) : $request['job_qualification'][0];
	  		$key_responsibilities = $key_responsibilities;
	  		$skills = $skills;
	  		$status = $request['status'];

		    $directory_path = '../assets/images/rasi/jobs/';
	  		$job_display_image = '';

	  		$job_no = $this->generate_job_no();


			$job_location  = $state_name; 
			if($state_name != '' && $district_name != '') {
				$job_location = $district_name.','.$state_name;
			}	  	

	  		if(!empty($_FILES['display_image']['name'])) {
	    		$allow_file_types = ['jpg','jpeg','png','gif','avif'];
	    		$extension = pathinfo($_FILES['display_image']['name'], PATHINFO_EXTENSION);
	  			
	    		if(!in_array($extension, $allow_file_types)) {
	    			$response['status']  = 422;
	  				$response['message'] = "Only accepted jpg,jpeg,png,gif file types.";

	  				return $response;
	    		} else {
	    			// remove old image while editing 
	    			if(isset($request['job_id'])) {				
		    			$old_file = $this->get_job_display_image($request['job_id']);
		    			$old_file_path = $directory_path.$old_file;
		    			if(file_exists($old_file_path)) {
		    				unlink($old_file_path);
		    			}
	    			}

	    			// uploaded file save in folder  
		  			$fileName = basename($_FILES['display_image']['name']);
			        $tmpName  = $_FILES['display_image']['tmp_name'];
					$fileName = $job_title.''.strtotime($current_timestamp).'.'.$extension;
			        $targetFilePath = $directory_path . $fileName;

			        move_uploaded_file($tmpName, $targetFilePath);
			        $job_display_image = $fileName; 
	    		}

	  		} else if($request['saved_display_img'] != '') {
			    $job_display_image = $request['saved_display_img']; 
	  		}

	  		if(isset($request['job_id'])) {
	  			$sql = "UPDATE Rasi_portal_jobs SET Job_title = '".$job_title."',Position_code = '".$position_code."',Job_description = '".$job_description."',gender = '".$gender."',job_location = '".$job_location."',salary_range = '".$salary_range."',experience = '".$experience."',department = '".$department."',division = '".$division."',job_type = '".$job_type."',job_qualification = '".$job_qualification."',key_responsibilities = '".$key_responsibilities."',skills = '".$skills."',job_display_image = '".$job_display_image."',Status = '".$status."',Modified_by = '".$emp_id."',Updated_at = '".$current_timestamp."',Job_state_code = '".$job_state_code."',Job_district_code = '".$job_district_code."' WHERE Id = '".$request['job_id']."'";

	  		} else {
	  			$sql = "INSERT INTO Rasi_portal_jobs
	           (Job_no,Job_title,Position_code,Job_description,gender,job_location,salary_range,experience,department,division,job_type,job_qualification,key_responsibilities,skills,job_display_image,Status,Created_by,Created_at,Job_state_code,Job_district_code) VALUES ('".$job_no."','".$job_title."','".$position_code."','".$job_description."','".$gender."','".$job_location."','".$salary_range."','".$experience."','".$department."','".$division."','".$job_type."','".$job_qualification."','".$key_responsibilities."','".$skills."','".$job_display_image."','".$status."','".$emp_id."','".$current_timestamp."','".$job_state_code."','".$job_district_code."')";
	  		}

	  		// echo $sql;exit; 

			$QryExec = sqlsrv_query($this->conn, $sql);
			
			if($QryExec === false) {
	  			$message = "Job Creation Failed.";
	  			if(isset($request['job_id'])) {
		           	$message = "Job Updated Failed.";
	           	}

	           	$response['status']  = 500;
	  			$response['message'] = $message;

			} else {
	           	$message = "Job Created Successfully.";
	           	if(isset($request['job_id'])) {
		           	$message = "Job Updated Successfully.";
	           	}

	           	$response['status']  = 200;
	  			$response['message'] = $message;
			}
		} else {
			$response['status'] = 419;
			$response['message'] = 'Your Login Session closed.';
		}

		return $response;

  	}

  	public function delete_job_post($request)
  	{
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

		if(isset($_SESSION['EmpID']) && $_SESSION['EmpID'] != '') {

	  		$emp_id = $_SESSION['EmpID'];
	  		$current_timestamp = date('Y-m-d H:i:s');

			$Qry     = "UPDATE Rasi_portal_jobs SET is_deleted = 1,Deleted_by = '".$emp_id."',Deleted_at = '".$current_timestamp."' WHERE Id='".$request['id']."'";

			$QryExec = sqlsrv_query($this->conn, $Qry);
			
			if($QryExec === false) {
	           	$response['status']  = 500;
	  			$response['message'] = "Job post deletion failed.";
			} else {
				$response['status']  = 200;
	  			$response['message'] = "Job post deleted successfully.";	
			}
		} else {
			$response['status'] = 419;
			$response['message'] = 'Your Login Session closed.';
		}
		return $response;
  	} 

  	public function get_job_details_img($job_id=array())
  	{

  		// echo $job_id['job_no'];
  		// exit;
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

  		if(isset($_SESSION['EmpID']) && $_SESSION['EmpID'] != '') {

  			$Qry     = "SELECT * FROM Rasi_portal_jobs WHERE Id='".$job_id['job_no']."' AND Status = 'Active'";
  			$QryExec = sqlsrv_query($this->conn, $Qry, array(), array("Scrollable" => 'static'));
  			$qCount  = sqlsrv_num_rows($QryExec);

  			$resArr = array();
  			if($qCount > 0) {
  				while($row = sqlsrv_fetch_array($QryExec))
  				{
  					include('../../phpqrcode/qrlib.php'); // Adjust the path to the QRcode library

					$job_id = $row['Job_no'];
					$qrFilePath = '../assets/images/job_qr/'.$job_id.'.png';

					if (!file_exists($qrFilePath)) {
					    $ineNumber = 'https://corporate.rasiseeds.com/corporate/Rasi_Seeds_Portal/careers/job_details.php?id=' . urlencode($job_id) .'&qr=true';

					    // Path for saving the QR code
					    // Generate QR code with smaller size (100px) and fewer dots (lower error correction level)
					    QRcode::png($ineNumber, $qrFilePath, QR_ECLEVEL_L, 5, 0);  // Error level: L, Size: 5 (adjust as needed)
					}

					// To resize the QR code image to exactly 100x100px, use PHP's image manipulation functions
					$image = imagecreatefrompng($qrFilePath); // Load the generated QR code
					$resizedImage = imagescale($image, 100, 100);  // Resize to 100px by 100px
					imagepng($resizedImage, $qrFilePath);  // Save the resized image
					imagedestroy($image);  // Free memory
					imagedestroy($resizedImage);  // Free memory


  					if (file_exists($qrFilePath)) {
  						$dataArr = array();
	  					$dataArr['key_responsibilities'] = $row['key_responsibilities'];
	  					$dataArr['skills'] = $row['skills'];
	  					$dataArr['Job_no'] = $row['Job_no'];
	  					$dataArr['Job_title'] = $row['Job_title'];
	  					$dataArr['job_location'] = $row['job_location'];
	  					$dataArr['Position_code'] = $row['Position_code'];	
	  					$dataArr['job_display_image'] = $row['job_display_image'];	  					  					
	  					$resArr[] = $dataArr;
	  				}
  				}
  				$response['status']  = 200;
  				$response['message'] = "Job details retrived successfully.";
  			}
  		} else {
  			$response['status'] = 419;
  			$response['message'] = 'Your Login Session closed.';
  		}

  		$response['data'] = $resArr;

  		return $response;
  	}  	
}

?>