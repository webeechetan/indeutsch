@extends('admin.layouts.app')

@section('title', ' Edit Category')

@section('content')
<div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Edit SubCategory</h5>
        </div>  
        <div class="card-body">
          <form method="POST" action="{{route('subcategory.update',$subCategory->id)}}"  enctype="multipart/form-data" >
            @csrf
            @method('PUT')
           
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">SubCategory Name</label>
                    <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                    <input type="" class="form-control" id="subcategory_name" name="subcategory_name" value="{{$subCategory->name}}">
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
                    <input type="text" id="slug" name="slug" class="form-control" placeholder="Slug" value="{{$subCategory->slug}}">
                    </div>
                    @error('slug')    
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                  </div>
                </div>


                <div class="mb-3">
                    <label class="form-label" for="category_id">Select Category</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-category"></i></span>
                        <select class="form-select" id="category_id" name="category_id">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id == $subCategory->category_id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                

                <div class="mb-3">
                  <label class="form-label" for="category_image">SubCategory Image</label>
                  <div class="input-group input-group-merge">
                     
                      <input type="file" class="form-control" id="category_image" name="category_image">
                      <label class="input-group-text" for="category_image"><i class="bx bx-image"></i></label>
                    
                      @if ($subCategory->image)
                      <img src="{{ env('APP_URL') }}/storage/app/public/SubCategory-Image/{{ basename($subCategory->image) }}" alt="{{ $subCategory->name }}" style="max-width: 60px;">
                      @else
                      <img src="{{ asset('admin/') }}/assets/img/pages/default.png" alt="Default-Image" style="width: 60px; height: 60px;">
                      @endif
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
  </div>
@endsection