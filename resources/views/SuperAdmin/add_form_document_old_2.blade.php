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
        .dropdown-menu {
            display: none;
            /* Other dropdown menu styles */
        }
        .dropdown-menu.active {
            display: block;
        }

        
        .dotted-line {
            display: flex;
            margin-bottom: 30px;
            width: 100%;
        }
        .dotted-line span {
            flex-grow: 1;
            border-bottom: 1px dotted black;
            margin-left: 5px;
        }

  </style>

<style>
    .blue-underline {
        text-decoration: underline;
        color: blue;
    }
</style>
  
@endsection

@section('content')
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="card-body bg-marketplace d-flex">
                                <div class="flex-grow-1">
                               
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h5 class="fs-18">-> Want to adopt the <span class="blue-underline">COMMON FORMS FOR ETHICS COMMITTEES REVIEW</span> customized from <span class="blue-underline">ETHICS COMMITTEE TOOLS</span> provided by <span class="blue-underline">ICMR BIOETHICS UNIT</span> ?</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="form-check-input ml-2" type="radio" name="selectradio" id="yesRadio" value="yes">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h5 class="fs-18">-> Want to use our EC forms & tools ?</h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="form-check-input ml-2" type="radio" name="selectradio" id="noRadio" value="no">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 one" style="display:none;">
                        <div class="card">

                            <div class="card-body">

                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">Sl.No</th>
                                                    <th class="text-center" scope="col">Name</th>
                                                    <th class="text-center" scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td class="text-center">Initial Review</td>
                                                    <td class="text-center"><a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl" href="#">View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-12 one" style="display:none;">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">- Annexures</h4>
                                <!-- <h4 class="card-title mb-0 mt-3" style="margin-left:30px">1. Mandatory Reports</h4> -->
                            </div><!-- end card header -->

                            <div class="card-body">

                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">Sl.No</th>
                                                    <th class="text-center" scope="col">Name</th>
                                                    <th class="text-center" scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>02</td>
                                                <td>Continuing Review / Annual report format</td>
                                                <td class="text-center"><a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl aa" href="#">View</a></td>
                                            </tr>

                                            <tr>
                                                <td>03</td>
                                                <td>Application/Notification form for Amendments</td>
                                                <td class="text-center"><button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#addform">Add</button></td>
                                            </tr>

                                            <tr>
                                                <td>04</td>
                                                <td>Protocol Violation/Deviation Reporting form (Reporting by case)</td>
                                                <td class="text-center"><button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#addform">Add</button></td>
                                            </tr>

                                            <tr>
                                                <td>05</td>
                                                <td>Serious Adverse Event Reporting Format (Biomedical Health Research)</td>
                                                <td class="text-center"><button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#addform">Add</button></td>
                                            </tr>

                                            <tr>
                                                <td>06</td>
                                                <td>Premature Termination/Suspension/ Discontinuation Report Format</td>
                                                <td class="text-center"><button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#addform">Add</button></td>
                                            </tr>

                                            <tr>
                                                <td>07</td>
                                                <td>Clinical Trials</td>
                                                <td class="text-center"><button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#addform">Add</button></td>
                                            </tr>

                                            <tr>
                                                <td>08</td>
                                                <td>Serious Adverse Event Reporting Format (Clinical trials)</td>
                                                <td class="text-center"><button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#addform">Add</button></td>
                                            </tr>

                                            <tr>
                                                <td>09</td>
                                                <td>Human Genetics Testing Research</td>
                                                <td class="text-center"><button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#addform">Add</button></td>
                                            </tr>

                                            <tr>
                                                <td>10</td>
                                                <td>Socio-Behavioural and Public Health Research</td>
                                                <td class="text-center"><button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#addform">Add</button></td>
                                            </tr>

                                            <tr>
                                                <td>11</td>
                                                <td>Study completion/Final report format</td>
                                                <td class="text-center"><button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#addform">Add</button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-12 one" style="display:none;">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">- Templates</h4>
                                <!-- <h4 class="card-title mb-0 mt-3" style="margin-left:30px">1. Mandatory Reports</h4> -->
                            </div><!-- end card header -->
                            <div class="card-body">

                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">Sl.No</th>
                                                    <th class="text-center" scope="col">Name</th>
                                                    <th class="text-center" scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>12</td>
                                                    <td class="">Format for Curriculum Vitae for Investigators</td>
                                                    <td class="text-center"><button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#addform">Add</button></td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td class="">Format for Project extension </td>
                                                    <td class="text-center"><button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#addform">Add</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-12" style="display:none;" id="two">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">A. Ethics Forms and Templates</h4>
                                <!-- <h4 class="card-title mb-0 mt-3" style="margin-left:30px">1. Mandatory Reports</h4> -->
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Form</button>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Document</button>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control search" placeholder="Search...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="live-preview">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">Document Name</th>
                                                    <th class="text-center" scope="col">Version Number</th>
                                                    <th class="text-center" scope="col">Date</th>
                                                    <th class="text-center" scope="col">Effective Date</th>
                                                    <th class="text-center"  scope="col">Document # or ID, if any</th>
                                                    <th class="text-center" scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="8"><h4 class="card-title" style="margin-left:50px">1. Mandatory Reports</h4></td>
                                                </tr>
                                                <tr>
                                                    <th>Study Amendment Cover Note</th>
                                                    <td class="text-center">4.0</td>
                                                    <td class="text-center">01-Jun-09</span></td>
                                                    <td class="text-center">01-Jun-09</td>
                                                    <td class="text-center">205-010</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Study Status Report Form </th>
                                                    <td class="text-center">7.0</td>
                                                    <td class="text-center">20-Nov-09</span></td>
                                                    <td class="text-center">20-Nov-09</td>
                                                    <td class="text-center">205-011</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th >Non-Compliance / Protocol Deviation Report Form </th>
                                                    <td class="text-center">2.0</td>
                                                    <td class="text-center">01-Jun-09</td>
                                                    <td class="text-center">01-Jun-09</td>
                                                    <td class="text-center">205-016</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>UPIRTSO Report Form</th>
                                                    <td class="text-center">6.0</td>
                                                    <td class="text-center">01-Apr-22</td>
                                                    <td class="text-center">01-Apr-22</td>
                                                    <td class="text-center">205-012</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Expected Serious Adverse Event (SAE) Reporting Form & Guide </th>
                                                    <td class="text-center">1.2</td>
                                                    <td class="text-center">22-Mar-18</td>
                                                    <td class="text-center">22-Mar-18</td>
                                                    <td class="text-center">205-030</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="8"><h4 class="card-title" style="margin-left:50px">2. Application Forms</h4></td>
                                                </tr>
                                                <tr>
                                                    <th>Annex A - Placebo use</th>
                                                    <td class="text-center">2.0</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">205-002</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Annex B - Conflict of Interest Declaration</th>
                                                    <td class="text-center">9.1</td>
                                                    <td class="text-center">01-Jul-22</td>
                                                    <td class="text-center">01-Jul-22</td>
                                                    <td class="text-center">205-003</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Annex C - Biological Materials Storage</th>
                                                    <td class="text-center">2.0</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">205-004</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Annex D - Industry Sponsored Studies</th>
                                                    <td class="text-center">2.0</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">205-005</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Annex E - Waiver of Informed Consent</th>
                                                    <td class="text-center">2.0</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">205-006</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Annex F - Research involving Pregnant Women, Foetuses & Neonates</th>
                                                    <td class="text-center">2.0</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">205-007</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Annex G - Research involving Children (For persons less than 21 years old)</th>
                                                    <td class="text-center">2.0</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">205-008</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Annex H - Research involving Prisoners</th>
                                                    <td class="text-center">2.0</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">205-009</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Waiver of CITI Certification Form (for waiver of PI's minimum training requirements)</th>
                                                    <td class="text-center">1.0</td>
                                                    <td class="text-center">01-Aug-06</td>
                                                    <td class="text-center">01-Aug-06</td>
                                                    <td class="text-center">205-015</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>DSRB Waiver of Completion of SGGCP Certification Form</th>
                                                    <td class="text-center">2.0</td>
                                                    <td class="text-center">19-Jun-14</td>
                                                    <td class="text-center">19-Jun-14</td>
                                                    <td class="text-center">205-029</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Study Team Member List for FCOI Declaration</th>
                                                    <td class="text-center">4.0</td>
                                                    <td class="text-center">27-Nov-19</td>
                                                    <td class="text-center">27-Nov-19</td>
                                                    <td class="text-center">205-031</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Notice of Intent Application Form</th>
                                                    <td class="text-center">1.0</td>
                                                    <td class="text-center">30-Mar-12</td>
                                                    <td class="text-center">30-Mar-12</td>
                                                    <td class="text-center">205-037</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Study Team Members list</th>
                                                    <td class="text-center">1.0</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">E01</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Principal Investigator's Declaration</th>
                                                    <td class="text-center">1.0</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">E02</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Study Team Members' endorsement</th>
                                                    <td class="text-center">1.0</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">E03</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Departmental Representative endorsement</th>
                                                    <td class="text-center">2.0</td>
                                                    <td class="text-center">30-Mar-22</td>
                                                    <td class="text-center">30-Mar-22</td>
                                                    <td class="text-center">205-021</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Institutional Representative endorsement</th>
                                                    <td class="text-center">3.0</td>
                                                    <td class="text-center">30-Mar-22</td>
                                                    <td class="text-center">30-Mar-22</td>
                                                    <td class="text-center">205-022</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>HoD and CMB Endorsement</th>
                                                    <td class="text-center">1.0</td>
                                                    <td class="text-center">30-Mar-22</td>
                                                    <td class="text-center">30-Mar-22</td>
                                                    <td class="text-center">205-035</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Characteristics of Target Study Participants</th>
                                                    <td class="text-center">1.0</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">19-Jan-07</td>
                                                    <td class="text-center">E06</td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-2-fill"></i>
                                                            </a>
                                                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">Edit</a></li>
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteforms">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->
                

                
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
    <script src="{{ asset('libs/list.js/list.min.js') }}"></script>
    <script src="{{ asset('libs/list.pagination.js/list.pagination.min.js') }}"></script>

    <!-- listjs init -->
    <script src="{{ asset('js/pages/listjs.init.js') }}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ asset('libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('input[name="selectradio"]').change(function(){
                if($(this).val() == 'yes'){
                    $('.one').show();
                    $('#two').hide();
                } else if($(this).val() == 'no'){
                    $('.one').hide();
                    $('#two').show();
                }
            });
        });
    </script>
    

@endsection

@section('modal')

<!-- view form modal -->
<!--  Large modal example -->
<div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                    <div style="background-color:#CCBFE6;">
                        <div class="row" >
                            <div class="col-2">
                                <div style="width: 100px; margin-left:10px; margin-top:10px; height: 100px; border: 1px solid #000; padding: 10px;">
                                    <img src="placeholder.jpg" alt="image" style="max-width: 100%; max-height: 100%;">
                                </div>
                            </div>
                            <div class="col-10 text-center" >
                                <h3 style="display: inline-block; color: #253F8E;  margin-top: 20px; margin-bottom:10px">Application Form for Initial Review</h3><br>
                                <h3>.........................................................................................................</h3>
                                <div>
                                    <p style="display: inline-block; margin-right: 20px;">(Name of the Institution)</p>
                                    <p style="display: inline-block; align-right;">EC Ref. No. (For office use):</p>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 ">
                            <p3>General Instructions:</p3>
                        </div>
                        <div class="col-10">
                            <ul>
                                <li>a) Tick one or more options as applicable. Mark NA if not applicable</li>
                                <li>b) Attach additional sheets if required</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12" style="text-align:center;">
                            <h5> <span style="color: white; background-color: blue; ">SECTION A - BASIC INFORMATION </span></h5>
                        </div>
                    </div>

                    <div class="row mt-4" >
                        <div class="col-12">
                            <p>1. ADMINISTRATIVE DETAILS</p>
                            <p style="margin-left:20px;">(a) Name of Organization: ………………………………………………………………………………………………..........................……………………..........</p>
                            <p style="margin-left:20px;">(b) Name of Ethics Committee: …………………………………………………………………………………………..................................………..………… </p>
                            <p style="margin-left:20px;">(c) Name of Principal Investigator: ………………………………………………………………………………….........................………………..……………</p>
                            <div style="margin-left:20px;">
                                    <p style="display: inline-block; margin-right: 20px;">(d) Department/Division: ……………………………………………………</p>
                                    <p style="display: inline-block; align-right;">(e) Date of submission: <input type="date"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 ">
                        <p style="margin-left:20px;">(f) Type of review requested :</p>
                        </div>
                        <div class="col-4 ">
                            <label style="margin-left:40px;">Exemption from review</label>
                            <input  type="checkbox" id="html" name="fav_language" value="HTML">
                        </div>
                        <div class="col-4 ">
                            <label style="margin-left:40px;">Expedited review </label>
                            <input  type="checkbox" id="html" name="fav_language" value="HTML">
                        </div>
                        <div class="col-4 ">
                            <label style="margin-left:40px;">Full committee review </label>
                            <input  type="checkbox" id="html" name="fav_language" value="HTML">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 ">
                        <p style="margin-left:20px;">(g) Title of the study: ………...............………………………………………………………………………………………………………………………..........................……………………..........</p>
                        <p style="margin-left:40px;">...............................…………………..……………………………………………………………………………………………………………………………………..........................……………………..........</p>
                        <p style="margin-left:40px;">...............................…………………..……………………………………………………………………………………………………………………………………..........................……………………..........</p>
                        <p style="margin-left:40px;">Acronym/ Short title, (If any):.…………………………………………...…………………….....…………………….…………………….…………………….……………………...…........</p>
                        <div style="margin-left:20px;">
                                <p style="display: inline-block; margin-right: 20px;">(h) Protocol number (If any): ………............……………………………………………</p>
                                <p style="display: inline-block; align-right;">Version number:........................................................................</p>
                        </div>  
                        <p style="margin-left:20px;">(i) Details of Investigators:</p>  
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-12" style="margin-left:20px; width:95%">
                                <style>
                                    .table-bordered {
                                        border-collapse: collapse;
                                        width: 100%;
                                    }

                                    .table-bordered th, .table-bordered td {
                                        border: 1px solid #dddddd;
                                        padding: 8px;
                                        text-align: left;
                                    }

                                    .table-bordered th {
                                        background-color: #f2f2f2;
                                    }
                                </style>
                            <table class="table-bordered">
                                <tr>
                                    <td>Name</td>
                                    <td>Designation and Qualification</td>
                                    <td>Department and Institution</td>
                                    <td>Address for communication</td>
                                </tr>
                                <tr>
                                    <td colspan="4">Principal Investigator/Guide</td>
                                </tr>
                                <tr style="height:100px;">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Co-investigator/student/fellow</td>
                                </tr>
                                <tr style="height:100px;">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                            </table>

                        </div>
                    </div>

                    <div class="row mt-4" >
                        <div class="col-12">
                            <p style="margin-left:20px;">(j) Number of studies where applicant is a:</p>
                            <div style="margin-left:40px;">
                                    <p style="display: inline-block; margin-right: 150px;">i) Principal Investigator at time of submission</p>
                                    <p style="display: inline-block; ">ii) Co-Investigator at time of submission:</p>
                            </div>
                            <div style="margin-left:40px;">
                                    <p style="display: inline-block; margin-right: 150px;">..........................................................................................................</p>
                                    <p style="display: inline-block; ">................................................................................................</p>
                            </div>
                            <div style="margin-left:40px;">
                                    <p style="display: inline-block; margin-right: 20px;">(k) Duration of the study:</p>
                                    <p style="display: inline-block;">..............................................................................................................................................................................................</p>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4" >
                        <div class="col-12">
                            
                            <p>2. FUNDING DETAILS AND BUDGET</p>
                            <p style="margin-left:20px;">(a) Total estimated budget for site: …………………………….................…………………………………..........................……………....................………..........</p>
                            <p style="margin-left:40px;">At site………………….............………………………………………………… In India......................................................Globally……………………..........................</p>
                            
                        </div>
                    </div>

                    <div class="row" style="margin-right:40px;">
                    <div class="col-4">
                            <label style="margin-left:20px;">(b) Self-funding</label>
                            <input  type="checkbox" id="html" name="fav_language" value="HTML">
                            </div>
                        <div class="col-4 ">
                            <label >Institutional funding</label>
                            <input  type="checkbox" id="html" name="fav_language" value="HTML">
                        </div>
                        <div class="col-4 ">
                            <label >Funding agency (Specify)</label>
                            <input  type="checkbox" id="html" name="fav_language" value="HTML">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <p style="margin-left:40px; margin-right:40px;" >………………………….....................................................................…………………….........................................................................……………………..........................</p>
                        </div>
                    </div>
                

                    <div class="row mt-4" >
                        <div class="col-12" style="text-align:center;">
                            <h5> <span style="color: white; background-color: blue; ">SECTION B - RESEARCH RELATED INFORMATION </span></h5>
                        </div>
                    </div> 
                    <div class="row mt-4" >
                        <div class="col-12">   
                            <p>3. OVERVIEW OF RESEARCH</p>
                            <p style="margin-left:20px;">(a) Lay summary3 (within 300 words): ………………………………………………………………………………………………..........................……………………................</p>
                            <p style="margin-left:20px;">……………………………………………………………………………………………………………………………………………………………………………………………..........................……………………..........</p>
                            <p style="margin-left:20px;">……………………………………………………………………………………………………………………………………………………………………………………………..........................……………………..........</p>
                            <p style="margin-left:20px;">……………………………………………………………………………………………………………………………………………………………………………………………..........................……………………..........</p>
                            <p style="margin-left:20px;">……………………………………………………………………………………………………………………………………………………………………………………………..........................……………………..........</p>
                            <p style="margin-left:20px;">……………………………………………………………………………………………………………………………………………………………………………………………..........................……………………..........</p>
                            
                        </div>
                    </div>

                    

                <div class="row" style="margin-top:40px;">
                    <p style="margin-left:20px;">(b) Type of study: </p>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Basic Sciences</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Clinical</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Cross Sectional</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Retrospective</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                        </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Epidemiological</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Case Control </label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>

                    <div class="col-4 ">
                        <label style="margin-left:40px;">Prospective</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                        </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Public Health</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Cohort </label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Qualitative</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                        </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Socio-behavioural</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Systematic Review </label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Quantitative</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                        </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Biological samples/ Data</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Mixed Method </label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4 ">
                        <label style="margin-left:40px;">Any others (Specify)  </label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-12">
                    <p style="margin-left:20px;">……………………………………………………………………………………………………………………………………………………………………………………………..........................……………………..........</p>
                    </div>
                </div>

                <div class="row" >
                    <div class="col-12">
                        <p>4. METHODOLOGY</p>
                        <p style="margin-left:20px;">(a) Sample size/ number of participants (as applicable) </p>
                        <p style="margin-left:40px;">At site………………….............………………………………………………… In India......................................................Globally……………………..........................</p>
                        <p style="margin-left:40px;">Control group………………….............………………………………………………… Study group...............................................................………....................</p>
                        <p style="margin-left:40px;">Justification for the sample size chosen (100 words); In case of qualitative study, mention the criteria used for</p>
                        <p style="margin-left:40px;">saturation..........................................................................................................................................................................................................................</p>
                        <p style="margin-left:40px;">...................................................................................................................................................................................................................................................</p>
                        <p style="margin-left:40px;">...................................................................................................................................................................................................................................................</p>
                        <p style="margin-left:40px;">...................................................................................................................................................................................................................................................</p>
                        <p style="margin-left:40px;">...................................................................................................................................................................................................................................................</p>
                        <p style="margin-left:40px;">...................................................................................................................................................................................................................................................</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-9">
                        <p style="margin-left:20px;">Is there an external laboratory/outsourcing involved for investigations?</p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row">
                <div class="col">
                    <p style="margin-left:20px;">(c) How was the scientific quality of the study assessed? </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label>Independent external review</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Review by sponsor/Funder</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Review within PI’s institution</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label>Review within multi-centre research group</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-6">
                        <label>No review</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p style="margin-left:20px;">Date of review: </p>
                    </div>
                    <div class="col-6">
                        <input type="date">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p style="margin-left:20px;">Comments of scientific committee, if any (100 words) </p>
                        <p style="margin-left:40px;">...................................................................................................................................................................................................................................................</p>
                        <p style="margin-left:40px;">...................................................................................................................................................................................................................................................</p>
                        <p style="margin-left:40px;">...................................................................................................................................................................................................................................................</p>
                        <p style="margin-left:40px;">...................................................................................................................................................................................................................................................</p>

                    </div>
                </div>

                <div class="row mt-4" >
                    <div class="col-12" style="text-align:center;">
                        <h5> <span style="color: white; background-color: blue; ">SECTION C: PARTICIPANT RELATED INFORMATION</span></h5>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-12">
                    <p>5. RECRUITMENT AND RESEARCH PARTICIPANTS</p>
                    <p style="margin-left:20px;">(a) Type of participants in the study: </p>
                    </div>
                </div>
                <div class="row" style="margin-left:20px;">
                    <div class="col-3">
                        <label>Healthy volunteers</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Patients</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-6">
                        <label>Vulnerable persons/ Special groups</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>
                <div class="row" style="margin-left:20px;">
                    <div class="col-3">
                        <label>Others</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-9">
                        <p style="margin-left:20px;">(Specify)................................................................................................................................................................ </p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                    <p>Who will do the recruitment? ............................................................................................................................................................................................ </p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                    <p>Participant recruitment methods used: </p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-2">
                       <label>Posters/<br>leaflets/Letters</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>

                    <div class="col-2">
                       <label>TV/Radio ads/Social media/Institution website</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>

                    <div class="col-2">
                       <label>Patients / Family/ Friends visiting hospitals</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>

                    <div class="col-2">
                       <label>Telephone</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-4">
                       <label>Others</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-8">
                       <p style="margin-left:20px;">(Specify)............................................................................................................................................... </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-9">
                        <p style="margin-left:20px;">(b) i. Will there be vulnerable persons / special groups involved ?</p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p style="margin-left:40px;">ii. If yes, type of vulnerable persons / special groups</p>
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-6">
                        <label>Children under 18 yrs </label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-6">
                        <label>Pregnant or lactating women</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-6">
                        <label>Differently abled (Mental/Physical)</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-6">
                        <label>Employees/Students/Nurses/Staff</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-6">
                        <label>Elderly </label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-6">
                        <label>Institutionalized</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-6">
                        <label>Economically and socially disadvantaged </label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-6">
                        <label>Refugees/Migrants/Homeless</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-6">
                        <label>Terminally ill (stigmatized or rare diseases)</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-6">
                        <label>Any other (Specify):</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-6">
                        <p >.......................................................................................................................</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p  style="margin-left:40px;">iii. Provide justification for inclusion/exclusion ....................................................................................................................................................</p>
                        <p  style="margin-left:50px;">..............................................................................................................................................................................................................................................................</p>
                        <p  style="margin-left:50px;">..............................................................................................................................................................................................................................................................</p>    
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p  style="margin-left:40px;">iv. Are there any additional safeguards to protect research participants? ...............................................................................</p>
                        <p  style="margin-left:50px;">..............................................................................................................................................................................................................................................................</p>
                        <p  style="margin-left:50px;">..............................................................................................................................................................................................................................................................</p>    
                    </div>
                </div>

                <div class="row">
                    <div class="col-10">
                        <p style="margin-left:20px;">(c) Is there any reimbursement to the participants?</p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-3">
                        <label>If yes, Monetary</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Non-monetary</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-6">
                        <label>Provide details</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p  style="margin-left:50px;">..............................................................................................................................................................................................................................................................</p>
                        <p  style="margin-left:50px;">..............................................................................................................................................................................................................................................................</p>    
                    </div>
                </div>

                <div class="row">
                    <div class="col-10">
                        <p style="margin-left:20px;">(d) Are there any incentives to the participants?</p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-3">
                        <label>If yes, Monetary</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Non-monetary</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-6">
                        <label>Provide details</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p  style="margin-left:50px;">..............................................................................................................................................................................................................................................................</p>
                        <p  style="margin-left:50px;">..............................................................................................................................................................................................................................................................</p>    
                    </div>
                </div>

                <div class="row">
                    <div class="col-10">
                        <p style="margin-left:20px;">(e) Are there any participant recruitment fees/ incentives for the study provided to the PI / Institution? </p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-3">
                        <label>If yes, Monetary</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Non-monetary</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-6">
                        <label>Provide details</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p  style="margin-left:50px;">..............................................................................................................................................................................................................................................................</p>
                        <p  style="margin-left:50px;">..............................................................................................................................................................................................................................................................</p>    
                    </div>
                </div>

                <div class="row" >
                    <div class="col-12">
                        <p>6. BENEFITS AND RISKS</p>
                      </div>
                </div>

                <div class="row">
                    <div class="col-10">
                        <p style="margin-left:20px;">(a) i. Are there any anticipated physical/social/psychological discomforts/ risk to participants? </p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                        <p>If yes, categorize the level of risk :</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-6">
                        <label>Less than Minimal risk</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-6">
                        <label>Minimal risk</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-6">
                        <label>Minor increase over minimal risk or low risk</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-6">
                        <label>More than minimal risk or high risk</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                        <p >ii. Describe the risk management strategy: .......................................................................................................................................................</p>
                        <p >..............................................................................................................................................................................................................................................................</p>
                        <p >..............................................................................................................................................................................................................................................................</p>    
                    </div>
                </div>

                <div class="row">
                    <div class="col-7">
                        <p style="margin-left:20px;">(b) What are the potential benefits from the study? </p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                    </div>
                    <div class="col-1">
                        <label>No</label>
                    </div>
                    <div class="col-1">
                        <label>If Yes</label>
                    </div>
                    <div class="col-1">
                        <label>Direct</label>
                    </div>
                    <div class="col-1">
                        <label>Indirect</label>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-7">
                        <p >For the participant</p>
                    </div>
                    <div class="col-1" style="float: center;">
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1" style="float: center;">
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                    </div>
                    <div class="col-1" style="float: center;">
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1" style="float: center;">
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-7">
                        <p >For the society/community</p>
                    </div>
                    <div class="col-1" style="float: center;">
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1" style="float: center;">
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                    </div>
                    <div class="col-1" style="float: center;">
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1" style="float: center;">
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-7">
                        <p >For improvement in science</p>
                    </div>
                    <div class="col-1" style="float: center;">
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1" style="float: center;">
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                    </div>
                    <div class="col-1" style="float: center;">
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1" style="float: center;">
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                        <p >Please describe how the benefits justify the risks.................................................................................................................................................</p>
                        <p >..............................................................................................................................................................................................................................................................</p>
                        <p >..............................................................................................................................................................................................................................................................</p>    
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-6">
                        <p >(c) Are adverse events expected in the study6 ? </p>
                    </div>
                    <div class="col-2">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-8">
                        <p >Are reporting procedures and management strategies described in the study?</p>
                    </div>
                    <div class="col-2">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                        <p >If Yes, Specify...................................................................................................................................................................................</p>
                        <p >..............................................................................................................................................................................................................................................................</p>
                        <p >..............................................................................................................................................................................................................................................................</p>    
                    </div>
                </div>

                <div class="row" >
                    <div class="col-12">
                        <p>7. INFORMED CONSENT</p>
                      </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-8">
                        <p >(a) Are you seeking waiver of consent? If yes, please specify reasons and skip to item no. 8</p>
                    </div>
                    <div class="col-2">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>
                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                        <p >..............................................................................................................................................................................................................................................................</p>
                        <p >..............................................................................................................................................................................................................................................................</p>    
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                        <p >(b) Version number and date of Participant Information Sheet (PIS):.............................................................................................</p>
                        <p >Version number and date of Informed Consent Form (ICF):.................................................................................................................</p>    
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                        <p >(c) Type of consent planned for :</p>
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                <div class="col-2">
                        <label class="label-wrap">Signed consent</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>Verbal/Oral consent</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>Witnessed consent</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>Audio-Video (AV) consent</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-2">
                        <label class="label-wrap">Consent from LAR (If so, specify from whom)</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>For children &lt;7 yrs parental/LAR consent</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>Verbal assent from minor (7-12 yrs) along with parental consent</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>Written assent from minor (13-18 yrs) along with parental consent</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-2">
                        <label>Other</label>
                    </div>
                    <div class="col-1">
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-9"></div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-12">
                    <p >(specify)............................................................................................................................................................................................................................................</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                    <p >(d) Who will obtain the informed consent?</p>
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-2">
                        <label>PI/Co-I</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Nurse/Counselor</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Research Staff</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>Other</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label> (Specify)...................</label>
                    </div>
                </div>

                <div class="row" style="margin-left: 40px;">
                    <div class="col-2">
                        <p>Any tools to be used</p>
                    </div>
                    <div class="col-10">
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                    <p >(e) Participant Information Sheet (PIS) and Informed Consent Form (ICF)</p>
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-3">
                        <label>English</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Local language</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>Other</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-5">
                        <p style="display: inline-block; margin: 0;">(Specify)</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-6">
                    <p style="display: inline-block; margin: 0;">List the languages in which translations were done </p>
                    <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                    <div class="col-6">
                    <p style="display: inline-block; margin: 0;">If translation has not been done, please justify</p>
                    <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-12">
                    <p style="display: inline-block; margin: 0;">(Specify)</p>
                    <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 0px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;  margin-top:20px;">
                    <div class="col-12">
                        <p >(f) Provide details of consent requirements for previously stored samples if used in the study</p>
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-12">
                    <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;  margin-top:20px;">
                    <div class="col-12">
                        <p >(g) Elements contained in the Participant Information Sheet(PIS) and Informed Consent Form (ICF)</p>
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-4">
                        <label>Simple language</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Data/ Sample sharing</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Compensation for study related injury</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-4">
                        <label>Risks and discomforts</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Need to recontact</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Statement that consent is voluntary</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-4">
                        <label>Alternatives to participation</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Confidentiality</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Commercialization/ Benefit sharing</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-4">
                        <label>Right to withdraw</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Storage of samples</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Statement that study involves research</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-4">
                        <label>Benefits</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Return of research results</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Use of photographs/ Identifying data</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-4">
                        <label>Purpose and procedure</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Payment for participation</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-4">
                        <label>Contact information of PI and Member <br>Secretary of EC</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-4">
                        <label>Others(Specify)</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-8"></div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-12">
                    <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;  margin-top:20px;">
                    <div class="col-12">
                        <p >8. PAYMENT/COMPENSATION </p>
                    </div>
                </div>

                <div class="row" style="margin-left:40px; ">
                    <div class="col-12">
                        <p >(a) Who will bear the costs related to participation and procedures ? </p>
                    </div>
                </div>
                <div class="row" style="margin-left:40px;">
                    <div class="col-3">
                        <label>PI</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Institution</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Sponsor</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Other agencies</label>
                        <input style="float: right;" type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>
                <div class="row" style="margin-left:40px;">
                    <div class="col-12">
                        <p style="display: inline-block;">(specify)</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-9">
                        <p >(b) Is there a provision for free treatment of research related injuries?</p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-12" style="display: flex; align-items: center;">
                        <p style="margin: 0;">If yes, then who will provide the treatment?</p>
                        <p style="flex-grow: 1; border-bottom: 1px dotted #000; ">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-9">
                        <p >(c) Is there a provision for compensation of research related SAE? If yes, specify.</p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-3">
                        <label>Sponsor</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Institutional/Corpus fund</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Project grant</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Insurance</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                        <p >(d) Is there any provision for medical treatment or management till the relatedness is determined for injury to the</p>
                    </div>
                </div>
                <div class="row" style="margin-left:40px;">
                    <div class="col-6">
                        <p >participants during the study period? If yes, specify. </p>
                    </div>
                    <div class="col-2">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-2">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin-botom: 5px;">&nbsp;</p>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-9">
                        <p>(e) Is there a provision for ancillary care for unrelated illness during the study period? If yes, please specify.</p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:20px;  margin-top:20px;">
                    <div class="col-12">
                        <p >9. STORAGE AND CONFIDENTIALITY </p>
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-3">
                        <label>Anonymous/Unidentified </label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Anonymized: Reversibly coded</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Irreversibly coded</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-3">
                        <label>Identifiable</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-12">
                        <p >If identifiers must be retained, what additional precautions will be taken to ensure that access is limited /data is safeguarded? (e.g. data stored in a cabinet, password protected computer etc.)</p>
                        
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                        <p style="display: inline-block;">(b) Who will be maintaining the data pertaining to the study?</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                        <p style="display: inline-block;">(c) Where will the data be analyzed9 and by whom?</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>
                
                <div class="row" style="margin-left:20px;">
                    <div class="col-12">
                        <p style="display: inline-block;">(d) For how long will the data be stored?</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>
                
                <div class="row" style="margin-left:20px;">
                    <div class="col-9">
                        <p>(e) Do you propose to use stored samples/data in future studies? </p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>Maybe</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-12">
                        <p style="display: inline-block;">If yes, explain how you might use stored material/data in the future?</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row mt-4" >
                    <div class="col-12" style="text-align:center;">
                        <h5> <span style="color: white; background-color: blue; ">SECTION D: OTHER ISSUES</span></h5>
                    </div>
                </div> 

                <div class="row" style="margin-left:20px;  margin-top:20px;">
                    <div class="col-12">
                        <p >10. PUBLICATION, BENEFIT SHARING AND IPR ISSUES</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-9">
                        <p>(a) Will the results of the study be reported and disseminated? If yes, specify.</p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px; margin-bottom:5px"">
                    <div class="col-12">
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-9">
                        <p>(b) Will you inform participants about the results of the study?</p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-9">
                        <p>(c) Are there any arrangements for continued provision of the intervention for participants, if effective, once the
                        study has finished? If yes describe in brief (Max 50 words)</p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px; margin-bottom:5px"">
                    <div class="col-12">
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-9">
                        <p>(d) Is there any plan for post research benefit sharing with participants? If yes, specify</p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px; margin-bottom:5px"">
                    <div class="col-12">
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-9">
                        <p>(e) Is there any commercial value or a plan to patent/IPR issues? If yes, please provide details </p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px; margin-bottom:5px">
                    <div class="col-12">
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row" style="margin-left:20px;">
                    <div class="col-9">
                        <p>(f) Do you have any additional information to add in support of the application, which is not included elsewhere in

                        the form? If yes, provide details. </p>
                    </div>
                    <div class="col-1">
                        <label>Yes</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>No</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                    <div class="col-1">
                        <label>NA</label>
                        <input  type="checkbox" id="html" name="fav_language" value="HTML">
                    </div>
                </div>

                <div class="row" style="margin-left:40px;">
                    <div class="col-12">
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                        <p style="display: inline-block; width: calc(100% - 100px); border-bottom: 1px dotted #000; margin: 0;">&nbsp;</p>
                    </div>
                </div>

                <div class="row mt-4" >
                    <div class="col-12" style="text-align:center;">
                        <h5> <span style="color: white; background-color: blue; ">SECTION E: DECLARATION AND CHECKLIST</span></h5>
                    </div>
                </div> 

                <table class="table-bordered">
                    <tr >
                        <td colspan=2>11. DECLARATION (Please tick as applicable)</td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We certify that the information provided in this application is complete and correct.</td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We confirm that all investigators have approved the submitted version of proposal/related documents.</td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We confirm that this study will be conducted in accordance with the latest ICMR National Ethical Guidelines
                        for Biomedical and Health Research Involving Human Participants and other applicable regulations and guidelines.</td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We confirm that this study will be conducted in accordance with the Drugs and Cosmetics Act 1940 and its
                        Rules 1945 as amended from time to time, GCP guidelines and other applicable regulations and guidelines.</td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We will comply with all policies and guidelines of the institute and affiliated/collaborating institutions where
                        this study will be conducted.</td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We will ensure that personnel performing this study are qualified, appropriately trained and will adhere to
                        the provisions of the EC approved protocol. </td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We declare that the expenditure in case of injury related to the study will be taken care of.</td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We confirm that an undertaking of what will be done with the leftover samples is provided, if applicable.</td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We confirm that we shall submit any protocol amendments, adverse events report, significant deviations
                        from protocols, progress reports and a final report and also participate in any audit of the study if needed. </td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We confirm that we will maintain accurate and complete records of all aspects of the study.</td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We will protect the privacy of participants and assure confidentiality of data and biological samples.</td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We hereby declare that I/any of the investigators, researchers and/or close relative(s), have no conflict of
                        interest (Financial/Non-Financial) with the sponsor(s) and outcome of study.</td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We have the following conflict of interest (PI/Co-I):
                            <p class="dotted-line">1. <span></span></p>
                            <p class="dotted-line" >&nbsp;&nbsp; <span></span></p>
                            <p class="dotted-line">2. <span></span></p>
                            <p class="dotted-line" >&nbsp;&nbsp; <span></span></p>
                        </td>
                    </tr>
                    <tr>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td>I/We declare/confirm that all necessary government approvals will be obtained as per requirements wherever applicable.</td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <p class="dotted-line">Name of PI:  <span></span></p>
                            <p class="dotted-line">Signature: <span></span><input  type="date" id="html" name="fav_language" value="HTML"></p>
                            <p class="dotted-line">Name of Co-PI:  <span></span></p>
                            <p class="dotted-line">Signature: <span></span><input  type="date" id="html" name="fav_language" value="HTML"></p>
                            <p class="dotted-line">Name of Guide: <span></span></p>
                            <p class="dotted-line">Signature: <span></span><input  type="date" id="html" name="fav_language" value="HTML"></p>
                            <p class="dotted-line">Name of HOD: <span></span></p>
                            <p class="dotted-line">Signature: <span></span><input  type="date" id="html" name="fav_language" value="HTML"></p>
                        <td>
                    </tr>
                    
                </table>


                <table class="table-bordered">
                    <tr >
                        <td colspan=7>12. CHECKLIST</td>
                    </tr>
                    <tr>
                        <td>S. No</td>
                        <td>Items</td>
                        <td>Yes</td>
                        <td>No</td>
                        <td>NA</td>
                        <td>Enclosure No</td>
                        <td>EC Remarks
                        (If applicable)</td>
                    </tr>
                    <tr>
                        <td colspan=7>ADMINISTRATIVE REQUIREMENTS</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Cover letter</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Brief CV of all Investigators</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Good Clinical Practice (GCP) training of investigators in last 3 years</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Approval of scientific committee</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>EC clearance of other centers*</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Agreement between collaborating partners*</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>MTA between collaborating partners* </td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Insurance policy/certificate</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Evidence of external laboratory credentials in case of an externally
                        outsourced laboratory study QA/QC certification</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Copy of contract or agreement signed with the sponsor or donor agency</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Provide all significant previous decisions (e.g. those leading to a
                            negative decision or modified protocol) by other ECs/Regulatory
                            authorities for proposed study (whether in same location or elsewhere)
                            and modification(s) to protocol</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan=7>PROPOSAL RELATED</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Copy of the detailed protocol</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>13</td>
                        <td>Investigators Brochure (If applicable for drug/biologicals/device trials)</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Participant Information Sheet (PIS) and Participant Informed Consent
                        Form (ICF)(English and translated) </td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Assent form for minors (12-18 years) (English and Translated)</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Proforma/Questionnaire / Case Report Forms (CRF)/ Interview guides/
                        Guides for Focused Group Discussions (FGDs) (English and translated)</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Advertisement/material to recruit participants (fliers, posters etc)</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
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
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>DCGI </td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>HMSC </td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>NAC-SCRT </td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>ICSCR </td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>RCGM </td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>GEAC </td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>BARC </td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>Tribal Board </td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>Others (Specify)</td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan=7>ANY OTHER RELEVANT INFORMATION/DOCUMENTS RELATED TO THE STUDY</td>
                    </tr>

                    <tr>
                        <td>28</td>
                        <td></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td><input  type="checkbox" id="html" name="fav_language" value="HTML"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                </table>



            </div>
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                <!-- <button type="button" class="btn btn-primary ">Save changes</button> -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade bs-example-modal-xl aa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div> 
            <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                <!-- <button type="button" class="btn btn-primary ">Save changes</button> -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="addform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Form</label>
                        <input type="text" id="" class="form-control" placeholder="" >
                        <div class="invalid-feedback">Please enter a customer name.</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Rename the Form</label>
                        <input type="text" id="" class="form-control" placeholder="" >
                        <div class="invalid-feedback">Please enter a customer name.</div>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="formCheck1">
                        <label class="form-check-label" for="formCheck1">
                            Yes
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="formCheck2" checked="">
                        <label class="form-check-label" for="formCheck2">
                            No
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Version</label>
                        <input type="text" id="" class="form-control" placeholder="" >
                        <div class="invalid-feedback">Please enter a customer name.</div>
                    </div>
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Date</label>
                        <input type="date" id="" class="form-control" placeholder="" >
                        <div class="invalid-feedback">Please enter a customer name.</div>
                    </div>
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Effective Date</label>
                        <input type="date" id="" class="form-control" placeholder="" >
                        <div class="invalid-feedback">Please enter a customer name.</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Submit</button>
                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalgridLabel">Edit Forms</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0);">
                        <div class="row g-3">
                            <div class="col-xxl-6">
                                <div>
                                    <label for="firstName" class="form-label">Document Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Enter Document Name">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-xxl-6">
                                <div>
                                    <label for="lastName" class="form-label">Version Number</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Enter Version Number">
                                </div>
                            </div>
                            <!--end col-->
                            
                            <div class="col-xxl-6">
                                <label for="emailInput" class="form-label">Effective Date</label>
                                <input type="text" class="form-control" id="emailInput" placeholder="Enter Effective Date">
                            </div>
                            <!--end col-->
                            <div class="col-xxl-6">
                                <label for="passwordInput" class="form-label">Document # or ID, if any</label>
                                <input type="text" class="form-control" id="passwordInput" value="" placeholder="Enter Document # or ID, if any">
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade zoomIn" id="deleteforms" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
