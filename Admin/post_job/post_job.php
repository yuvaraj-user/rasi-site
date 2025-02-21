        <?php include('../partials/top_head.php'); ?>
        <style type="text/css">
            .label_input {
                width: 80% !important;
            }
        </style>

        <?php include('../partials/header.php'); ?>

        <?php include('../partials/sidebar.php'); ?>

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Post Job</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="job_list.php">Career Opportunities</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Post Job</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                            <form id="post_job_form" class="form-horizontal" novalidate>
                                <div class="card job-posting-card">
                                    <div class="card-header bg-info job-posting-card-head">
                                        <h4 class="card-title text-white">Job Details</h4>
                                    </div>
                                    <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label for="job_title">Job Title</label>
                                                        <input type="text" class="form-control required_for_valid" id="job_title" placeholder="Enter job title" name="job_title">
                                                        <div class="invalid-feedback">
                                                            Please enter job title.
                                                        </div>
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label for="position_code">Position Code</label>
                                                        <input type="text" class="form-control required_for_valid" id="position_code" placeholder="Enter Position Code" name="position_code">
                                                        <div class="invalid-feedback">
                                                            Please enter Position Code.
                                                        </div>
                                                      </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                      <div class="form-group">
                                                        <label for="validationTextarea">Job Description</label>
                                                        <input type="hidden" class="job_description required_for_valid" name="job_description">
                                                        <div id="job_description" class="form-control" style="height: 300px;">
                                                        </div>
                                                        <div class="invalid-feedback">
                                                          Please enter job description.
                                                        </div> 
                                                      </div>
                                                </div>
                                            </div>

                                            <hr class="mt-5 mb-5">

                                            <div class="row mb-3">
                                                <div class="col-md-3">
                                                      <div class="form-group">
                                                        <label for="gender">Gender</label><br>
                                                            <select class="form-control select2 required_for_valid" required id="gender" name="gender">
                                                              <option value="">Please Select Gender</option>
                                                              <option value="male">Male</option>
                                                              <option value="female">Female</option>
                                                              <option value="not_mentioned">Not Mentioned</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please choose gender
                                                            </div>
                                                      </div>
                                                </div> 

                                                <div class="col-md-3">
                                                      <div class="form-group">
                                                        <label for="job_state">State</label><br>
                                                            <select class="form-control select2 required_for_valid" required id="job_state" name="job_state">
                                                              <option value="">Please Select State</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please choose state
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="col-md-3">
                                                      <div class="form-group">
                                                        <label for="job_district">District</label><br>
                                                            <select class="form-control select2 required_for_valid" required id="job_district" name="job_district">
                                                              <option value="">Please Select District</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please choose district
                                                            </div>
                                                      </div>
                                                </div>

                                                <div class="col-md-3">
                                                      <div class="form-group">
                                                        <label for="salary_range">Salary Range <small class="text-danger">(Per Annum)</small></label>
                                                            <!-- <select class="form-control select2 required_for_valid" required id="salary_range" name="salary_range">
                                                              <option value="">Please Select Salary Range</option>
                                                            </select> -->
                                                            <div class="input-group label_input">
                                                                <input type="number" class="form-control" id="salary_range" name="salary_range" min="0" ondrop="return false;" onpaste="return false;">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">Lakhs</span>
                                                                </div>
                                                            </div>                                                            
                                                            <div class="invalid-feedback">
                                                                Please choose salary range
                                                            </div>
                                                      </div>
                                                </div>  

                                            </div>



                                            <div class="row mb-3">

                                                <div class="col-md-3">
                                                      <div class="form-group">
                                                        <label for="experience">Experience</label>
                                                            <!-- <select class="form-control select2 required_for_valid" required id="experience" name="experience">
                                                              <option value="">Please Select Experience Range</option>
                                                            </select> -->
                                                            <div class="input-group label_input">
                                                                <input type="number" class="form-control" id="experience" name="experience" min="0" oninput="return experience_validate(this)" ondrop="return false;" onpaste="return false;">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">Years</span>
                                                                </div>
                                                            </div>                                                            
                                                            <div class="invalid-feedback">
                                                                Please choose experience range
                                                            </div>
                                                      </div>
                                                </div> 

                                                <div class="col-md-3">
                                                      <div class="form-group">
                                                        <label for="job_location">Job Department</label>
                                                            <select class="form-control select2 required_for_valid" required id="department" name="department">
                                                              <option value="">Please Select Department</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please choose department
                                                            </div>
                                                      </div>
                                                </div> 

                                                <div class="col-md-3">
                                                      <div class="form-group">
                                                        <label for="division">Job Division</label><br>
                                                            <select class="form-control select2 required_for_valid" required id="division" name="division">
                                                              <option value="">Please Select Division</option>
                                                              <option value="fiber">Fiber</option>
                                                              <option value="food">Food</option>
                                                              <option value="fodder">Fodder</option>  
                                                              <option value="corporate">Corporate</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please choose division
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                      <div class="form-group">
                                                        <label for="job_type">Job Type</label><br>
                                                            <select class="form-control select2 required_for_valid" required id="job_type" name="job_type">
                                                              <option value="">Please Select Type</option>
                                                              <option value="full_time">Full Time</option>
                                                              <option value="full_time">Part Time</option>
                                                            </select>
                                                            <div class="invalid-feedback">
                                                                Please choose division
                                                            </div>
                                                      </div>
                                                </div>  

                                            </div>   

                                            <div class="row">
                                                <div class="col-md-3">
                                                      <div class="form-group">
                                                        <label for="job_qualification required_for_valid">Qualification</label><br>
                                                            <select class="form-control" multiple required id="job_qualification" name="job_qualification[]">
                                                              <option value="">Please Select Qualification</option>
                                                            </select>
                                                        <div class="invalid-feedback">
                                                            Please choose qualification.
                                                        </div>
                                                      </div>
                                                </div>                                                 
                                            </div>

                                            <hr class="mt-5 mb-5">

                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                      <div class="form-group">
                                                        <label for="key_responsibilities">Key Responsibilities</label>
                                                        <input type="hidden" name="key_responsibilities" class="key_responsibilities required_for_valid">
                                                        <div id="key_responsibilities" class="form-control" style="height: 300px;">
                                                        </div>
                                                        <div class="invalid-feedback">
                                                          Please enter responsibilities.
                                                        </div>
                                                      </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                      <div class="form-group">
                                                        <label for="skills">Skills & Experience</label>
                                                        <input type="hidden" name="skills" class="skills required_for_valid">
                                                        <div id="skills" class="form-control" style="height: 300px;">
                                                        </div>
                                                        <div class="invalid-feedback">
                                                          Please enter skills.
                                                        </div>
                                                      </div>
                                                </div>

                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Display Image</label>
                                                       <div class="custom-file">
                                                          <input type="hidden" name="saved_display_img" id="saved_display_img">
                                                          <input type="file" class="custom-file-input" id="customFile" name="display_image">
                                                          <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label for="job_status required_for_valid">Status</label><br>
                                                            <select class="form-control" required id="job_status" name="status">
                                                              <option value="">Please Select Status</option>
                                                              <option value="Active">Active</option>
                                                              <option value="Inactive">Inactive</option>
                                                            </select>
                                                        <div class="invalid-feedback">
                                                            Please choose status.
                                                        </div>
                                                      </div>
                                                </div>
                                            </div>

                                            <div class="text-right submit_section">
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                                <button type="submit" class="btn btn-primary" id="form-submit">Submit</button>
                                            </div>
                                    </div>    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


        <?php include('../partials/bottom_script.php'); ?>


        <script type="text/javascript">
            function validation(){
                var error_count = 0;

                $('.required_for_valid').each(function(){
                    if($(this).val() == '') {
                        //for textarea editor 
                        if($(this).hasClass('key_responsibilities') || $(this).hasClass('job_description') || $(this).hasClass('skills')) {
                            $(this).closest('div').find('.ql-container').addClass('is-invalid');
                        } else {
                            $(this).addClass('is-invalid');
                        }

                        error_count++;                        
                    } else {
                        //for textarea editor 
                        if($(this).hasClass('key_responsibilities') || $(this).hasClass('job_description') || $(this).hasClass('skills')) {
                            $(this).closest('div').find('.ql-container').removeClass('is-invalid');
                        } else {
                            $(this).removeClass('is-invalid');
                        }
                    }
                });

                return error_count;
            }

            $(document).ready(function(){
                $('.select2').select2({
                    width:'80%'
                });

                $('#job_status').select2();

                var quill = new Quill('#job_description', {
                    theme: 'snow'
                });

                var quill = new Quill('#key_responsibilities', {
                    theme: 'snow'
                });

                var quill = new Quill('#skills', {
                    theme: 'snow'
                });

                // select2_by_id('job_qualification');
                $('#job_qualification').multiselect({
                    maxHeight: 450,
                    includeSelectAllOption: true,
                    enableFiltering: true,       
                    filterPlaceholder: 'Search...',
                    buttonWidth: '80%'
                });

                get_job_state();
                get_department();
                get_job_qualification();
                get_job_experience();
                get_job_salary();
        
                var url_string = window.location.href; 
                var url = new URL(url_string);
                var decodedid = url.searchParams.get("id");
                var id = atob(decodedid);
                var action = atob(url.searchParams.get("action"));

                get_job_details(id,action);

                    // $('#job_qualification').multiselect({
                          // maxHeight: 450,
                    // });


            });

            function select2_by_id(selector) {
                $('#'+selector).select2({
                    width:'80%'
                });
            }


            function get_job_state(saved_location = ''){
                $.ajax({
                    url: 'post_job_ajax.php',
                    type: 'POST',
                    data: { Action : 'get_job_state' },
                    dataType: "json",
                    beforeSend: function(){
                        // $('.ajax-preloader').show();
                    },
                    success: function(response) {
                        let selected = '';

                        var option = '<option value"">Please Select Location</option>';

                        var additional_selected = '';
                        if(saved_location == 'PAN INDIA') {
                            additional_selected = 'selected';
                        }          

                        for(i in response.data) {
                            if(saved_location != '' && parseInt(response.data[i].REGION_CODE) == parseInt(saved_location)) {
                                selected = 'selected';
                            }
                            option += `<option value="${ response.data[i].REGION_CODE }" ${selected}>${ response.data[i].STATE_NAME }</option>`;

                            selected = '';                            
                        }

                        option += `<option value="PAN INDIA" ${additional_selected}>PAN INDIA</option>`;

                        $('#job_state').html(option);

                        // console.log(option);

                        select2_by_id('job_state');

                    },
                    complete:function() {
                        // $('.ajax-preloader').hide();
                    }
                });
            }

            function get_job_district(state_code,saved_district = ''){
                $.ajax({
                    url: 'post_job_ajax.php',
                    type: 'POST',
                    data: { Action : 'get_job_district',state_code : state_code },
                    dataType: "json",
                    beforeSend: function(){
                        // $('.ajax-preloader').show();
                    },
                    success: function(response) {
                        let selected = '';

                        var option = '<option value"">Please Select Location</option>';
                        for(i in response.data) {
                            // console.log(saved_district);
                            // console.log(response.data[i].DISTRICT_CODE);
                            if(saved_district != '' && parseInt(response.data[i].DISTRICT_CODE) == parseInt(saved_district)) {
                                selected = 'selected';
                            }
                            option += `<option value="${ response.data[i].DISTRICT_CODE }" ${selected}>${ response.data[i].DISTRICT }</option>`;

                            selected = '';
                        }

                        $('#job_district').html(option);

                        select2_by_id('job_district');

                    },
                    complete:function() {
                        // $('.ajax-preloader').hide();
                    }
                });
            }            

            function get_department(saved_department= ''){
                $.ajax({
                    url: 'post_job_ajax.php',
                    type: 'POST',
                    data: { Action : 'get_department' },
                    dataType: "json",
                    beforeSend: function(){
                        // $('.ajax-preloader').show();
                    },
                    success: function(response) {
                        let selected = '';

                        var option = '<option value"">Please Select Department</option>';
                        for(i in response.data) {
                            if(saved_department != '' && response.data[i].department == saved_department) {
                                selected = 'selected';
                            }                            
                            option += `<option value="${ response.data[i].department }" ${selected}>${ response.data[i].department_description }</option>`;
                        }
                        $('#department').html(option);

                        select2_by_id('department');

                    },
                    complete:function() {
                        // $('.ajax-preloader').hide();
                    }
                });
            }

            function get_job_qualification(saved_qualification = ''){


                $.ajax({
                    url: 'post_job_ajax.php',
                    type: 'POST',
                    data: { Action : 'get_job_qualification' },
                    dataType: "json",
                    beforeSend: function(){
                        // $('.ajax-preloader').show();
                    },
                    success: function(response) {
                       

                        // var option = '<option value"">Please Select Qualification</option>';
                        var option = '';
                        for(i in response.data) {
                             let isSelected = '';
                            if(saved_qualification != '' && response.data[i].qualification.trim() == saved_qualification.trim()) {
                                isSelected = 'selected';
                             // console.log(saved_qualification)
                             //  console.log(response.data[i].qualification)
                            }


                            option += `<option value="${ response.data[i].qualification.trim() }" ${isSelected}>${ response.data[i].qualification }</option>`;
                        }
                        $('#job_qualification').html(option);
                        $('#job_qualification').multiselect('rebuild');


                    },
                    complete:function() {
                        // $('.ajax-preloader').hide();
                    }
                });
            }

            function get_job_experience(saved_experience = ''){
                $.ajax({
                    url: 'post_job_ajax.php',
                    type: 'POST',
                    data: { Action : 'get_job_experience' },
                    dataType: "json",
                    beforeSend: function(){
                        // $('.ajax-preloader').show();
                    },
                    success: function(response) {
                        let selected = '';

                        var option = '<option value"">Please Select Experience Range</option>';
                        for(i in response.data) {
                            if(saved_experience != '' && response.data[i].Experience_text == saved_experience) {
                                selected = 'selected';
                            } 

                            option += `<option value="${ response.data[i].Experience_text }" ${selected}>${ response.data[i].Experience_text }</option>`;
                        }
                        $('#experience').html(option);

                        select2_by_id('experience');

                    },
                    complete:function() {
                        // $('.ajax-preloader').hide();
                    }
                });
            }            

            function get_job_salary(saved_salary = ''){
                $.ajax({
                    url: 'post_job_ajax.php',
                    type: 'POST',
                    data: { Action : 'get_job_salary' },
                    dataType: "json",
                    beforeSend: function(){
                        // $('.ajax-preloader').show();
                    },
                    success: function(response) {
                        let selected = '';

                        var option = '<option value"">Please Select Salary Range</option>';
                        for(i in response.data) {
                            if(saved_salary != '' && response.data[i].Salary_text == saved_salary) {
                                selected = 'selected';
                            } 

                            option += `<option value="${ response.data[i].Salary_text }" ${selected}>${ response.data[i].Salary_text }</option>`;
                        }
                        $('#salary_range').html(option);

                        select2_by_id('salary_range');

                    },
                    complete:function() {
                        // $('.ajax-preloader').hide();
                    }
                });
            }   

            $(document).on('submit','#post_job_form',function(e){
                e.preventDefault();
                var error_count = validation();
                $(this).addClass('validated');

                if(error_count == 0) {
                        
                    var form = $(this)[0];    
                    // Serialize form data
                    var formData = new FormData(form);
                    formData.append('Action', 'save_job_form');

                    // Make the AJAX request
                    $.ajax({
                        url: 'post_job_ajax.php',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: 'json',
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
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                            Swal.fire({
                                icon: "error",
                                title: "Error!",
                                text: "Error in Save Job.",
                                confirmButtonText: "OK"
                            });
                        },
                        complete:function() {
                            $('.ajax-preloader').hide();
                        }
                    }); 
                }
            });

            $(document).on('change','.form-control,.ql-editor',function(){
                if($('#post_job_form').hasClass('validated')) {
                    validation();
                }
            });


            $(document).on('keyup','.form-control,.ql-editor',function(){
                if($('#post_job_form').hasClass('validated')) {                
                    validation();
                }
            });

            $(document).on('keyup','#job_description .ql-editor',function(){
                var description = $(this).html();
                if($(this).text() == '') {
                    description = '';
                }
                $('.job_description').val(description);
            }); 


            $(document).on('keyup','#key_responsibilities .ql-editor',function(){
                var description = $(this).html();
                if($(this).text() == '') {
                    description = '';
                }                
                $('.key_responsibilities').val(description);
            }); 

            $(document).on('keyup','#skills .ql-editor',function(){
                var description = $(this).html();
                if($(this).text() == '') {
                    description = '';
                }                
                $('.skills').val(description);
            });      



            $(document).on('change','#job_state',function(){
                var state_code = $(this).val();
                get_job_district(state_code);
            });                   


    // Edit functionality
     function get_job_details(id,action)
    {
        $.ajax({
            url: 'post_job_ajax.php',
            type: 'POST',
            data: { Action : 'get_job_list',id : id },
            dataType: "json",
            beforeSend: function(){
                // showLoader();
            },
            success: function(response) {

                var edit_input_html = `<input type="hidden" name="job_id" value="${response.data[0].Id}">`;
                $('#post_job_form').append(edit_input_html);

                $('#job_title').val(response.data[0].Job_title);
                 $('#position_code').val(response.data[0].Position_code);
                $('#job_description .ql-editor').html(response.data[0].Job_description);
                $('.job_description').val(response.data[0].Job_description);

                $('#key_responsibilities .ql-editor').html(response.data[0].key_responsibilities);
                $('.key_responsibilities').val(response.data[0].key_responsibilities);

                $('#skills .ql-editor').html(response.data[0].skills);
                $('.skills').val(response.data[0].skills);
                $('#saved_display_img').val(response.data[0].job_display_image);

                $('#gender').val(response.data[0].gender).trigger('change');
                $('#division').val(response.data[0].division).trigger('change');
                $('#job_type').val(response.data[0].job_type).trigger('change');
                $('#job_status').val(response.data[0].Status).trigger('change');                

                $('#experience').val(response.data[0].experience.replace(' Years',''));
                $('#salary_range').val(response.data[0].salary_range.replace(' Lakhs',''));

                get_job_state(response.data[0].Job_state_code);
                get_job_district(response.data[0].Job_state_code,response.data[0].Job_district_code);
                get_department(response.data[0].department);
                get_job_qualification(response.data[0].job_qualification);
                // get_job_experience(response.data[0].experience);
                // get_job_salary(response.data[0].salary_range);

                $('#form-submit').text('Update');
                if(action == 'view') {
                   $('#job_title').attr('disabled',true);
                   $('#gender').attr('disabled',true);
                   $('#division').attr('disabled',true);
                   $('#job_type').attr('disabled',true);
                   $('#job_status').attr('disabled',true);
                   $('#job_location').attr('disabled',true);
                   $('#salary_range').attr('disabled',true);
                   $('#experience').attr('disabled',true);
                   $('#department').attr('disabled',true);
                   $('#position_code').attr('disabled',true);

                   $('.ql-container').css('pointer-events','none');
                   $('.ql-toolbar').css('pointer-events','none');
                   $('.ql-toolbar').css('background-color','#e9ecef');
                   $('.ql-container').attr('readonly',true);
                   $('#customFile').attr('disabled',true);

                   $('#job_state').attr('disabled',true);
                   $('#job_district').attr('disabled',true);
                   $('#job_qualification').attr('disabled',true);

                   $('.submit_section').hide();

                }
            },
            complete: function(){
                // hideLoader();
            },
        }); 
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

</body>

</html>