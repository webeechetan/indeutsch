@extends('admin.layouts.app')
@section('title', ' Create Category')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            
    <div>
    
      <!-- Add Product -->
      <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
        <div class="d-flex flex-column justify-content-center">
          <h4 class="mb-1 mt-3">Add a new Product</h4>
        </div>
        <div class="d-flex align-content-center flex-wrap gap-3">
          <a href="{{ route('product.store')}}" class="btn btn-primary btn-sm">Add Product</a>
        </div>
      </div>

      <div class="row">
        <form class="form-repeater" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
    
            <!-- First column-->
            <div class="col-md-12">
                <!-- Product Information -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-tile mb-0">Product information</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
    
                            <div class="col">
                                <label class="form-label" for="ecommerce-product-name">Product Name</label>
                                <input type="text" class="form-control" id="product_name" placeholder="Product Name" name="product_name" aria-label="Product Name">
                            </div>
                            @error('product_name')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                            <div class="col">
                                <label class="form-label" for="ecommerce-product-slug">Slug</label>
                                <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" aria-label="Product slug">
                            </div>
                            @error('slug')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
    
                        <!-- Description -->
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label" for="category_id">Category</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-category"></i></span>
                                    <select class="form-select" id="category_id" name="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
    
    
                            <div class="col">
                                <label class="form-label" for="subcategory_id">Sub Category</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-category"></i></span>
                                    <select class="form-select" id="subcategory_id" name="subcategory_id">
                                        <option value="">Select Subcategory</option>
                                        @foreach($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
    
                        </div>
    
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="formFileMultiple" class="form-label">Product Image</label>
                                <input class="form-control" type="file" id="product_image" name="product_image">
                            </div>
                        </div>
    
                    </div>
                </div>
                <!-- /Product Information -->
    
                <!-- Variants -->
    
                <div id="variantContainer">
                    <div class="card mb-4 variantSection">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Variants</h5>
                        </div>
                        <div class="card-body">
                            <div data-repeater-list="group-a">
                                <div data-repeater-item="">
                                    <div class="row">
    
                                        <div class="mb-3 col-md-6">
                                            <label for="formFileMultiple" class="form-label">Choose Image</label>
                                            <input class="form-control" type="file" id="product_images" name="product_images[]" multiple>
                                        </div>
    
                                        <div class="mb-3 col-md-6">
                                            <label for="html5-color-input" class="col-md-2 col-form-label">Color</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="color" value="" id="variant_color" name="variant_color[]">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="largeInput" class="form-label">Weight</label>
                                            <input id="weight" class="form-control form-control" type="number" placeholder="" name="weight[]">
                                        </div>
    
                                        <div class="mb-3">
                                            <label for="largeInput" class="form-label">Short Description</label>
                                            <input id="short_description" class="form-control form-control-lg" type="text" placeholder="Short Description" name="short_description[]">
                                        </div>
    
                                        <div>
                                            <label for="exampleFormControlTextarea1" class="form-label">Long Description</label>
                                            <textarea class="form-control" id="long_description" rows="3" name="long_description[]"></textarea>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- /Variants -->
    
            </div>
    
            <div class="row">
                <div class="col-md-2">
                    <button id="addVariantBtn" type="button" class="btn btn-primary">Add Variant</button>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
    
    </div>
</div>

@endsection


@push('scripts')
<script>

$(document).ready(function() {
    // Clone the first variant section and append it to the container on button click
    $('#addVariantBtn').click(function() {
        var clonedVariant = $('.variantSection').first().clone();
        $('#variantContainer').append(clonedVariant);
    });

    $('#category_id').change(function(){


        var category_id = $(this).val();

        alert('hello world');

        // $.ajax({
        //     method: 'GET',
        //     url: {{ route("product.fetchSubcategories") }},
        //     dataType: 'json',
            
            

        //    success: function() {
        //     alert('success');
        //    },
        //    error: function(jqXHR, textStatus, errorThrown) {
        //     alert('Error');
        //    }


        // });
        

    });

});

  </script>

  @endpush