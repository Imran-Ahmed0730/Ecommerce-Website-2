<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{route('dashboard')}}" class="text-nowrap logo-img">
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
                <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/light-logo.svg" class="light-logo"  width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('dashboard')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-chart-donut-3"></i>
                  </span>
                        <span class="hide-menu">Category Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('category.add')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Add Category</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('category.manage')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Manage Category</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-basket"></i>
                  </span>
                        <span class="hide-menu">Sub-Category Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('subcategory.add')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Add Sub-Category</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('subcategory.manage')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Manage Sub-Category</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-layout"></i>
                  </span>
                        <span class="hide-menu">Brand Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('brand.add')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Add Brand</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('brand.manage')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Manage Brand</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-layout-grid"></i>
                  </span>
                        <span class="hide-menu">Unit Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('unit.add')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Add Unit</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('unit.manage')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Manage Unit</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-file-text"></i>
                  </span>
                        <span class="hide-menu">Product Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('product.add')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Add Product</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('product.manage')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Manage Product</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                  <span class="d-flex">
                    <i class="ti ti-file-text"></i>
                  </span>
                        <span class="hide-menu">Order Module</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('order.add')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Add Order</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('order.manage')}}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Manage Order</span>
                            </a>
                        </li>
                    </ul>
                </li>

{{--                <li class="sidebar-item">--}}
{{--                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">--}}
{{--                  <span class="d-flex">--}}
{{--                    <i class="ti ti-file-text"></i>--}}
{{--                  </span>--}}
{{--                        <span class="hide-menu">Customer Module</span>--}}
{{--                    </a>--}}
{{--                    <ul aria-expanded="false" class="collapse first-level">--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route('customer.add')}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Add Customer</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route('customer.manage')}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Manage Customer</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="sidebar-item">--}}
{{--                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">--}}
{{--                  <span class="d-flex">--}}
{{--                    <i class="ti ti-file-text"></i>--}}
{{--                  </span>--}}
{{--                        <span class="hide-menu">User Module</span>--}}
{{--                    </a>--}}
{{--                    <ul aria-expanded="false" class="collapse first-level">--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route('user.add')}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Add User</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route('user.manage')}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Manage User</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="sidebar-item">--}}
{{--                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">--}}
{{--                  <span class="d-flex">--}}
{{--                    <i class="ti ti-file-text"></i>--}}
{{--                  </span>--}}
{{--                        <span class="hide-menu">Coupon Module</span>--}}
{{--                    </a>--}}
{{--                    <ul aria-expanded="false" class="collapse first-level">--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route('coupon.add')}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Add Coupon</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route('coupon.manage')}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Manage Coupon</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="sidebar-item">--}}
{{--                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">--}}
{{--                  <span class="d-flex">--}}
{{--                    <i class="ti ti-file-text"></i>--}}
{{--                  </span>--}}
{{--                        <span class="hide-menu">Setting Module</span>--}}
{{--                    </a>--}}
{{--                    <ul aria-expanded="false" class="collapse first-level">--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route('coupon.add')}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Add Coupon</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="sidebar-item">--}}
{{--                            <a href="{{route('coupon.manage')}}" class="sidebar-link">--}}
{{--                                <div class="round-16 d-flex align-items-center justify-content-center">--}}
{{--                                    <i class="ti ti-circle"></i>--}}
{{--                                </div>--}}
{{--                                <span class="hide-menu">Manage Coupon</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
