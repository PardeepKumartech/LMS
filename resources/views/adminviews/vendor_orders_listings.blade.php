@extends('../layouts.master')
@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap py-3">
            <div class="card-title">
                <h3 class="card-label">
                    Vendors Listing
                    <span class="d-block text-muted pt-2 font-size-sm">sorting &amp; pagination remote datasource</span>
                </h3> </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{ URL('/vendor_add_admin') }}" class="btn btn-primary font-weight-bolder"> <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg><!--end::Svg Icon--></span> Add New Vendor </a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                          <th> Order Id </th>
                                          <th> ISBN </th>
                                          <th> AUTHOR </th>
                                          <th> PUBLISHER </th>
                                          <th> YEAR OF PUBLICATION </th>
                                          <th> PRICE </th>
                                         <th> Vendor Name </th>
                                         <th> Vendor Email </th>
                                         <th> STATUS </th>
                                         <th> Action </th>
                                       </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                      $sr = 1;
                                      foreach ($data as $value) {
                                        ?>
                                        <tr>
                                          <td>
                                            <?php echo str_pad($value->id, 8, '0', STR_PAD_LEFT); ?>
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

                                         <td class="text-center actions">
                                          <a href="{{ route('approverejectvendor') }}?status=1&order_id=<?php echo $value->id; ?>"><i class="fa fa-check checkclass" aria-hidden="true" style="color: #28a745!important; "></i></a> | 
                                          <a href="{{ route('approverejectvendor') }}?status=2&order_id=<?php echo $value->id; ?>"><i class="fa fa-times timesclass" aria-hidden="true" style="color: #dc3545!important;"></i></a>
                                        </td>

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
     <!--end::Subheader-->
     <!--begin::Entry-->
     <!--end::Entry-->
 </div>
 @endsection
