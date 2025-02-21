<?php
include '../auto_load.php';

require 'Send_Mail.php';
$mail = new Send_Mail();

function get_job_poster_mail_id($conn,$job_id)
{
	$Qry  = "SELECT HR_Master_Table.Office_Email_Address FROM Rasi_portal_jobs
	LEFT JOIN HR_Master_Table ON HR_Master_Table.Employee_Code = Rasi_portal_jobs.Created_by
	WHERE Job_no = '".$job_id."'";
	$QryExec = sqlsrv_query($conn, $Qry);
	$Email = sqlsrv_fetch_array($QryExec)['Office_Email_Address'];
	return $Email;
}

if(isset($_POST['Action'])){
	if($_POST['Action'] == 'career_submit') {
		// echo "<pre>";print_r(COUNT($_POST['language']));exit;

		// get job poster mail id for mail sending 
		$job_poster_mail_id = get_job_poster_mail_id($conn,$_POST['job_id']);

		$temp_fileName = $_FILES['file']['name'];

		$response['status'] = 422;
		$response['message'] = "Unprocessable Entry."; 

	    $directory_path = 'assets/career_docs/';

  		$current_timestamp = date('Y-m-d H:i:s');
  		$Job_Id = $_POST['job_id'];
  		$Position_Code = $_POST['position_code'];
  		$Job_Name = $_POST['job_name'];
  		$First_Name = $_POST['first_name'];
  		$Last_Name = $_POST['last_name'];
  		$Experience = $_POST['experience'];
  		$Qualification = $_POST['highest_qualification'];
  		$Current_Organization = $_POST['current_organization_name'];
  		$Current_Designation = $_POST['current_designation'];
  		$Current_Department = $_POST['current_department'];
  		$Current_CTC = $_POST['current_ctc'];
  		$Linkedin_url = $_POST['linkedin_url'];
  		$Email = $_POST['email'];
  		$Mobile = $_POST['mobile'];

  		// $language_count = COUNT($_POST['language']);

  		$career_doc_name = '';


  		if(!empty($temp_fileName)) {
    		$allow_file_types = ['pdf','docx','doc'];
    		$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
  			
    		if(!in_array($extension, $allow_file_types)) {
    			$response['status']  = 422;
  				$response['message'] = "Only accepted pdf,docx,doc file types.";

  				return $response;
    		} else {
    			// uploaded file save in folder  
	  			$fileName = basename($_FILES['file']['name']);
		        $tmpName  = $_FILES['file']['tmp_name'];
				$fileName = $Job_Id.'_'.$First_Name.'_'.strtotime($current_timestamp).'.'.$extension;
		        $targetFilePath = $directory_path . $fileName;

		        move_uploaded_file($tmpName, $targetFilePath);
		        $career_doc_name = $fileName;
    		}

  		} else {
  			$targetFilePath = '';
			$response['status']  = 422;
			$response['message'] = "Resume Attachment is mandatory.";

			return $response;
  		}		
	

  		// $sql = "INSERT INTO Rasi_portal_career_application
        //    (Job_Id,Job_Name,First_Name,Last_Name,Email,Mobile,Address,career_docs_name,Created_At) VALUES ('".$Job_Id."','".$Job_Name."','".$First_Name."','".$Last_Name."','".$Email."','".$Mobile."','".$Address."','".$career_doc_name."','".$current_timestamp."')";
         
		$sql = "INSERT INTO Rasi_portal_career_application(Job_Id,position_code,Job_Name,Applicant_First_Name,Applicant_Last_Name,Experience,Email,Mobile,Qualification,Current_Organization,Current_Designation,Current_Department,Current_CTC,Linkedin_url,career_docs_name,Created_At)  OUTPUT INSERTED.Id as Application_ID
		VALUES ('".$Job_Id."','".$Position_Code."','".$Job_Name."','".$First_Name."','".$Last_Name."','".$Experience."','".$Email."','".$Mobile."','".$Qualification."','".$Current_Organization."','".$Current_Designation."','".$Current_Department."','".$Current_CTC."','".$Linkedin_url."','".$career_doc_name."','".$current_timestamp."');"; 
		// echo $sql;exit;

		$QryExec = sqlsrv_query($conn, $sql);
		
		if($QryExec === false) {
  			$message = "Application Submission Failed.";
           	$response['status']  = 500;
  			$response['message'] = $message;

		} else {

    		$row = sqlsrv_fetch_array($QryExec, SQLSRV_FETCH_ASSOC);
    		// echo "<pre>";print_r($row);exit;
    		$Application_ID = $row['Application_ID'];  

			foreach ($_POST['language'] as $key => $value) {
				$language = $_POST['language'][$key];
				$Reading  = isset($_POST['language_read'][$key]) ? $_POST['language_read'][$key] : 'no'; 
				$Write    = isset($_POST['language_write'][$key]) ? $_POST['language_write'][$key] : 'no'; 
				$Speak    = isset($_POST['language_speak'][$key]) ? $_POST['language_speak'][$key] : 'no'; 


				$language_sql = "INSERT INTO Rasi_portal_career_LanguageProficiency(Application_ID,Language,Reading,Write,Speak) 
				VALUES ('".$Application_ID."','".$language."','".$Reading."','".$Write."','".$Speak."')"; 

				$Language_QryExec = sqlsrv_query($conn, $language_sql);
			}

			
			// $to = array('rajani.r@rasiseeds.com');

			$to = array($job_poster_mail_id);

			$subject = 'Rasiseeds - Careers';

			$mail_template = '
			<html>
			<head>
				<style>
				table, td, th {
				border: 1px solid;
				}
				
				table {
				width: 100%;
				border-collapse: collapse;
				}
				</style>
				</head>
					<body>
						<table >
							<thead>
								<tr>
									<th class="text-center">S.No</th>
									<th class="text-center">Job Title</th>
									<th class="text-center">First Name</th>
									<th class="text-center">Last Name</th>
									<th class="text-center">Experience</th>
									<th class="text-center">Email</th>
									<th class="text-center">Mobile No</th>
									<th class="text-center">Current CTC</th>

								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										1
									</td>
									<td>
										' . $Job_Name . '
									</td>
									<td>
										' . $First_Name . '
									</td>
									<td>
										' . $Last_Name . '
									</td>									
									<td>
										'.$Experience . '
									</td>
									<td>
										' . $Email . '
									</td>
									<td>
										' . $Mobile . '
									</td>
									<td>
										' . $Current_CTC . '
									</td>
								</tr>
							</tbody>
						</table>
					</body>
			</html>';

			$process_mail = $mail->Send_Mail_attachement($subject,$targetFilePath,$temp_fileName,$mail_template,$to,'','');

			if (!$process_mail) {
				$response['status'] = 500;
				$response['message'] = "Career form mail sending error."; 
			} else {
	           	$message = "Your application has been successfully submitted.";
	           	$response['status']  = 200;
	  			$response['message'] = $message;
			}

		}           

		echo json_encode($response);exit;
	} else if($_POST['Action'] == 'contact_submit') {
		// echo "<pre>";print_r($_POST);exit;
		// $res['status'] = 200;
		// $res['message'] = "Contact form submitted successfully."; 



		// $to = array('rajani.r@rasiseeds.com');
		// $to = array('');

		if(isset($_POST['cname']))
		{
			$to = array();
				$subject = 'Rasiseeds - Contact Enquiry';

				$mail_template = '
				<html>
				<head>
					<style>
					table, td, th {
					border: 1px solid;
					}
					
					table {
					width: 100%;
					border-collapse: collapse;
					}
					</style>
					</head>
						<body>
							<table >
								<thead>
									<tr>
										<th class="text-center">S.No</th>
										<th class="text-center">Name</th>
										<th class="text-center">Email</th>
										<th class="text-center">Mobile No</th>
										<th class="text-center">Message</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											1
										</td>
										<td>
											' . $_POST['cname'] . '
										</td>
										<td>
											' . $_POST['cemail'] . '
										</td>
										<td>
											' . $_POST['cmobile'] . '
										</td>
										<td>
											'.$_POST['cmessage'] . '
										</td>
									</tr>
								</tbody>
							</table>
						</body>
				</html>';


				$process_mail = $mail->Send_Mail_Details($subject,'','',$mail_template,$to,'','');
		}

		if (!$process_mail) {
			$res['status'] = 500;
			$res['message'] = "Contact form mail sending error."; 
		}
		else
		{
			$res['status'] = 200;
			$res['message'] = "Thank you! Your message has been sent successfully. We will get back to you soon."; 
		}

		echo json_encode($res);exit;
	} else if($_POST['Action'] =='get_jobs') {
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

		$Qry     = "SELECT *,FORMAT(Created_at,'yyyy-MM-dd') as posted_date FROM Rasi_portal_jobs WHERE 1=1 AND is_deleted IS NULL AND Status = 'Active'";

		if(isset($_POST['department']) && $_POST['department'] != '') {
			$Qry .= " AND department = '".$_POST['department']."'";
		}

		if(isset($_POST['job_id']) && $_POST['job_id'] != '') {
			$Qry .= " AND Job_no = '".$_POST['job_id']."'";
		}

		if(isset($_POST['job_role']) && $_POST['job_role'] != '') {
			$Qry .= " AND Job_title LIKE '%".trim($_POST['job_role'])."%' ";
		}

		if(isset($_POST['location']) && $_POST['location'] != '') {
			$Qry .= " AND job_location = '".$_POST['location']."'";
		}				

		$QryExec = sqlsrv_query($conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec,SQLSRV_FETCH_ASSOC))
			{
				$resArr[] = $row;
			}
			$response['status']  = 200;
  			$response['message'] = "Job list fetched successfully.";
		}



		$job_count_Qry    = "SELECT SUM(CASE WHEN department = 'Sales and Marketing' THEN 1 ELSE 0 END) as sales_job_count,
			SUM(CASE WHEN department = 'Breeding and Bio-tech' THEN 1 ELSE 0 END) as breeding_job_count,
			SUM(CASE WHEN department = 'Corporate Functions' THEN 1 ELSE 0 END) as corporate_job_count,
			SUM(CASE WHEN department = 'Processing' THEN 1 ELSE 0 END) as processing_job_count,
			SUM(CASE WHEN department = 'Production' THEN 1 ELSE 0 END) as production_job_count,
			SUM(CASE WHEN department = 'Product Development' THEN 1 ELSE 0 END) as product_development_job_count,
			SUM(CASE WHEN department = 'Quality' THEN 1 ELSE 0 END) as quality_job_count,
			SUM(CASE WHEN department != '' and department IS NOT NULL  THEN 1 ELSE 0 END) as total_job_count
			FROM Rasi_portal_jobs WHERE 1=1 AND is_deleted IS NULL AND Status = 'Active'";

		$job_count_Qry_Exec = sqlsrv_query($conn, $job_count_Qry, array(), array("Scrollable" => 'static'));
		
		$job_count_arr = [];
		while($row = sqlsrv_fetch_array($job_count_Qry_Exec,SQLSRV_FETCH_ASSOC))
		{
			$job_count_arr[] = $row;
		}

		$response['data'] = $resArr;
		$response['job_count_data'] = $job_count_arr;

		echo json_encode($response);exit;
  	
	} else if($_POST['Action'] =='get_job_location') {
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

		$Qry     = "SELECT DISTINCT [Location(HQ)] FROM HR_Master_Table where [Location(HQ)] IS NOT NULL AND [Location(HQ)] != ''";
		$QryExec = sqlsrv_query($conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec))
			{
				$dataArr = array();
				$dataArr['location'] = $row['Location(HQ)'];
				$resArr[] = $dataArr;
			}
			$response['status']  = 200;
  			$response['message'] = "Location data retrived successfully.";
		}

		$response['data'] = $resArr;

		echo json_encode($response);exit;

	} else if($_POST['Action'] =='get_department') {
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

		$QryExec = sqlsrv_query($conn, $Qry, array(), array("Scrollable" => 'static'));
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

		echo json_encode($response);exit;

	} else if($_POST['Action'] =='get_products') {
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

		$Qry = "SELECT Product_name,STRING_AGG(region_tbl.REGIONNAME,',') as region_name,Product_division,Product_image";

		if(isset($_POST['from']) && $_POST['from'] == 'product_detail') {
			$Qry .= ",Customer_portal_product_master.Product_description";
		}

		$Qry .= " from Customer_portal_product_master
			left join (SELECT DISTINCT SAPREGIONID,REGIONNAME FROM RASI_REGIONTABLE) as region_tbl  on region_tbl.SAPREGIONID = Customer_portal_product_master.Region
			WHERE region_tbl.REGIONNAME IS NOT NULL 
			and Customer_portal_product_master.Status = 'Active'
			and Customer_portal_product_master.Product_image IS NOT NULL and Customer_portal_product_master.Product_image != ''";

		// product division filter apply
		if(isset($_POST['product_division']) && $_POST['product_division'] != '') {
			$Qry .= " AND Customer_portal_product_master.Product_division = '".$_POST['product_division']."'";
		}

		// state filter apply
		if((isset($_POST['region_codes']) && $_POST['region_codes'] != '' && $_POST['region_codes'] != "'All'" && $_POST['region_codes'] != "All")) {
			$Qry .= " AND Customer_portal_product_master.Region IN(".$_POST['region_codes'].")";			
		}

		// crop filter apply
		if((isset($_POST['crop']) && $_POST['crop'] != '' && $_POST['crop'] != "'All'" && $_POST['crop'] != "All")) {
			$Qry .= " AND Customer_portal_product_master.Crop_code IN(".$_POST['crop'].")";			
		}		

		// product name filter apply
		if(isset($_POST['product_name']) && $_POST['product_name'] != '') {
			if(isset($_POST['from']) && $_POST['from'] == 'product_detail') {
				$Qry .= " AND Customer_portal_product_master.product_name = '".trim($_POST['product_name'])."'";
			
			} else {
				$Qry .= " AND Customer_portal_product_master.product_name LIKE '%".trim($_POST['product_name'])."%'";
			}

		}

		$Qry .= " group by Product_name,Product_division,Product_image";

		if(isset($_POST['from']) && $_POST['from'] == 'product_detail') {
			$Qry .= ",Customer_portal_product_master.Product_description";
		}

		// echo $Qry;exit; 

		$QryExec = sqlsrv_query($conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec,SQLSRV_FETCH_ASSOC))
			{
				$result_arr = array();

				$result_arr['product_name'] = $row['Product_name'];
				$result_arr['product_division'] = $row['Product_division'];
				$result_arr['product_image'] = $row['Product_image'];

				if(isset($_POST['from']) && $_POST['from'] == 'product_detail') {
					$result_arr['region_name'] = $row['region_name'];
					$result_arr['product_description'] = utf8_encode($row['Product_description']);
				}


				$resArr[] = $result_arr;
			}
			

			$response['status']  = 200;
  			$response['message'] = "Products data retrived successfully.";
		} else {
			$response['status']  = 200;
  			$response['message'] = "No products found.";
		}

		$response['data'] = $resArr;

		echo json_encode($response);exit;

	} else if($_POST['Action'] =='get_recommended_states') {
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

		$Qry = "SELECT STRING_AGG(Region,',') as region_codes,states.STATE_NAME FROM (select Region,state_master.STATE_NAME from Customer_portal_product_master
			left join (SELECT DISTINCT SAPREGIONID,REGIONNAME,STATEID FROM RASI_REGIONTABLE) as region_tbl on region_tbl.SAPREGIONID = Customer_portal_product_master.Region
			left join state_master on state_master.STATE_ID = region_tbl.STATEID
			where STATE_NAME IS NOT NULL
			group by Region,state_master.STATE_NAME) as states
			group by states.STATE_NAME";

		$QryExec = sqlsrv_query($conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec,SQLSRV_FETCH_ASSOC))
			{
				$result_arr = array();
				$result_arr['region_codes'] = $row['region_codes'];
				$result_arr['STATE_NAME']   = $row['STATE_NAME'];

				$resArr[] = $result_arr;
			}
			$response['status']  = 200;
  			$response['message'] = "Recommended states data retrived successfully.";
		}

		$response['data'] = $resArr;

		echo json_encode($response);exit;

	} else if($_POST['Action'] =='get_crops') {
  		$response['status']  = 422;
  		$response['message'] = "Unprocessable Entry";

  		$division = ($_POST['division'] == 'CT01') ? 'COT' : (($_POST['division'] == 'FC01') ? 'FC' : 'FO'); 

		$Qry = "SELECT DISTINCT CropCode,CropName from Master_Stock_Prod_2_Crop WHERE Record_Status = 1 AND ProductDivionCode = '".$division."'";


		$QryExec = sqlsrv_query($conn, $Qry, array(), array("Scrollable" => 'static'));
		$qCount  = sqlsrv_num_rows($QryExec);
		
		$resArr = array();
		if($qCount > 0) {
			while($row = sqlsrv_fetch_array($QryExec,SQLSRV_FETCH_ASSOC))
			{
				$result_arr = array();
				$result_arr['CropCode'] = $row['CropCode'];
				$result_arr['CropName']   = $row['CropName'];

				$resArr[] = $result_arr;
			}
			$response['status']  = 200;
  			$response['message'] = "Crops data retrived successfully.";
		}

		$response['data'] = $resArr;

		echo json_encode($response);exit;

	}



}
