@extends('../layouts.master')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
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
                            <form class="form" id="kt_form_1" method="POST" action="{{ URL('/vendor_add_admin_submit') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Company Name</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" name="company_name" placeholder="Enter Your Company Name"/>
                                                    {{-- <span class="form-text text-muted">We\ll never share your email with anyone else.</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Company Registration</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <!-- <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="flaticon2-website"></i>
                                                            </span>
                                                        </div> -->
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
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Contact Person</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <!-- <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="flaticon2-website"></i>
                                                            </span>
                                                        </div> -->
                                                        <input type="text" class="form-control" name="contact_person" placeholder="Enter Contact Person"/>
                                                    </div>
                                                    {{-- <span class="form-text text-muted">Please enter your website URL.</span> --}}
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Email</label>
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
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Password</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" name="pass" placeholder="Enter your email"/>
                                                    {{--                         <span class="form-text text-muted">We\ll never share your email with anyone else.</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Company Address</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group">
                                                        <!-- <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="flaticon2-website"></i>
                                                            </span>
                                                        </div> -->
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
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Post Code</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <input type="text" class="form-control" name="post_code" placeholder="Enter your email"/>
                                                    {{--                         <span class="form-text text-muted">We\ll never share your email with anyone else.</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">Country</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <select class="form-control" name="country">
                                                        <option value="">Select Country </option>
                                                        <?php 
                                                        foreach ($countries as $value) {
                                                          ?>
                                                          <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                          <?php
                                                      }
                                                      ?>
                                                  </select>
                                                  {{-- <span class="form-text text-muted">Please select an option.</span> --}}
                                              </div>
                                          </div>  
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">State State</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12"><!-- 
                                                <select class="form-control" name="state">
                                                    <option value="">Select</option>
                                                    <?php 
                                                    foreach ($states as $value) {
                                                      ?>
                                                      <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                      <?php
                                                  }
                                                  ?>
                                              </select> -->

                                              
                                              <input type="text" class="form-control" name="state" placeholder="Enter your state"/>
                                              {{-- <span class="form-text text-muted">Please select an State.</span> --}}
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Telephone</label>
                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <!-- <div class="input-group-prepend">
                                                    <span class="input-group-text" ><i class="flaticon2-phone"></i></span>
                                                </div> -->
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
                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Supplier Contractor</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <!-- <input type="text" class="form-control" name="supplier_contractor" placeholder="Enter Your Company Name"/> -->

                                <select class="form-control" 
                                name="supplier_contractor">
                                                        <option value="">Select Type </option>
                                                        <option value="Supplier">Supplier </option>
                                                        <option value="Contractor">Contractor </option>
                                                    </select>
                                        {{-- <span class="form-text text-muted">We\ll never share your email with anyone else.</span> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-primary font-weight-bold mr-2">Submit</button>
                                </div>
                            </div> -->
                        </div>
<div class="row">
    <label class="col-form-label text-left col-sm-12 text-bold" style="font-weight: bolder;">Financial Information </label>
    <hr>
    <br>
</div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Company Bank</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="text" class="form-control" name="company_bank" placeholder="Enter Your Company Bank"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Bank Account No</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <div class="input-group">
                                            <!-- <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="flaticon2-website"></i>
                                                </span>
                                            </div> -->
                                            <input type="text" class="form-control" name="bank_account_no" placeholder="Enter Your Bank Account Number"/>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Authorize Capital</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="text" class="form-control" name="authorize_capital" placeholder="Enter Authorize Capital"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Paid up Capital</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <div class="input-group">
                                            <!-- <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="flaticon2-website"></i>
                                                </span>
                                            </div> -->
                                            <input type="text" class="form-control" name="paid_up_capital" placeholder="Enter Paid up Capital"/>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Upload Docs</label>
                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                        <input type="file" class="form-control" name="file"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-lg-9 ml-lg-auto">
                                    <button type="submit" class="btn btn-primary font-weight-bold mr-2">Submit</button>
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
<Style>
    thead tr th { white-space: nowrap; }
</Style>

<div class="card-body">
    <!--begin: Datatable-->
    <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="row">
            <div class="col-sm-12">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th> CompanyRegistration</th>
                            <th> Contact Person </th>
                            <th> Email </th>
                            <th> Password </th>
                            <th> Company Address </th>
                            <th>State</th>
                            <th>Telephone</th>
                            <th>Supplier Contractor</th>
                            <th>Company Bank</th>
                            <th>Bank Account No.</th>
                            <th>Authorize Capital</th>
                            <th>Paid up Capital</th>
                            <th>View Doc</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $sr = 1;
                      foreach ($registered_vendors as $value) {
                          ?>
                          <tr>
                            <td> {{$value->company_name}} </td>
                            <td> {{$value->company_reg_no}} </td>
                            <td> {{$value->contact_person}} </td>
                            <td> {{$value->email}} </td>
                            <td> {{$value->password}} </td>
                            <td> {{$value->company_address}} </td>
                            <td> {{$value->post_code}} </td>
                            <td> {{$value->tel_no}} </td>
                            <td> {{$value->supplier_contractor}} </td>
                            <td> {{$value->company_bank}} </td>
                            <td> {{$value->bank_account_no}} </td>
                            <td> {{$value->authorize_capital}} </td>
                            <td> {{$value->paid_up_capital}} </td>
                            <td> <a href="<?php echo storage_path('/app/public/uploads/').$value->doc; ?>" target="_blank">View Doc</a> </td>
                            {{-- <td class="text-center">
                               <button type="button" class="btn btn-warning">Pending</button>
                           </td> --}}
                       </tr>
                       <?php
                   }
                   ?>
               </tbody>
           </table>
       </div>
   </div>
   <!--end: Datatable-->
</div>
</div>
@endsection
