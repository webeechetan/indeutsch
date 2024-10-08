@extends('admin.layouts.app')

@section('title', 'Category')

@section('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Category List</h5>
    <a href="{{ route('admin.category.create')}}" class="btn btn-primary btn-sm">Add Category</a>
  </div>
          
    <div class="table-responsive text-nowrap">
        <div class="container">
            <table class="table" id="datatable-category">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>
                            {{-- @if ($category->image) --}}
                            @if ($category->image && $category->image !== asset('admin/') . '/assets/img/pages/default.png')

                            <img src="{{ env('APP_URL') }}/storage/app/public/Category-Image/{{ basename($category->image) }}" alt="{{ $category->name }}" style="max-width: 60px;">
                            @else
                            <img src="{{ asset('admin/') }}/assets/img/pages/default.png" alt="Default-Image" style="width: 60px; height: 60px;">
                            
                            @endif
                        </td>
                        <td>
                        <a href="{{route('admin.category.edit', $category->id)}}" class="btn btn-primary btn-sm">Edit</a>
                           <form action="{{route('admin.category.delete', $category->id)}}" method="POST" class="d-inline">
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
