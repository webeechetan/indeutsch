@extends('admin.layouts.app')

@section('title', 'Category')

@section('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">SubCategory List</h5>
    <a href="{{ route('subcategory.create')}}" class="btn btn-primary btn-sm">Add SubCategory</a>
  </div>
          
    <div class="table-responsive text-nowrap">
        <div class="container">
            <table class="table" id="datatable-category">
                <thead>
                    <tr>
                        <th>Subcategory Name</th>
                        <th>Category</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    
                    @foreach($subcategories as $subcategory)
                    <tr>
                        <td>{{$subcategory->name}}</td>
                        <td>{{$subcategory->category->name}}</td>
                        <td>{{$subcategory->slug}}</td>
                        <td>
                            @if($subcategory->image)
                            <img src="{{ env('APP_URL') }}/storage/app/public/SubCategory-Image/{{ basename($subcategory->image) }}" alt="{{ $subcategory->name }}" style="max-width: 60px;">
                            @else
                            <img src="{{ asset('admin/') }}/assets/img/pages/default.png" alt="Default-Image" style="width: 60px; height: 60px;">
                            @endif
                        </td>
                        <td>
                        <a href="{{route('subcategory.edit', $subcategory)}}" class="btn btn-primary btn-sm">Edit</a>
                           <form action="{{route('subcategory.delete', $subcategory)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection


@push('scripts')
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable-category').DataTable();
        } );
    </script>



    @endpush

