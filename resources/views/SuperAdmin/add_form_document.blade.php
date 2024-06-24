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
                                                    <td class="text-center"><a class="btn btn-sm btn-success" href="{{route('initial_review_form')}}">View</a></td>
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
                                                <td class="text-center"><button class="btn btn-sm btn-success remove-item-btn" data-bs-toggle="modal" data-bs-target="#addform">Add</button></td>
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
