        <?php include('../partials/top_head.php'); ?>


        <?php include('../partials/header.php'); ?>

        <?php include('../partials/sidebar.php'); ?>

        <style type="text/css">
            .file_pdf {
                cursor: pointer;
            }

            .file_pdf i{
                color: #4798e8;
                font-size: 30px;
            }

            .download-button-div {
                width: 100%;
                text-align: end;
            }


        </style>

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Career Application List</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Career Applications</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Application List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="application_list_tbl" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Job Id</th>
                                                <th>Job Name</th>
                                                <th>Applicant First Name</th>
                                                <th>Applicant Last Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Current CTC</th>
                                                <th>Career Docs</th>
                                            </tr>
                                        </thead>
                                        <tbody id="application_list_tbl_body">
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" id="file_modal">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                        <div>
                            <h5 class="modal-title">Career Document</h5>
                        </div>
                        <div class="download-button-div">
                            <a class="download-link" download>
                                <button class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-cloud-arrow-down"></i>
                                    Download
                                </button>
                            </a>

                        </div>
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                  </div>
                  <div class="modal-body">
                    <iframe src="" id="file_preview" style="width: 100%;height: 600px;" frameborder="0">
                    </iframe>
                  </div>

                </div>
              </div>
            </div>            


        </div>

    </div>


        <?php include('../partials/bottom_script.php'); ?>            

   <script type="text/javascript">

        function datatable(){

            $('#application_list_tbl').DataTable({
                dom: 'Bfrtip',
                buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-cyan text-white mr-1');
        }

        $(document).ready(function(){

            datatable();

            get_career_application_list();
        });


        function get_career_application_list(){
            $.ajax({
                url: 'career_application_ajax.php',
                type: 'POST',
                data: { Action : 'get_career_application_list' },
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
                                <td>${response.data[i].Job_Id}</td>
                                <td>${response.data[i].Job_Name}</td>
                                <td>${response.data[i].Applicant_First_Name}</td>
                                <td>${response.data[i].Applicant_Last_Name}</td>                                
                                <td>${response.data[i].Email}</td>
                                <td>${response.data[i].Mobile}</td>
                                <td>${response.data[i].Current_CTC}</td>

                                <td>
                                    <div class="text-center file_pdf" data-file="${response.data[i].career_docs_name}" data-applicant="${response.data[i].Applicant_First_Name}" data-jobid="${response.data[i].Job_Id}">
                                        <i class="mdi mdi-file-pdf"></i>
                                    </div>
                                </td>

                            </tr>`;
                        }
                    }


                    $('#application_list_tbl').DataTable().destroy();    
                    
                    $('#application_list_tbl_body').html(html);


                    datatable();

                },
                complete:function() {
                    // $('.ajax-preloader').hide();
                }
            });
        }



        $(document).on('click','.file_pdf',function(){
            var pdf_file       = $(this).data('file');
            var applicant_name = $(this).data('applicant');
            var jobid          = $(this).data('jobid');

            var downloaded_file_name = jobid+'_'+applicant_name; 
            $('#file_preview').attr('src','../../assets/career_docs/'+pdf_file+'#toolbar=0');
            $('.download-link').attr('href','../../assets/career_docs/'+pdf_file);
            $('.download-link').attr('download',downloaded_file_name);

            $('#file_modal').modal('show');
        });

   </script> 