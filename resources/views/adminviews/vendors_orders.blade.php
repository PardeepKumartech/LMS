@extends('../layouts.master')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8  subheader-transparent " id="kt_subheader">
        <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="subheader-title text-dark font-weight-bold my-1 mr-3">
                        Vendors Orders
                    </h2>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--end::Button-->
                <!--begin::Dropdown-->

                    <a href="{{url('vendor_listing_admin')}}" class="btn btn-fixed-height btn-white btn-hover-primary font-weight-bold px-2 px-lg-5 mr-2" > <span class="svg-icon svg-icon-success svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Files/File.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"></polygon>
                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                            <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"></rect>
                            <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"></rect>
                        </g>
                    </svg><!--end::Svg Icon--></span> View Vendors Listings </a>
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                    </div>

                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Notice-->
            {{-- here's validation  --}}
            {{-- <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                <div class="alert-icon">
                    <span class="svg-icon svg-icon-primary svg-icon-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
                                <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
                            </g>
                        </svg>
                    </span>
                </div>
                <div class="alert-text"> Metronic fully integrates FormValidation, the best Premium From Validation Library for JavaScript. Zero dependencies!
                    <br> For more info please visit <a class="font-weight-bold" href="https://formvalidation.io/" target="_blank">FormValidation Home</a> </div>
                    
                </div> --}}
                {{-- here's validation end --}}
                <!--end::Notice-->
                <!--begin::Card-->
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Add New Vendor
                                </h3>
                                {{-- <div class="card-toolbar">
                                    <div class="example-tools justify-content-center"> <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span> </div>
                                </div> --}}
                            </div>
                            <br>    
                            <!--begin::Form-->
                            <form class="form" id="kt_form_1" method="POST" action="{{ URL('/vendor_add_admin_submit') }}">
                                {{ csrf_field() }}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Company Name *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" name="company_name" placeholder="Enter Your Company Name"/>
                                                    {{-- <span class="form-text text-muted">We\ll never share your email with anyone else.</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Company Registration # *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="flaticon2-website"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" name="company_reg_no" placeholder="Enter Your Company Registration Number"/>
                                                    </div>
                                                    {{-- <span class="form-text text-muted">Please Enter Company Registration Number.</span> --}}
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Contact Person *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="flaticon2-website"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" name="contact_person" placeholder="Enter Contact Person"/>
                                                    </div>
                                                    {{-- <span class="form-text text-muted">Please enter your website URL.</span> --}}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Email *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" name="email" placeholder="Enter your email"/>
                                                    {{-- <span class="form-text text-muted">We\ll never share your email with anyone else.</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Password *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" name="pass" placeholder="Enter your email"/>
                                                    {{--                         <span class="form-text text-muted">We\ll never share your email with anyone else.</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Company Address *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="flaticon2-website"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" name="company_address" placeholder="Enter your url"/>
                                                    </div>
                                                    {{-- <span class="form-text text-muted">Please enter your website URL.</span> --}}
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Post Code *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" name="post_code" placeholder="Enter your email"/>
                                                    {{--                         <span class="form-text text-muted">We\ll never share your email with anyone else.</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Country *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control" name="country">
                                                        <option value="">Select</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                    {{-- <span class="form-text text-muted">Please select an option.</span> --}}
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">State *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control" name="state">
                                                        <option value="">Select</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                    {{-- <span class="form-text text-muted">Please select an option.</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Telephone # *</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" ><i class="flaticon2-phone"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="tel_no" placeholder="Enter phone"/>
                                                    </div>
                                                    {{-- <span class="form-text text-muted">Please enter your US phone number</span> --}}
                                                </div>
                                            </div>    
                                        </div>
                                    </div>

                                    <div class="row">
                                     <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Supplier Contractor *</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="supplier_contractor" placeholder="Enter Your Company Name"/>
                                                {{-- <span class="form-text text-muted">We\ll never share your email with anyone else.</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-lg-9 ml-lg-auto">
                                            <button type="submit" class="btn btn-primary font-weight-bold mr-2">Validate</button>
                                            <button type="reset" class="btn btn-light-primary font-weight-bold">Cancel</button>
                                        </div>
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
