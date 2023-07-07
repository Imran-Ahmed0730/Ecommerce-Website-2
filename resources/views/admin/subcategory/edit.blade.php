@extends('admin.master')
@section('title')
    Edit Category
@endsection
@section('content')
    <div class="card">
        <div class="card-header bg-primary text-center">
            <h3 class="text-white">Edit Category Form</h3>
        </div>

        <div class="card-body">
            <form class="form" action="{{route('subcategory.update')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$subcategory->id}}">
                @csrf
                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    >Sub-Category Name</label
                    >
                    <div class="col-md-10">
                        <input
                            class="form-control"
                            type="text"
                            name="name"
                            value="{{$subcategory->name}}"
                            id="example-text-input"
                            readonly
                        />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    >Category Name</label
                    >
                    <div class="col-md-10">
                        <select name="category_id" class="form-control">
                            <option value="{{$subcategory->category_id}}" selected>{{$subcategory->category->name}}</option>
                            <option disabled>Choose a Category Type </option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    >Description</label
                    >
                    <div class="col-md-10">
                        <textarea class="form-control" name="description" rows="5" placeholder="Description About Category">{{$subcategory->description}}</textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    >Category Image</label
                    >
                    <div class="col-md-10">
                        <input
                            class="form-control"
                            type="file"
                            name="image"
                        />
                        <img src="{{asset($subcategory->image)}}" alt="" class="img-fluid my-3">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    >Status</label
                    >
                    <div class="col-md-10">
                        <div class="form-check">
                            <input
                                type="radio"
                                id="customRadio11"
                                name="status"
                                class="form-check-input"
                                value="1" {{$subcategory->status == 1 ? 'checked':''}}
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
                                value="0" {{$subcategory->status == 0 ? 'checked':''}}
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
                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    ></label
                    >
                    <div class="col-md-10">
                        <button class="btn btn-primary" type="submit">Update Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
