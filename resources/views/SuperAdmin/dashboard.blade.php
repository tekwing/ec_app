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
                            <h4 class="mb-sm-0">Dashboard</h4>


                        </div>
                    </div>
                </div>
                <!-- end page title -->
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
            $('#openModalButton').hide();
            $('#ec_type').click(function() {
                if ($(this).val() === '3') {
                    $('#openModalButton').trigger('click'); // Trigger click on the modal trigger button
                    //$(this).val('1');
                    $(this).val($(this).find('option:first').val());
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Add More button click event
            $(document).on('click', '.addBtn', function() {
                var newRow = $('#dataRows .dataRow').first().clone();
                newRow.find('.addBtn').remove(); // Remove Add More button from new row
                $('#dataRows').append(newRow);
                $('.addBtn').hide(); // Hide all Add More buttons
                $('.dataRow:last .deleteBtn').after('<span>&nbsp;</span><button type="button" class="btn btn-sm btn-light addBtn">Add More</button>'); // Show Add More button only in the last row
            });

            // Delete button click event
            $(document).on('click', '.deleteBtn', function() {
                if ($('#dataRows .dataRow').length > 1) {
                    $(this).closest('.dataRow').remove();
                    $('.addBtn').hide(); // Hide all Add More buttons
                    $('.dataRow:last .deleteBtn').after('<span>&nbsp;</span><button type="button" class="btn btn-sm btn-light addBtn">Add More</button>'); // Show Add More button only in the last row
                }
            });
        });
    </script>
@endsection

@section('modal')
    <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalgridLabel">Create New EC Type Here..</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0);">
                        <div class="row g-3">
                            <div class="col-xxl-6">
                                <div>
                                    <label for="firstName" class="form-label">Type</label>
                                    <input type="text" class="form-control" id="new-type" placeholder="Enter New Type">
                                </div>
                            </div> 
                        </div>
                        <!--end row-->
                    </form>
                    <div class="mt-4">
                        <div class="hstack gap-2 justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                            <a href="javascript:void(0);" class="btn btn-success">Save</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection