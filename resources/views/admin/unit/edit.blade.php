@extends('admin.master')
@section('title')
    Edit Unit
@endsection
@section('content')
    <div class="card">
        <div class="card-header bg-primary text-center">
            <h3 class="text-white">Edit Unit Form</h3>
        </div>

        <div class="card-body">
            <form class="form" action="{{route('unit.update')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$unit->id}}">
                @csrf
                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    >Unit Name</label
                    >
                    <div class="col-md-10">
                        <input
                            class="form-control"
                            type="text"
                            name="name"
                            value="{{$unit->name}}"
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
                        <textarea class="form-control" name="description" rows="5" placeholder="Description About Unit">{{$unit->description}}</textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    >Unit Code</label
                    >
                    <div class="col-md-10">
                        <input
                            class="form-control"
                            type="text"
                            name="code"
                            value="{{$unit->code}}"
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
                        <button class="btn btn-primary" type="submit">Update Unit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
