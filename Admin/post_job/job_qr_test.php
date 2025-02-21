        <?php include('../partials/top_head.php'); ?>


        <?php include('../partials/header.php'); ?>

        <?php include('../partials/sidebar.php'); ?>

        <?php

// Include necessary libraries (ensure the QRcode library is loaded)
include('../../phpqrcode/qrlib.php'); // Adjust the path to the QRcode library

// The event code and other details
$job_id = 'RS-0002195556';
$ineNumber = 'https://corporate.rasiseeds.com/corporate_dev/Rasi_Seeds_Portal/careers/job_details.php?id=' . urlencode($job_id) .'&qr=true';

// Path for saving the QR code
$qrFilePath = '../assets/images/job_qr/'.$job_id.'.png';

// Generate QR code without logo
QRcode::png($ineNumber, $qrFilePath, QR_ECLEVEL_H, 10);

// Check if the QR code file was created successfully
if (file_exists($qrFilePath)) {
    echo json_encode(['status' => 'success', 'file_path' => $qrFilePath]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to generate QR code.']);
}


?>

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

             <div class="qr">
        <h4 class="text-center">Scan QR code</h4>
        <div class="row justify-content-center">
            <div class="col-auto">
                <img src='../assets/images/job_qr/<?php echo $job_id; ?>.png' alt="QR Code" width="160px" height="160px">
            </div>
        </div>
    </div>
            
    </div>


        <?php include('../partials/bottom_script.php'); ?>            

   <script type="text/javascript">

       

   </script> 