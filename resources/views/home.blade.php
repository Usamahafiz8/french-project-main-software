@extends('layouts.header')
@section('title','Customer')
@section('tablestyling')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="{{asset('css/tablestyle.css')}}">
@endsection

@section('contentdata')

<div class="container-xl">

    <!-- Main Heading of the App -->
    <div class='table-res' style='margin-top:32px'>
        <div class='table-heading'>
            <h1>Manage <b>Customers</b></h1>
            <br />
            <br />
        </div>
        <a style="width:100%" href="#addEmployeeModal" class="button-29" data-toggle="modal">
            <i class="material-icons">&#xE147;</i> &nbsp;
            <span>Add New Customer</span>
        </a>
    </div>

    <!-- Table -->
    <div class="table-responsive desktop"  >
        <div class="table-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    @if(!empty(session('success')))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>Nom</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Adresse</th>
                        <th>Nbre de personnes dans le foyer</th>
                        <th>Impôt sur le revenu</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    @foreach ($customer_data as $info)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$info->name}}</td>
                        <td>{{$info->email}}</td>
                        <td>{{$info->contact}}</td>
                        <td>{{$info->address}}</td>
                        <td>{{$info->people_on_hearth}}</td>
                        <td>{{$info->tax_income}}</td>
                        <td>
                            <div style='display:flex;'>
                                <a href="{{route('getPDFdata', ['id' => $info->id])}}" class="edit">
                                    <i class="material-icons" data-toggle="tooltip" title="Download">&#xE2C4;</i>
                                </a>
                                <a href="{{route('customers', ['id' => $info->id])}}" class="edit">
                                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                </a>
                                <!-- <a href="#dltCustomerModel" data-id="{{$info->id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a> -->
                                <a href="{{url('deletecustomer', ['id' => $info->id])}}"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- card -->
<hr color=' #54ba9e'>
<div class="mobile">

    <div class="main-cards ">
        <?php $i = 0; ?>
    @foreach ($customer_data as $info)
    <div class="mian-card" style="display: flex;">
        <div class="main-card-top">
            <div class="card-name">
                {{$info->name}}
            </div>
            <a href="{{url('deletecustomer', ['id' => $info->id])}}" class="delete">
                <i class="material-icons" style="color: #c30606;" data-toggle="tooltip" title="Delete">&#xE872;</i>
            </a>
        </div>
        <div>
            Email: &nbsp; {{$info->email}} <br />
            Address: &nbsp; {{$info->address}}<br />
            Contact: &nbsp; {{$info->contact}}<br />
            No. of people:&nbsp;{{$info->people_on_hearth}}<br />
            Tax Income:&nbsp; {{$info->tax_income}}<br />
        </div>
        
        <a href="{{route('customers', ['id' => $info->id])}}" class="edit">
            <div class="card-button" style="margin-top: 8px;">
                Edit
            </div>
        </a>
        <a href="{{route('getPDFdata', ['id' => $info->id])}}">
        <div class="card-button-download" style="margin-top: 8px;">
            Download
        </div>
        </a>
        
    </div>
    @endforeach
</div>
</div>
<!-- add Modal HTML -->
<div id="addEmployeeModal" id="CustomerForm" class="modal fade">
    <div class="modal-dialog modal-custom">
        <div class="modal-content">
            
            <form method="POST" action="{{ url('addCustomer') }}" name="add_Customer" id="CustomerForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add Customer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <div class="row mb-4">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
                        <div class="col-md-8">
                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="contact" class="col-md-4 col-form-label text-md-end">{{ __('Contact') }}</label>

                        <div class="col-md-8">
                            <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>

                            @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                        <div class="col-md-8">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="tax_income" class="col-md-4 col-form-label text-md-end">{{ __('Tax Income') }}</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control @error('tax_income') is-invalid @enderror" name="tax_income" value="{{ old('tax_income') }}" required autocomplete="tax_income" autofocus>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-4">
                        <label for="people_on_hearth" class="col-md-4 col-form-label text-md-end">{{ __('No of People on Hearth') }}</label>

                        <div class="col-md-8">
                            <input type="text" class="form-control @error('people_on_hearth') is-invalid @enderror" name="people_on_hearth" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <input type="hidden" name="role" value="0">



                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-sm" value="Add Customer" id="AddCustomer" style="background-color:#54ba9e;color:white">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="dltCustomerModel" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="POST" class="form-horizontal" id="deletecustomerform" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Delete Customer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="text" name="cstmrid" id="cstmrid">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete"  id="dlt_customer_Submit">
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('tablescript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {

        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function() {
            if (this.checked) {
                checkbox.each(function() {
                    this.checked = true;
                });
            } else {
                checkbox.each(function() {
                    this.checked = false;
                });
            }
        });
        checkbox.click(function() {
            if (!this.checked) {
                $("#selectAll").prop("checked", false);
            }
        });
    });
</script>
<script type="text/javascript">
    $('.trash').click(function{
        console.log("trash");
    });
    $(function() {


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        // $('.dltbtn').click(function (e) {
        // e.preventDefault();
        
        
    //     var customerId = $('input[name="customerId"]').val();
    // $.ajax({
        
    //     data: {
    //         customerId: customerId,            
    //     },
    //     url: "/save_step1",
    //     type: "POST",
    //     dataType: 'json',
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     },
    //     success: function (data) {
    //         console.log('success:', data);
    //     },
    //     error: function (xhr, status, error) {
    //         console.log('Error:', error);
    //         console.log('Status:', status);
    //         console.log('Response:', xhr.responseJSON);
    //     }
    // });
// });   
//     });
</script>