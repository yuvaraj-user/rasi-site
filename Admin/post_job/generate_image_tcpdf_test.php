<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include TCPDF library
    require_once('../../TCPDF/tcpdf.php');

    $modalContent = $_POST['modalContent'] ? $_POST['modalContent'] : '';
    $job_id = $_POST['job_id'] ? $_POST['job_id'] : '';

    if (empty($modalContent)) {
        echo json_encode(['status' => 400, 'message' => 'No content provided.']);
        exit;
    }

    try {
        // Create a new PDF document
        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Job Details');
        $pdf->SetSubject('Job Details Modal');
        $pdf->SetMargins(10, 10, 10);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // Add a page
        $pdf->AddPage();

        // Add content (HTML) to the PDF
        $pdf->writeHTML($modalContent, true, false, true, false, '');

        // Output the PDF to a local file
        $outputPath = '../../assets/generated_files/'.$job_id.'.pdf';
        $pdf->Output($outputPath, 'F'); // Save the file to the server

        // Check if the PDF was successfully created
        if (file_exists($outputPath)) {
            $imagePath = '../../assets/generated_files/'.$job_id.'.png';

            // Convert the PDF to an image using ImageMagick
            exec("convert -density 300 $outputPath $imagePath", $output, $return_var);

            if ($return_var === 0 && file_exists($imagePath)) {
                echo json_encode(['status' => 200, 'file_url' => $imagePath]);
            } else {
                echo json_encode(['status' => 500, 'message' => 'Failed to convert PDF to image.']);
            }
        } else {
            echo json_encode(['status' => 500, 'message' => 'PDF file not created.']);
        }
    } catch (Exception $e) {
        echo json_encode(['status' => 500, 'message' => $e->getMessage()]);
    }
}
?>
