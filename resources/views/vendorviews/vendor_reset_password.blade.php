@extends('../layouts.master')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <div class=" container ">
                <div class="row">
                    @if(Session::has('message'))
                    <div class="col-lg-12">
                        <div class="alert alert-{{session('message')['type']}}">
                            {{session('message')['text']}}
                        </div>
                    </div>
                    @endif
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom example example-compact">
                            <div class="card-header">
                                <h3 class="card-title"> Update your password </h3>
                                {{-- <div class="card-toolbar">
                                    <div class="example-tools justify-content-center"> <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span> </div>
                                </div> --}}
                            </div>
                            <br>    
                            <!--begin::Form-->
                            <form class="form" id="kt_form_1" method="POST" action="{{ URL('/vendor_reset_password_submit') }}">
                                {{ csrf_field() }}
                                <div class="container">

                                    {{-- <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Current Password *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" name="current_password" placeholder="Enter Current Password"/>
                                                    @error('current_password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">New Password *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" name="new_password" placeholder="Enter Password"/>
                                                    @error('new_password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Confirm Password *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" name="confirm_password" placeholder="Enter Confirm Password"/>
                                                    @error('confirm_password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-lg-12 text-center">
                                                <button type="submit" class="btn btn-primary font-weight-bold mr-2">Submit</button>
                                            </div>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    @endsection
