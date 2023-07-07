@extends('admin.master')
@section('title')
    Add Sub-Category
@endsection
@section('content')
    <div class="card">
        <div class="card-header bg-primary text-center">
            <h3 class="text-white">Add Sub-Category Form</h3>
        </div>

        <div class="card-body">
            <form class="form" action="{{route('subcategory.new')}}" method="post" enctype="multipart/form-data">
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
                            placeholder="Sub-Category Name"
                            id="example-text-input"
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
                                <option disabled selected>Choose a Category Type </option>
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
                        <textarea class="form-control" name="description" rows="5" placeholder="Description About Category"></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    >Sub-Category Image</label
                    >
                    <div class="col-md-10">
                        <input
                            class="form-control"
                            type="file"
                            name="image"
                        />
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
                                value="1"
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
                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    ></label
                    >
                    <div class="col-md-10">
                        <button class="btn btn-primary" type="submit">Add Sub-Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
