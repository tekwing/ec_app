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
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <style>
        .tag {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border-radius: 3px;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 12px;
        }
        .tag .delete {
            cursor: pointer;
            margin-left: 5px;
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
                            <h4 class="mb-sm-0">Submissions</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">SETTINGS</li>
                                    <li class="breadcrumb-item active">SUBMISSIONS</li>
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
                                            <div class="col-lg-12 mb-5">
                                                <!-- Grids in modals -->

                                                <div class="live-preview">
                                                    <div class="row gy-4">
                                                        <div class="col-xxl-6 col-md-6">
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                                Add
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="container shadow min-vh-100 py-2">
                                                <div class="table-responsive table-card">
                                                        <table class="table accordion table table-nowrap table-striped-columns mb-0">
                                                            <thead class="table-light">
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Name of Submission</th>
                                                                    <th scope="col">Form(s) Linked</th>
                                                                    <th scope="col">Version</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr style="min-width:1000px;">
                                                                    <th data-bs-toggle="collapse" data-bs-target="#r1" scope="row">1 <i class="bi bi-chevron-down"></i></th>
                                                                    <td data-bs-toggle="collapse" data-bs-target="#r1">Study Registration Form</td>
                                                                    <td data-bs-toggle="collapse" data-bs-target="#r1">Study Registration Form - New</td>
                                                                    <td data-bs-toggle="collapse" data-bs-target="#r1">1.0</td>
                                                                    <td data-bs-toggle="collapse" data-bs-target="#r1">31-May-2024</td>
                                                                    <td class="text-center">
                                                                        <div class="dropdown">
                                                                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="ri-more-2-fill"></i>
                                                                            </a>
                                                                        
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                                <li><a class="dropdown-item" href="#">Upload</a></li>
                                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="collapse accordion-collapse" id="r1" data-bs-parent=".table">
                                                                    <td colspan="5">
                                                                        <table class="table table-nowrap table-striped-columns mb-0" id="nestedTable">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th scope="col">Name of the Document</th>
                                                                                    <th scope="col">To be enclosed in the form Mandatory</th>
                                                                                    <th scope="col">Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <!-- Dynamic rows will be added here -->
                                                                            </tbody>
                                                                        </table>
                                                                        <button class="btn btn-primary" onclick="addRowToNestedTable()">Add Row</button>
                                                                    </td>
                                                                </tr>

                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    
                                                </div>
                                            </div>
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
    <script src="{{ asset('libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <!-- <script src="{{ asset('js/plugins.js') }}"></script> -->

    <!-- prismjs plugin -->
    <script src="{{ asset('libs/prismjs/prism.js') }}"></script>

    <!-- Modal Js -->
    <script src="{{ asset('js/pages/modal.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        document.getElementById('select').addEventListener('change', function() {
            var selectedOptions = this.selectedOptions;
            var tagsContainer = document.getElementById('tags-container');
            
            for (var i = 0; i < selectedOptions.length; i++) {
                var tag = document.createElement('div');
                tag.classList.add('tag');
                tag.textContent = selectedOptions[i].textContent;
                tagsContainer.appendChild(tag);
                
                // Create delete button for each tag
                var deleteButton = document.createElement('span');
                deleteButton.classList.add('delete');
                deleteButton.textContent = 'x';
                deleteButton.addEventListener('click', function() {
                    this.parentNode.remove(); // Remove the tag when delete button is clicked
                });
                tag.appendChild(deleteButton);
            }
        });
    </script>

<script>
    // Function to add a new row to the nested table
    function addRowToNestedTable() {
        var nestedTable = document.getElementById("nestedTable").getElementsByTagName('tbody')[0];
        var newRow = nestedTable.insertRow();
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);

        // Populate cells with placeholder text or input fields
        cell1.innerHTML = '<select class="form-control" data-choices name="choices-single-default" id="choices-single-default">' +
                            '<option value="">Select</option>' +
                            '<option value="Choice 1">Choice 1</option>' +
                            '<option value="Choice 2">Choice 2</option>' +
                            '<option value="Choice 3">Choice 3</option>' +
                            '</select>';
        cell2.innerHTML = "<input type='text' class='form-control' placeholder='Yes/No/NA'>";

        // Add delete button to the actions cell
        var deleteButton = document.createElement("button");
        deleteButton.classList.add("btn", "btn-success");
        deleteButton.innerHTML = "Delete";
        deleteButton.onclick = function() {
            // Get the row to delete
            var rowToDelete = this.parentNode.parentNode;
            // Delete the row from the nested table
            nestedTable.removeChild(rowToDelete);
        };
        cell3.appendChild(deleteButton);
    }
</script>
@endsection

@section('modal')

<div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalgridLabel">Grid Modals</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0);">
                    <div class="row g-3">
                        <div class="col-xxl-6">
                            <div>
                                <label for="basicInput" class="form-label" style="display: inline-block;">Type</label>
                                                           
                                <select class="form-select mb-3" id="" aria-label="Default select example">
                                    <option selected>Select Type </option>
                                    <option value="1">Submission</option>
                                    <option value="2">Notification</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="choices-multiple-remove-button" class="form-label text-muted">Name</label>
                                <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                        <option value="1">Initial Submission </option>
                                        <option value="2">Amendment </option>
                                        <option value="2">Interim Report </option>
                                        <option value="2">Annual Report </option>
                                        <option value="2">Annual Progress Report (APR) </option>
                                        <option value="2">Suspected Unexpected Serious Adverse Reaction (SUSAR) </option>
                                        <option value="2">Local Safety Reports </option>
                                        <option value="2">Global Safety Report </option>
                                        <option value="2">6 Months LIne Listing (6MLL) </option>
                                        <option value="2">Development Safety Update Report (DSUR) </option>
                                        <option value="2">IND Final Report </option>
                                        <option value="2">End of Study Report </option>
                                        <option value="2">Final Study Report </option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="choices-single-default" class="form-label text-muted">Action</label>
                                <select class="form-control" data-choices name="choices-single-default" id="choices-single-default">
                                    <option value="">Select</option>
                                    <option value="Choice 1">Choice 1</option>
                                    <option value="Choice 2">Choice 2</option>
                                    <option value="Choice 3">Choice 3</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

