    <!-- Header Section Start -->
    <?php 
        function get_division_name()
        {
            $division_name = '';
            if(isset($_GET['division']) && (base64_decode($_GET['division']) == 'CT01')) {
                $division_name = 'Fiber';
            } elseif(isset($_GET['division']) && (base64_decode($_GET['division']) == 'FC01')) {
                $division_name = 'Food';                
            } elseif(isset($_GET['division']) && (base64_decode($_GET['division']) == 'FR01')) {
                $division_name = 'Fodder';                
            }
            return $division_name;
        }

        include('partials/header.php');

        include('partials/top_head.php');
    ?>
    <style type="text/css">
        .header-1{
            z-index: 10;
        }
        .breadcrumnd-banner {
            background-image: url('assets/img/rasi/products/fieldcrop-banner1.avif');
        }
        .breadcrumnd-banner::before {
            position: unset !important;
        }

    </style>

    <!-- Hero Section Start -->
    <section class="breadcrumnd-banner overflow-hidden">
        <div class="container">
            <div class="breadcrumnd-wrapp">
                <div class="bread-content">
                    <h1 class="wow fadeInDown" data-wow-delay=".4s">
                        Products
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
                            Products
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
                <h2 class="page-title m-0" data-title="<?php echo get_division_name() ?>"><?php echo get_division_name() ?></h2>
                <div class="mt-separator-outer">
                    <div class="mt-separator site-bg-primary"></div>
                </div>
            </div>

        </div>


        <div class="container-fluid ps-5 pe-5">

            <!-- for mobile filters -->
            <div> 
                <button class="btn btn-primary filters-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                    <i class="fa-solid fa-sliders text-white me-1"></i>Filters</button>
            </div>
            <div class="product_section">
                

                <div class="row align-items-center bg-gray p-3">
                    <div class="col-md-3">
                        <div class="d-flex">
                            <input type="text" class="form-control product_search_text" name="product_name" placeholder="Search Products...">
                            <button class="btn btn-sm btn-success product_search_btn ps-3 pe-3"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>


                    <div class="col-md-9">
                        <div class="d-flex justify-content-end result_count_section">
                            <span class="product_result_count">Showing 1-<span class="perpage_count"></span> of <span class="total_product_count"></span> results</span>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-9">
                        <div class="row" id="product_cards_container">
                            <!-- <div class="col-md-3 col-6 mb-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="p-0 product-card"> 
                                    <div class="product_image bg-gray d-flex justify-content-center">
                                        <img class="product_image" src="../customer_site/assets/img/rasi/products/cotton/RCH-951 BGII.png">
                                    </div>
                                    <div class="bg-white text-center p-2">
                                        <p class="mb-0 fw-bold">RCH-951 BGII</p>
                                        <div class="recommended_text">
                                            <p class="mb-0 mt-2 text-primary">Recommended States</p>
                                            <p>
                                                Rajasthan
                                            </p>
                                        </div>
                                    </div>
                                    <div class="product-actions">
                                         <a href="wishlist.html" class="product-action"><i class="fal fa-heart"></i></a>
                                        <button class="product-action product-details-popup-btn"><i class="fa fa-eye"></i></button>
                                    </div>
                                </div>
                            </div> -->

    

                        </div>
                        <div id="products_pagination-container" class="d-flex justify-content-center p-5"></div>

                    </div>

                    <!-- right side filters -->
                    <div class="col-md-3">

                        <!-- states filter for large screens  -->
                        <div class="card wow fadeInRight Recommended_states_filter" data-wow-delay="0.5s">
                            <div class="card-body">
                                <h4 class="text-center">Recommended States Filter</h4>
                                <hr>

                                <ul class="Recommended_states_list">
                                    <!-- <li class="widget__form--check__list">
                                        <label class="widget__form--check__label" for="check1">All</label>
                                        <input class="widget__form--check__input" id="check1" type="checkbox" checked>
                                        <span class="widget__form--checkmark"></span>
                                    </li> -->

                                </ul>
                            </div>
                        </div>
                        <!-- states filter for large screens end -->


                        <!-- states filter for mobile  -->
                        <div class="offcanvas offcanvas-start filters-canvas" data-bs-scroll="true" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                          <div class="offcanvas-body">
                            <div class="card-body">
                                <h4 class="text-center">Recommended States Filter</h4>
                                <hr>

                                <ul class="canvas_Recommended_states_list">

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!-- states filter for mobile end -->


                    </div>
                </div>

            </div>

            
            <!-- Modal -->
            <!-- <div id="product_details_popup" class="modal" data-bs-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-close" data-bs-dismiss="modal">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="modal-body">
                            <div class="row h-100 align-items-center justify-content-center p-3">
                                <div class="col-md-8 col-12">
                                    <ul>
                                        <li>Mid early maturity:120-125 days</li>
                                        <li>Medium plant height</li>
                                        <li>BLB (Bacterial Leaf Blight) tolerant</li>
                                    </ul>
                                    
                                </div>
                                <div class="col-md-4 col-12">
                                    <img class="product_image" src="../customer_site/assets/img/rasi/products/field_crops/5454.png">   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div id="product_details_popup" class="modal" data-bs-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">

                <div class="modal-dialog modal-lg modal-dialog-centered" style="opacity: 1; display: block; transform-origin: 50% 50%; transform: scaleX(1) scaleY(1) translateX(0px);">
                        <div class="modal-content">
                            <div class="modal-close" data-bs-dismiss="modal">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <div class="modal-body" id="product-detail-popup-body">
                                <div class="row h-100 align-items-center justify-content-center p-3">
                                    <div class="col-md-4 col-12 bg-gray h-100 d-flex align-items-center" style="background-color: #9ee5e55c;">
                                        <img class="product_image" src="../customer_site/assets/img/rasi/products/field_crops/5454.png">   
                                    </div>
                                    <div class="col-md-8 col-12 bg-white h-100 d-flex align-items-center justify-content-center p-0">

                                        <div class="d-flex product_modal_description_container h-100 w-100 align-items-center justify-content-center">
                                            <ul>
                                                <li>
                                                    <!-- <h3>SX-38</h3> -->
                                                    <div class="section-head text-center mb-3">
                                                        <h3 class="mb-0" data-title="Food">Food</h3>
                                                        <div class="mt-separator-outer">
                                                            <div class="mt-separator site-bg-primary"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>Mid early maturity:120-125 days</li>
                                                <li>Medium plant height</li>
                                                <li>BLB (Bacterial Leaf Blight) tolerant</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>

    </div>



    <!--<< Footer Section Start >>-->
    <?php 
        include('partials/footer.php');
        include('partials/bottom_script.php');

     ?>

            
     <!-- //modal popup effect plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js"></script>

    <script type="text/javascript">
        var url_string = window.location.href; 
        var url = new URL(url_string);
        var division_data = url.searchParams.get("division");

        const products_perpage = 16;
        const division = atob(division_data);
        const image_path = (division == 'CT01') ? '../customer_site/assets/img/rasi/products/cotton/' : ((division == 'FC01') ? '../customer_site/assets/img/rasi/products/field_crops/' : '../customer_site/assets/img/rasi/products/forage/'); 

        $(document).ready(function(){
            pagination('.product-card-wrapper','products_pagination-container',products_perpage); 
            get_products(division);
            get_recommended_states();

            //modal popup effect
            $(".modal").each(function(l){$(this).on("show.bs.modal",function(l){var o=$(this).attr("data-bs-easein");"shake"==o?$(".modal-dialog").velocity("callout."+o):"pulse"==o?$(".modal-dialog").velocity("callout."+o):"tada"==o?$(".modal-dialog").velocity("callout."+o):"flash"==o?$(".modal-dialog").velocity("callout."+o):"bounce"==o?$(".modal-dialog").velocity("callout."+o):"swing"==o?$(".modal-dialog").velocity("callout."+o):$(".modal-dialog").velocity("transition."+o)})});
        });

        $(document).on('change','.widget__form--check__input',function(){
            $('.widget__form--check__input').each(function(){
                $(this).prop('checked',false);
            }); 
            $(this).prop('checked',true);

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

        function get_products(product_division = '',region_codes = '',product_name = ''){

            $.ajax({
                url: 'common_ajax.php',
                type: 'POST',
                data: { Action : 'get_products',product_division : product_division,region_codes : region_codes,product_name : product_name  },
                dataType: "json",
                beforeSend: function(){
                    // $('.ajax-preloader').show();
                },
                success: function(response) {
                    var html = '';
                    if(response.status == 200) {
                        var data_count = response.data.length; 
                        if(response.data.length > 0) {
                            for(i in response.data) {
                                html += `<div class="col-md-3 col-12 mb-3 wow fadeInUp product-card-wrapper" data-wow-delay="0.5s">
                                <div class="p-0 product-card"> 
                                    <div class="product_image bg-gray d-flex justify-content-center">
                                        <img class="product_image" src="${image_path}${response.data[i].product_image}">
                                    </div>
                                    <div class="bg-white text-center p-2">
                                        <p class="mb-0 fw-bold">${response.data[i].product_name}</p>
                                    </div>
                                    <div class="product-actions">
                                        <button class="product-action product-details-popup-btn" data-name="${response.data[i].product_name}"><i class="fa fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>`;    
                            }
                             $('#product_cards_container').html(html);
                             $('.perpage_count').text(products_perpage);
                             $('.total_product_count').text(data_count);
                             pagination('.product-card-wrapper','products_pagination-container',products_perpage); 
                             $('#products_pagination-container').attr('style','display:flex !important');                                                                        
                        } else {
                            html += `<img src="https://cdni.iconscout.com/illustration/premium/thumb/product-is-empty-illustration-download-in-svg-png-gif-file-formats--no-records-list-record-emply-data-user-interface-pack-design-development-illustrations-6430770.png?f=webp" class="no_product_img">`;

                             $('#product_cards_container').html(html);
                             $('.perpage_count').text(0);
                             $('.total_product_count').text(data_count);    
                             $('#products_pagination-container').attr('style','display:none !important');                        
                        }
                    }
                },
                complete:function() {
                    // $('.ajax-preloader').hide();
                }
            });
        }  

        function get_recommended_states(){

            $.ajax({
                url: 'common_ajax.php',
                type: 'POST',
                data: { Action : 'get_recommended_states' },
                dataType: "json",
                beforeSend: function(){
                    // $('.ajax-preloader').show();
                },
                success: function(response) {
                    var html = `<li class="widget__form--check__list">
                        <label class="widget__form--check__label" for="check1">All</label>
                        <input class="widget__form--check__input" id="check1" type="checkbox" value="All" checked>
                        <span class="widget__form--checkmark"></span>
                        </li>`;

                    var html1 = `<li class="widget__form--check__list">
                        <label class="widget__form--check__label" for="canvas_check1">All</label>
                        <input class="widget__form--check__input" id="canvas_check1" type="checkbox" value="All" checked>
                        <span class="widget__form--checkmark"></span>
                        </li>`;                        
                    if(response.status == 200) {
                        var data_count = response.data.length; 
                        if(response.data.length > 0) {
                            var checkbox_index = 2;
                            for(i in response.data) {
                                html += `<li class="widget__form--check__list">
                                        <label class="widget__form--check__label" for="check${checkbox_index}">${response.data[i].STATE_NAME }</label>
                                        <input class="widget__form--check__input" id="check${checkbox_index}" type="checkbox" value="${response.data[i].region_codes }">
                                        <span class="widget__form--checkmark"></span>
                                    </li>`;

                                html1 += `<li class="widget__form--check__list">
                                        <label class="widget__form--check__label" for="canvas_check${checkbox_index}">${response.data[i].STATE_NAME }</label>
                                        <input class="widget__form--check__input" id="canvas_check${checkbox_index}" type="checkbox" value="${response.data[i].region_codes }">
                                        <span class="widget__form--checkmark"></span>
                                    </li>`;

                                checkbox_index++; 
                            }
                             $('.Recommended_states_list').html(html);
                             $('.canvas_Recommended_states_list').html(html1);

                        }
                    }
                },
                complete:function() {
                    // $('.ajax-preloader').hide();
                }
            });
        }    

        $(document).on('click','.product-details-popup-btn',function(){
            var product_name = $(this).data('name');


            $.ajax({
                url: 'common_ajax.php',
                type: 'POST',
                data: { Action : 'get_products',product_division : division,product_name : product_name,from: 'product_detail'  },
                dataType: "json",
                beforeSend: function(){
                    // $('.ajax-preloader').show();
                },
                success: function(response) {
                    var html = `<div class="row h-100 align-items-center justify-content-center p-3">
                                    <div class="col-md-4 col-12 bg-gray h-100 d-flex align-items-center" style="background-color: #9ee5e55c;">
                                        <img class="product_detail_image" src="${image_path}${response.data[0].product_image}">   
                                    </div>
                                    <div class="col-md-8 col-12 bg-white h-100 d-flex align-items-center justify-content-center p-0">

                                        <div class="d-flex flex-column product_modal_description_container h-100 w-100 align-items-center justify-content-center">
                                          
                                                    <div class="section-head text-center mb-3 w-100">
                                                        <h3 class="mb-0" data-title="${response.data[0].product_name}">${response.data[0].product_name}</h3>
                                                        <div class="mt-separator-outer">
                                                            <div class="mt-separator site-bg-primary"></div>
                                                        </div>
                                                    </div>
                                               
                                                    ${response.data[0].product_description}

                                                    <div class="w-100 text-center">
                                                      <div class="row">
                                                      <div class="col-md-10 col-12 m-auto">

                                                        <h5 class="mb-0">Recommended States</h5>
                                                        <hr class="recommended_hr">`;
                                                        var region_names = response.data[0].region_name.split(',');
                                                        if(region_names.length > 1) {
                                                            html += `<div>`;
                                                            for(rindex in region_names) {
                                                                html += `<span class="badge bg-primary me-1">${region_names[rindex]}</span>`;
                                                            }
                                                            html += `</div>`;
                                                        } else {
                                                            html += `<div><span class="badge bg-primary">${region_names}</span></div>`;
                                                        }
                                                    html += `</div></div></div>
                                        </div>

                                    </div>
                                </div>`;

                    $('#product-detail-popup-body').html(html);                            
                
                    $('#product_details_popup').modal('show');

                },
                complete: function(){
                    // $('.ajax-preloader').hide();
                }
            });
        });

        $(document).on('change','.widget__form--check__input',function(){
            var region_codes = $(this).val();

            var region_codes = region_codes.split(',').map(function(code){
                return "'" + code + "'";
            }).join(',');

            get_products(division,region_codes);
        });

        $(document).on('click','.product_search_btn',function(){
            
            var product_name = $('.product_search_text').val();
            
            var region_codes = '';
            $('.widget__form--check__input').each(function(){
                if($(this).is(':checked')) {
                    region_codes = $(this).val();
                }
            });

            var region_codes = region_codes.split(',').map(function(code){
                return "'" + code + "'";
            }).join(',');

            get_products(division,region_codes,product_name);

        });
        

    </script>