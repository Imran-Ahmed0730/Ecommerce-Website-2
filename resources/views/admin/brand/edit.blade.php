@extends('admin.master')
@section('title')
    Edit Brand
@endsection
@section('content')
    <div class="card">
        <div class="card-header bg-primary text-center">
            <h3 class="text-white">Edit Brand Form</h3>
        </div>

        <div class="card-body">
            <form class="form" action="{{route('brand.update')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$brand->id}}">
                @csrf
                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    >Brand Name</label
                    >
                    <div class="col-md-10">
                        <input
                            class="form-control"
                            type="text"
                            name="name"
                            value="{{$brand->name}}"
                            id="example-text-input"
                        />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    >Description</label
                    >
                    <div class="col-md-10">
                        <textarea class="form-control" name="description" rows="5" placeholder="Description About Brand">{{$brand->description}}</textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    >Brand Image</label
                    >
                    <div class="col-md-10">
                        <input
                            class="form-control"
                            type="file"
                            name="image"
                        />
                        <img src="{{asset($brand->image)}}" alt="" class="img-fluid my-3">
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
                                value="1" {{$brand->status == 1 ? 'checked':''}}
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
                                value="0" {{$brand->status == 0 ? 'checked':''}}
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
                        <button class="btn btn-primary" type="submit">Update Brand</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
