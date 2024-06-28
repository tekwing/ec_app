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
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">1. ADMINISTRATIVE DETAILS</h4>
                                    <!-- <div class="">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                <li><a data-action="expand"><i class="ri-fullscreen-fill"></i></i></a></li>
                                                <li><a data-action="close"><i class=" ri-close-circle-line xIcon_setting"></i></a></li>
                                            </ul>
                                    </div> -->
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">(a) Name of Organization</label><br>
                                                    <input type="text" class="form-control" value="" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">(b) Name of Ethics Committee</label>
                                                    <input type="text" class="form-control" value="" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">(c) Name of Principal Investigator</label>
                                                    <input type="text" class="form-control" value="" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">(d) Department/Division</label>
                                                    <input type="text" class="form-control" value="" id="placeholderInput" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">(e) Date of submission</label>
                                                    <input type="date" class="form-control" value="" id="placeholderInput" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div >
                                                    <label for="placeholderInput" class="form-label">(f) Type of review requested</label>
                                                </div>
                                                <!-- Custom Checkboxes Color -->
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Exemption from review
                                                    </label>
                                                </div>
                                                <!-- Custom Checkboxes Color -->
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Expedited review 
                                                    </label>
                                                </div>
                                                <!-- Custom Checkboxes Color -->
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Full committee review
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">(g) Title of the study</label>
                                                    <input type="text" class="form-control" value="" id="placeholderInput" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label"> (h) Protocol number (If any)</label>
                                                    <input type="text" class="form-control" value="" id="placeholderInput" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Version number</label>
                                                    <input type="text" class="form-control" value="" id="placeholderInput" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">(i) Details of Investigators</label>
                                                    <input type="text" class="form-control" value="" id="placeholderInput" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">(j) Number of studies where applicant is a</label>
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control" value="i) Principal Investigator at time of submission" id="placeholderInput" disabled>
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control" value="ii) Co-Investigator at time of submission:" id="placeholderInput" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">(k) Duration of the studys</label>
                                                    <input type="text" class="form-control" value="" id="placeholderInput" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">4. METHODOLOGY</h4>
                                    <!-- <div class="">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                <li><a data-action="expand"><i class="ri-fullscreen-fill"></i></i></a></li>
                                                <li><a data-action="close"><i class=" ri-close-circle-line xIcon_setting"></i></a></li>
                                            </ul>
                                    </div> -->
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">(a) Sample size/ number of participants (as applicable)</label>
                                                    <input type="text" class="form-control" value="" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">(b) Is there an external laboratory/outsourcing involved for investigations?</label>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                        <label class="form-check-label" for="formCheck6">
                                                        YES
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                        <label class="form-check-label" for="formCheck6">
                                                        NO
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                        <label class="form-check-label" for="formCheck6">
                                                        NA
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">(c) How was the scientific quality of the study assessed?</label>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                        <label class="form-check-label" for="formCheck6">
                                                        Independent external review
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                        <label class="form-check-label" for="formCheck6">
                                                        Review by sponsor/Funder
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                        <label class="form-check-label" for="formCheck6">
                                                        Review within PI’s institution
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                        <label class="form-check-label" for="formCheck6">
                                                        Review within multi-centre research group
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                        <label class="form-check-label" for="formCheck6">
                                                        No review
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Date of review</label>
                                                    <div class="form-check mb-3">
                                                        <input type="date" class="form-control" value="" id="placeholderInput" disabled>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="labelInput" class="form-label">Comments of scientific committee, if any (100 words)</label>
                                                    <div class="form-check mb-3">
                                                        <input type="date" class="form-control" value="" id="placeholderInput" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!--end col-->
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Header</h4>
                                    <!-- <div class="">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                <li><a data-action="expand"><i class="ri-fullscreen-fill"></i></i></a></li>
                                                <li><a data-action="close"><i class=" ri-close-circle-line xIcon_setting"></i></a></li>
                                            </ul>
                                    </div> -->
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Logo</label><br>
                                                    <img src="{{ asset('images/ec_logo.png') }}" alt="" height="22">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Title</label>
                                                    <input type="text" class="form-control" value="Application Form for Initial Review" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Name of the Institution</label>
                                                    <input type="text" class="form-control" value="" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">EC Ref. No.</label>
                                                    <input type="text" class="form-control" value="" id="placeholderInput" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">2. FUNDING DETAILS AND BUDGET</h4>
                                    <!-- <div class="">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                <li><a data-action="expand"><i class="ri-fullscreen-fill"></i></i></a></li>
                                                <li><a data-action="close"><i class=" ri-close-circle-line xIcon_setting"></i></a></li>
                                            </ul>
                                    </div> -->
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">(a) Total estimated budget for site</label>
                                                    <input type="text" class="form-control" value="At site" disabled>
                                                    <input type="text" class="form-control" value="In India" disabled>
                                                    <input type="text" class="form-control" value="Globally" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-xxl-3 col-md-6">
                                                <!-- Custom Checkboxes Color -->
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    (b) Self-funding
                                                    </label>
                                                </div>
                                                <!-- Custom Checkboxes Color -->
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Institutional funding 
                                                    </label>
                                                </div>
                                                <!-- Custom Checkboxes Color -->
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Funding agency (Specify)
                                                    </label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">3. OVERVIEW OF RESEARCH</h4>
                                    <!-- <div class="">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                <li><a data-action="expand"><i class="ri-fullscreen-fill"></i></i></a></li>
                                                <li><a data-action="close"><i class=" ri-close-circle-line xIcon_setting"></i></a></li>
                                            </ul>
                                    </div> -->
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">(a) Lay summary3 (within 300 words):</label>
                                                    <input type="text" class="form-control" value="At site" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-xxl-3 col-md-6">
                                                <!-- Custom Checkboxes Color -->
                                                <div class="form-check mb-3">
                                                    <label class="form-check-label" for="formCheck6">
                                                    (b) Type of study
                                                    </label>
                                                </div>
                                                <!-- Custom Checkboxes Color -->
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Basic Sciences
                                                    </label>
                                                </div>
                                                <!-- Custom Checkboxes Color -->
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Clinical 
                                                    </label>
                                                </div>

                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Cross Sectional 
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Retrospective
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Epidemiological/Public Health
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Case Control
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Prospective
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Cohort
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Qualitative
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Socio-behavioural
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Systematic Review
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Quantitative
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Biological samples/ Data
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Mixed Method
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                                    <label class="form-check-label" for="formCheck6">
                                                    Any others (Specify) 
                                                    </label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!--end col-->
            </div>
            <!--end main row 1 -->
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">5. RECRUITMENT AND RESEARCH PARTICIPANTS</h4>
                            <!-- <div class="">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ri-fullscreen-fill"></i></i></a></li>
                                        <li><a data-action="close"><i class=" ri-close-circle-line xIcon_setting"></i></a></li>
                                    </ul>
                            </div> -->
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(a) Type of participants in the study</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Healthy volunteers
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Patients
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Vulnerable persons/ Special groups
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Others
                                            </label>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Who will do the recruitment?</label>
                                            <input type="text" class="form-control" value="" disabled>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div >
                                            <label for="placeholderInput" class="form-label">Participant recruitment methods used</label>
                                        </div>
                                        <!-- Custom Checkboxes Color -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Posters/leaflets/Letters
                                            </label>
                                        </div>
                                        <!-- Custom Checkboxes Color -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            TV/Radio ads/Social media/Institution website
                                            </label>
                                        </div>
                                        <!-- Custom Checkboxes Color -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Patients / Family/ Friends visiting hospitals
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Telephone
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Others
                                            </label>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(a) Type of participants in the study</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Healthy volunteers
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Patients
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Vulnerable persons/ Special groups
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Others
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(b) i. Will there be vulnerable persons / special groups involved ?</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            YES
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            NO
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">ii. If yes, type of vulnerable persons / special groups</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Children under 18 yrs
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Pregnant or lactating women
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Differently abled (Mental/Physical)
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Employees/Students/Nurses/Staff
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Elderly
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Institutionalized
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Economically and socially disadvantaged
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Refugees/Migrants/Homeless
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Terminally ill (stigmatized or rare diseases)
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" disabled>
                                            <label class="form-check-label" for="formCheck6">
                                            Any other (Specify)
                                            </label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
    <script src="{{ asset('libs/list.js/list.min.js') }}"></script>
    <script src="{{ asset('libs/list.pagination.js/list.pagination.min.js') }}"></script>

    <!-- listjs init -->
    <script src="{{ asset('js/pages/listjs.init.js') }}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ asset('libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>
  
@endsection

