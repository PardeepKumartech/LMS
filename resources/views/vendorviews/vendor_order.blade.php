@extends('../layouts.master')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Subheader-->
  <!--end::Subheader-->
  <!--begin::Entry-->
  <div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class=" container ">
      <!--begin::Notice-->
      <!--end::Notice-->
      <!--begin::Card-->
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
              <h3 class="card-title">
                Add New Order
              </h3>
              {{-- <div class="card-toolbar">
                <div class="example-tools justify-content-center"> <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span> </div>
              </div> --}}
            </div>
            <br>    
            <!--begin::Form-->
            <form class="form" id="submit_vendor_form" method="POST" action="{{ URL('/submit_vendor_order') }}">
              {{ csrf_field() }}
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label class="col-form-label text-right col-lg-3 col-sm-12">ISBN *</label>
                      <div class="col-lg-9 col-md-9 col-sm-12">
                        <input type="text" class="form-control" name="isbn" placeholder="Enter ISBN"/>
                        {{-- <span class="form-text text-muted">We\ll never share your email with anyone else.</span> --}}
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label class="col-form-label text-right col-lg-3 col-sm-12">Author *</label>
                      <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="flaticon2-website"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" name="author" placeholder="Enter Auther"/>
                        </div>
                        {{-- <span class="form-text text-muted">Please Enter Company Registration Number.</span> --}}
                      </div>
                    </div>    
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label class="col-form-label text-right col-lg-3 col-sm-12">PUBLISHER *</label>
                      <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="flaticon2-website"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" name="publisher" placeholder="Enter Publisher"/>
                        </div>
                        {{-- <span class="form-text text-muted">Please enter your website URL.</span> --}}
                      </div>
                    </div>    
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label class="col-form-label text-right col-lg-3 col-sm-12">YEAR OF PUBLICATION *</label>
                      <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="flaticon2-website"></i>
                            </span>
                          </div>
                          <input type="text" class="form-control" name="yearofpub" placeholder="Enter Contact Person"/>
                        </div>
                        {{-- <span class="form-text text-muted">Please enter your website URL.</span> --}}
                      </div>
                    </div>    
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label class="col-form-label text-right col-lg-3 col-sm-12">Price # *</label>
                      <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" ><i class="flaticon2-phone"></i></span>
                          </div>
                          <input type="text" class="form-control" name="price" placeholder="Enter phone"/>
                        </div>
                        {{-- <span class="form-text text-muted">Please enter your US phone number</span> --}}
                      </div>
                    </div>    
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label class="col-form-label text-right col-lg-3 col-sm-12">Quantity *</label>
                      <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" ><i class="flaticon2-phone"></i></span>
                          </div>
                          <input type="text" class="form-control" name="quantity" placeholder="Enter Quantity"/>
                        </div>
                        {{-- <span class="form-text text-muted">Please enter your US phone number</span> --}}
                      </div>
                    </div>    
                  </div>

                </div>


                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label class="col-form-label text-right col-lg-3 col-sm-12">Discount *</label>
                      <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" ><i class="flaticon2-phone"></i></span>
                          </div>
                          <input type="text" class="form-control" name="discount" placeholder="Enter Discount"/>
                        </div>
                        {{-- <span class="form-text text-muted">Please enter your US phone number</span> --}}
                      </div>
                    </div>    
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group row">
                      <label class="col-form-label text-right col-lg-3 col-sm-12">Tax *</label>
                      <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" ><i class="flaticon2-phone"></i></span>
                          </div>
                          <input type="text" class="form-control" name="tax" placeholder="Enter Tax"/>
                        </div>
                        {{-- <span class="form-text text-muted">Please enter your US phone number</span> --}}
                      </div>
                    </div>    
                  </div>

                </div>


                <div class="row">
                  <div class="col-sm-6">
                    &nbsp;
                  </div>
                  <div class="col-sm-6 text-center">
                    <div class="col-lg-9 ml-lg-auto">
                      <button type="submit" class="btn btn-primary font-weight-bold mr-2">Submit</button>
                    </div>
                  </div>
                </div>



                <div class="row">
                  <br><br>
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

<div class="card-body">
  <!--begin: Datatable-->
  <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
    <div class="row">
      <div class="col-sm-12">
        <table id="example" class="display" style="width:100%">
          <thead>
            <tr>
              <th>Sr. No.</th>
              <th> Order Id </th>
              <th> ISBN </th>
              <th> AUTHOR </th>
              <th> PUBLISHER </th>
              <th> YEAR OF PUBLICATION </th>
              <th> PRICE </th>
              <th> Quantity </th>
              <th> Discount </th>
              <th> Tax </th>
              <th> Vendor Name </th>
              <th> Vendor Email </th>
              <th> STATUS </th>
              <th> Edit </th>
              <th> Delete </th>
              <th> Generate Order </th>

            </tr>
          </thead>
          <tbody>
            <?php 
            $sr = 1;
            foreach ($data as $value) {
              ?>
              <tr>
                <td><?php echo $sr; ?></td>
                <td>
                  <?php 
                  if(!empty($value->generate_order_by) && $value->generate_order_by != '' && $value->generate_order_by != Null){
                    echo str_pad($value->id, 8, '0', STR_PAD_LEFT);
                  }
                  ?>
                </td>
                <td>
                  {{$value->isbn}}
                </td>
                <td>
                  {{$value->author}}
                </td>
                <td>
                  {{$value->publisher}}
                </td>
                <td class="text-center">
                  {{$value->yearofpub}}
                </td>
                <td class="text-center">
                  {{$value->price}}
                </td>
                <td class="text-center">
                  {{$value->quantity}}
                </td>

                <td class="text-center">
                  {{$value->discount}}
                </td>

                <td class="text-center">
                  {{$value->tax}}
                </td>
                <td class="text-center">
                  {{$value->name}}
                </td>
                <td class="text-center">
                  {{$value->email}}
                </td>
                <?php 
                if($value->status == 0 || $value->status == '0'){
                  $class = ' btn-warning ';
                  $text = 'Pending';
                }elseif($value->status == 1 || $value->status == '1'){
                  $class = ' btn-success ';
                  $text = 'Approved';
                }elseif($value->status == 2 || $value->status == '2'){
                  $class = ' btn-danger ';
                  $text = 'Rejected';
                }
                ?>
                <td class="text-center">
                 <button type="button" class="btn <?php echo $class; ?>"><?php echo $text; ?></button>
               </td>
               <?php 
               if(!empty($value->generate_order_by) && $value->generate_order_by != '' && $value->generate_order_by != Null){
                ?>
                <td></td>
                <td></td>
                <td><?php echo str_pad($value->id, 8, '0', STR_PAD_LEFT); ?></td>
                <?php
              }else{
                ?>
                <td>
                 <a href="{{ URL('/edit_vendor_order') }}/<?php echo $value->id;  ?>"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bolder; color: red;"></i></a>
               </td>
               <td>
                 <a href="{{ URL('/delete_vendor_order') }}/<?php echo $value->id;  ?>"><i class="fa fa-trash-o" aria-hidden="true" style="font-weight: bolder; color: red;"></i></a>
               </td>
               <td><a href="{{ URL('/generate_vendor_order') }}/<?php echo $value->id;  ?>"><button type="button" class="btn btn-success">Generate Order</button></a></td>
               <?php
             }
             ?>
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

@endsection
