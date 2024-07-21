@extends('admin.layouts.app')
@section('title', 'Product List')
@section('content')
<div class="card">
   <div class="card-header">
      <h5 class="card-title">Products List</h5>
      <a href="{{ route('product.create')}}" class="btn btn-primary btn-sm">Add Product</a>
      
   </div>
   <div class="card-datatable table-responsive">
      <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
         <div class="card-header d-flex border-top rounded-0 flex-wrap py-md-0">
            <div class="me-5 ms-n2 pe-5">
               <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search Product" aria-controls="DataTables_Table_0"></label></div>
            </div>
           
         </div>
         <table class="datatables-products table border-top dataTable no-footer dtr-column" id="datatable-product" aria-describedby="DataTables_Table_0_info" style="width: 1381px;">
            <thead>
               <tr>
                  <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                  
                  <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 430px;" aria-label="product: activate to sort column descending" aria-sort="ascending">product</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 136px;" aria-label="category: activate to sort column ascending">category</th>

                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 136px;" aria-label="category: activate to sort column ascending">sub category</th>
                  
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 136px;" aria-label="category: activate to sort column ascending">Slug</th>
                 
                 
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 102px;" aria-label="status: activate to sort column ascending">Image</th>
                  <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 75px;" aria-label="Actions">Actions</th>
               </tr>
            </thead>
            <tbody>

              @foreach($products as $product)
               <tr class="odd">
                  <td class="  control" tabindex="0" style="display: none;"></td>
                  
                  <td class="sorting_1">
                     <div class="d-flex justify-content-start align-items-center product-name">
                        <div class="avatar-wrapper">

                           <div class="avatar avatar me-2 rounded-2 bg-label-secondary"><img src="{{ env('APP_URL') }}/storage/app/public/Product-Image/{{ basename($product->image) }}" alt="Product-9" class="rounded-2"></div>
                        </div>
                        <div class="d-flex flex-column">
                           <h6 class="text-body text-nowrap mb-0">{{$product->name}}</h6>
                           <small class="text-muted text-truncate d-none d-sm-block">{{$product->slug}}</small>
                        </div>
                     </div>
                  </td>
                  <td><span class="text-truncate d-flex align-items-center"><span class="avatar-sm rounded-circle d-flex justify-content-center align-items-center bg-label-info me-2"><i class="bx bx-walk"></i></span>{{$product->category->name}}</span></td>
                  
                 
                  <td><span>{{$product->subcategory->name}}</span></td>
                  <td><span>{{$product->slug}}</span></td>
                  <td><span class="badge bg-label-danger" text-capitalized="">
                     <img src="{{ env('APP_URL') }}/storage/app/public/Product-Image/{{ basename($product->image) }}" alt="Product-Image" style="max-width: 100px; max-height: 100px;" >   
                  </span></td>
                  <td>
                     <div class="d-inline-block text-nowrap">
                      
                        <a href=" {{ route('product.edit',$product)}}">
                           <button class="btn btn-sm btn-icon"><i class="bx bx-edit"></i></button>
                        </a>
                        <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                        <div class="dropdown-menu dropdown-menu-end m-0">
                           <a href="" class="dropdown-item">View</a>

                           <form action="{{route('product.delete', $product->id)}}" method="POST" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item">Delete</button></div>
                           <form>
                     </div>
                  </td>
                </tr>

                @endforeach
               
            </tbody>
         </table>
         
         <div style="width: 1%;"></div>
      </div>
   </div>
</div>
@endsection




@push('scripts')
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable-products').DataTable();
        } );
    </script>



    @endpush

