@extends('SuperAdmin.layout.app')

@section('css')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">EC's Member List-SETTINGS</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">EC's Profile</li>
                                    <li class="breadcrumb-item active">EC Member List</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    
                    <div class="col-xxl-12">
                        <!-- <h5 class="mb-3">Custom Nav</h5> -->
                        <div class="card">
                            <div class="card-body">
                               
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card-header align-items-center d-flex">
                                            
                                        </div><!-- end card header -->
                                        <div class="live-preview">
                                            <div class="table-responsive table-card">
                                                <table class="table align-middle table-nowrap mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col" style="text-align: center;">Title</th>
                                                            <th scope="col" style="text-align: center;">Full Name</th>
                                                            <th scope="col" style="text-align: center;">Qualification</th>
                                                            <th scope="col" style="text-align: center;">Role/Designation in the committee</th>
                                                            <th scope="col" style="text-align: center;">Affiliation </th>
                                                            <th scope="col" style="text-align: center;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="email id entered here will be used as user id for your account/login">
                                                            Contact
                                                            <span class="" data-bs-toggle="toolpop" data-bs-placement="top" title="">
                                                                <i class="Contact ri-information-line" style="font-size: 15px;"></i> 
                                                            </span> 
                                                            </th>
                                                            <th scope="col" style="text-align: center;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="dataRows">
                                                        <tr class="dataRow original">
                                                            <td><input type="text" style="width: 80px;" class="form-control" placeholder="Prof. Dr. Mr. Ms."></td>
                                                            <td><input type="text" style="width: 200px;" class="form-control" placeholder="First, Last"></td>
                                                            <td><input type="text" style="width: 120px;" class="form-control" placeholder="e.g. MBBS, MD"></td>
                                                            <td><input type="text" style="width: 250px;" class="form-control" placeholder="EC Chairperson, Lawyer"></td>
                                                            <td><input type="text" style="width: 150px;" class="form-control" placeholder="Affiliated, Non-Affiliated"></td>
                                                            <td><input type="text" style="width: 180px;" class="form-control" placeholder="Email ID"></td>
                                                            <td>
                                                                <button type="button" class="btn btn-sm deleteBtn">
                                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"  colors="primary:#F06548,secondary:#F06548" style="width:25px;height:25px"></lord-icon>
                                                                </button>
                                                                <button type="button" class="btn btn-sm btn-add addBtn">Add More</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div>
     
                            </div><!-- end card-body -->
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
@endsection

@section('script')
    <!-- JAVASCRIPT -->
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!-- prismjs plugin -->
    <script src="{{ asset('libs/prismjs/prism.js') }}"></script>

    <!-- Modal Js -->
    <script src="{{ asset('js/pages/modal.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script>
       $(document).ready(function() {
            // Add More button click event
            $(document).on('click', '.addBtn', function() {
                var newRow = $('#dataRows .dataRow').first().clone();
                newRow.removeClass('original'); // Remove the 'original' class from cloned rows
                newRow.find('.addBtn').remove(); // Remove Add More button from cloned rows
                $('#dataRows').append(newRow);
            });

            // Delete button click event
            $(document).on('click', '.deleteBtn', function() {
                var rowToDelete = $(this).closest('.dataRow');
                if (rowToDelete.hasClass('original')) { // Check if it's the original row
                    //alert("You can't delete the original row.");
                } else {
                    $('#deleteConfirmationModal').modal('show');
                    $('#confirmDeleteBtn').off('click').on('click', function() {
                        rowToDelete.remove(); // Delete the row
                        $('#deleteConfirmationModal').modal('hide');
                    });
                }
            });
        });


    </script>
@endsection

@section('modal')

    <!-- staticBackdrop Modal -->
    <div class="modal fade" id="deleteConfirmationModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center p-5">
                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#FF6C6C,secondary:#FF6C6C" style="width:100px;height:100px"></lord-icon>

                    <div class="mt-4">
                        <h4 class="mb-3">Are You Sure ?</h4>
                        <p class="text-muted mb-4"> Are you sure you want to remove</p>
                        <div class="hstack gap-2 justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-link  fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                            <a href="javascript:void(0);" id="confirmDeleteBtn" class="btn btn-danger">Yes, Delete It!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



                                            