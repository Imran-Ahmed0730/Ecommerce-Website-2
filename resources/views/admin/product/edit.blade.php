@extends('admin.master')
@section('title')
    Edit Product
@endsection
@section('content')
    <div class="card mt-5">
        <div class="card-header bg-primary">
            <h4 class="mb-0 text-white">Edit Product Form</h4>
        </div>
        <form action="{{route('product.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            <div>
                <div class="card-body">
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Category Name</label>
                                <select name="category_id" id="CategoryId" class="form-control form-select">
                                    <option>--Select A Category--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"{{$category->id == $product->category_id ? 'selected':' '}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Sub-Category Name</label>
                                <select name="subcategory_id" id="SubCategoryId" class="form-control form-select">
                                    <option selected>--Select Sub-Category--</option>
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}" {{$subcategory->id == $product->subcategory_id ? "selected": " "}}>{{$subcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 has-success">
                                <label class="control-label">Brand Name</label>
                                <select name="brand_id" class="form-control custom-select">
                                    <option selected>--Select Brand--</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? "selected": " "}}>{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="mb-3 has-success">
                                <label class="control-label">Unit Type</label>
                                <select name="unit_id" class="form-control custom-select">
                                    <option selected>--Select Unit--</option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}" {{$unit->id == $product->unit_id ? "selected": " "}}>{{$unit->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Product Name</label>
                                <input type="text" name="name" placeholder="Product Name" value="{{$product->name}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Product Code</label>
                                <input type="text" name="code" placeholder="Product Code" value="{{$product->code}}" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Product Model</label>
                                <input type="text" name="model" placeholder="Product Model" value="{{$product->model}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Stock Amount</label>
                                <input type="number" name="stock_amount" placeholder="Stock Amount" value="{{$product->stock_amount}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Regular Price</label>
                                <input type="number" name="regular_price" placeholder="Regular Price" value="{{$product->regular_price}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Stock Amount</label>
                                <input type="number" name="selling_price" placeholder="Selling Price" value="{{$product->selling_price}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="control-label">Short Description</label>
                                <textarea name="short_description" placeholder="Short Description" rows="8" class="form-control">{{$product->short_description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="control-label">Long Description</label>
                                <textarea name="long_description" placeholder="Short Description" rows="8" id="summernote" class="form-control">{!! $product->long_description !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="control-label">Feature Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{asset($product->image)}}" alt="" class="img-fluid my-2" height="200px" width="200px">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="control-label">Other Images</label>
                                <input type="file" name="other_image[]" class="form-control" multiple>
                                    @foreach($product->otherImages as $images)
                                        <img src="{{asset($images->image)}}" alt="" height="200px" width="100px" class="m-2">
                                    @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="control-label">Status</label>
                                <div class="form-check">
                                    <input
                                        type="radio"
                                        id="customRadio11"
                                        name="status"
                                        value="1"
                                        class="form-check-input"
                                        {{$product->status == 1 ? 'checked': ' '}}
                                    />
                                    <label
                                        class="form-check-label"
                                        for="customRadio11"
                                    >Published</label
                                    >
                                </div>
                                <div class="form-check">
                                    <input
                                        type="radio"
                                        id="customRadio22"
                                        name="status"
                                        value="0"
                                        class="form-check-input"
                                        {{$product->status == 0 ? 'checked': ' '}}
                                    />
                                    <label
                                        class="form-check-label"
                                        for="customRadio22"
                                    >UnPublished</label
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button
                                type="submit"
                                class="btn btn-success rounded-pill px-4"
                            >
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-device-floppy me-1 fs-4"></i>
                                    Update Product
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

