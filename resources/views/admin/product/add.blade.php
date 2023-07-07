@extends('admin.master')
@section('title')
    Add Product
@endsection
@section('content')
    <div class="card mt-5">
        <div class="card-header bg-primary">
            <h4 class="mb-0 text-white">Add Product Form</h4>
        </div>
        <form action="{{route('product.new')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="card-body">
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Category Name</label>
                                <select name="category_id" id="CategoryId" class="form-control form-select">
                                    <option selected>--Select A Category--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
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
                                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
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
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
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
                                        <option value="{{$unit->id}}">{{$unit->name}}</option>
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
                                <input type="text" name="name" placeholder="Product Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Product Code</label>
                                <input type="text" name="code" placeholder="Product Code" class="form-control">
                            </div>
                        </div>
{{--                        <!--/span-->--}}

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Product Model</label>
                                <input type="text" name="model" placeholder="Product Model" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Stock Amount</label>
                                <input type="number" name="stock_amount" placeholder="Stock Amount" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Regular Price</label>
                                <input type="number" name="regular_price" placeholder="Regular Price" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Stock Amount</label>
                                <input type="number" name="selling_price" placeholder="Selling Price" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="control-label">Short Description</label>
                                <textarea name="short_description" placeholder="Short Description" rows="8" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="control-label">Long Description</label>
                                <textarea name="long_description" placeholder="Short Description" rows="8" id="summernote" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="control-label">Feature Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="control-label">Other Images</label>
                                <input type="file" name="other_image[]" class="form-control" multiple>
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
                                        checked
                                    />
                                    <label
                                        class="form-check-label"
                                        for="customRadio11"
                                    >Publish</label
                                    >
                                </div>
                                <div class="form-check">
                                    <input
                                        type="radio"
                                        id="customRadio22"
                                        name="status"
                                        value="0"
                                        class="form-check-input"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="customRadio22"
                                    >UnPublish</label
                                    >
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="row">
                            <div class="col-md-12">
                                <button
                                    type="submit"
                                    class="btn btn-success rounded-pill px-4"
                                >
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-device-floppy me-1 fs-4"></i>
                                        Add Product
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
            </div>
    </div>
@endsection

