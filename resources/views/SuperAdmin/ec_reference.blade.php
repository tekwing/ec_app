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
                            <h4 class="mb-sm-0">EC Ref/Barcodes/QR codes</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Settings</li>
                                    <li class="breadcrumb-item active">EC Ref/Barcodes/QR codes</li>
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
                                                            <label for="basiInput"  class="form-label">Reference Number</label>
                                                            
                                                            <div class="toolpop" style="display: inline-block; position: relative; z-index: 9999; margin-left: 5px; max-width: 500px;">
                                                                <span class="toolpopTrigger" style="vertical-align: middle;"><i class="ri-information-line" style="font-size: 22px;"></i></span>
                                                                <div class="toolpop-text" style="width:500px;">
                                                                    You can create this to auto-populate EC reference number for every communication letter that you send to your research applicant. 
                                                                    -  3 to 4 digits of your EC Name
                                                                    -  Short form of EC Type
                                                                    -  Type 3 digit of letter in capital
                                                                    -  2 to 3 digits of a number or alphabet of your own choice
                                                                    -  yyyy/mm/dd-01
                                                                    e.g. if ecPORT is your Ethics Committee: "ECP-EC-IND-20240101-01"
                                                                    <span class="close-btn" style="position: absolute; top: 0; right: 0; padding: 3px; cursor: pointer;">×</span>
                                                                </div>
                                                            </div>
                                                            <select class="form-select mb-3" id="ec_reference" aria-label="Default select example">
                                                                <option selected>Select</option>
                                                                <option value="1" >Adopt ecPORT format</option>
                                                                <option value="2" >Create own format</option>
                                                            </select>
                                                        </div>
                                                        <!--end col-->


                                                       
                                                        <div class="col-xxl-6 col-md-6" >
                                                            <div id="ecReferenceNew" style="display: none;">
                                                                <label for="basiInput" class="form-label">EC Reference Number</label>
                                                                <span class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Registered Name of EC as per the record">
                                                                <i class="" style="font-size: 18px;"></i> <!-- Icon here -->
                                                                </span>
                                                                <input type="text" class="form-control" id="textInput" maxlength="4" oninput="formatInput(this.value)">
                                                            </div>
                                                            <div id="output"></div>

                                                            <div id="ecCustomNew" style="display: none;">
                                                                <label for="basiInput" class="form-label">EC Reference Number</label>
                                                                <span class="" data-bs-toggle="tooltip" data-bs-placement="top" title="Registered Name of EC as per the record">
                                                                <i class="" style="font-size: 18px;"></i> <!-- Icon here -->
                                                                </span>
                                                                <input type="text" class="form-control" id="" >
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                        <div class="col-xxl-6 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">EC type You Choosen</label>
                                                                <input type="text" class="form-control" id="basiInput" disabled >
                                                            </div>
                                                            
                                                        </div>
                                                        <!--end col-->

                                                        <div class="col-xxl-6 col-md-6">
                                                            <div>
                                                                <label for="basiInput" class="form-label">Name of your EC</label>
                                                                <input type="password" class="form-control" id="basiInput" disabled>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#ec_reference').change(function() {
                var selectedOption = $(this).val();
                if (selectedOption === '1') {
                    $('#ecReferenceNew').show();
                    $('#ecCustomNew').hide();
                } else if(selectedOption === '2'){
                    $('#ecCustomNew').show();
                    $('#ecReferenceNew').hide();
                }
            });
        });
    </script>

<script>
    function formatInput(value) {
      if (value.length === 4) {
        // Disable the input field
        document.getElementById('textInput').disabled = true;
        
        // Get current date
        const now = new Date();
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0');
        const day = String(now.getDate()).padStart(2, '0');

        // Display the formatted text in the same input field
        document.getElementById('textInput').value = `${value}-001-${year}-2-${month}-10`;
      }
    }
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
