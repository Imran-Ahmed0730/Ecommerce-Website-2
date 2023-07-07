@extends('admin.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="container-fluid">
        <!--  Owl carousel -->
        <div class="owl-carousel counter-carousel owl-theme">
            <div class="item">
                <div class="card border-0 zoom-in bg-light-primary shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-user-male.svg" width="50" height="50" class="mb-3" alt="" />
                            <p class="fw-semibold fs-3 text-primary mb-1"> New Clients </p>
                            <h5 class="fw-semibold text-primary mb-0">96</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-light-warning shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-briefcase.svg" width="50" height="50" class="mb-3" alt="" />
                            <p class="fw-semibold fs-3 text-warning mb-1">New Orders</p>
                            <h5 class="fw-semibold text-warning mb-0">3,650</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-light-info shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-mailbox.svg" width="50" height="50" class="mb-3" alt="" />
                            <p class="fw-semibold fs-3 text-info mb-1">New Products</p>
                            <h5 class="fw-semibold text-info mb-0">356</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-light-danger shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-favorites.svg" width="50" height="50" class="mb-3" alt="" />
                            <p class="fw-semibold fs-3 text-danger mb-1">All Products</p>
                            <h5 class="fw-semibold text-danger mb-0">696</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-light-success shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-speech-bubble.svg" width="50" height="50" class="mb-3" alt="" />
                            <p class="fw-semibold fs-3 text-success mb-1">New Brands</p>
                            <h5 class="fw-semibold text-success mb-0">23</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-light-info shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-connect.svg" width="50" height="50" class="mb-3" alt="" />
                            <p class="fw-semibold fs-3 text-info mb-1">New Categories</p>
                            <h5 class="fw-semibold text-info mb-0">59</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Top Performers -->
            <div class="col-lg-12 d-flex align-items-strech">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title fw-semibold">Top Products</h5>
                            </div>
                            <div>
                                <select class="form-select">
                                    <option value="1">March 2023</option>
                                    <option value="2">April 2023</option>
                                    <option value="3">May 2023</option>
                                    <option value="4">June 2023</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle text-nowrap mb-0">
                                <thead>
                                <tr class="text-muted fw-semibold">
                                    <th scope="col" class="ps-0">Assigned</th>
                                    <th scope="col">Project</th>
                                    <th scope="col">Priority</th>
                                    <th scope="col">Budget</th>
                                </tr>
                                </thead>
                                <tbody class="border-top">
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="{{asset('/')}}/admin/dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                                                <p class="fs-2 mb-0 text-muted">Web Designer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3">Elite Admin</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light-primary text-primary">Low</span>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">$3.9K</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="{{asset('/')}}/admin/dist/images/profile/user-2.jpg" class="rounded-circle" width="40" height="40" alt="" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">John Deo</h6>
                                                <p class="fs-2 mb-0 text-muted"> Web Developer </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3">Flexy Admin</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light-warning text-warning">Medium</span>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">$24.5K</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="{{asset('/')}}/admin/dist/images/profile/user-3.jpg" class="rounded-circle" width="40" height="40" alt="" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                                                <p class="fs-2 mb-0 text-muted">Web Manager</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3">Material Pro</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light-info text-info">High</span>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">$12.8K</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="{{asset('/')}}/admin/dist/images/profile/user-4.jpg" class="rounded-circle" width="40" height="40" alt="" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Yuvraj Sheth</h6>
                                                <p class="fs-2 mb-0 text-muted"> Project Manager </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 fs-3">Xtreme Admin</p>
                                    </td>
                                    <td>
                                        <span class="badge fw-semibold py-1 w-85 bg-light-success text-success">Low</span>
                                    </td>
                                    <td>
                                        <p class="fs-3 text-dark mb-0">$4.8K</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-0 ps-0">
                                        <div class="d-flex align-items-center">
                                            <div class="me-2 pe-1">
                                                <img src="{{asset('/')}}/admin/dist/images/profile/user-5.jpg" class="rounded-circle" width="40" height="40" alt="" />
                                            </div>
                                            <div>
                                                <h6 class="fw-semibold mb-1">Micheal Doe</h6>
                                                <p class="fs-2 mb-0 text-muted"> Content Writer </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="border-0">
                                        <p class="mb-0 fs-3">Helping Hands WP Theme</p>
                                    </td>
                                    <td class="border-0">
                                        <span class="badge fw-semibold py-1 w-85 bg-light-danger text-danger">High</span>
                                    </td>
                                    <td class="border-0">
                                        <p class="fs-3 text-dark mb-0">$9.3K</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
