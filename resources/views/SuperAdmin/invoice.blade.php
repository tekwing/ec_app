@extends('SuperAdmin.layout.app')

@section('css')
    <!-- dropzone css -->
    <link rel="stylesheet" href="{{ asset('libs/dropzone/dropzone.css') }}" type="text/css" />

    <!-- Sweet Alert css-->
    <link href="{{ asset('libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

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

    <script src="https://cdn.tiny.cloud/1/nj9vcsqncpqjhvbrueh59ixa2bln3a1hk5mki9nldukyu0i2/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    

@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Invoice</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                                <li class="breadcrumb-item active">Create Invoice</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-xxl-9">
                    <div class="card">
                        <form class="needs-validation" novalidate id="invoice_form">
                            <div class="card-body border-bottom border-bottom-dashed p-4">
                                <div class="row g-3">
                                    <h4 class="mb-3 sm-0 ">Conventional</h4>
                                    
                                    <div class="col-12">
                                    <p2 class="mb-sm-0">Header & Sub Header</p2>
                                        <textarea id="your-textarea-id" name="content"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-body p-4">
                                <div class="row g-3">
                                    <div class="col-lg-6 col-sm-6">
                                        <label for="invoicenoInput">Invoice No</label>
                                        <input type="text" class="form-control bg-light border-0" id="invoicenoInput" placeholder="Invoice No" value="#VL25000355" readonly="readonly" />
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6 col-sm-6">
                                        <div>
                                            <label for="date-field">Date</label>
                                            <input type="text" class="form-control bg-light border-0" id="date-field" data-provider="flatpickr" data-time="true" placeholder="date">
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <div class="card-body p-4 border-top border-top-dashed">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div>
                                            <label for="billingName" class="text-muted text-uppercase fw-semibold">Billing Address</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" class="form-control bg-light border-0" id="billingName" placeholder="Full Name" required />
                                            <div class="invalid-feedback">
                                                Please enter a full name
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <textarea class="form-control bg-light border-0" id="billingAddress" rows="3" placeholder="Address" required></textarea>
                                            <div class="invalid-feedback">
                                                Please enter a address
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <input type="text" class="form-control bg-light border-0" data-plugin="cleave-phone" id="billingPhoneno" placeholder="Phone" required />
                                            <div class="invalid-feedback">
                                                Please enter a phone number
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control bg-light border-0" id="billingTaxno" placeholder="Tax Number" required />
                                            <div class="invalid-feedback">
                                                Please enter a tax number
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="row g-3">
                                    <div class="col-12">
                                    <p2 class="mb-sm-0">Content/Compose</p2>
                                        <textarea id="your-textarea-id" name="content"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="table-responsive">
                                    <table class="invoice-table table table-borderless table-nowrap mb-0">
                                        <thead class="align-middle">
                                            <tr class="table-active">
                                                <th scope="col" style="width: 50px;">#</th>
                                                <th scope="col">
                                                    Product Details
                                                </th>
                                                <th scope="col" style="width: 120px;">
                                                    <div class="d-flex currency-select input-light align-items-center">
                                                        Rate
                                                        <select class="form-selectborder-0 bg-light" data-choices data-choices-search-false id="choices-payment-currency" onchange="otherPayment()">
                                                            <option value="₹">(₹)</option>
                                                            <option value="£">(£)</option>
                                                            <option value="$">($)</option>
                                                            <option value="€">(€)</option>
                                                        </select>
                                                    </div>
                                                </th>
                                                <th scope="col" class="text-center" style="width: 150px;">Amount</th>
                                                <th scope="col" class="text-end" style="width: 105px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="newlink">
                                            <tr id="1" class="product">
                                                <th scope="row" class="product-id">1</th>
                                                <td class="text-start">
                                                    <div class="mb-2">
                                                        <input type="text" class="form-control bg-light border-0" id="productName-1" placeholder="Product Name" required />
                                                        <div class="invalid-feedback">
                                                            Please enter a product name
                                                        </div>
                                                    </div>
                                                    <textarea class="form-control bg-light border-0" id="productDetails-1" rows="2" placeholder="Product Details"></textarea>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control product-price bg-light border-0" id="productRate-1" step="0.01" placeholder="0.00" required />
                                                    <div class="invalid-feedback">
                                                        Please enter a rate
                                                    </div>
                                                </td>
                                                <td class="text-end">
                                                    <div>
                                                        <input type="text" class="form-control bg-light border-0 product-line-price" id="productPrice-1" placeholder="$0.00" readonly />
                                                    </div>
                                                </td>
                                                <td class="product-removal">
                                                    <a href="javascript:void(0)" class="btn btn-success">Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr id="newForm" style="display: none;"><td class="d-none" colspan="5"><p>Add New Form</p></td></tr>
                                            <tr>
                                                <td colspan="5">
                                                    <a href="javascript:new_link()" id="add-item" class="btn btn-soft-secondary fw-medium"><i class="ri-add-fill me-1 align-bottom"></i> Add Item</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end table-->
                                </div>
                                <div class="row mt-1">
                                    <p><u>Taxes</u></p>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="same">Is Inclusive of all Taxes ?</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" value="yes" type="radio" name="taxradio" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-check">
                                            <input class="form-check-input" value="no" type="radio" name="taxradio" id="flexRadioDefault2" >
                                            <label class="form-check-label" for="flexRadioDefault2">No</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-check" style="display: none;" id="inputtax">
                                            <input class="form-control bg-light border-0" type="text"  placeholder="Enter tax in %">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-lg-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="same">Any Overhead Fee ?</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" value="yes" name="feeradio" id="flexRadioDefault4" >
                                            <label class="form-check-label" for="flexRadioDefault4">Yes</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="feeradio" value="no" id="flexRadioDefault5" checked>
                                            <label class="form-check-label" for="flexRadioDefault5">No</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-check" style="display: none;" id="inputfee">
                                            <input class="form-control bg-light border-0" type="text" id="" placeholder="Enter fee in %">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="choices-payment-type" class="form-label text-muted text-uppercase fw-semibold">Bank Details</label>
                                            <input class="form-control bg-light border-0" type="text" id="cardholderName" placeholder="Account Holder Name">
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-control bg-light border-0" type="text" id="cardholderName" placeholder="Account Number">
                                        </div>
                                        <div class="mb-2">
                                            <div class="input-light">
                                                <select class="form-control bg-light border-0" data-choices data-choices-search-false data-choices-removeItem id="choices-payment-type">
                                                    <option value="">Account Type</option>
                                                    <option value="Mastercard">Saving</option>
                                                    <option value="Credit Card">Current</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-control bg-light border-0" type="text" id="cardholderName" placeholder="Bank Name">
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-control bg-light border-0" type="text" id="cardNumber" placeholder="IFSC">
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-control  bg-light border-0" type="text" id="amountTotalPay" placeholder="Branch"  />
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-control  bg-light border-0" type="text" id="amountTotalPay" placeholder="City"  />
                                        </div>
                                        <div class="mb-2">
                                            <input class="form-control  bg-light border-0" type="text" id="amountTotalPay" placeholder="State"  />
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label for="choices-payment-type" class="form-label text-muted text-uppercase fw-semibold">QR Code</label>
                                            <input class="form-control  bg-light border-0" type="file" id="amountTotalPay"  />
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                </div>
                                <!--end row-->
                                
                                <div class="mt-4">
                                    <label for="exampleFormControlTextarea1" class="form-label text-muted text-uppercase fw-semibold">NOTES</label>
                                    <textarea class="form-control alert alert-info" id="exampleFormControlTextarea1" placeholder="Notes" rows="2" required>Type here....</textarea>
                                </div>
                                <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                    <button type="" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Save</button>
                                    <!-- <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download Invoice</a>
                                    <a href="javascript:void(0);" class="btn btn-danger"><i class="ri-send-plane-fill align-bottom me-1"></i> Send Invoice</a> -->
                                </div>
                            </div>
                        </form>
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
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js')}}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>

    <!-- dropzone min -->
    <script src="{{ asset('libs/dropzone/dropzone-min.js')}}"></script>

    <!-- cleave.js -->
    <script src="{{ asset('libs/cleave.js/cleave.min.js')}}"></script>

    <!--Invoice create init js-->
    <script src="{{ asset('js/pages/invoicecreate.init.js')}}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ asset('libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js')}}"></script>
 
    <script>
        tinymce.init({
            selector: 'textarea#your-textarea-id',
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link image',
            height: 400,
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            }
        });
    </script>

<script>
        tinymce.init({
            selector: 'textarea#your-textarea-id2',
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link image',
            height: 400,
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function(){
        $('input[name="taxradio"]').change(function(){
            if($(this).val() == 'no'){
                $('#inputtax').show();
            } else {
                $('#inputtax').hide();
            }
        });

        $('input[name="feeradio"]').change(function(){
            if($(this).val() == 'yes'){
                $('#inputfee').show();
            } else {
                $('#inputfee').hide();
            }
        });
    });
    </script>

@endsection
