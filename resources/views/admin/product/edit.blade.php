@extends('admin.master')
@section('title')
    Edit Product
@endsection
@section('content')
    <div class="card">
        <div class="card-header bg-primary">
            <h4 class="mb-0 text-white">Other Sample form</h4>
        </div>
        <form action="#">
            <div>
                <div class="card-body">
                    <h5>Person Info</h5>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">First Name</label>
                                <input
                                    type="text"
                                    id="firstName"
                                    class="form-control"
                                    placeholder="John doe"
                                />
                                <small class="form-control-feedback">
                                    This is inline help
                                </small>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="mb-3 has-danger">
                                <label class="control-label">Last Name</label>
                                <input
                                    type="text"
                                    id="lastName"
                                    class="form-control form-control-danger"
                                    placeholder="12n"
                                />
                                <small class="form-control-feedback">
                                    This field has error.
                                </small>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 has-success">
                                <label class="control-label">Gender</label>
                                <select class="form-control custom-select">
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                                <small class="form-control-feedback">
                                    Select your gender
                                </small>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Date of Birth</label>
                                <input type="date" class="form-control" />
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Category</label>
                                <select
                                    class="form-control form-select"
                                    data-placeholder="Choose a Category"
                                    tabindex="1"
                                >
                                    <option value="Category 1">Category 1</option>
                                    <option value="Category 2">Category 2</option>
                                    <option value="Category 3">Category 5</option>
                                    <option value="Category 4">Category 4</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="control-label">Membership</label>
                                <div class="form-check">
                                    <input
                                        type="radio"
                                        id="customRadio11"
                                        name="customRadio"
                                        class="form-check-input"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="customRadio11"
                                    >Free</label
                                    >
                                </div>
                                <div class="form-check">
                                    <input
                                        type="radio"
                                        id="customRadio22"
                                        name="customRadio"
                                        class="form-check-input"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="customRadio22"
                                    >Paid</label
                                    >
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                </div>
                <hr />
                <div class="card-body">
                    <!--/row-->
                    <h5 class="mb-4">Address</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label>Street</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>City</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>State</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Post Code</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Country</label>
                                <select class="form-control form-select">
                                    <option>--Select your Country--</option>
                                    <option>India</option>
                                    <option>Sri Lanka</option>
                                    <option>USA</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                </div>
                <div class="form-actions">
                    <div class="card-body border-top">
                        <button
                            type="submit"
                            class="btn btn-success rounded-pill px-4"
                        >
                            <div class="d-flex align-items-center">
                                <i class="ti ti-device-floppy me-1 fs-4"></i>
                                Save
                            </div>
                        </button>
                        <button
                            type="button"
                            class="btn btn-danger rounded-pill px-4 ms-2 text-white"
                        >
                            Cancel
                        </button>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label
                        for="example-text-input"
                        class="col-md-2 col-form-label"
                    ></label
                    >
                    <div class="col-md-10">
                        <button class="btn btn-primary" type="submit">Add Category</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

