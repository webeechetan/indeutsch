@extends('admin.layouts.app')
@section('title', ' Create Category')

@section('content')
<div class="col-xl">
    <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">New Category</h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Category Name</label>
                <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" class="form-control" id="category_name" name="category_name">
                </div>
                @error('category_name')    
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label" for="basic-icon-default-company">Slug</label>
                  <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                  <input type="text" id="slug" name="slug" class="form-control" placeholder="Slug">
                  </div>
                  @error('slug')    
                      <div class="text-danger mt-2">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              

            <div class="mb-3">
                <label class="form-label" for="category_image">Category Image</label>
                <div class="input-group input-group-merge">
                    <input type="file" class="form-control" id="category_image" name="category_image">
                    <label class="input-group-text" for="category_image"><i class="bx bx-image"></i></label>
                </div>
                @error('category_image')    
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    </div>
</div>
@endsection
