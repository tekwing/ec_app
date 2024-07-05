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
        .table_column_width{
           width: 400px;
        }
    </style>

@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="mb-2" style="text-align:center; display:block;">
                <h2 class="mb-3">Application Form for Initial Review</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;"  style="margin-left:10px; margin-right:10px;">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <!-- <label for="basiInput" class="form-label">Logo</label><br> -->
                                            <img src="{{ asset('images/ec_logo.png') }}" alt="" height="35">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <!-- <div>
                                            <label for="basiInput" class="form-label">Title</label>
                                            <input type="text" class="form-control" value="Application Form for Initial Review" >
                                        </div> -->
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Name of the Institution</label>
                                            <input type="text" class="form-control" value="" >
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">EC Ref. No.</label>
                                            <input type="text" class="form-control" value="" id="placeholderInput" >
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
            <div class="mb-2" style="text-align:center; display:block;">
                <h5 class="mb-3">SECTION A - BASIC INFORMATION</h5>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1" style="margin-left:20px;">1. ADMINISTRATIVE DETAILS</h4>
                            
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(a) Name of Organization</label><br>
                                            <input type="text" class="form-control" value="" >
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(b) Name of Ethics Committee</label>
                                            <input type="text" class="form-control" value="" >
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">(c) Name of Principal Investigator</label>
                                            <input type="text" class="form-control" value="" >
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">(d) Department/Division</label>
                                            <input type="text" class="form-control" value="" id="placeholderInput" >
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">(e) Date of submission</label>
                                            <input type="date" class="form-control" value="" id="placeholderInput" >
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div >
                                            <label for="placeholderInput" class="form-label">(f) Type of review requested</label>
                                        </div>
                                        
                                        <!-- Custom Checkboxes Color -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="" name="reviewType" onclick="checkOnlyOne(this, 'reviewType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Exemption from review
                                            </label>
                                        </div>
                                        <!-- Custom Checkboxes Color -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="" name="reviewType"onclick="checkOnlyOne(this, 'reviewType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Expedited review 
                                            </label>
                                        </div>
                                        <!-- Custom Checkboxes Color -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" name="reviewType" id="" onclick="checkOnlyOne(this, 'reviewType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Full committee review
                                            </label>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">(g) Title of the study</label>
                                            <input type="text" class="form-control" value="" id="placeholderInput" >
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label"> (h) Protocol number (If any)</label>
                                            <input type="text" class="form-control" value="" id="placeholderInput" >
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Version number</label>
                                            <input type="text" class="form-control" value="" id="placeholderInput" >
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">(i) Details of Investigators</label>
                                            <input type="text" class="form-control" value="" id="placeholderInput" >
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">(j) Number of studies where applicant is a</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" value="i) Principal Investigator at time of submission" id="placeholderInput" >
                                        </div>
                                        <div>
                                            <input type="text" class="form-control" value="ii) Co-Investigator at time of submission:" id="placeholderInput" >
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">(k) Duration of the studys</label>
                                            <input type="text" class="form-control" value="" id="placeholderInput" >
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
                            <h4 class="card-title mb-0 flex-grow-1" style="margin-left:20px;">2. FUNDING DETAILS AND BUDGET</h4>
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
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(a) Total estimated budget for site</label>
                                            <input type="text" class="form-control mb-2" value="At site" >
                                            <input type="text" class="form-control mb-2" value="In India" >
                                            <input type="text" class="form-control" value="Globally" >
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-xxl-6 col-md-6">
                                        <!-- Custom Checkboxes Color -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="fundingType" onclick="checkOnlyOne(this, 'fundingType')">
                                            <label class="form-check-label" for="formCheck6">
                                            (b) Self-funding
                                            </label>
                                        </div>
                                        <!-- Custom Checkboxes Color -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="fundingType" onclick="checkOnlyOne(this, 'fundingType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Institutional funding 
                                            </label>
                                        </div>
                                        <!-- Custom Checkboxes Color -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="fundingType" onclick="checkOnlyOne(this, 'fundingType')">
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
            <div  style="text-align:center; display:block;">
                <h5 class="mb-3">SECTION B - RESEARCH RELATED INFORMATION</h5>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1" style="margin-left:20px;">3. OVERVIEW OF RESEARCH</h4>
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
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;">
                                    <div class="col-xxl-12 col-md-12">
                                        <div>
                                            <label for="basiInput" class="form-label">(a) Lay summary (within 300 words):</label>
                                            <textarea type="text" style="height:250px;" class="form-control" value="At site" ></textarea>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-xxl-12 col-md-12">
                                        <!-- Custom Checkboxes Color -->
                                        <div class="mb-3">
                                            <label class="form-label">(b) Type of study</label>
                                        </div>
                                        <!-- Custom Checkboxes Color -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck1" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck1">Basic Sciences</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck2" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck2">Clinical</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck3" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck3">Cross Sectional</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck4" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck4">Retrospective</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck5" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck5">Epidemiological/Public Health</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck6">Case Control</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck7" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck7">Prospective</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck15" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck15">Any others (Specify)</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck8" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck8">Cohort</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck9" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck9">Qualitative</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck10" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck10">Socio-behavioural</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck11" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck11">Systematic Review</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck12" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck12">Quantitative</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck13" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck13">Biological samples/ Data</label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck14" name="studyType" onclick="checkOnlyOne(this, 'studyType')">
                                                    <label class="form-check-label" for="formCheck14">Mixed Method</label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-md-12">
                                        <div>
                                            <textarea type="text" style="height:100px;" class="form-control" value="At site" ></textarea>
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
                            <h4 class="card-title mb-0 flex-grow-1" style="margin-left:20px;">4. METHODOLOGY</h4>
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
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(a) Sample size/ number of participants (as applicable)</label>
                                            <textarea type="text" style="height:200px;" class="form-control" value="" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(b) Is there an external laboratory/outsourcing involved for investigations?</label>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="externalLaboratoryYN" onclick="checkOnlyOne(this, 'externalLaboratoryYN')">
                                                <label class="form-check-label" for="formCheck6">
                                                YES
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="externalLaboratoryYN" onclick="checkOnlyOne(this, 'externalLaboratoryYN')">
                                                <label class="form-check-label" for="formCheck6">
                                                NO
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="externalLaboratoryYN" onclick="checkOnlyOne(this, 'externalLaboratoryYN')">
                                                <label class="form-check-label" for="formCheck6">
                                                NA
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">(c) How was the scientific quality of the study assessed?</label>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="scientificQualityAssessed" onclick="checkOnlyOne(this, 'scientificQualityAssessed')">
                                                <label class="form-check-label" for="formCheck6">
                                                Independent external review
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="scientificQualityAssessed" onclick="checkOnlyOne(this, 'scientificQualityAssessed')">
                                                <label class="form-check-label" for="formCheck6">
                                                Review by sponsor/Funder
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="scientificQualityAssessed" onclick="checkOnlyOne(this, 'scientificQualityAssessed')">
                                                <label class="form-check-label" for="formCheck6">
                                                Review within PI’s institution
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="scientificQualityAssessed" onclick="checkOnlyOne(this, 'scientificQualityAssessed')">
                                                <label class="form-check-label" for="formCheck6">
                                                Review within multi-centre research group
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="scientificQualityAssessed" onclick="checkOnlyOne(this, 'scientificQualityAssessed')">
                                                <label class="form-check-label" for="formCheck6">
                                                No review
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">Date of review</label>
                                            <div class="form-check mb-3">
                                                <input type="date" class="form-control" value="" id="placeholderInput" >
                                            </div>
                                        </div>
                                        <div>
                                            <label for="labelInput" class="form-label">Comments of scientific committee, if any (100 words)</label>
                                            <div class="form-check mb-3">
                                            <textarea type="text" style="height:200px;" class="form-control" value="" ></textarea>
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
            <div style="text-align:center; display:block;">
                <h5 class="mb-3">SECTION C: PARTICIPANT RELATED INFORMATION </h5>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1" style="margin-left:20px;">5. RECRUITMENT AND RESEARCH PARTICIPANTS</h4>
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
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;">
                                    
                                    <div class="col-xxl-12 col-md-12">
                                        <div>
                                            <label for="basiInput" class="form-label">(a) Type of participants in the study</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="studyParticipants" onclick="checkOnlyOne(this, 'studyParticipants')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Healthy volunteers
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="studyParticipants" onclick="checkOnlyOne(this, 'studyParticipants')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Patients
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="studyParticipants" onclick="checkOnlyOne(this, 'studyParticipants')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Vulnerable persons/ Special groups
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="studyParticipants" onclick="checkOnlyOne(this, 'studyParticipants')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <div class="form-check mb-3">
                                            <textarea type="text" style="height:100px;" class="form-control" value="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-12 col-md-12">
                                        <div>
                                            <label for="labelInput" class="form-label">Who will do the recruitment?</label>
                                            <input type="text" class="form-control" value="" >
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-12 col-md-12">
                                        <div >
                                            <label for="placeholderInput" class="form-label">Participant recruitment methods used</label>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="ParticipantsRecruitment" onclick="checkOnlyOne(this, 'ParticipantsRecruitment')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Posters/leaflets/Letters
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="ParticipantsRecruitment" onclick="checkOnlyOne(this, 'ParticipantsRecruitment')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    TV/Radio ads/Social media/Institution website
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="ParticipantsRecruitment" onclick="checkOnlyOne(this, 'ParticipantsRecruitment')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Others
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="ParticipantsRecruitment" onclick="checkOnlyOne(this, 'ParticipantsRecruitment')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Patients / Family/ Friends visiting hospitals
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="ParticipantsRecruitment" onclick="checkOnlyOne(this, 'ParticipantsRecruitment')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Telephone
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div>
                                            <div class="form-check mb-3">
                                            <textarea type="text" style="height:100px;" class="form-control" value="" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->


                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(b) i. Will there be vulnerable persons / special groups involved ?</label>
                                        </div>
                                        <div class=" mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersonsYN" onclick="checkOnlyOne(this, 'vulnerablePersonsYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            YES
                                            </label>
                                        
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersonsYN" onclick="checkOnlyOne(this, 'vulnerablePersonsYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NO
                                            </label>
                                        
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersonsYN" onclick="checkOnlyOne(this, 'vulnerablePersonsYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xxl-12 col-md-12">
                                        <div>
                                            <label for="basiInput" class="form-label">ii. If yes, type of vulnerable persons / special groups</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersons" onclick="checkOnlyOne(this, 'vulnerablePersons')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Children under 18 yrs
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersons" onclick="checkOnlyOne(this, 'vulnerablePersons')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Pregnant or lactating women
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersons" onclick="checkOnlyOne(this, 'vulnerablePersons')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Differently abled (Mental/Physical)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersons" onclick="checkOnlyOne(this, 'vulnerablePersons')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Employees/Students/Nurses/Staff
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersons" onclick="checkOnlyOne(this, 'vulnerablePersons')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Elderly
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersons" onclick="checkOnlyOne(this, 'vulnerablePersons')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Institutionalized
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersons" onclick="checkOnlyOne(this, 'vulnerablePersons')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Economically and socially disadvantaged
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersons" onclick="checkOnlyOne(this, 'vulnerablePersons')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Refugees/Migrants/Homeless
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersons" onclick="checkOnlyOne(this, 'vulnerablePersons')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Terminally ill (stigmatized or rare diseases)
                                                    </label>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="formCheck6" name="vulnerablePersons" onclick="checkOnlyOne(this, 'vulnerablePersons')">
                                                    <label class="form-check-label" for="formCheck6">
                                                    Any other (Specify)
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div>
                                            <div class="form-check mb-3">
                                            <textarea type="text" style="height:100px;" class="form-control" value="" ></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">iii. Provide justification for inclusion/exclusion</label><br>
                                            <input type="text" class="form-control" value="" >
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">iv. Are there any additional safeguards to protect research participants?</label><br>
                                            <input type="text" class="form-control" value="" >
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <div>
                                                <label for="basiInput" class="form-label">(c) Is there any reimbursement to the participants?</label>
                                            </div>
                                            <div class="mb-2">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="participantsReimbursementYN" onclick="checkOnlyOne(this, 'participantsReimbursementYN')">
                                                <label class="form-check-label" for="formCheck6">
                                                YES
                                                </label>
                                            
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="participantsReimbursementYN" onclick="checkOnlyOne(this, 'participantsReimbursementYN')">
                                                <label class="form-check-label" for="formCheck6">
                                                NO
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="participantsReimbursementMonetary" onclick="checkOnlyOne(this, 'participantsReimbursementMonetary')">
                                                <label class="form-check-label" for="formCheck6">
                                                If yes, Monetary
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="participantsReimbursementMonetary" onclick="checkOnlyOne(this, 'participantsReimbursementMonetary')">
                                                <label class="form-check-label" for="formCheck6">
                                                Non-monetary
                                                </label>
                                            </div>
                                            <div>
                                                <label for="basiInput" class="form-label">Provide details</label><br>
                                                <input type="text" class="form-control" value="" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <div>
                                                <label for="basiInput" class="form-label">(d) Are there any incentives to the participants?</label>
                                            </div>
                                            <div class="mb-2">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="participantsIncentivesYN" onclick="checkOnlyOne(this, 'participantsIncentivesYN')">
                                                <label class="form-check-label" for="formCheck6">
                                                YES
                                                </label>
                                            
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="participantsIncentivesYN" onclick="checkOnlyOne(this, 'participantsIncentivesYN')">
                                                <label class="form-check-label" for="formCheck6">
                                                NO
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="participantsMonetary" onclick="checkOnlyOne(this, 'participantsMonetary')">
                                                <label class="form-check-label" for="formCheck6">
                                                If yes, Monetary
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="participantsMonetary" onclick="checkOnlyOne(this, 'participantsMonetary')">
                                                <label class="form-check-label" for="formCheck6">
                                                Non-monetary
                                                </label>
                                            </div>
                                            <div>
                                                <label for="basiInput" class="form-label">Provide details</label><br>
                                                <input type="text" class="form-control" value="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <div>
                                                <label for="basiInput" class="form-label">(e) Are there any participant recruitment fees/ incentives for the study provided to the PI / Institution? 
                                                </label>
                                            </div>
                                            <div class="mb-2">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="participantRecruitmentYN" onclick="checkOnlyOne(this, 'participantRecruitmentYN')">
                                                <label class="form-check-label" for="formCheck6">
                                                YES
                                                </label>
                                            
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="participantRecruitmentYN" onclick="checkOnlyOne(this, 'participantRecruitmentYN')">
                                                <label class="form-check-label" for="formCheck6">
                                                NO
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="participantRecruitmentMonetary" onclick="checkOnlyOne(this, 'participantRecruitmentMonetary')">
                                                <label class="form-check-label" for="formCheck6">
                                                If yes, Monetary
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="formCheck6" name="participantRecruitmentMonetary" onclick="checkOnlyOne(this, 'participantRecruitmentMonetary')">
                                                <label class="form-check-label" for="formCheck6">
                                                Non-monetary
                                                </label>
                                            </div>
                                            <div>
                                                <label for="basiInput" class="form-label">Provide details</label><br>
                                                <input type="text" class="form-control" value="" >
                                            </div>
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
                            <h4 class="card-title mb-0 flex-grow-1" style="margin-left:20px;">6. BENEFITS AND RISKS</h4>
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
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(a) i. Are there any anticipated physical/social/psychological discomforts/ risk to participants?</label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="participantRiskYN" onclick="checkOnlyOne(this, 'participantRiskYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            YES
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="participantRiskYN" onclick="checkOnlyOne(this, 'participantRiskYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NO
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <label class="form-check-label" for="formCheck6">
                                            If yes, categorize the level of risk
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="participantRiskCategory" onclick="checkOnlyOne(this, 'participantRiskCategory')">
                                            <label class="form-check-label" for="formCheck6">
                                            Less than Minimal riskLess than Minimal risk
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="participantRiskCategory" onclick="checkOnlyOne(this, 'participantRiskCategory')">
                                            <label class="form-check-label" for="formCheck6">
                                            Minimal risk
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="participantRiskCategory" onclick="checkOnlyOne(this, 'participantRiskCategory')">
                                            <label class="form-check-label" for="formCheck6">
                                            Minor increase over minimal risk or low risk
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="participantRiskCategory" onclick="checkOnlyOne(this, 'participantRiskCategory')">
                                            <label class="form-check-label" for="formCheck6">
                                            More than minimal risk or high risk 
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">ii. Describe the risk management strategy</label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="labelInput" class="form-label">(b) What are the potential benefits from the study?</label>
                                        </div>
                                        <div>
                                            <p>For the participant</p>
                                        </div>
                                        <div class="mb-3 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" id="" name="participantBenifitsYN" onclick="checkOnlyOne(this, 'participantBenifitsYN')">
                                            <label class="form-check-label mx-2" for="">
                                                Yes
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="" name="participantBenifitsYN" onclick="checkOnlyOne(this, 'participantBenifitsYN')">
                                            <label class="form-check-label mx-2" for="">
                                                No
                                            </label>
                                            <p class="mx-2 mb-0">If Yes</p>
                                            <input class="form-check-input" type="checkbox" id="" name="participantBenifitsDirect" onclick="checkOnlyOne(this, 'participantBenifitsDirect')">
                                            <label class="form-check-label mx-2" for="">
                                                Direct
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="" name="participantBenifitsDirect" onclick="checkOnlyOne(this, 'participantBenifitsDirect')">
                                            <label class="form-check-label mx-2" for="">
                                                Indirect
                                            </label>
                                        </div>

                                        <div>
                                            <p>For the society/community</p>
                                        </div>
                                        <div class="mb-3 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" id="" name="SocietyBenifitsYN" onclick="checkOnlyOne(this, 'SocietyBenifitsYN')">
                                            <label class="form-check-label mx-2" for="">
                                                Yes
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="" name="SocietyBenifitsYN" onclick="checkOnlyOne(this, 'SocietyBenifitsYN')">
                                            <label class="form-check-label mx-2" for="">
                                                No
                                            </label>
                                            <p class="mx-2 mb-0">If Yes</p>
                                            <input class="form-check-input" type="checkbox" id="" name="SocietyBenifitsDirect" onclick="checkOnlyOne(this, 'SocietyBenifitsDirect')">
                                            <label class="form-check-label mx-2" for="">
                                                Direct
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="" name="SocietyBenifitsDirect" onclick="checkOnlyOne(this, 'SocietyBenifitsDirect')">
                                            <label class="form-check-label mx-2" for="">
                                                Indirect
                                            </label>
                                        </div>

                                        <div>
                                            <p>For improvement in science</p>
                                        </div>
                                        <div class="mb-3 d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" id="" name="scienceImprovementYN" onclick="checkOnlyOne(this, 'scienceImprovementYN')">
                                            <label class="form-check-label mx-2" for="">
                                                Yes
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="" name="scienceImprovementYN" onclick="checkOnlyOne(this, 'scienceImprovementYN')">
                                            <label class="form-check-label mx-2" for="">
                                                No
                                            </label>
                                            <p class="mx-2 mb-0">If Yes</p>
                                            <input class="form-check-input" type="checkbox" id="" name="scienceImprovementDirect" onclick="checkOnlyOne(this, 'scienceImprovementDirect')">
                                            <label class="form-check-label mx-2" for="">
                                                Direct
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="" name="scienceImprovementDirect" onclick="checkOnlyOne(this, 'scienceImprovementDirect')">
                                            <label class="form-check-label mx-2" for="">
                                                Indirect
                                            </label>
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">Please describe how the benefits justify the risks</label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-xxl-6 col-md-6">
                                        <div >
                                            <label for="placeholderInput" class="form-label">(c) Are adverse events expected in the study ?</label>
                                        </div>
                                        <div class=" mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="adverseEventsExpectedYN" onclick="checkOnlyOne(this, 'adverseEventsExpectedYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes
                                            </label>
                                        
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="adverseEventsExpectedYN" onclick="checkOnlyOne(this, 'adverseEventsExpectedYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                        
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="adverseEventsExpectedYN" onclick="checkOnlyOne(this, 'adverseEventsExpectedYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>

                                        <div >
                                            <label for="placeholderInput" class="form-label">Are reporting procedures and management strategies described in the study? </label>
                                        </div>
                                        <div class=" mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="managementStrategiesDescribedYN" onclick="checkOnlyOne(this, 'managementStrategiesDescribedYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes
                                            </label>
                                        
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="managementStrategiesDescribedYN" onclick="checkOnlyOne(this, 'managementStrategiesDescribedYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">If Yes, Specify</label>
                                            <input class="form-control" type="text"  >
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
                            <h4 class="card-title mb-0 flex-grow-1" style="margin-left:20px;">7. INFORMED CONSENT</h4>
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
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(a) Are you seeking waiver of consent? If yes, please specify reasons and skip to item no. 8</label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="seekingWaiverYN" onclick="checkOnlyOne(this, 'seekingWaiverYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            YES
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="seekingWaiverYN" onclick="checkOnlyOne(this, 'seekingWaiverYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NO
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-control" type="text"  >
                                        </div>
                                        
                                    </div>
                                    <!--end col-->

                                    <div class="col-xxl-6 col-md-6">
                                        <div >
                                            <label for="placeholderInput" class="form-label">(b) Version number and date of Participant Information Sheet (PIS)</label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                        <div >
                                            <label for="placeholderInput" class="form-label">Version number and date of Informed Consent Form (ICF)</label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <label for="placeholderInput" class="form-label">(c) Type of consent planned for</label>
                                        <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="formCheck6" name="consentType" onclick="checkOnlyOne(this, 'consentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Signed consent
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="formCheck6" name="consentType" onclick="checkOnlyOne(this, 'consentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Verbal/Oral consent
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="formCheck6" name="consentType" onclick="checkOnlyOne(this, 'consentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Witnessed consent
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="formCheck6" name="consentType" onclick="checkOnlyOne(this, 'consentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Audio-Video (AV) consent
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="consentType" onclick="checkOnlyOne(this, 'consentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Consent from LAR (If so, specify from whom)
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="consentType" onclick="checkOnlyOne(this, 'consentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            For children&lt;7 yrs parental/LAR consent
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="consentType" onclick="checkOnlyOne(this, 'consentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Verbal assent from minor (7-12 yrs) along with parental consent
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="consentType" onclick="checkOnlyOne(this, 'consentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Written assent from minor (13-18 yrs) along with parental consent
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="consentType" onclick="checkOnlyOne(this, 'consentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Other 
                                            </label>
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">Specify</label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                    </div>   

                                    <div class="col-xxl-6 col-md-6">
                                        <label for="placeholderInput" class="form-label">(d) Who will obtain the informed consent?</label>
                                        <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="formCheck6" name="InformedConsentType" onclick="checkOnlyOne(this, 'InformedConsentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            PI/Co-I
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="formCheck6" name="InformedConsentType" onclick="checkOnlyOne(this, 'InformedConsentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Nurse/Counselor
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="formCheck6" name="InformedConsentType" onclick="checkOnlyOne(this, 'InformedConsentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Research Staff
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="InformedConsentType" onclick="checkOnlyOne(this, 'InformedConsentType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Other 
                                            </label>
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">Specify</label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">Any tools to be used</label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                    </div> 

                                    <div class="col-xxl-6 col-md-6">
                                        <label for="placeholderInput" class="form-label">(e) Participant Information Sheet (PIS) and Informed Consent Form (ICF)</label>
                                        <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguage" onclick="checkOnlyOne(this, 'ConsentLanguage')">
                                            <label class="form-check-label" for="formCheck6">
                                            English
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguage" onclick="checkOnlyOne(this, 'ConsentLanguage')">
                                            <label class="form-check-label" for="formCheck6">
                                            Local language
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguage" onclick="checkOnlyOne(this, 'ConsentLanguage')">
                                            <label class="form-check-label" for="formCheck6">
                                            Other 
                                            </label>
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">Specify</label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">List the languages in which translations were done</label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                        <div>
                                            <label for="basiInput" class="form-label">If translation has not been done, please justify</label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                    </div> 
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(f) Provide details of consent requirements for previously stored samples if used in the study</label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                    </div> 
                                    <div class="col-xxl-6 col-md-12">
                                        <label for="placeholderInput" class="form-label">(g) Elements contained in the Participant Information Sheet(PIS) and Informed Consent Form (ICF)</label>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Simple language
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Data/ Sample sharing
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Compensation for study related injury
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Risks and discomforts 
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Need to recontact
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Statement that consent is voluntary
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Alternatives to participation
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Confidentiality
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Commercialization/ Benefit sharing
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Right to withdraw
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Storage of samples
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Statement that study involves research
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Benefits
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Return of research results
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Use of photographs/ Identifying data
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Purpose and procedure 
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Payment for participation
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ConsentLanguageElements" onclick="checkOnlyOne(this, 'ConsentLanguageElements')">
                                            <label class="form-check-label" for="formCheck6">
                                            Contact information of PI and Member Secretary of EC
                                            </label>
                                        </div>
                                        </div>
                                    <div class="col-xxl-6 col-md-6">

                                        <div>
                                            <label for="basiInput" class="form-label">Other(specify)</label>
                                            <input class="form-control" type="text"  >
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
                            <h4 class="card-title mb-0 flex-grow-1" style="margin-left:20px;">8. PAYMENT/COMPENSATION</h4>
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
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(a) Who will bear the costs related to participation and procedures ?</label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ParticipantCostType" onclick="checkOnlyOne(this, 'ParticipantCostType')">
                                            <label class="form-check-label" for="formCheck6">
                                            PI 
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ParticipantCostType" onclick="checkOnlyOne(this, 'ParticipantCostType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Institution
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ParticipantCostType" onclick="checkOnlyOne(this, 'ParticipantCostType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Sponsor
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ParticipantCostType" onclick="checkOnlyOne(this, 'ParticipantCostType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Other agencies
                                            </label>
                                        </div>
                                        <div>
                                            <label class="form-check-label" for="formCheck6">
                                            (specify)
                                            </label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                        
                                    </div>
                                    <!--end col-->

                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(b) Is there a provision for free treatment of research related injuries?</label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ParticipantInjuriesFreeYN" onclick="checkOnlyOne(this, 'ParticipantInjuriesFreeYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes 
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ParticipantInjuriesFreeYN" onclick="checkOnlyOne(this, 'ParticipantInjuriesFreeYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ParticipantInjuriesFreeYN" onclick="checkOnlyOne(this, 'ParticipantInjuriesFreeYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>
                                        <div>
                                            <label class="form-check-label" for="formCheck6">
                                            If yes, then who will provide the treatment?
                                            </label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(c) Is there a provision for compensation of research related SAE? <br>If yes, specify</label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ResearchRelatedCompensationYN" onclick="checkOnlyOne(this, 'ResearchRelatedCompensationYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes 
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ResearchRelatedCompensationYN" onclick="checkOnlyOne(this, 'ResearchRelatedCompensationYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ResearchRelatedCompensationYN" onclick="checkOnlyOne(this, 'ResearchRelatedCompensationYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ResearchRelatedCompensationType" onclick="checkOnlyOne(this, 'ResearchRelatedCompensationType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Sponsor
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ResearchRelatedCompensationType" onclick="checkOnlyOne(this, 'ResearchRelatedCompensationType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Institutional/Corpus fund
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ResearchRelatedCompensationType" onclick="checkOnlyOne(this, 'ResearchRelatedCompensationType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Project grant
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="ResearchRelatedCompensationType" onclick="checkOnlyOne(this, 'ResearchRelatedCompensationType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Insurance
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(d) Is there any provision for medical treatment or management till the relatedness is determined for injury to the
                                            participants during the study period?<br> If yes, specify</label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyPeriodInjuryProvisionYN" onclick="checkOnlyOne(this, 'StudyPeriodInjuryProvisionYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes 
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyPeriodInjuryProvisionYN" onclick="checkOnlyOne(this, 'StudyPeriodInjuryProvisionYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyPeriodInjuryProvisionYN" onclick="checkOnlyOne(this, 'StudyPeriodInjuryProvisionYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-control" type="text"  >
                                        </div>
                                        
                                    </div>

                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(e) Is there a provision for ancillary care for unrelated illness during the study period? If yes, please specify.</label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyPeriodIllnessProvisionYN" onclick="checkOnlyOne(this, 'StudyPeriodIllnessProvisionYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes 
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyPeriodIllnessProvisionYN" onclick="checkOnlyOne(this, 'StudyPeriodIllnessProvisionYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyPeriodIllnessProvisionYN" onclick="checkOnlyOne(this, 'StudyPeriodIllnessProvisionYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
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
                            <h4 class="card-title mb-0 flex-grow-1" style="margin-left:20px;">9. STORAGE AND CONFIDENTIALITY</h4>
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
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(a) Identifying Information: Study Involves samples/data. If Yes, specify</label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyInvolvedSamplesYN" onclick="checkOnlyOne(this, 'StudyInvolvedSamplesYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyInvolvedSamplesYN" onclick="checkOnlyOne(this, 'StudyInvolvedSamplesYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyInvolvedSamplesYN" onclick="checkOnlyOne(this, 'StudyInvolvedSamplesYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyInvolvedSamplesType" onclick="checkOnlyOne(this, 'StudyInvolvedSamplesType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Anonymous/Unidentified
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyInvolvedSamplesType" onclick="checkOnlyOne(this, 'StudyInvolvedSamplesType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Anonymized: Reversibly coded 
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyInvolvedSamplesType" onclick="checkOnlyOne(this, 'StudyInvolvedSamplesType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Irreversibly coded
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyInvolvedSamplesType" onclick="checkOnlyOne(this, 'StudyInvolvedSamplesType')">
                                            <label class="form-check-label" for="formCheck6">
                                            Identifiable
                                            </label>
                                        </div>
                                        <div>
                                            <label class="form-check-label" for="formCheck6">
                                            If identifiers must be retained, what additional precautions will be taken to ensure that access is limited /data is
                                            safeguarded? (e.g. data stored in a cabinet, password protected computer etc.)
                                            </label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                        
                                    </div>
                                    <!--end col-->

                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-check-label" for="formCheck6">
                                            (b) Who will be maintaining the data pertaining to the study? 
                                            </label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-check-label" for="formCheck6">
                                            (c) Where will the data be analyzed and by whom? 
                                            </label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-check-label" for="formCheck6">
                                            (d) For how long will the data be stored?
                                            </label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label class="form-check-label" for="formCheck6">
                                            (d) For how long will the data be stored?
                                            </label>
                                            <input class="form-control" type="text"  >
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(e) Do you propose to use stored samples/data in future studies?</label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StoreSamplesTypeYN" onclick="checkOnlyOne(this, 'StoreSamplesTypeYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StoreSamplesTypeYN" onclick="checkOnlyOne(this, 'StoreSamplesTypeYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StoreSamplesTypeYN" onclick="checkOnlyOne(this, 'StoreSamplesTypeYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Maybe
                                            </label>
                                        </div>
                                        <div>
                                            <label class="form-check-label" for="formCheck6">
                                            If yes, explain how you might use stored material/data in the future?
                                            </label>
                                            <textarea class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    

                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align:center; display:block;">
                <h5 class="mb-3">SECTION D: OTHER ISSUES</h5>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1" style="margin-left:20px;">10. PUBLICATION, BENEFIT SHARING AND IPR ISSUES</h4>
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
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;">
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(a) Will the results of the study be reported and disseminated? If yes, specify. </label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyReportDisseminatedYN" onclick="checkOnlyOne(this, 'StudyReportDisseminatedYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyReportDisseminatedYN" onclick="checkOnlyOne(this, 'StudyReportDisseminatedYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="StudyReportDisseminatedYN" onclick="checkOnlyOne(this, 'StudyReportDisseminatedYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(b) Will you inform participants about the results of the study? </label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="InformParticipantsResultYN" onclick="checkOnlyOne(this, 'InformParticipantsResultYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="InformParticipantsResultYN" onclick="checkOnlyOne(this, 'InformParticipantsResultYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="InformParticipantsResultYN" onclick="checkOnlyOne(this, 'InformParticipantsResultYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(c) Are there any arrangements for continued provision of the intervention for participants, if effective, once the
                                            study has finished? If yes describe in brief (Max 50 words) </label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="arrangementsForContinuedProvisionYN" onclick="checkOnlyOne(this, 'arrangementsForContinuedProvisionYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="arrangementsForContinuedProvisionYN" onclick="checkOnlyOne(this, 'arrangementsForContinuedProvisionYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="arrangementsForContinuedProvisionYN" onclick="checkOnlyOne(this, 'arrangementsForContinuedProvisionYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(d) Is there any plan for post research benefit sharing with participants? If yes, specify</label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="PlanForPostResearchYN" onclick="checkOnlyOne(this, 'PlanForPostResearchYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="PlanForPostResearchYN" onclick="checkOnlyOne(this, 'PlanForPostResearchYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="PlanForPostResearchYN" onclick="checkOnlyOne(this, 'PlanForPostResearchYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(e) Is there any commercial value or a plan to patent/IPR issues? If yes, please provide details</label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="CommercialValueYN" onclick="checkOnlyOne(this, 'CommercialValueYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="CommercialValueYN" onclick="checkOnlyOne(this, 'CommercialValueYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="CommercialValueYN" onclick="checkOnlyOne(this, 'CommercialValueYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="basiInput" class="form-label">(f) Do you have any additional information to add in support of the application, which is not included elsewhere in

                                            the form? If yes, provide details.</label>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="AdditionalSupportInformationYN" onclick="checkOnlyOne(this, 'AdditionalSupportInformationYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            Yes
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="AdditionalSupportInformationYN" onclick="checkOnlyOne(this, 'AdditionalSupportInformationYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            No
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck6" name="AdditionalSupportInformationYN" onclick="checkOnlyOne(this, 'AdditionalSupportInformationYN')">
                                            <label class="form-check-label" for="formCheck6">
                                            NA
                                            </label>
                                        </div>
                                        <div>
                                            <textarea class="form-control" ></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align:center; display:block;">
                <h5 class="mb-3">SECTION E: DECLARATION AND CHECKLIST</h5>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1" style="margin-left:20px;">11. DECLARATION (Please tick as applicable)</h4>
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
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;">
                                    <!-- Tables Border Colors -->
                                    <table class="table table-bordered border-secondary ">
                                        <thead>
                                           
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We certify that the information provided in this application is complete and correct.</td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We confirm that all investigators have approved the submitted version of proposal/related documents.</td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We confirm that this study will be conducted in accordance with the latest ICMR National Ethical Guidelines
                                                for Biomedical<br> and Health Research Involving Human Participants and other applicable regulations and guidelines.</td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We confirm that this study will be conducted in accordance with the Drugs and Cosmetics Act 1940 and its
                                                Rules 1945 as <br>amended from time to time, GCP guidelines and other applicable regulations and guidelines.</td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We will comply with all policies and guidelines of the institute and affiliated/collaborating institutions where
                                                this study will be conducted.</td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We will ensure that personnel performing this study are qualified, appropriately trained and will adhere to
                                                the provisions of the EC approved protocol. </td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We declare that the expenditure in case of injury related to the study will be taken care of.</td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We confirm that an undertaking of what will be done with the leftover samples is provided, if applicable.</td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We confirm that we shall submit any protocol amendments, adverse events report, significant deviations
                                                from protocols,<br> progress reports and a final report and also participate in any audit of the study if needed. </td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We confirm that we will maintain accurate and complete records of all aspects of the study.</td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We will protect the privacy of participants and assure confidentiality of data and biological samples.</td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We hereby declare that I/any of the investigators, researchers and/or close relative(s), have no conflict of
                                                <br>interest (Financial/Non-Financial) with the sponsor(s) and outcome of study.</td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We have the following conflict of interest (PI/Co-I):
                                                    <p class="dotted-line">1. <span></span></p>
                                                    <input type="text" class="form-control">
                                                    <p class="dotted-line">2. <span></span></p>
                                                    <input type="text" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input  type="checkbox" id="html"  value="HTML"></td>
                                                <td>I/We declare/confirm that all necessary government approvals will be obtained as per requirements wherever applicable.</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="form-group">
                                                        <label class="dotted-line">Name of PI:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="dotted-line">Signature:</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="dotted-line">Name of Co-PI:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="dotted-line">Signature:</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="dotted-line">Name of Guide:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="dotted-line">Signature:</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="dotted-line">Name of HOD:</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="dotted-line">Signature:</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
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
                            <h4 class="card-title mb-0 flex-grow-1" style="margin-left:20px;">12. CHECKLIST</h4>
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
                                <div class="row gy-4"   style="margin-left:15px; margin-right:15px;">
                                    <!-- Tables Border Colors -->
                                    <table class="table table-bordered border-secondary ">
                                        <tr>
                                            <thead>
                                            <th>S.No</th>
                                            <th>Items</th>
                                            <th>Yes</th>
                                            <th>No</th>
                                            <th>NA</th>
                                            <th>Enclosure No</th>
                                            <th>EC Remarks(If applicable)</th>
                                            </thead>
                                        </tr>
                                        <tbody>
                                        <tr>
                                            <td colspan=7>ADMINISTRATIVE REQUIREMENTS</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td class="table_column_width">Cover letter</td>
                                            <td><input  type="checkbox" id="html"  value="HTML" name="CoverLetterYN" onclick="checkOnlyOne(this, 'CoverLetterYN')"></td>
                                            <td><input  type="checkbox" id="html"  value="HTML" name="CoverLetterYN" onclick="checkOnlyOne(this, 'CoverLetterYN')"></td>
                                            <td><input  type="checkbox" id="html"  value="HTML" name="CoverLetterYN" onclick="checkOnlyOne(this, 'CoverLetterYN')"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="table_column_width">Brief CV of all Investigators</td>
                                            <td><input  type="checkbox" id="html" name="BriefCvYN" onclick="checkOnlyOne(this, 'BriefCvYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="BriefCvYN" onclick="checkOnlyOne(this, 'BriefCvYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="BriefCvYN" onclick="checkOnlyOne(this, 'BriefCvYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="table_column_width">Good Clinical Practice (GCP) training of investigators in last 3 years</td>
                                            <td><input  type="checkbox" id="html" name="GoodClinicalPracticeYN" onclick="checkOnlyOne(this, 'GoodClinicalPracticeYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="GoodClinicalPracticeYN" onclick="checkOnlyOne(this, 'GoodClinicalPracticeYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="GoodClinicalPracticeYN" onclick="checkOnlyOne(this, 'GoodClinicalPracticeYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="table_column_width">Approval of scientific committee</td>
                                            <td><input  type="checkbox" id="html" name="ApprovalScientificCommitteeYN" onclick="checkOnlyOne(this, 'ApprovalScientificCommitteeYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="ApprovalScientificCommitteeYN" onclick="checkOnlyOne(this, 'ApprovalScientificCommitteeYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="ApprovalScientificCommitteeYN" onclick="checkOnlyOne(this, 'ApprovalScientificCommitteeYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="table_column_width">EC clearance of other centers*</td>
                                            <td><input  type="checkbox" id="html" name="EcClearenceYN" onclick="checkOnlyOne(this, 'EcClearenceYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="EcClearenceYN" onclick="checkOnlyOne(this, 'EcClearenceYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="EcClearenceYN" onclick="checkOnlyOne(this, 'EcClearenceYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td class="table_column_width">Agreement between collaborating partners*</td>
                                            <td><input  type="checkbox" id="html" name="CollaboratingPartnerYN" onclick="checkOnlyOne(this, 'CollaboratingPartnerYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="CollaboratingPartnerYN" onclick="checkOnlyOne(this, 'CollaboratingPartnerYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="CollaboratingPartnerYN" onclick="checkOnlyOne(this, 'CollaboratingPartnerYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td class="table_column_width">MTA between collaborating partners* </td>
                                            <td><input  type="checkbox" id="html" name="MTAbetweenCollaboratingPartnerYN" onclick="checkOnlyOne(this, 'MTAbetweenCollaboratingPartnerYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="MTAbetweenCollaboratingPartnerYN" onclick="checkOnlyOne(this, 'MTAbetweenCollaboratingPartnerYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="MTAbetweenCollaboratingPartnerYN" onclick="checkOnlyOne(this, 'MTAbetweenCollaboratingPartnerYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td class="table_column_width">Insurance policy/certificate</td>
                                            <td><input  type="checkbox" id="html" name="InsurancePolicyYN" onclick="checkOnlyOne(this, 'InsurancePolicyYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="InsurancePolicyYN" onclick="checkOnlyOne(this, 'InsurancePolicyYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="InsurancePolicyYN" onclick="checkOnlyOne(this, 'InsurancePolicyYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td class="table_column_width">Evidence of external laboratory credentials in case of an externally
                                            outsourced <br> laboratory study QA/QC certification</td>
                                            <td><input  type="checkbox" id="html" name="ExternalLaboratoryCredentialsYN" onclick="checkOnlyOne(this, 'ExternalLaboratoryCredentialsYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="ExternalLaboratoryCredentialsYN" onclick="checkOnlyOne(this, 'ExternalLaboratoryCredentialsYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="ExternalLaboratoryCredentialsYN" onclick="checkOnlyOne(this, 'ExternalLaboratoryCredentialsYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td class="table_column_width">Copy of contract or agreement signed with the sponsor or donor agency</td>
                                            <td><input  type="checkbox" id="html" name="ContractAgreementYN" onclick="checkOnlyOne(this, 'ContractAgreementYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="ContractAgreementYN" onclick="checkOnlyOne(this, 'ContractAgreementYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="ContractAgreementYN" onclick="checkOnlyOne(this, 'ContractAgreementYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td class="table_column_width">Provide all significant previous decisions (e.g. those leading to a
                                                negative decision or modified protocol)by other ECs/Regulatory
                                                authorities for proposed study (whether in same location or elsewhere)
                                                and modification(s) to protocol</td>
                                            <td><input  type="checkbox" id="html" name="significantPreviousDecisionsYN" onclick="checkOnlyOne(this, 'significantPreviousDecisionsYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="significantPreviousDecisionsYN" onclick="checkOnlyOne(this, 'significantPreviousDecisionsYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="significantPreviousDecisionsYN" onclick="checkOnlyOne(this, 'significantPreviousDecisionsYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td colspan=7>PROPOSAL RELATED</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td class="table_column_width">Copy of the detailed protocol</td>
                                            <td><input  type="checkbox" id="html" name="CopyOfProtocolYN" onclick="checkOnlyOne(this, 'CopyOfProtocolYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="CopyOfProtocolYN" onclick="checkOnlyOne(this, 'CopyOfProtocolYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="CopyOfProtocolYN" onclick="checkOnlyOne(this, 'CopyOfProtocolYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>

                                        <tr>
                                            <td>13</td>
                                            <td class="table_column_width">Investigators Brochure (If applicable for drug/biologicals/device trials)</td>
                                            <td><input  type="checkbox" id="html" name="InvestigatorsBrochureYN" onclick="checkOnlyOne(this, 'InvestigatorsBrochureYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="InvestigatorsBrochureYN" onclick="checkOnlyOne(this, 'InvestigatorsBrochureYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="InvestigatorsBrochureYN" onclick="checkOnlyOne(this, 'InvestigatorsBrochureYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td class="table_column_width">Participant Information Sheet (PIS) and Participant Informed Consent
                                            Form <br> (ICF)(English and translated) </td>
                                            <td><input  type="checkbox" id="html" name="ParticipantInformationSheetYN" onclick="checkOnlyOne(this, 'ParticipantInformationSheetYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="ParticipantInformationSheetYN" onclick="checkOnlyOne(this, 'ParticipantInformationSheetYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="ParticipantInformationSheetYN" onclick="checkOnlyOne(this, 'ParticipantInformationSheetYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td class="table_column_width">Assent form for minors (12-18 years) (English and Translated)</td>
                                            <td><input  type="checkbox" id="html" name="AssentFormMinorYN" onclick="checkOnlyOne(this, 'AssentFormMinorYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="AssentFormMinorYN" onclick="checkOnlyOne(this, 'AssentFormMinorYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="AssentFormMinorYN" onclick="checkOnlyOne(this, 'AssentFormMinorYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td class="table_column_width">Proforma/Questionnaire / Case Report Forms (CRF)/ Interview guides/
                                            Guides<br>  for Focused Group Discussions (FGDs) (English and translated)</td>
                                            <td><input  type="checkbox" id="html" name="ProformaQuestionnaireFormYN" onclick="checkOnlyOne(this, 'ProformaQuestionnaireFormYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="ProformaQuestionnaireFormYN" onclick="checkOnlyOne(this, 'ProformaQuestionnaireFormYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="ProformaQuestionnaireFormYN" onclick="checkOnlyOne(this, 'ProformaQuestionnaireFormYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td class="table_column_width">Advertisement/material to recruit participants (fliers, posters etc)</td>
                                            <td><input  type="checkbox" id="html" name="AdvertisementMaterialYN" onclick="checkOnlyOne(this, 'AdvertisementMaterialYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="AdvertisementMaterialYN" onclick="checkOnlyOne(this, 'AdvertisementMaterialYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="AdvertisementMaterialYN" onclick="checkOnlyOne(this, 'AdvertisementMaterialYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td colspan=7>PERMISSION FROM GOVERNING AUTHORITIES</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Other permissions</td>
                                            <td>Required</td>
                                            <td>Not required</td>
                                            <td>Received</td>
                                            <td>Applied dd/mm/yy</td>
                                            <td>EC Remarks</td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>CTRI</td>
                                            <td><input  type="checkbox" id="html" name="CTRIYN" onclick="checkOnlyOne(this, 'CTRIYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="CTRIYN" onclick="checkOnlyOne(this, 'CTRIYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="CTRIYN" onclick="checkOnlyOne(this, 'CTRIYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td>DCGI </td>
                                            <td><input  type="checkbox" id="html" name="DCGIYN" onclick="checkOnlyOne(this, 'DCGIYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="DCGIYN" onclick="checkOnlyOne(this, 'DCGIYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="DCGIYN" onclick="checkOnlyOne(this, 'DCGIYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>HMSC </td>
                                            <td><input  type="checkbox" id="html" name="HMSCYN" onclick="checkOnlyOne(this, 'HMSCYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="HMSCYN" onclick="checkOnlyOne(this, 'HMSCYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="HMSCYN" onclick="checkOnlyOne(this, 'HMSCYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>21</td>
                                            <td>NAC-SCRT </td>
                                            <td><input  type="checkbox" id="html" name="NAC-SCRTYN" onclick="checkOnlyOne(this, 'NAC-SCRTYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="NAC-SCRTYN" onclick="checkOnlyOne(this, 'NAC-SCRTYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="NAC-SCRTYN" onclick="checkOnlyOne(this, 'NAC-SCRTYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>ICSCR </td>
                                            <td><input  type="checkbox" id="html" name="ICSCRYN" onclick="checkOnlyOne(this, 'ICSCRYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="ICSCRYN" onclick="checkOnlyOne(this, 'ICSCRYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="ICSCRYN" onclick="checkOnlyOne(this, 'ICSCRYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td>RCGM </td>
                                            <td><input  type="checkbox" id="html" name="RCGMYN" onclick="checkOnlyOne(this, 'RCGMYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="RCGMYN" onclick="checkOnlyOne(this, 'RCGMYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="RCGMYN" onclick="checkOnlyOne(this, 'RCGMYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td>GEAC </td>
                                            <td><input  type="checkbox" id="html" name="GEACYN" onclick="checkOnlyOne(this, 'GEACYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="GEACYN" onclick="checkOnlyOne(this, 'GEACYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="GEACYN" onclick="checkOnlyOne(this, 'GEACYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td>BARC </td>
                                            <td><input  type="checkbox" id="html" name="BARCYN" onclick="checkOnlyOne(this, 'BARCYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="BARCYN" onclick="checkOnlyOne(this, 'BARCYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="BARCYN" onclick="checkOnlyOne(this, 'BARCYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td>Tribal Board </td>
                                            <td><input  type="checkbox" id="html" name="TribalBoardYN" onclick="checkOnlyOne(this, 'TribalBoardYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="TribalBoardYN" onclick="checkOnlyOne(this, 'TribalBoardYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="TribalBoardYN" onclick="checkOnlyOne(this, 'TribalBoardYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td>Others (Specify)</td>
                                            <td><input  type="checkbox" id="html" name="OthersYN" onclick="checkOnlyOne(this, 'OthersYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="OthersYN" onclick="checkOnlyOne(this, 'OthersYN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="OthersYN" onclick="checkOnlyOne(this, 'OthersYN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>

                                        <tr>
                                            <td colspan=7>ANY OTHER RELEVANT INFORMATION/DOCUMENTS RELATED TO THE STUDY</td>
                                        </tr>

                                        <tr>
                                            <td>28</td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input  type="checkbox" id="html" name="other1YN" onclick="checkOnlyOne(this, 'other1YN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="other1YN" onclick="checkOnlyOne(this, 'other1YN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="other1YN" onclick="checkOnlyOne(this, 'other1YN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                        <tr>
                                            <td>28</td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input  type="checkbox" id="html" name="other2YN" onclick="checkOnlyOne(this, 'other2YN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="other2YN" onclick="checkOnlyOne(this, 'other2YN')" value="HTML"></td>
                                            <td><input  type="checkbox" id="html" name="other2YN" onclick="checkOnlyOne(this, 'other2YN')" value="HTML"></td>
                                            <td><input class="form-control" type="text"  ></td>
                                            <td><input class="form-control" type="text"  ></td>
                                        </tr>
                                            
                                            
                                        </tbody>
                                    </table>
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

    <!-- custom js -->
    <script src="{{ asset('js/forms_and_documents/initial_review_form.js') }}"></script>
  
@endsection

