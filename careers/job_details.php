    <!-- Header Section Start -->
    <?php 
        include('../partials/folder_partials/header.php');

        include('../partials/folder_partials/top_head.php');
    ?>
    <style type="text/css">
        .header-1{
            z-index: 10;
        }
        .breadcrumnd-banner {
            background-image: url('../assets/img/rasi/woman-holding-clipboard-with-join-our-team-message.jpg');
        }
        .breadcrumnd-banner::before {
            position: unset !important;
        }

        .job-icon svg {
            color: #ff5e14;
        }
        .form-check {
            cursor: pointer;
        }

        .fw-500 {
            font-weight: 500;
        }

        .f-20 {
            font-size: 20px !important;
        }
    </style>
    <!-- Hero Section Start -->
    <section class="breadcrumnd-banner overflow-hidden">
        <div class="container">
            <div class="breadcrumnd-wrapp">
                <div class="bread-content">
                    <h1 class="wow fadeInDown" data-wow-delay=".4s">
                        Job Details
                    </h1>
                    <ul class="bread-listing">
                        <li>
                            <a href="../index.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="careers.php">
                                Careers
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right"></i>
                        </li>
                        <li>
                            Job Details
                        </li>
                    </ul>
                </div>
                <div class="bread-thumb d-sm-block d-none">
                    <!-- <img src="assets/img/rasi/cartoon-office-workers-participating-team-building-exercise-located-right-side_1077802-426179.png" alt="img"> -->
                </div>
            </div>
        </div>
    </section>

    <section class="inner-page-main-wrapper p-t80 p-b50 bg-gray">
        <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center wow fadeInDown" data-wow-delay="0.5s">
                        <h2 data-title="Job Details">Job Details</h2>
                        <div class="mt-separator-outer">
                            <div class="mt-separator site-bg-primary"></div>
                        </div>
                    </div>

                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="develop_main_wrapper">
                           <div class="develop-cont">
                              <h3 class="job_title">
                                 
                                 <!-- <a href="jobs-details.html"><small>Softtech Pvt Ltd &nbsp; <i class="fas fa-check-square"></i></small></a> -->
                              </h3>
                              <ul>
                                 <li class="job-icon">
                                    <span><i class="far fa-clock"></i></span>
                                    <span class="date-diff-date">2 days ago</span>
                                 </li>
                              </ul>
                           </div>
                           <div class="bid_button">
                              <!-- <button class="apply-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span>Apply Now</span></button> -->
                              <input type="hidden" id="job_name" value="">

                              <a href="javascript:void(0);" id="apply_form_btn" data-bs-toggle="modal" data-bs-target="#form_modal"> <span>Apply Now</span> </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="descript_main_wrapper">
                           <h4>Jobs Description</h4>
                           <div class="job_desc">
                           </div>
                           
                           <h4>Key Responsibilities</h4>
                           
                            <div class="key_responsibilites">
                            </div>

                           <h4>Skill &amp; Experience</h4>
                           
                            <div class="skills">
                            </div>

                        <!--    <h4>Job Location</h4>
                           <div style="width: 100%" class="map_frame">
                            <iframe width="100" height="400" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div> -->
                          
                           
                        </div>
                        
                       
                     </div>
                     <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        

                       
                        <div class="descript_main_wrapper pb-0">
                           <h4>Job Overview</h4>
                           <ul class="job-overview">
                              <li>
                                 <div class="job-icon">
                                     <i class="fa-solid fa-calendar"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Date Posted</p>
                                    <span class="posted-date"></span>
                                 </div>
                              </li>
                              <li>
                                 <div class="job-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Location</p>
                                    <span class="job_location"></span>
                                 </div>
                              </li>
                              <li>
                                 <div class="job-icon">
                                   <i class="fa-solid fa-money-bill"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Offered Salary:</p>
                                    <span class="job_salary"></span>
                                 </div>
                              </li>
                              <!-- <li>
                                 <div class="job-icon">
                                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Expiration date</p>
                                    <span>May 5, 2026</span>
                                 </div>
                              </li> -->
                              <li>
                                 <div class="job-icon">
                                    <i class="fa-solid fa-user-clock"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Experience</p>
                                    <span class="job_experience"></span>
                                 </div>
                              </li>
                              <li>
                                 <div class="job-icon">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Gender</p>
                                    <span class="gender text-capitalize"></span>
                                 </div>
                              </li>
                              <li>
                                 <div class="job-icon">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Qualification</p>
                                    <span class="job_qualification">Bachelor Degree</span>
                                 </div>
                              </li>
                             <!--  <li>
                                 <div class="job-icon">
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                 </div>
                                 <div class="job-text">
                                    <p>Career Level</p>
                                    <span>Executive</span>
                                 </div>
                              </li> -->

                           </ul>
                        </div>
                     <!-- <div class="sidebar_widget pb-0 float_left">
                           <h4 class="title-sidebar">Job Skills</h4>
                           <div class="cat action">
                              <div class="row">
                                    <div class="col-lg-6 col-12">
                                      <label>
                                         <input type="checkbox" value="1"><span>Website Designer</span>
                                      </label>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                      <label>
                                         <input type="checkbox" value="1"><span>HTML 5</span>
                                      </label>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                      <label>
                                         <input type="checkbox" value="1"><span>Banner Designers</span>
                                      </label>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                      <label>
                                         <input type="checkbox" value="1"><span>Word Press</span>
                                      </label>
                                    </div>  
                                    
                                    <div class="col-lg-6 col-12">
                                      <label>
                                         <input type="checkbox" value="1"><span>Logo Designer</span>
                                      </label>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                      <label>
                                         <input type="checkbox" value="1"><span>Graphics</span>
                                      </label>
                                    </div>                                                                                                          
                              </div>

                           </div>
                        </div>

                        </div>
                     </div> -->
                  </div>
               </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="form_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
      <div class="modal-dialog modal-dialog-center modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <div>
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Easy Apply</h1>
            </div>
            <div>
                <p class="m-0"><span class="fw-500">Position Code :</span> <span class="badge bg-primary"><?= $_GET['id'] ?></span></p>
            </div>
            <div>
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
          </div>
          <div class="modal-body">
            <form class="row p-3 needs-validation" id="career_form" novalidate>
                <input type="hidden" name="job_id" value="<?= $_GET['id'] ?>">
                
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" class="form-control career-input" name="position_code" id="position_code" required value="<?= $_GET['id'] ?>" readonly>

                        <!-- <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="validationCustom02" class="form-label">Position Code</label>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control career-input" name="position_code" id="position_code" required value="<?= $_GET['id'] ?>" readonly>
                            </div>
                        </div>-->

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="validationCustom01" class="form-label">Name<span class="text-danger"> *</span></label>
                            </div>
                            <div class="col-md-3 mb-4">
                                <input type="text" class="form-control career-input" name="first_name" id="first_name" required placeholder="First Name">
                                  <div class="invalid-feedback">
                                    Please enter your first name.
                                  </div>
                            </div>
                            <div class="col-md-3 mb-4">
                                <input type="text" class="form-control career-input" name="last_name" id="last_name" required placeholder="Last Name">
                                  <div class="invalid-feedback">
                                    Please enter your last name.
                                  </div>
                            </div>                            

                        </div>  

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="validationCustom01" class="form-label">Total years of relevant expereince<span class="text-danger"> *</span></label>
                            </div>
                            <div class="col-md-6 mb-4">
                                  <input type="number" class="form-control career-input" name="experience" id="experience" aria-describedby="inputGroupPrepend" required oninput="return experience_validate(this)" ondrop="return false;" onpaste="return false;" min="0">

                                  <div class="invalid-feedback">
                                    Please choose your experience.
                                  </div>
                            </div>
                        </div>                                                

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="validationCustomUsername" class="form-label">Highest Qualification<span class="text-danger"> *</span></label>
                            </div>
                            <div class="col-md-6 mb-4">
                                  <input type="text" class="form-control career-input" name="highest_qualification" id="highest_qualification" aria-describedby="inputGroupPrepend" required>
                                  <div class="invalid-feedback">
                                    Please enter name of the current organization.
                                  </div>
                            </div>
                        </div>                                                


                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="validationCustomUsername" class="form-label">Email<span class="text-danger"> *</span></label>
                            </div>
                            <div class="col-md-6 mb-4">
                              <input type="email" class="form-control career-input" name="email" id="email" aria-describedby="inputGroupPrepend" required>
                              <div class="invalid-feedback">
                                Please enter your email.
                              </div>
                            </div>
                        </div>                                                

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="validationCustomUsername" class="form-label">Mobile<span class="text-danger"> *</span></label>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control career-input" name="mobile" id="mobile" required maxlength="10">
                                <div class="invalid-feedback">
                                  Please enter your mobile no.
                                </div>
                            </div>
                        </div>                                                

                
                    </div>


                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="validationCustomUsername" class="form-label">Name of the current Organization<span class="text-danger"> *</span></label>
                            </div>
                            <div class="col-md-6 mb-4">
                                  <input type="text" class="form-control career-input" name="current_organization_name" id="current_organization_name" aria-describedby="inputGroupPrepend" required>
                                  <div class="invalid-feedback">
                                    Please enter name of the current organization.
                                  </div>
                            </div>                            
                        </div>


                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="current_designation" class="form-label">Current Designation<span class="text-danger"> *</span></label>
                            </div>
                            <div class="col-md-6 mb-4">
                              <input type="text" class="form-control career-input" name="current_designation" id="current_designation" aria-describedby="inputGroupPrepend" required>
                              <div class="invalid-feedback">
                                Please enter your current designation.
                              </div>
                            </div>  
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="current_ctc" class="form-label">Current CTC<span class="text-danger"> *</span></label>
                            </div>
                            <div class="col-md-6 mb-4">
                              <input type="text" class="form-control career-input" name="current_ctc" id="current_ctc" aria-describedby="inputGroupPrepend" required onkeypress="return isNumber(event)" ondrop="return false;" onpaste="return false;">
                              <div class="invalid-feedback"> 
                                Please enter your current CTC.
                              </div>
                            </div>  
                        </div>                        

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="current_ctc" class="form-label">Current Department<span class="text-danger"> *</span></label>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control career-input" name="current_department" id="current_department" required>
                                <div class="invalid-feedback">
                                  Please enter your department.
                                </div>
                            </div>  
                        </div>                        


                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="linkedin_url" class="form-label">Linkedin Profile Url<span class="text-danger"> *</span></label>
                            </div>
                            <div class="col-md-6 mb-4">
                                <input type="text" class="form-control career-input" name="linkedin_url" id="linkedin_url" required>
                                <div class="invalid-feedback">
                                  Please enter your department.
                                </div>
                            </div>  
                        </div>                        


                    </div>                    
                </div>


                <div class="col-md-12 mb-4">
                    <label for="validationCustom05" class="form-label">Language Proficiency<span class="text-danger"> *</span></label>
                    <table class="table table-bordered">
                        <thead>
                            <th class="text-center">Language</th>
                            <th class="text-center">Read</th>
                            <th class="text-center">Write</th>
                            <th class="text-center">Speak</th>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input class="form-control" type="text" name="language[]" placeholder="Enter Your Proficient launguage 1...">
                                </td>
                                <td>
                                    <div class="form-check text-center">
                                      <input class="form-check-input" type="checkbox" value="yes" id="language_read1" name="language_read[]">
                                      <label class="form-check-label" for="language_read1"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check text-center">
                                      <input class="form-check-input" type="checkbox" value="yes" id="language_write1" name="language_write[]">
                                      <label class="form-check-label" for="language_write1"></label>
                                    </div>                                    
                                </td>
                                <td>
                                    <div class="form-check text-center">
                                      <input class="form-check-input" type="checkbox" value="yes" id="language_speak1" name="language_speak[]">
                                      <label class="form-check-label" for="language_speak1"></label>
                                    </div>                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-control" type="text" name="language[]" placeholder="Enter Your Proficient launguage 2...">
                                </td>
                                <td>
                                    <div class="form-check text-center">
                                      <input class="form-check-input" type="checkbox" value="yes" id="language_read2" name="language_read[]">
                                      <label class="form-check-label" for="language_read2"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check text-center">
                                      <input class="form-check-input" type="checkbox" value="yes" id="language_write2" name="language_write[]">
                                      <label class="form-check-label" for="language_write2"></label>
                                    </div>                                    
                                </td>
                                <td>
                                    <div class="form-check text-center">
                                      <input class="form-check-input" type="checkbox" value="yes" id="language_speak2" name="language_speak[]">
                                      <label class="form-check-label" for="language_speak2"></label>
                                    </div>                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-control" type="text" name="language[]" placeholder="Enter Your Proficient launguage 3...">
                                </td>
                                <td>
                                    <div class="form-check text-center">
                                      <input class="form-check-input" type="checkbox" value="yes" id="language_read3" name="language_read[]">
                                      <label class="form-check-label" for="language_read3"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check text-center">
                                      <input class="form-check-input" type="checkbox" value="yes" id="language_write3" name="language_write[]">
                                      <label class="form-check-label" for="language_write3"></label>
                                    </div>                                    
                                </td>
                                <td>
                                    <div class="form-check text-center">
                                      <input class="form-check-input" type="checkbox" value="yes" id="language_speak3" name="language_speak[]">
                                      <label class="form-check-label" for="language_speak3"></label>
                                    </div>                                    
                                </td>
                            </tr>                                                                                  
                        </tbody>
                    </table>
                </div>

                 

                <div class="col-md-12 mb-4">
                    <label for="validationCustom05" class="form-label">Resume<span class="text-danger"> * </span><small class="text-danger">(Note: Only PDF, DOC, and DOCX files are allowed)</small></label>
                    <div id="fileUpload" class="file-container">
                      <label for="fileUpload-1" class="file-upload">
                        <div>
                          <i class="fa-solid fa-cloud-arrow-up f-20"></i>
                          <p class="m-0">Drag &amp; Drop Files Here</p>
                          <span>OR</span>
                          <div>Browse Files</div>
                        </div>
                        <input type="file" id="fileUpload-1" accept="application/pdf,application/msword" name="resume" required >
                      </label>
                    </div>
                    <div class="invalid-feedback resume_file">
                      Please choose your resume.
                    </div>
                </div>

                <div class="col-12 text-end">
                    <button class="btn-main site-green-bg text-white" type="submit">
                        <i class="fa-solid fa-check me-2"></i>Submit Your Resume</button>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger br-10" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary br-10 submit_resume">
                Submit Your resume
                <div class="shine"></div>
            </button>

          </div>
         </form>

        </div>
      </div>
    </div>


    <!--<< Footer Section Start >>-->
    <?php 
        include('../partials/folder_partials/footer.php');
        include('../partials/folder_partials/bottom_script.php');

     ?>


     <script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.prototype.slice.call(forms)
            .forEach(function (form) {
              form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
                }

                form.classList.add('was-validated')
              }, false)
            })
        })()


         $(document).ready(function(){
            $("#fileUpload").fileUpload();

            var url_string = window.location.href; 
            var url = new URL(url_string);
            var decodedid = url.searchParams.get("id");
            // var id = atob(decodedid);
            var id = decodedid; 

              
            get_job_details(id);

        // Function to get query parameters
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        // Check if "qr=true" is present in the URL
        if (getQueryParam('qr') === 'true') {
            // Simulate a click on the apply button to open the modal
            document.getElementById('apply_form_btn').click();
        }

         });    

        $('#mobile').on('input', function() {
            let input = $(this).val().replace(/\D/g, ''); // Remove non-digit characters

            // Ensure the input starts with 6, 7, 8, or 9
            if (input.length > 0 && !/^[6-9]/.test(input)) {
                input = input.substring(1); // Remove the first character if it's not 6-9
            }

            $(this).val(input); // Set the valid input back to the input field
        });

        $(document).on('click','#apply_form_btn',function(){
            $('#career_form')[0].reset();
            $('#career_form').removeClass('was-validated');
        });

        function getFileExtension() {
            var fileInput = document.getElementById('fileUpload-1');  // Get the file input element
            var filePath = fileInput.value;  // Get the full file path
            var fileName = fileInput.files[0].name;  // Get the file name (with extension)
            
            // Extract the file extension (use the last part after the dot)
            var fileExtension = fileName.split('.').pop().toLowerCase();
            
            // Display the file extension in the console
            console.log('File extension: ' + fileExtension);

            // Optionally: Check if it's a valid file type (e.g., PDF or Word)
            var allowedExtensions = ['pdf', 'doc', 'docx'];
            if (allowedExtensions.indexOf(fileExtension) === -1) {
                // alert('Invalid file type. Only PDF, DOC, and DOCX files are allowed.');
                alert_msg('Warning','Invalid file type. Only PDF, DOC, and DOCX files are allowed.','warning')
                fileInput.value = '';  // Clear the file input
                $("#fileUpload").fileUpload();

            }
        }


        $(document).on('change','#fileUpload-1',function(){
             getFileExtension();
        });

        function showLoader() {
            $('#ajax-preloader').css('display','flex');
        }

        // Function to hide the loader
        function hideLoader() {
            $('#ajax-preloader').css('display','none');
        }


        function alert_msg(title,message,icon) {
            Swal.fire({
                title: title,
                text: message,
                icon: icon,
            });
        }


        $(document).on('submit','#career_form',function(e){
          e.preventDefault();
          // console.log($(this).files);
          var form = $(this)[0];
          var job_name = $('#job_name').val();

          var form_data = new FormData(form);
          form_data.append('Action','career_submit');
          form_data.append('job_name',job_name);  

            $.ajax({
                url: '../common_ajax.php',
                type: 'POST',
                data:  form_data,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function(){
                    showLoader();
                },
                success: function(response) {
                    $('#form_modal').modal('hide');
                    if(response.status == 200) {
                        Swal.fire({
                                icon: "success",
                                title: "Success!",
                                text: response.message,
                                button: true 
                            }).then((result) => {
                                if (result) {
                                    location.reload(true);
                                }
                        });

                    } else {
                        alert_msg('Failed',response.message,'error');
                    }
                },
                complete:function() {
                    hideLoader();
                }
            });

        });


        function get_job_details(job_id){
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();

            today = yyyy+'-'+mm+'-'+dd;

            $.ajax({
                url: '../common_ajax.php',
                type: 'POST',
                data: { Action : 'get_jobs',job_id : job_id },
                dataType: "json",
                beforeSend: function(){
                    // $('.ajax-preloader').show();
                },
                success: function(response) {
                    $('.job_title').text(response.data[0].Job_title);
                    $('#job_name').val(response.data[0].Job_title);
                    $('.job_desc').html(response.data[0].Job_description);
                    $('.key_responsibilites').html(response.data[0].key_responsibilities);
                    $('.skills').html(response.data[0].skills);

                    $('.posted-date').text(moment(response.data[0].posted_date,'YYYY-MM-DD').format('MMM DD yyyy'));

                    var date_diff_text = moment(response.data[0].posted_date,'YYYY-MM-DD').fromNow();

                    if(response.data[0].posted_date == today) {
                        date_diff_text = 'Today';
                    }
                    $('.date-diff-date').text(date_diff_text);

                    $('.job_location').text(response.data[0].job_location);
                    $('.job_salary').text(response.data[0].salary_range);
                    $('.job_experience').text(response.data[0].experience);
                    $('.gender').text(response.data[0].gender);

                    var qualification = (response.data[0].job_qualification).split(',');

                    var qualification_html =  '';
                    qualification.map(function(data){
                        qualification_html += '<p>'+data+'</p>'; 
                    })



                    $('.job_qualification').html(qualification_html);
                },
                complete:function() {
                    // $('.ajax-preloader').hide();
                }
            });
        }
        
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }

        function experience_validate(input) {
            var number = input.value;
            var number_arr = number.split('.');
            if(number_arr[0].length > 2) {
                input.value = number_arr[0].substring(0, 2);                             
            }

            if(number_arr[0].length > 2) {
                input.value = number.substring(0, 2);                             
            }
            return true;                                                                     
        }

        
     </script>