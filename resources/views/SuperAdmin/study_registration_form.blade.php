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
                            <h4 class="mb-sm-0">Study Registration Form</h4>

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
                                                <h3 style="display: inline-block; color: red; background-color: yellow; margin-top: 30px; margin-bottom:30px">Study Registration Form</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 ">
                                                <p3>General Instructions:</p3>
                                                <ul>
                                                    <li>All Users are advised to read the ec-port User manual before submitting the Study Registration Form.</li>
                                                    <li>Complete ‘’Study Registration Form’’ is to register your new study and it’s a mandatory step before you proceed with the initial submission of study protocol. </li>
                                                    <li>Click here to download ec-port User Manual.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 ">
                                                <h5> <span style="color: white; background-color: blue;">SECTION-A Study Particulars</span></h5>
                                                <label><strong>Protocol Number:</strong></label>
                                                <input type="text" id="protocol_number" class="no-border"><br>
                                                <label><strong>Title of the study:</strong></label>
                                                <input type="text" class="no-border"><br>
                                                <label><strong>Name and Address of the Sponsor:</strong></label>
                                                <input type="text" class="no-border"><br>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top : 30px;">
                                            <div class="col-12 ">
                                                <p><strong>Type of Research: </strong></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4 ">
                                                <label>Basic Sciences</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                                </div>
                                            <div class="col-4 ">
                                                <label>Clinical Trial</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-4 ">
                                                <label>Cross Sectional</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4 ">
                                                <label>Retrospective</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                                </div>
                                            <div class="col-4 ">
                                                <label>Epidemiological</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-4 ">
                                                <label>Case Control</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4 ">
                                                <label>Prospective</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                                </div>
                                            <div class="col-4 ">
                                                <label>Public Health</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-4 ">
                                                <label>Cohort</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4 ">
                                                <label>Qualitative</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                                </div>
                                            <div class="col-4 ">
                                                <label>Socio-behavioural</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                            <div class="col-4 ">
                                                <label>Systematic Review</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4 ">
                                                <label>Quantitative Data</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                                </div>
                                            <div class="col-4 ">
                                                <label>Biological samples</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-4 ">
                                                <label>Mixed Method</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                                </div>
                                            <div class="col-4 ">
                                                <label>Any others (Specify)</label>
                                                <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                                            </div>
                                        </div>


                                        
                                        <div class="row" style="margin-top:30px;">
                                            <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="registered_name"><strong>Study Indication:</strong></label> <br>
                                                        <input type="text" style="width:200px;" id="registered_name">
                                                    </div>
                                                 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="registered_name"><strong>Phase of the study:</strong></label><br>
                                                        <input type="text" style="width:200px;" id="registered_name">
                                                    </div>
                                                 
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top:50px;">
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
                                        </div>
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