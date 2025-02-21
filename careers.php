    <!-- Header Section Start -->
    <?php 
        include('partials/header.php');

        include('partials/top_head.php');
    ?>
    <style type="text/css">
        .header-1{
            z-index: 10;
        }
        .breadcrumnd-banner {
            background-image: url('assets/img/rasi/woman-holding-clipboard-with-join-our-team-message.jpg');
        }
        .breadcrumnd-banner::before {
            position: unset !important;
        }

        .sales_job_cards,.product_dev_job_cards,.production_job_cards,.processing_job_cards,.quality_job_cards,.biotech_job_cards,.corporate_job_cards {
            display: none;
        }
    </style>
    <!-- Hero Section Start -->
    <section class="breadcrumnd-banner overflow-hidden">
        <div class="container">
            <div class="breadcrumnd-wrapp">
                <div class="bread-content">
                    <h1 class="wow fadeInDown" data-wow-delay=".4s">
                        Careers
                    </h1>
                    <ul class="bread-listing">
                        <li>
                            <a href="index.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-angle-right"></i>
                        </li>
                        <li>
                            Careers
                        </li>
                    </ul>
                </div>
                <div class="bread-thumb d-sm-block d-none">
                    <!-- <img src="assets/img/rasi/cartoon-office-workers-participating-team-building-exercise-located-right-side_1077802-426179.png" alt="img"> -->
                </div>
            </div>
        </div>
    </section>


    <div class="section-full pt-5">
                <div class="container">
              
                    <!-- TITLE START-->
                    <div class="section-head text-center wow fadeInDown" data-wow-delay="0.5s">
                        <h2 data-title="Career Areas">Career Areas</h2>
                        <div class="mt-separator-outer">
                            <div class="mt-separator site-bg-primary"></div>
                        </div>
                    </div>

                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                            <div class="card">
                                <div class="card-body">
                                    <a href="#jobs_for_you">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 career_area_div wow fadeInRight" data-wow-delay="0.5s" data-name="sales&marketing">
                                            <div class="mt-icon-box-wraper m-b30  p-a30 center bg-white hover-border-outer hover-border">
                                                <div class="mt-icon-box-sm site-bg-primary m-b20 radius-10">
                                                    <span class="icon-cell text-white">
                                                        <!-- <i class="flaticon-pencil"></i> -->
                                                        <i class="fa-solid fa-handshake"></i>
                                                        <!-- <img src="assets/img/rasi/careers/marketing.avif"> -->
                                                    </span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte">Sales & Marketing</h4>
                                                    <p class="opening_info text-success"><span class="salesmark_info"></span> Openings</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 career_area_div wow fadeInRight" data-wow-delay="0.5s" data-name="product_development">
                                            <div class="mt-icon-box-wraper m-b30  p-a30 center bg-white hover-border-outer hover-border">
                                                <div class="mt-icon-box-sm site-bg-primary m-b20 radius-10">
                                                    <span class="icon-cell text-white">
                                                        <!-- <i class="flaticon-pencil"></i> -->
                                                        <i class="fa-brands fa-connectdevelop"></i>
                                                    </span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte">Product Development</h4>
                                                    <p class="opening_info text-success"><span class="prodev_info"></span> Openings</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 career_area_div wow fadeInRight" data-wow-delay="0.5s" data-name="production">
                                            <div class="mt-icon-box-wraper m-b30  p-a30 center bg-white hover-border-outer hover-border">
                                                <div class="mt-icon-box-sm site-bg-primary m-b20 radius-10">
                                                    <span class="icon-cell text-white">
                                                        <!-- <i class="flaticon-pencil"></i> -->
                                                        <i class="fa-solid fa-layer-group"></i>
                                                    </span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte">Production</h4>
                                                    <p class="opening_info text-success"><span class="production_info"></span> Openings</p>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="col-lg-3 col-md-6 career_area_div wow fadeInRight" data-wow-delay="0.5s" data-name="processing">
                                            <div class="mt-icon-box-wraper m-b30  p-a30 center bg-white hover-border-outer hover-border">
                                                <div class="mt-icon-box-sm site-bg-primary m-b20 radius-10">
                                                    <span class="icon-cell text-white">
                                                        <!-- <i class="flaticon-pencil"></i> -->
                                                        <i class="fa-solid fa-gauge"></i>
                                                    </span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte">Processing</h4>
                                                    <p class="opening_info text-success"><span class="process_info"></span> Openings</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-3 col-md-6 career_area_div wow fadeInRight" data-wow-delay="0.5s" data-name="quality">
                                            <div class="mt-icon-box-wraper m-b30  p-a30 center bg-white hover-border-outer hover-border">
                                                <div class="mt-icon-box-sm site-bg-primary m-b20 radius-10">
                                                    <span class="icon-cell text-white">
                                                        <!-- <i class="flaticon-pencil"></i> -->
                                                        <i class="fa-solid fa-ranking-star"></i>
                                                    </span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte">Quality</h4>
                                                    <p class="opening_info text-success"><span class="quality_info"></span> Openings</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 career_area_div wow fadeInRight" data-wow-delay="0.5s" data-name="biotech">
                                            <div class="mt-icon-box-wraper m-b30  p-a30 center bg-white hover-border-outer hover-border">
                                                <div class="mt-icon-box-sm site-bg-primary m-b20 radius-10">
                                                    <span class="icon-cell text-white">
                                                        <!-- <i class="flaticon-pencil"></i> -->
                                                        <i class="fa-solid fa-dna"></i>
                                                    </span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte">Breeding & Bio-Tech</h4>
                                                    <p class="opening_info text-success"><span class="bio_info"></span> Openings</p>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="col-lg-3 col-md-6 career_area_div wow fadeInRight" data-wow-delay="0.5s" data-name="corporate_functions">
                                            <div class="mt-icon-box-wraper m-b30  p-a30 center bg-white hover-border-outer hover-border">
                                                <div class="mt-icon-box-sm site-bg-primary m-b20 radius-10">
                                                    <span class="icon-cell text-white">
                                                        <!-- <i class="flaticon-pencil"></i> -->
                                                        <i class="fa-solid fa-gears"></i>
                                                    </span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte">Corporate Functions</h4>
                                                    <p class="opening_info text-success"><span class="corporate_info"></span> Openings</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 career_area_div wow fadeInRight" data-wow-delay="0.5s" data-name="search_all_jobs">
                                            <div class="mt-icon-box-wraper m-b30  p-a30 center bg-white hover-border-outer hover-border">
                                                <div class="mt-icon-box-sm site-bg-primary m-b20 radius-10">
                                                    <span class="icon-cell text-white">
                                                        <!-- <i class="flaticon-pencil"></i> -->
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                    </span>
                                                </div>
                                                <div class="icon-content">
                                                    <h4 class="mt-tilte">Search All Jobs</h4>
                                                    <p class="opening_info text-success"><span class="total_job_info"></span> Openings</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>


                            
                            
                        </div>
                    </div>
                </div>
            </div>



            <section class="pt-5" id="jobs_for_you">
                <div class="container-fluid">
                    <!-- TITLE START-->
                    <div class="section-head text-center wow fadeInDown" data-wow-delay="0.5s">
                        <h2 data-title="Jobs For You">Jobs For You</h2>
                        <div class="mt-separator-outer">
                            <div class="mt-separator site-bg-primary"></div>
                        </div>
                    </div>

                    <div class="row departmentwise_jobs">


                        

                    </div>

                    <div class="all_job_cards_div">
                        <div class="row wow fadeInRight" data-wow-delay="0.5s">

                                <div class="home-form-position">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="home-registration-form bg-white job-list-grid-reg-form p-4 mb-3">
                                                <form class="registration-form">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-3 col-md-6">
                                                            <div class="registration-form-box">
                                                                <i class="fa fa-briefcase"></i>
                                                                <input type="text" id="filter_role_input" class="form-control rounded registration-input-box" placeholder="Job role">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <div class="registration-form-box">
                                                                <i class="fa fa-location-arrow"></i>
                                                                <select id="select-country" class="demo-default filter_location_select">
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <div class="registration-form-box">
                                                                <i class="fa fa-list-alt"></i>
                                                                <select id="select-category" class="filter_department_select">
                                                                    <option value="" selected="selected">Department</option>
                                                                    <option value="sales&marketing">Sales & Marketing</option>
                                                                    <option value="product_development">Product Development</option>
                                                                    <option value="production">Production</option>
                                                                    <option value="processing">Processing</option>
                                                                    <option value="quality">Quality</option>
                                                                    <option value="biotech">Breeding & Bio-tech</option>
                                                                    <option value="corporate_functions">Corporate Functions</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-6">
                                                            <div class="registration-form-box">
                                                                <a class="site-button align-items-center text-capitalize filter_btn"><i class="fa-solid fa-magnifying-glass text-white"></i> <span class="ms-2">Filter</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-lg-12 list-wrapper">
                                                                                             

                            </div>
                        </div>
                        <div id="pagination-container" class="p-5 d-flex justify-content-center"></div>
                    </div>


                </div>
            </section>


    <!--<< Footer Section Start >>-->
    <?php 
        include('partials/footer.php');
        include('partials/bottom_script.php');

     ?>

     <script type="text/javascript">


         $(document).ready(function(){
            // pagination call 
            pagination('.list-wrapper .job-box','pagination-container',4); 

           // Selectize call 
            $('#select-category, #select-lang,#select-country').selectize({
                create: true,
                sortField: {
                    field: 'text',
                    direction: 'asc'
                },
                dropdownParent: 'body',
                onDropdownOpen: function($dropdown) {
                    // Close any other open dropdowns when a new one is opened
                    $('.selectize-dropdown').not($dropdown).hide();
                }
            });

            get_jobs('all');

            get_job_location();
            get_department();
         });

         
         $(document).on('click','.career_area_div',function(){
            var action = $(this).data('name');
            if(action == 'sales&marketing') {
                $('.all_job_cards_div').hide();   

                get_jobs('department','Sales and Marketing');

                $('.departmentwise_jobs').show();
            

            } else if(action == 'product_development') {
                $('.all_job_cards_div').hide();   
                
                get_jobs('department','Product Development');

                $('.departmentwise_jobs').show();
                

            } else if(action == 'production') {
                $('.all_job_cards_div').hide();   
                
                get_jobs('department','Production');
                
                $('.departmentwise_jobs').show();

            
            } else if(action == 'processing') {
                $('.all_job_cards_div').hide();   
                
                get_jobs('department','Processing');
                $('.departmentwise_jobs').show();


            } else if(action == 'quality') {
                $('.all_job_cards_div').hide();   
                
                get_jobs('department','Quality');

                $('.departmentwise_jobs').show();


            } else if(action == 'biotech') {
                $('.all_job_cards_div').hide();   
                
                get_jobs('department','Breeding and Bio-tech');

                $('.departmentwise_jobs').show();

            } else if(action == 'corporate_functions') {
                $('.all_job_cards_div').hide();   

                get_jobs('department','Corporate Functions');
                
                $('.departmentwise_jobs').show();

            } else if(action == 'search_all_jobs') {

                get_jobs('all');

                $('.departmentwise_jobs').hide();
                $('.all_job_cards_div').show();   

                // call pagination
                pagination('.list-wrapper .job-box','pagination-container',4); 
            }
         });



         function pagination(items_class,pagination_container_id,per_page_count)
         {
                var items = $(items_class);
                var numItems = items.length;
                var perPage = per_page_count;

                items.slice(perPage).hide();

                $('#'+pagination_container_id).pagination({
                    items: numItems,
                    itemsOnPage: perPage,
                    prevText: "&laquo;",
                    nextText: "&raquo;",
                    onPageClick: function (pageNumber) {
                        var showFrom = perPage * (pageNumber - 1);
                        var showTo = showFrom + perPage;
                        items.hide().slice(showFrom, showTo).show();
                    }
                });
        }


        function get_jobs(action = 'all',department_name = '',location = '',job_role = ''){

            $.ajax({
                url: 'common_ajax.php',
                type: 'POST',
                data: { Action : 'get_jobs',department : department_name,location : location,job_role : job_role  },
                dataType: "json",
                beforeSend: function(){
                    // $('.ajax-preloader').show();
                },
                success: function(response) {
                    var html = '';
                    if(response.status == 200) {
                        if(response.data.length > 0) {
                            for(i in response.data) {

                                var job_type = (response.data[i].job_type == 'full_time') ? 'Full Time' : 'Part Time';
                                var image = 'Admin/assets/images/rasi/jobs/default_display_img.avif';
                                if(response.data[i].job_display_image !== null && response.data[i].job_display_image !== undefined && response.data[i].job_display_image !== '') {
                                    image = 'Admin/assets/images/rasi/jobs/'+response.data[i].job_display_image;
                                }

                                if(action == 'all') {
                                    html += `<div class="job-box bg-white overflow-hidden border rounded mt-4 position-relative overflow-hidden">
                                    <div class="lable text-center pt-2 pb-2">
                                        <ul class="list-unstyled best text-white mb-0 text-uppercase">
                                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="p-4">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="mo-mb-2">
                                                    <img src="${image}" alt="" class="img-fluid mx-auto d-block job_list_img">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h5 class="f-18"><a href="#" class="text-dark">${response.data[i].Job_title}</a></h5>
                                                    <p class="text-muted mb-0"><i class="fa-solid fa-house"></i> ${response.data[i].department}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <p class="mb-0">
                                                    <i class="fa-solid fa-location-dot"></i>
                                                    ${response.data[i].job_location}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="mb-0">
                                                    <i class="fa-solid fa-industry"></i>
                                                    ${response.data[i].division}
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-0">
                                                        <i class="fa-solid fa-clock"></i> ${job_type}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <p class="text-muted mb-0 mo-mb-2"><span class="text-dark">Experience :</span> ${response.data[i].experience}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-2">
                                                <div>
                                                    <a href="job_details.php?id=${response.data[i].Job_no}" class="site-btn-apply align-items-center text-capitalize">Read More <i class="fa-solid fa-angles-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>`;       
                                } else if(action = 'department') {
                                    html += `<div class="post masonry-item col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.5s">
                                        <div class="blog-post blog-grid jobs-grid-div date-style-2 bdr-2 bdr-solid bdr-gray-light">
                                            <div class="profile-photo-container">
                                                <img src="${image}">
                                            </div>                       
                                            <div class="mt-post-info p-a30 p-m30">   
                                                <div class="mt-post-title ">
                                                    <h4 class="post-title">
                                                        <a href="javascript:void(0);">${response.data[i].Job_title}</a>
                                                    </h4>
                                                </div>

                                                <div class="mt-post-text">
                                                    <p>
                                                    <i class="fa-solid fa-location-dot"></i>
                                                    ${response.data[i].job_location}
                                                    </p>
                                                    <p>
                                                        <i class="fa-solid fa-house"></i>
                                                        ${response.data[i].department}
                                                    </p>  
                                                    <p>
                                                        <i class="fa-solid fa-clock"></i>
                                                        ${job_type}
                                                    </p>  
                                                </div>
                                                <div class="mt-post-readmore m-b0">
                                                    <a href="job_details.php?id=${response.data[i].Job_no}" title="READ MORE" rel="bookmark" class="site-button-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>`;

                                    if(response.data.length == parseInt(i)+parseInt(1)) {
                                        html +=`<div id="department-container" class="p-5 d-flex justify-content-center"></div>`;

                                    }

                                }

                            }

                            if(action == 'all') {
                                $('.list-wrapper').html(html);
                                pagination('.list-wrapper .job-box','pagination-container',4);
                            } else {
                                $('.departmentwise_jobs').html(html);
                                pagination('.departmentwise_jobs .post','department-container',4); 
                            }                            
                        }
                    }



                    
                    // count set dynamically for widgets
                    $('.salesmark_info').text( ((response.job_count_data[0].sales_job_count > 0) ? (String(response.job_count_data[0].corporate_job_count).padStart(2,'0')) : response.job_count_data[0].sales_job_count) ); 

                    $('.prodev_info').text( ((response.job_count_data[0].product_development_job_count > 0) ? (String(response.job_count_data[0].product_development_job_count).padStart(2,'0')) : response.job_count_data[0].product_development_job_count) ); 

                    $('.production_info').text( ((response.job_count_data[0].production_job_count > 0) ? (String(response.job_count_data[0].production_job_count).padStart(2,'0')) : response.job_count_data[0].production_job_count) ); 

                    $('.process_info').text( ((response.job_count_data[0].processing_job_count > 0) ? (String(response.job_count_data[0].processing_job_count).padStart(2,'0')) : response.job_count_data[0].processing_job_count) );   

                    $('.quality_info').text( ((response.job_count_data[0].quality_job_count > 0) ? (String(response.job_count_data[0].quality_job_count).padStart(2,'0')) : response.job_count_data[0].quality_job_count) );                                         

                    $('.bio_info').text( ((response.job_count_data[0].breeding_job_count > 0) ? (String(response.job_count_data[0].breeding_job_count).padStart(2,'0')) : response.job_count_data[0].breeding_job_count) ); 

                    $('.corporate_info').text( ((response.job_count_data[0].corporate_job_count > 0) ? (String(response.job_count_data[0].corporate_job_count).padStart(2,'0')) : response.job_count_data[0].corporate_job_count) );  

                    $('.total_job_info').text( ((response.job_count_data[0].total_job_count > 0) ? (String(response.job_count_data[0].total_job_count).padStart(2,'0')) : response.job_count_data[0].total_job_count) );                                        

                },
                complete:function() {
                    // $('.ajax-preloader').hide();
                }
            });
        }   

            function get_job_location(){
                $.ajax({
                    url: 'common_ajax.php',
                    type: 'POST',
                    data: { Action : 'get_job_location' },
                    dataType: "json",
                    beforeSend: function(){
                        // $('.ajax-preloader').show();
                    },
                    success: function(response) {
                        var option = '<option value="">Please Select Location</option>';
                        for(i in response.data) {
                            option += `<option value="${ response.data[i].location }">${ response.data[i].location }</option>`;
                        }
                        
                        // Destroy any existing selectize instance before reinitializing
                        $('#select-country').selectize()[0].selectize.destroy();
                        
                        $('.filter_location_select').html(option);

                        // select2_by_id('job_location');

                        $('#select-country').selectize({
                            create: true,
                            dropdownParent: 'body',
                            onDropdownOpen: function($dropdown) {
                                // Close any other open dropdowns when a new one is opened
                                $('.selectize-dropdown').not($dropdown).hide();
                            }
                        });

                    },
                    complete:function() {
                        // $('.ajax-preloader').hide();
                    }
                });
            }

            function get_department(saved_department= ''){
                $.ajax({
                    url: 'common_ajax.php',
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
                        // Destroy any existing selectize instance before reinitializing
                        $('#select-category').selectize()[0].selectize.destroy();

                        $('.filter_department_select').html(option);

                        // select2_by_id('department');

                        $('#select-category').selectize({
                            create: true,
                            dropdownParent: 'body',
                            onDropdownOpen: function($dropdown) {
                                // Close any other open dropdowns when a new one is opened
                                $('.selectize-dropdown').not($dropdown).hide();
                            }
                        });                        

                    },
                    complete:function() {
                        // $('.ajax-preloader').hide();
                    }
                });
            }

        $(document).on('click','.filter_btn',function(){
            let job_role       = $('#filter_role_input').val(); 
            let job_location   = ($('.filter_location_select').val() != 'Please Select Location') ? $('.filter_location_select').val() : ''; 
            let job_department = ($('.filter_department_select').val() != 'Please Select Department') ? $('.filter_department_select').val() : ''; 


            get_jobs('all',job_department,job_location,job_role);

        });        

     </script>

</body>

</html>