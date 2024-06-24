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
        .small-image {
            width: 100px;
            height: auto;
            transition: transform 0.3s ease;
        }

        .small-image:hover {
            transform: scale(1.1); /* Increase size on hover */
        }

        .bg-custom {
            background-image: url('{{asset('letter.png')}}');
            background-size: cover; /* Cover the entire element */
            background-position: center; /* Center the background image */
        }

        @media (max-width: 767.98px) {
        .card_leter {
            min-height: 300px; /* Set a minimum height for the card on mobile screens */
        }
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
                            <h4 class="mb-sm-0">Letterhead & Signatures</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Settings</li>
                                    <li class="breadcrumb-item active">Letterhead & Signatures</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card overflow-hidden">
                            <div class="card-body bg-marketplace d-flex">
                                <div class="flex-grow-1">
                               
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h5 class="fs-18">Want to adopt the letterhead template from ecPORT</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="form-check-input ml-2" type="radio" name="yesNoRadio" id="yesRadio" value="yes">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h5 class="fs-18">Want to use letterhead template</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="form-check-input ml-2" type="radio" name="yesNoRadio" id="noRadio" value="no">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" id="yesContent" style="display:none;">
                        <div class="card overflow-hidden" style="background-color:#405189;">
                            <div class="card-body bg-marketplace d-flex">
                                <div class="flex-grow-1">
                                    <a class="letterheadbutton" id="letter1" value="1" href="#"><img src="{{asset('images/letterhead/letter1.png')}}" class="small-image" alt="Image 1" style="width: 135px; height: 200px; margin-right: 13px; margin-top:5px"></a>
                                    <a class="letterheadbutton" id="letter2" value="2" href="#"><img src="{{asset('images/letterhead/letter2.png')}}" class="small-image" alt="Image 2" style="width: 135px; height: 200px; margin-right: 10px; margin-top:5px"></a>
                                    <a class="letterheadbutton" id="letter3" value="3" href="#"><img src="{{asset('images/letterhead/letter3.png')}}" class="small-image" alt="Image 3" style="width: 135px; height: 200px; margin-top:5px"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" id="noContent" style="display:none;">
                        <div class="card overflow-hidden">
                            <div class="card-body bg-marketplace d-flex">
                                <div class="flex-grow-1">
                                    <input type="file" />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    
                <div class="col-xxl-6" id="showletter" style="display:none;">
                    <img id="selectedLetterImg" src="{{asset('letter.png')}}" style="max-width: 100%; height: auto;">
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
    $(document).ready(function(){
        $('input[name="yesNoRadio"]').change(function(){
            if($(this).val() == 'yes'){
                $('#yesContent').show();
                $('#showletter').hide();
                $('#noContent').hide();
            } else if($(this).val() == 'no'){
                $('#yesContent').hide();
                $('#showletter').hide();
                $('#noContent').show();
            }
        });
    });
    </script>

    <script>
    $(document).ready(function(){
        $('.letterheadbutton').click(function(e){
            e.preventDefault();
            var letterValue = $(this).attr('value');
            var imgSrc = "{{asset('images/letterhead/letter')}}"+letterValue+".png";
            $('#selectedLetterImg').attr('src', imgSrc);
            $('#showletter').show();
        });
    });
    </script>
    
@endsection
