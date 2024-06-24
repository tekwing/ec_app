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
                                                        <div class="col-xxl-3 col-md-6">
                                                            <div >
                                                                <label for="basiInput" class="form-label">Account Name</label>
                                                                <input type="text" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                        <div class="col-xxl-3 col-md-6">
                                                            <div >
                                                                <label for="basiInput" class="form-label">Account Number</label>
                                                                <input type="text" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                        <div class="col-xxl-3 col-md-6">
                                                            <label for="basiInput"  class="form-label">Account Type</label>
                                                            <select class="form-select mb-3" id="ec_type" aria-label="Default select example">
                                                                <option selected>Select your Account Type </option>
                                                                <option value="1">Savings</option>
                                                                <option value="2">Current</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-xxl-3 col-md-6">
                                                            <div >
                                                                <label for="basiInput" class="form-label">Bank Name</label>
                                                                <input type="text" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                        <div class="col-xxl-3 col-md-6">
                                                            <div >
                                                                <label for="basiInput" class="form-label">IFSC</label>
                                                                <input type="text" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                        <div class="col-xxl-3 col-md-6">
                                                            <div >
                                                                <label for="basiInput" class="form-label">Branch</label>
                                                                <input type="text" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                        <div class="col-xxl-3 col-md-6">
                                                            <div >
                                                                <label for="basiInput" class="form-label">City</label>
                                                                <input type="text" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->

                                                        <div class="col-xxl-3 col-md-6">
                                                            <div >
                                                                <label for="basiInput" class="form-label">State</label>
                                                                <input type="text" class="form-control" id="basiInput">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                    </div>
                                                    <!--end row-->
                                                    <div class="row mt-4">
                                                        <div class="col-xxl-3 col-md-6">
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

@endsection
