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
        .hidden {
            display: none;
        }
        .custom-file-upload {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border-radius: 4px;
            margin-right: 10px; /* Add margin for spacing between uploaders */
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
                            <h4 class="mb-sm-0">EC's Forms & Documents</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Settings</li>
                                    <li class="breadcrumb-item active">EC's Forms & Documents</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    
                    <div class="col-xxl-12">
                        <!-- <h5 class="mb-3">Custom Nav</h5> -->
                        
                        <input type="file" id="fileInput" accept=".xls,.xlsx">
                        <div id="tablesContainer"></div>

                            @foreach($items as $item)
                                {!! $item !!}
                            @endforeach
                
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
<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- SheetJS (XLSX) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.0/xlsx.full.min.js"></script>
    
    <!-- <script>
        $(document).ready(function () {
            // Function to read Excel file and create separate DataTables for each row
            function createDataTablesFromExcel(file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    try {
                        var data = new Uint8Array(e.target.result);
                        var workbook = XLSX.read(data, { type: 'array' });

                        workbook.SheetNames.forEach(function (sheetName) {
                            var excelRows = XLSX.utils.sheet_to_json(workbook.Sheets[sheetName]);
                            excelRows.forEach(function (row, index) {
                                // Create a new card for each table
                                // Create a new card for each table
                                var card = $('<div>').addClass('card').appendTo('#tablesContainer');
                                var body = $('<div>').addClass('card-body').appendTo(card);
                                var rowDiv = $('<div>').addClass('row').appendTo(body);
                                var colDiv = $('<div>').addClass('col-xl-12').appendTo(rowDiv);
                                var headerDiv = $('<div>').addClass('card-header').appendTo(colDiv);
                                var livePreviewDiv = $('<div>').addClass('live-preview').appendTo(colDiv);

                                // Append the h tags inside the card-header
                                var heading1 = $('<h3>').text(' - ').appendTo(headerDiv); // Create heading for the table
                                var heading2 = $('<h3>').text(' - ').appendTo(headerDiv); // Create heading for the table


                                // Create container for table and heading
                                var container = $('<div>').addClass('table-responsive table-card').appendTo(colDiv);
                            //   var heading1 = $('<h3>').text(' - ').appendTo(container); // Create heading for the table
                            //   var heading2 = $('<h3>').text(' - ').appendTo(container); // Create heading for the table
                                var table = $('<table>').addClass('table align-middle table-nowrap mb-0').appendTo(container);
                                var thead = $('<thead>').addClass('table-light').appendTo(table);
                                var tbody = $('<tbody>').appendTo(table);

                                // Create DataTable headers
                                var headers = Object.keys(row);
                                headers.push("Actions"); // Add "Actions" at the end of the headers array

                                var headerRow = $('<tr>').appendTo(thead);
                                headers.forEach(function (header) {
                                    $('<th>').text(header).appendTo(headerRow);
                                });

                                // Populate DataTable with row data
                                var rowElement = $('<tr>').appendTo(tbody);
                                var firstColumnData; // Variable to store data from the first column
                                var secondColumnData; // Variable to store data from the second column
                                headers.forEach(function (header, columnIndex) {
                                    if (header === "Actions") {
                                        $('<td>').html('<a href="#">Add</a> <a href="#">Add</a> <a href="#">Add</a>').appendTo(rowElement);
                                    } else {
                                        var cellData = row[header];
                                        // Check if it's the first column
                                        if (columnIndex === 0) {
                                            firstColumnData = cellData; // Store data from the first column
                                        } else if (columnIndex === 1) {
                                            secondColumnData = cellData; // Store data from the second column
                                        }
                                        // Handle date formatting if needed
                                        var isDateColumn = /date|day|month|year/i.test(header);
                                        if (isDateColumn && !isNaN(cellData) && typeof cellData === 'number') {
                                            var excelDate = new Date((cellData - 25569) * 86400 * 1000); // Convert Excel serial date to JavaScript Date object
                                            var day = excelDate.getDate();
                                            var month = excelDate.getMonth() + 1; // Months are zero-based, so we add 1
                                            var year = excelDate.getFullYear();
                                            // Ensure leading zeroes for single-digit day and month
                                            var formattedDate = (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month + '/' + year;
                                            cellData = formattedDate;
                                        }
                                        $('<td>').text(cellData).appendTo(rowElement);
                                    }
                                });

                                // Append data from the first and second column to <h> tags
                                //$('<h>').text(firstColumnData).appendTo(heading1);
                            // $('<h>').text(secondColumnData).appendTo(heading2);
                                heading1.append(firstColumnData);
                                heading2.append(secondColumnData);

                            });
                        });
                    } catch (error) {
                        console.error("Error processing Excel file:", error);
                        alert("Error processing Excel file. Please check the console for details.");
                    }
                };
                reader.onerror = function (e) {
                    console.error("File reading error:", e.target.error);
                    alert("File reading error. Please check the console for details.");
                };
                reader.readAsArrayBuffer(file);
            }

            // Event listener for file input change
            $('#fileInput').change(function () {
                var file = this.files[0];
                if (file) {
                    createDataTablesFromExcel(file);
                } else {
                    alert("No file selected.");
                }
            });
        });
    </script> -->

    <script>

$(document).ready(function () {
    // Array to store generated HTML cards
    var generatedHtmlArray = [];

    // Function to read Excel file and create separate DataTables for each row
    function createDataTablesFromExcel(file) {
        var reader = new FileReader();
        reader.onload = function (e) {
            try {
                var data = new Uint8Array(e.target.result);
                var workbook = XLSX.read(data, { type: 'array' });

                workbook.SheetNames.forEach(function (sheetName) {
                    var excelRows = XLSX.utils.sheet_to_json(workbook.Sheets[sheetName]);
                    excelRows.forEach(function (row, index) {
                        // Create a new card for each table
                        var card = $('<div>').addClass('card'); // Add 'card' class here
                        var body = $('<div>').addClass('card-body').appendTo(card); // Add 'card-body' class here
                        var rowDiv = $('<div>').addClass('row').appendTo(body);
                        var colDiv = $('<div>').addClass('col-xl-12').appendTo(rowDiv);
                        var headerDiv = $('<div>').addClass('card-header').appendTo(colDiv);
                        var livePreviewDiv = $('<div>').addClass('live-preview').appendTo(colDiv);

                        // Append the h tags inside the card-header
                        var heading1 = $('<h3>').text(' - ');
                        var heading2 = $('<h3>').text(' - ');
                        headerDiv.append(heading1, heading2);

                        // Create container for table and heading
                        var container = $('<div>').addClass('table-responsive table-card').appendTo(colDiv);
                        var table = $('<table>').addClass('table align-middle table-nowrap mb-0').appendTo(container);
                        var thead = $('<thead>').addClass('table-light').appendTo(table);
                        var tbody = $('<tbody>').appendTo(table);

                        // Create DataTable headers
                        var headers = Object.keys(row);
                        headers.push("Actions"); // Add "Actions" at the end of the headers array

                        var headerRow = $('<tr>').appendTo(thead);
                        headers.forEach(function (header) {
                            $('<th>').text(header).addClass('text-center').appendTo(headerRow);
                        });

                        // Populate DataTable with row data
                        var rowElement = $('<tr>').appendTo(tbody);
                        headers.forEach(function (header, columnIndex) {
                            if (header === "Actions") {
                                $('<td>').html('<label for="fileInput1" class="custom-file-upload">Upload</label> <input type="file" id="fileInput1" class="hidden"> <label for="fileInput2" class="custom-file-upload">Edit</label> <input type="file" id="fileInput2" class="hidden"> <a href="#" class="custom-file-upload">Delete</a>').appendTo(rowElement);
                            } else {
                                var cellData = row[header];
                                // Handle date formatting if needed
                                var isDateColumn = /date|day|month|year/i.test(header);
                                if (isDateColumn && !isNaN(cellData) && typeof cellData === 'number') {
                                    var excelDate = new Date((cellData - 25569) * 86400 * 1000); // Convert Excel serial date to JavaScript Date object
                                    var day = excelDate.getDate();
                                    var month = excelDate.getMonth() + 1; // Months are zero-based, so we add 1
                                    var year = excelDate.getFullYear();
                                    // Ensure leading zeroes for single-digit day and month
                                    var formattedDate = (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month + '/' + year;
                                    cellData = formattedDate;
                                }
                                $('<td>').text(cellData).appendTo(rowElement);
                            }
                        });

                        // Append data from the first and second column to the heading
                        heading1.append(row[headers[0]]);
                        heading2.append(row[headers[1]]);

                        // Append the card to the container
                        $('#tablesContainer').append(card);

                        // Push the HTML content of the card to the generatedHtmlArray
                        generatedHtmlArray.push(card[0].outerHTML); // Accessing the outerHTML of the card element
                    });
                });

                // Log or use the generated HTML array here
                console.log(generatedHtmlArray);

                // Send Ajax requests to insert each HTML card into the database
                insertHtmlCards(generatedHtmlArray);

            } catch (error) {
                console.error("Error processing Excel file:", error);
                alert("Error processing Excel file. Please check the console for details.");
            }
        };
        reader.onerror = function (e) {
            console.error("File reading error:", e.target.error);
            alert("File reading error. Please check the console for details.");
        };
        reader.readAsArrayBuffer(file);
    }

    // Function to send Ajax requests to insert each HTML card into the database
    function insertHtmlCards(htmlArray) {
        htmlArray.forEach(function (html, index) {
            var formData = {
                html: html,
                _token: '{{ csrf_token() }}' // Include CSRF token
            };
            $.ajax({
                url: '{{ route("saveHtmlCard") }}',
                method: 'POST',
                data: formData,
                success: function (response) {
                    console.log('HTML card inserted successfully:', response);
                },
                error: function (xhr, status, error) {
                    console.error('Error inserting HTML card:', error);
                }
            });
        });
    }

    // Event listener for file input change
    $('#fileInput').change(function () {
        var file = this.files[0];
        if (file) {
            createDataTablesFromExcel(file);
        } else {
            alert("No file selected.");
        }
    });
});


    </script>

<script>
        // Show the file name when a file is selected for each uploader
    $('#fileInput1, #fileInput2').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        alert('Selected file: ' + fileName);
    });

  </script>
@endsection

