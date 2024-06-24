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
        .no-border {
            border: none;
            outline: none;
        }
        .underline {
            border: none; /* Remove default border */
            border-bottom: 1.5px dashed black; /* Add underline effect */
            outline: none; /* Remove outline on focus */
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
            }

            th{
                background: grey;
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
                            <!-- <h4 class="mb-sm-0">Study Registration Form</h4> -->

                            <!-- <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">EC's Profile</li>
                                    <li class="breadcrumb-item active">EC's Profile</li>
                                </ol>
                            </div> -->

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    
                    <div class="col-xxl-6">
                        <!-- <h5 class="mb-3">Custom Nav</h5> -->
                        <div class="card">
                            <div class="card-body">
                               
                                <div class="d-flex">
                                    
                                    <div class="flex-grow-1 ms-2">
                                    
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h3 style="display: inline-block; color: red; background-color: yellow; margin-top: 30px; margin-bottom:30px">Application Form for Initial Review</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 ">
                                                <p3>General Instructions:</p3>
                                                <ul>
                                                    <li>Please ensure that you are using the appropriate form to submit your application.</li>
                                                    <li>Refer Section-A Particulars to ensure that you are completing this form for the study that you intend to submit.</li>
                                                    <li>Tick one or more options as applicable. Mark NA if not applicable. Do not leave field blank or any questions or not answered.</li>
                                                    <li>Date format should be followed as DD-MMM-YYYY</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 ">
                                                <h5> <span style="color: white; background-color: blue;">SECTION-A: Particulars</span></h5>
                                                <table >
                                                    <tr>
                                                        <td>EC Ref. No.:</td>
                                                        <td>Name of the Institution/Investigational Site:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Protocol Number:</td>
                                                        <td>Name of the Sponsor:</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">Title of the study:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Type of Research:</td>
                                                        <td>Study Indication:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Date of EC approval: NOT APPROVED YET</td>
                                                        <td><input type="date" id="html" name="fav_language" value=""></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            Principal Investigator (Name, Designation and Affiliation):<br>
                                                            Name:<br>
                                                            Designation:<br>
                                                            Department/Division:<br>
                                                            Affiliation:<br>
                                                            Address:<br>
                                                            Telephone number (office):<br>
                                                            Mobile Phone number:<br>
                                                            E-mail ID:

                                                        </td>
                                                    </tr>
                                                   
                                                </table>

                                            </div>
                                        </div>

                                        <div class="row" style="margin-top : 30px;">
                                            <div class="col-12 ">
                                            <h5>Contents</h5>

                                            <h5>SECTION-B: BASIC INFORMATION</h5>
                                            <ul>
                                                <li><a href="#admin_details"><strong>1. ADMINISTRATIVE DETAILS   .............................................................  2</strong></a></li>
                                                <li><a href="#funding_details"><strong>2. FUNDING DETAILS AND BUDGET .............................................................  2</strong></a></li>
                                            </ul>

                                            <h5>SECTION-C: RESEARCH RELATED INFORMATION</h5>
                                            <ul>
                                                <li><a href="#research_overview"><strong>1. OVERVIEW OF RESEARCH .............................................................  4</strong></a></li>
                                                <li><a href="#methodology"><strong>2. METHODOLOGY .............................................................  4</strong></a></li>
                                            </ul>

                                            <h5>SECTION-D: PARTICIPANT RELATED INFORMATION</h5>
                                            <ul>
                                                <li><a href="#participant_details"><strong>3. RESEARCH PARTICIPANTS</strong></a></li>
                                                <li><a href="#benefits_risks"><strong>4. BENEFITS AND RISKS</strong></a></li>
                                                <li><a href="#recruitment"><strong>5. RECRUITMENT</strong></a></li>
                                                <li><a href="#informed_consent"><strong>6. INFORMED CONSENT</strong></a></li>
                                                <li><a href="#payment_compensation"><strong>7. PAYMENT/COMPENSATION</strong></a></li>
                                                <li><a href="#storage_confidentiality"><strong>8. STORAGE AND CONFIDENTIALITY</strong></a></li>
                                            </ul>

                                            <h5>SECTION-E: OTHER PARTICULARS</h5>
                                            <ul>
                                                <li><a href="#publication_issues"><strong>9. PUBLICATION, BENEFIT SHARING AND IPR ISSUES</strong></a></li>
                                            </ul>

                                            <h5>SECTION-F: DECLARATION AND CHECKLIST</h5>
                                            <ul>
                                                <li><a href="#declaration"><strong>10. DECLARATION (Please tick as applicable)</strong></a></li>
                                            </ul>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top:40px;">
                                        <h5> <span style="color: white; background-color: grey;">SECTION-B: BASIC INFORMATION</span></h5>
                                        <h5 style="margin-bottom:20px;">1. ADMINISTRATIVE DETAILS</h5>
                                        <p><label>Type of review requested:</label></p>
                                            <div class="col-3 ">
                                                <label>Exemption from review</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                                </div>
                                            <div class="col-3 ">
                                                <label>Expedited review</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-3 ">
                                                <label>Full committee review</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-3 ">
                                                
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4 ">
                                                <label>Acronym/Short title of the study : None</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                                </div>
                                            <div class="col-4 ">
                                                <label>(check this box if no Acronym/short title)</label>
                                                
                                            </div>
                                            <div class="col-4 ">
                                                
                                            </div>
                                        </div>

                                        <div class="row">
                                        <p style="text-align:center; margin-top:40px;"><label>Expedited Review</label></p>
                                        <p style=" margin-top:20px;"><label>Choose reasons why expedited review from EC is requested?</label></p>
                                            <div class="col-12">
                                                <label>1. Involves non-identifiable specimen and human tissue from sources like blood banks, tissue banks and left-over clinical samples.</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                                </div>
                                            <div class="col-12 ">
                                                <label>2. Involves clinical documentation materials that are non-identifiable (data, documents, records)</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>3. Modification or amendment to approved protocol (administrative changes/correction of typographical errors and change in researcher(s)).</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>4. Revised proposal previously approved through expedited review, full review or continuing review of approved proposal.</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>5. Minor deviation from originally approved research causing no risk or minimal risk.</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>6. Progress/annual report where there is no additional risk, for example activity limited to data analysis.</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>7. Expedited review of SAEs/unexpected AEs will be conducted by SAE subcommittee</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>8. For multi-centre research where a designated EC has approved the proposal, a participating EC may</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>9. Research during emergencies and disasters (See Section 12 of ICMR Ethical Guidelines, 2017).</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>10. Any other (please specify)</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <h5>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-10 ">
                                                <label>Is waiver of consent being requested?</label>
                                                </div>
                                            <div class="col-1 ">
                                            <label>Yes</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-1 ">
                                                <label>No</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-10 ">
                                                <label>Does the research involve vulnerable persons13 ?</label>
                                                </div>
                                            <div class="col-1 ">
                                                <label>Yes</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-1 ">
                                                <label>No</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 ">
                                                <label>If Yes give details:</label>
                                                </div>
                                            <div class="col-12 ">
                                                <label>-------------------------------------------------------------------------------------------------------------------------------------------------------------</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <p style="text-align:center; margin-top:40px;"><label>Exemption from Review</label></p>
                                        <p style=" margin-top:20px;"><label>Choose reasons why exemption from ethics review is requested14?</label></p>
                                            <div class="col-12">
                                                <label>1. Research on data in the public domain/ systematic reviews or meta-analyses.</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                                </div>
                                            <div class="col-12 ">
                                                <label>Observation of public behavior/ information recorded without linked identifiers and disclosure would not harm the interests of the observed person</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>Quality control and quality assurance audits in the institution</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>Comparison among instructional techniques, curricula, or classroom management methods</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>Consumer acceptance studies related to taste and food quality</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>Public health programmes by government agencies1</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <label>Any other (please specify in 100 words):</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-12 ">
                                                <h5>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</h5>
                                            </div>
                                        </div>


                                        
                                        <div class="row" style="margin-top:30px;">
                                        <p><label>2. FUNDING DETAILS AND BUDGET</label></p>
                                            <div class="col-4 ">
                                                <label>Self-funding</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-4 ">
                                                <label>Institutional funding</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-4 ">
                                                <label> Funding agency (Specify) </label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 ">
                                                <label> Others</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                                <label>  (Specify)</label>
                                            </div>

                                            <div class="col-12 ">
                                                <label> -------------------------------------------------------------------------------------------------------------------------------</label>
                                              
                                                <label>Total Estimated Budget for Site: -----------------------------------------------------------------------------</label>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:30px;">
                                            <div class="col-12">
                                                <h5> <span style="color: white; background-color: grey; ">SECTION-C: RESEARCH RELATED INFORMATION </span></h5>
                                                <p style="color: blue;">Enter the details as required; </p>
                                                <p><label>OVERVIEW OF RESEARCH</label></p>
                                            </div>
                                        </div>

                                        <!-- <div class="row" style="margin-top:50px;">
                                            <div class="col-12 ">
                                                <h5><span style="color: white; background-color: blue;">SECTION-B Principal Investigator</span></h5>
                                                <label style="margin-top:30px;"><strong>Principal Investigator (Name, Designation and Affiliation):</strong></label>
                                                <input type="text" id="protocol_number" class="no-border"><br>
                                                <label ><strong>Name:</strong></label>
                                                <input type="text" class="no-border"><br>
                                                <label style="margin-top:20px;"><strong>Designation:</strong></label>
                                                <input type="text" class="no-border"><br>
                                                <label style="margin-top:20px;"><strong>Name of the Institution/Hospital:</strong></label>
                                                <input type="text" class="no-border"><br>
                                                <label style="margin-top:20px;"><strong>Department/Division:</strong></label>
                                                <input type="text" class="no-border"><br>
                                                <label style="margin-top:20px;"><strong>Address:</strong></label>
                                                <input type="text" class="no-border"><br>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label style="margin-top:30px;"><strong>Telephone number (office):</strong></label>
                                                <input type="text" id="protocol_number" class="no-border">
                                            </div>
                                            <div class="col-6">
                                                <label style="margin-top:30px;"><strong>Mobile Phone number:</strong></label>
                                                <input type="text" id="protocol_number" class="no-border">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <label style="margin-top:30px;"><strong>Number of Studies (where applicant is a Principal Investigator) at the time of New Study Registration:</strong></label>
                                                <input type="text" id="protocol_number" class="underline">
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top:50px;">
                                            <div class="col-12 ">
                                                <h5><span style="color: white; background-color: blue;">SECTION-C Study Team</span></h5>
                                                <label>Enter the details of your Proposed Study Team in the table below: PI will be granted User access by default for the study.<label><br>
                                                <table>
                                                    <tr>
                                                        <th>Full Name(First, Middle, Last)</th>
                                                        <th>Complete Address (Including Department & Institution)</th>
                                                        <th>Role in the study</th>
                                                        <th>Email Address</th>
                                                        <th>Telephone Number Office</th>
                                                        <th>Mobile Number</th>
                                                        <th>User Access required(Yes/No) </th>
                                                        <th>Type of Access </th>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                         <input type="radio" id="html" name="fav_language" value="HTML">
                                                         <label for="html">Yes</label><br>
                                                         <input type="radio" id="css" name="fav_language" value="CSS">
                                                         <label for="css">No</label>
                                                        </td>
                                                        <td>
                                                        <select name="cars" id="cars">
                                                            <option value="">Select</option>
                                                            <option value="volvo">Study  Investigator</option>
                                                            <option value="saab">Study Administrator</option>
                                                        </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                         <input type="radio" id="html" name="fav_language" value="HTML">
                                                         <label for="html">Yes</label><br>
                                                         <input type="radio" id="css" name="fav_language" value="CSS">
                                                         <label for="css">No</label>
                                                        </td>
                                                        <td>
                                                        <select name="cars" id="cars">
                                                            <option value="">Select</option>
                                                            <option value="volvo">Study  Investigator</option>
                                                            <option value="saab">Study Administrator</option>
                                                        </select>
                                                        </td>
                                                    </tr>
                                                    
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label style="margin-top:30px;"><strong>Study Investigator (Super User): only Super user can sign and submit the applications.</strong></label>
                                                <input type="text" id="protocol_number" class="no-border">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label style="margin-top:30px;"><strong>Study Administrator (Admin User): can only draft the applications.</strong></label>
                                                <input type="text" id="protocol_number" class="no-border"><br>
                                                <label style="margin-top:30px;"><strong>Declaration:<br></strong></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label style="margin-top:30px;"><strong>I hereby confirm that the above information are true to my knowledge.</strong></label>
                                                <input type="text" id="protocol_number" class="no-border">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label style="margin-top:30px;"><strong>Submit:</strong></label>
                                                <input type="text" id="protocol_number" class="no-border">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label style="margin-top:30px;"><strong>Date:</strong></label>
                                                <input type="text" id="protocol_number" class="no-border">
                                            </div>
                                        </div> -->
                                    </div>





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