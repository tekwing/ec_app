@extends('SuperAdmin.layout.app')

@section('css')
    
    <!-- Filepond css -->
    <link rel="stylesheet" href="{{ asset('libs/filepond/filepond.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">

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
                        <h4 class="mb-sm-0">Logo Upload</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">File Upload</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row mt-2">
                <div class="col-lg-12">
                    <div class="justify-content-between d-flex align-items-center mb-3">
                        <!-- <h5 class="mb-0 pb-1 text-decoration-underline">Filepond</h5> -->
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Logo Upload </h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div style="display: flex; align-items: center;">
                                        <p class="text-muted" style="margin-right: 5px;">Do you have your logo to upload ?</p>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="showDiv" value="yes" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="showDiv" value="no" id="flexRadioDefault2" >
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            No
                                        </label>
                                    </div>
                                </div>

                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div> <!-- end col -->
                        <div class="col-lg-6" id="yes-content" style="display:none;">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Upload Your Logo Here..</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <input type="file" class="filepond filepond-input-multiple" multiple name="filepond" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
                                    <p class="text mt-1" style="color:#1967D2; font-size: 11px;"><i>Image Resolution W3400 x H950  pixels, Max. file size 2 MB, acceptable format - .png .jpeg</i></p>
                                    <div class="mt-3" style="text-align: right;">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
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

    
    <!-- filepond js -->
    <script src="{{ asset('libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
    <script src="{{ asset('libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
    <script src="{{ asset('libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
    <script src="{{ asset('libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>

    <script src="{{ asset('js/pages/form-file-upload-filepond.init.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        var showDivInput = document.querySelectorAll('input[name="showDiv"]');

        showDivInput.forEach(function(input) {
            input.addEventListener('change', function() {
                if (this.value === 'yes') {
                    document.getElementById('yes-content').style.display = 'block';
                    $('#myModal').modal('hide');
                } else if (this.value === 'no') {
                    document.getElementById('yes-content').style.display = 'none';
                    $('#myModal').modal('show');
                }
            });
        });
    </script>
    
@endsection

@section('modal')
    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header mb-3">
                    <h5 class="modal-title" id="myModalLabel">If no Logo, the name of your Ethics Committee will be displayed in the place of Logo (Top, left, corner)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
