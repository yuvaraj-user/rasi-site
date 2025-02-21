        <?php include('../partials/top_head.php'); ?>


        <?php include('../partials/header.php'); ?>

        <?php include('../partials/sidebar.php'); ?>

        <style>
        .modal-dialog {
/*            max-width: 700px;*/
        }
        .modal-content {
/*            height: 942px;*/
            width: 100%;
            margin: auto;
        }
        .modal_img {
            justify-content: right;
            border-bottom: none;
            padding-right: 30px;
            padding-top: 20px;
        }
        .modal-body {
            position: relative;
            flex: 1 1 auto;
             padding: 0px !important; 
        }
        .job-logo {
            width: 100px;
        }
        .qr-image {
            width: 100px;
            height: 100px;
        }
        .section-title {
            font-weight: bold;
            text-decoration: underline;
        }

        .job_image{
            color: #4798e8 !important;
        }
        .job_image:hover{
            color: #381be7 !important;
        }
        ul {
            color:#73B04C;
        }

        #job_modalbody p {
            list-style-type: disc;
            display: list-item;
            color:#73B04C;
        } 
    </style>

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Job List</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Career Opportunities</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Job List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-end mb-2">
                            <a href="post_job.php"><button class="btn btn-info add_btn" type="button">
                                <i class="fa-solid fa-briefcase mr-2"></i>Post Job</button></a>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="job_list_tbl" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Job No</th>
                                                <th>Job Title</th>
                                                <th>Location</th>
                                                <th>Department</th>
                                                <th>Division</th>
                                                <th>Job Type</th>
                                                <th>Position Code</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="job_list_tbl_body">
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
    <div class="modal fade" id="a4Modal" tabindex="-1" aria-labelledby="a4ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content p-6">
                <div class="modal-header">
                    <button type="button" class="btn btn-primary download_image">Download</button>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <!-- <a href="#" class="nav-link waves-effect waves-dark">
                        <!-- <img src="../../../logo.png" alt="homepage" class="job-logo light-logo" > -->
                    <!-- </a> -->
                </div>
                <div class="modal-body job_modalbody" id="job_modalbody">
                    
                </div>
            </div>
        </div>
    </div>


        </div>

    </div>


        <?php include('../partials/bottom_script.php'); ?> 
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js" integrity="sha512-01CJ9/g7e8cUmY0DFTMcUw/ikS799FHiOA0eyHsUWfOetgbx/t6oV4otQ5zXKQyIrQGTHSmRVPIgrgLcZi/WMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script type="text/javascript">

        function datatable(){

            $('#job_list_tbl').DataTable({
                dom: 'Bfrtip',
                buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-cyan text-white mr-1');
        }

        $(document).ready(function(){

            datatable();


            get_job_list();
        });


        function get_job_list(){
            $.ajax({
                url: 'post_job_ajax.php',
                type: 'POST',
                data: { Action : 'get_job_list' },
                dataType: "json",
                beforeSend: function(){
                    // $('.ajax-preloader').show();
                },
                success: function(response) {
                    var html = '';

                    if(response.data.length > 0) {    
                        for(i in response.data) {   
                        var encodedId = btoa(response.data[i].Id);

                            html += `<tr>
                                <td>${ parseInt(i)+ parseInt(1) }</td>
                                <td>${response.data[i].Job_no}</td>
                                <td>${response.data[i].Job_title}</td>
                                <td>${response.data[i].job_location}</td>
                                <td>${response.data[i].department}</td>
                                <td>${response.data[i].division}</td>
                                <td>${response.data[i].job_type}</td>
                                <td>${response.data[i].Position_code || ''}</td>
                                <td>${response.data[i].Status}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a class="mr-2" href="post_job?id=${ encodedId }&action=${btoa('view')}">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a class="mr-2" href="post_job?id=${ encodedId }">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="delete" data-id="${response.data[i].Id}">
                                            <i class="ti-trash"></i>
                                        </a>

                                        <button type="button" class="btn job_image" data-bs-toggle="modal" data-bs-target="#a4Modal" data-id="${response.data[i].Id}" data-jobtitle="${response.data[i].Job_title} " data-location="${response.data[i].job_location}">
                                            <i class="ti-image"></i>
                                        </button>

                                        
                                    </div>
                                </td>
                            </tr>`;
                        }
                    }
                                        // <a href="javascript:void(0)" class="job_image mr-2" data-id="${response.data[i].Id}" data-jobtitle="${response.data[i].Job_title} " data-location="${response.data[i].job_location}">
                                        //     <i class="ti-image"></i>
                                        // </a>
                    //<a class="mr-2" href="job_template?id=${ encodedId }&title=${response.data[i].Job_title}&loc=${response.data[i].job_location}" target=_blank>


                    $('#job_list_tbl').DataTable().destroy();    
                    
                    $('#job_list_tbl_body').html(html);


                    datatable();

                },
                complete:function() {
                    // $('.ajax-preloader').hide();
                }
            });
        }

        $(document).on('click','.delete',function(){
            var id = $(this).data('id');
            Swal.fire({
              title: "Are you sure?",
              text: "You want to delete this job post!",
              icon: "warning",
              showCancelButton: true,
              confirmButtonText: "Yes",
              dangerMode: true,
            }).then((accept) => {
              if (accept) {
                $.ajax({
                    url: 'post_job_ajax.php',
                    type: 'POST',
                    data: { Action : 'delete_job_post',id : id },
                    dataType: "json",
                    beforeSend: function(){
                        $('.ajax-preloader').show();
                    },
                    success: function(response) {
                        if (response && response.status == 200) {
                            Swal.fire({
                                icon: "success",
                                title: "Success!",
                                text: response.message,
                                confirmButtonText: "OK"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location = "job_list.php";
                                }
                            });

                        } else {

                            Swal.fire({
                                icon: "error",
                                title: "Error!",
                                text: response.message,
                                confirmButtonText: "OK"
                            });
                        }
                    },
                    complete:function() {
                        $('.ajax-preloader').hide();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            text: "Error in delete Job.",
                            confirmButtonText: "OK"
                        });
                    }
                });
              }
            });
        });

        $(document).on('click','.job_image',function(){
            var job_no=$(this).attr('data-id');
            var title=$(this).attr('data-jobtitle');
            var location=$(this).attr('data-location');

            $.ajax({
                    url: 'post_job_ajax.php',
                    type: 'POST',
                    data: { Action : 'get_job_details_img',job_no : job_no },
                    dataType: "json",
                    beforeSend: function(){
                        $('.ajax-preloader').show();
                    },
                    success: function(response) {
                        if (response && response.status == 200) {
                            var keyResponsibilitiesHtml = response.data[0].key_responsibilities;
                            if(!response.data[0].key_responsibilities.includes('ul')) {
                                keyResponsibilitiesHtml = response.data[0].key_responsibilities
                                    .replace(/<p>/g, '<li>')
                                    .replace(/<\/p>/g, '</li>');
                            }

                            var skillsHtml = response.data[0].skills;
                            if(!response.data[0].skills.includes('ul')) {
                                var skillsHtml = response.data[0].skills
                                .replace(/<p>/g, '<li>')
                                .replace(/<\/p>/g, '</li>');
                            }

                            var body = `
                                <!-- Center Section -->
                                <div class="text-center mb-4">
                                 <div class="row modal_img">
                                        <img src="../../../logo.png" alt="homepage" class="job-logo light-logo" style="max-width: 100px; height: auto;">
                                </div>

                                    <h3 class="mb-1" style="color: #528135 !important;">We Are Hiring!</h3>
                                    <p class="mb-1 job_des" style="color: #73B04C !important; font-weight:bold;display: block;">${response.data[0].Job_title || ''}</p>
                                </div>

                                <!-- Left and Right Sections -->
                                <div class="row">
                                    <!-- Left Section -->
                                    <div class="col-6 p-5">
                                        <h5 class="section-title" style="color: #528135 !important;">Key Responsibilities & Tasks</h5>
                                            ${keyResponsibilitiesHtml}
                                    </div>
                                    <!-- Right Section -->
                                    <div class="col-6 p-5">
                                        <h5 class="section-title" style="color: #528145 !important;">Skills</h5>
                                            ${skillsHtml}
                                         <div class="mt-4 ">
                                         <h5 style="color: #528135 !important;">Location: <span style="color:#73B04C;">${response.data[0].job_location}</span></h5>`;

                                        if(response.data[0].job_display_image) {
                                           body += `<img src="../assets/images/rasi/jobs/${response.data[0].job_display_image}" alt="QR Code" width="200px" height="200px">`;
                                        }  

                                        body += `</div>
                                        <!-- QR Code -->
                                        <div class="mt-4 text-center">
                                            <div class="head"  style="background: #A8D08C;padding: 10px;border-radius: 50px;"><h5 style="color: #528135 !important; font-weight:bold;">Scan to Apply</h5></div>
                                           <div class="row align-items-center mt-4">
                                                <!-- Left Section: QR Code Image -->
                                                <div class="col-6 text-center">
                                                    <img src="../assets/images/job_qr/${response.data[0].Job_no}" alt="QR Code" width="100px" height="100px">


                                                </div>
                                                
                                                <!-- Right Section: Website Text -->
                                                <div class="col-6 text-center">
                                                    <h5 style="color: #528135 !important;">Look us up at:<br><a style="color: #528135 !important;" href="https://www.rasiseeds.com" target="_blank">www.rasiseeds.com</a></h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>`;

                            // Set the content in the modal body
                            $('#a4Modal .modal-body').html(body);

                            // Show the modal
                            $('#a4Modal').modal('show');
                            $('#a4Modal .download_image').attr('data-jobno', response.data[0].Job_no);

          

                        } else {

                            Swal.fire({
                                icon: "error",
                                title: "Error!",
                                text: response.message,
                                confirmButtonText: "OK"
                            });
                        }
                    },
                    complete:function() {
                        $('.ajax-preloader').hide();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            text: "Error in delete Job.",
                            confirmButtonText: "OK"
                        });
                    }
                });

        });

        $(document).on('click', '.download_image', function() {
            // Show the preloader while generating the image
            $('.ajax-preloader').show();
            
            var job_no = $(this).attr('data-jobno');
            
            domtoimage.toJpeg(document.getElementById('job_modalbody'), { 
                quality: 0.95, 
                bgcolor: '#fff'
            })
            .then(function (dataUrl) {
                var link = document.createElement('a');
                link.download = `${job_no}.jpg`;
                link.href = dataUrl;
                link.click();
                
                // Hide the preloader once the image is downloaded
                $('.ajax-preloader').hide();
            })
            .catch(function (error) {
                console.error("Error generating image: ", error);
                Swal.fire({
                    icon: 'error',
                    title: 'Image Generation Error',
                    text: 'Something went wrong while generating the image.',
                });
                
                // Hide the preloader in case of an error
                $('.ajax-preloader').hide();
            });
        });





   </script> 

   <script type="text/javascript">
             //             $('#a4Modal').on('shown.bs.modal', function () {
                //                 // Get the modal content HTML
                //                 const modalContent = document.querySelector(".modal-content").outerHTML;

                //                 // Send the content to the server
                //                 $.ajax({
                //                     url: 'generate_image_tcpdf.php', // PHP script for image generation
                //                     type: 'POST',
                //                     data: { modalContent: modalContent,job_id:response.data[0].Job_no },
                //                     xhrFields: {
                //                       responseType: 'blob'
                //                   },
                //                     success: function (response) {
                //                         console.log(response)


                //                         if (response.status === 200) {

                //                             // Trigger the download of the generated file
                //                              const link = document.createElement('a');
                // link.href = response.file_url; // URL of the generated image
                // link.download = `${response.file_url.split('/').pop()}`; // Desired file name
                // link.click();
                //                         } else {
                //                             Swal.fire({
                //                                 icon: "error",
                //                                 title: "Error!",
                //                                 text: response.message,
                //                                 confirmButtonText: "OK",
                //                             });
                //                         }
                //                     },
                //                     error: function (xhr, status, error) {
                //                         console.error('Error:', error);
                //                         Swal.fire({
                //                             icon: "error",
                //                             title: "Error!",
                //                             text: "Failed to generate the file.",
                //                             confirmButtonText: "OK",
                //                         });
                //                     },
                //                 });
                //             });


                              // // Automatically download the modal as an image
                              //   $('#a4Modal').on('shown.bs.modal', function() {
                              //       // Adjust background color of modal for A4 white background
                              //       // $('#a4Modal').css('background-color', '#ffffff');

                              //       // Capture the entire modal (header, body, footer)
                              //       html2canvas(document.querySelector(".modal-content"), {
                              //           backgroundColor: "#ffffff", // Set background to white (like A4 paper)
                              //           logging: true,               // Optional: to log the process for debugging
                              //           x: 0,                        // Ensure the capture starts from the top-left
                              //           y: 0,
                              //           // width: document.querySelector("#a4Modal").scrollWidth,   // Capture full width
                              //           // height: document.querySelector("#a4Modal").scrollHeight, // Capture full height
                              //           // scrollX: 0,
                              //           // scrollY: -window.scrollY,    // Ensure the modal scroll is taken into account
                              //           useCORS: true                // Ensure images are properly fetched from different origins
                              //       }).then(canvas => {
                              //           // Convert canvas to a data URL
                              //           const imageData = canvas.toDataURL('image/png');

                              //           // Create a link element to trigger the download
                              //           const link = document.createElement('a');
                              //           link.href = imageData;
                              //           link.download = 'job_details.png';
                              //           link.click();
                              //       });
                              //   });
   </script>