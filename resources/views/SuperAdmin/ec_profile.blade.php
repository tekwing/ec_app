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
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
    .toolpop {
      position: fixed;
      z-index: 99999; /* Adjust as needed */
    }
    .toolpop-text {
      visibility: hidden;
      background-color: #555;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px;
      position: absolute;
      bottom: calc(100% + 10px); /* Adjust as needed */
      left: 50%;
      transform: translateX(-50%);
    }
    .toolpop-text::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }
    .toolpop.active .toolpop-text {
      visibility: visible;
    }
    .close-btn {
      cursor: pointer;
    }
</style>



@endsection

@section('content')
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">EC's PROFILE-SETTINGS</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">EC's Profile</li>
                                    <li class="breadcrumb-item active">EC's Profile</li>
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
                               
                                <div class="d-flex">
                                    
                                    <div class="flex-grow-1 ms-2">
                                    
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="live-preview">
                                                    <div class="row gy-4">
                                                        <div class="col-xxl-6 col-md-6">
                                                            <label for="basicInput" class="form-label" style="display: inline-block;">Type Of EC</label>
                                                            <div class="toolpop" style="display: inline-block; position: relative; z-index: 9999; margin-left: 5px; max-width: 200px;">
                                                                <span class="toolpopTrigger" style="vertical-align: middle;"><i class="ri-information-line" style="font-size: 22px;"></i></span>
                                                                <div class="toolpop-text" style="width:200px;">
                                                                    Select anyone from the dropdown that most suitable; if there is none, you can enter manually.
                                                                    <span class="close-btn" style="position: absolute; top: 0; right: 0; padding: 3px; cursor: pointer;">×</span>
                                                                </div>
                                                            </div>
                                                            <select class="form-select mb-3" id="ec_type" aria-label="Default select example">
                                                                <option selected>Select your EC Type </option>
                                                                <option value="1">Institutional Ethics Committee (EC)</option>
                                                                <option value="2">Institutional Review Board (IRB)</option>
                                                                <option value="2">Central Ethics Committee</option>
                                                                <option value="2">Independent Ethics Committee</option>
                                                                <option value="3">Others</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-xxl-6 col-md-6">
                                                            <div id="ecTypeNew" style="display: none;">
                                                                <label for="basiInput" class="form-label">EC Type</label>
                                                                <span class="" data-bs-toggle="toolpop" data-bs-placement="top" title="">
                                                                <i class="" style="font-size: 18px;"></i> <!-- Icon here -->
                                                                </span>
                                                                <input type="password" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Registered Name</label>
                                                                <div class="toolpop" style="display: inline-block; position: relative; z-index: 9999; margin-left: 5px; max-width: 200px;">
                                                                    <span class="toolpopTrigger" style="vertical-align: middle;"><i class="ri-information-line" style="font-size: 22px;"></i></span>
                                                                    <div class="toolpop-text" style="width:200px;">
                                                                    Registered Name of EC as per the record
                                                                        <span class="close-btn" style="position: absolute; top: 0; right: 0; padding: 3px; cursor: pointer;">×</span>
                                                                    </div>
                                                                </div>
                                                                <input type="password" class="form-control" id="basiInput">
                                                            </div>
                                                            
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Registration Number</label>
                                                                <div class="toolpop" style="display: inline-block; position: relative; z-index: 9999; margin-left: 5px; max-width: 200px;">
                                                                    <span class="toolpopTrigger" style="vertical-align: middle;"><i class="ri-information-line" style="font-size: 22px;"></i></span>
                                                                    <div class="toolpop-text" style="width:230px;">
                                                                        Registration number of your EC with the Central Licensing Authority (CLA) i.e. Central Drugs Standard Control Organization
                                                                        <span class="close-btn" style="position: absolute; top: 0; right: 0; padding: 3px; cursor: pointer;">×</span>
                                                                    </div>
                                                                </div>
                                                                <input type="password" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-6 col-md-12">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Address</label>
                                                                <input type="password" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">City</label>
                                                                <input type="password" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">State</label>
                                                                <input type="password" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Country</label>
                                                                <input type="password" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Postal Code</label>
                                                                <span class="" data-bs-toggle="toolpop" data-bs-placement="top" title="">
                                                                <i class="" style="font-size: 19px;"></i> 
                                                                </span>
                                                                <input type="password" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Email</label>
                                                                <div class="toolpop" style="display: inline-block; position: relative; z-index: 9999; margin-left: 5px; max-width: 200px;">
                                                                    <span class="toolpopTrigger" style="vertical-align: middle;"><i class="ri-information-line" style="font-size: 22px;"></i></span>
                                                                    <div class="toolpop-text" style="width:200px;">
                                                                        This email id will be For all external communication (with their clients)
                                                                        <span class="close-btn" style="position: absolute; top: 0; right: 0; padding: 3px; cursor: pointer;">×</span>
                                                                    </div>
                                                                </div>
                                                                <input type="password" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Phone 1</label>
                                                                <span class="" data-bs-toggle="toolpop" data-bs-placement="top" title="">
                                                                <i class="" style="font-size: 22px;"></i> 
                                                                </span>
                                                                <input type="password" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-xxl-6 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Phone 2</label>
                                                                <span class="" data-bs-toggle="toolpop" data-bs-placement="top" title="">
                                                                <i class="" style="font-size: 22px;"></i> 
                                                                </span>
                                                                <input type="password" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                    <div class="row mt-4">
                                                        <div class="col-xxl-12 col-md-12" style="text-align: right;">
                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->

                                    </div>
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

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script>
        $(document).ready(function() {
            $('#ec_type').change(function() {
                var selectedOption = $(this).val();
                if (selectedOption === '3') {
                    $('#ecTypeNew').show();
                } else {
                    $('#ecTypeNew').hide();
                }
            });
        });
    </script>
    <script>
  $(document).ready(function() {
    // Event delegation for opening tooltips
    $(document).on('click', '.toolpopTrigger', function() {
      $(this).closest('.toolpop').toggleClass('active');
    });

    // Event delegation for closing tooltips
    $(document).on('click', '.close-btn', function(event) {
      event.stopPropagation(); // Prevents the click from bubbling up to the parent
      $(this).closest('.toolpop').removeClass('active');
    });
  });
</script>
@endsection

