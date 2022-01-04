<nav id="sidebar" class="sidebar">
    <a class="sidebar-brand" href="{{route('admin')}}">
        <img src="{{asset('frontend/assets/img/'. 'logo.png')}}" alt="Logo">
    </a>
    <div class="sidebar-content">
        <div class="sidebar-user">
            <img src="{{ asset('backend/img/avatars/avatar.jpg')}}" class="img-fluid rounded-circle mb-2"
                alt="Linda Miller" />
            <div class="fw-bold">Hasan Rafi</div>
            <small>Full Stack Developer</small>
        </div>

        <ul class="sidebar-nav">

            <li class="sidebar-item {{ Request::is('/admin') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin')}}"><i
                        class="align-middle me-2 fas fa-fw fa-home"></i>Dashboards</a>
            </li>

            <li class="sidebar-header">
                Front Page Setup
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#banner" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Banner</span>
                </a>
                <ul id="banner" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('/banner/create') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('create.banner')}}">Add Banner</a></li>
                    <li class="sidebar-item {{ Request::is('/banner') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('banner')}}">All Banner</a></li>
                </ul>
            </li>
            {{-- end banner --}}
            <li class="sidebar-item">
                <a data-bs-target="#service" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Services</span>
                </a>
                <ul id="service" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('/service/create') ? 'active' : '' }}"><a
                            class="sidebar-link" href="{{route('create.service')}}">Add Service</a></li>
                    <li class="sidebar-item {{ Request::is('/service') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('service')}}">All Service</a></li>
                </ul>
            </li>
            {{-- end service --}}

            <li class="sidebar-item">
                <a data-bs-target="#about" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">About us</span>
                </a>
                <ul id="about" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('/about/create') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('create.about')}}">Add About</a></li>
                    <li class="sidebar-item {{ Request::is('/about') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('admin.about')}}">All About</a></li>
                </ul>
            </li>
            {{-- end About --}}

            <li class="sidebar-item">
                <a data-bs-target="#chose" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Why Chose us</span>
                </a>
                <ul id="chose" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('/whychoseus/create') ? 'active' : '' }}"><a
                            class="sidebar-link" href="{{route('create.whychoseus')}}">Add Whychose</a></li>
                    <li class="sidebar-item {{ Request::is('/whychoseus') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('whychoseus')}}">All Whychose</a></li>
                </ul>
            </li>
            {{-- end Why Chose Us--}}

            <li class="sidebar-item">
                <a data-bs-target="#team" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Team Member</span>
                </a>
                <ul id="team" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('/team/create') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('create.team')}}">Add Team</a></li>
                    <li class="sidebar-item {{ Request::is('/team') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('team')}}">All Team</a></li>
                </ul>
            </li>
            {{-- end Team Member--}}

            <li class="sidebar-item">
                <a data-bs-target="#solution" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Solution</span>
                </a>
                <ul id="solution" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('/solution/create') ? 'active' : '' }}"><a
                            class="sidebar-link" href="{{route('create.solution')}}">Add Solution</a></li>
                    <li class="sidebar-item {{ Request::is('/solution') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('solution')}}">All Solution</a></li>
                </ul>
            </li>
            {{-- end Solution--}}

            <li class="sidebar-item">
                <a data-bs-target="#product" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Products</span>
                </a>
                <ul id="product" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('/product/create') ? 'active' : '' }}"><a
                            class="sidebar-link" href="{{route('create.product')}}">Add Product</a></li>
                    <li class="sidebar-item {{ Request::is('/product') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('admin.product')}}">All Product</a></li>

                    <li class="sidebar-item {{ Request::is('/product-category/create') ? 'active' : '' }}"><a
                            class="sidebar-link" href="{{route('create.product-category')}}">Add Category</a></li>
                    <li class="sidebar-item {{ Request::is('/product-category') ? 'active' : '' }}"><a
                            class="sidebar-link" href="{{route('admin.product-category')}}">All Category</a></li>

                    <li class="sidebar-item {{ Request::is('/brand/create') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('create.brand')}}">Add Brand</a></li>
                    <li class="sidebar-item {{ Request::is('/brand') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('admin.brand')}}">All Brand</a></li>
                </ul>
            </li>
            {{-- end product--}}

            <li class="sidebar-item">
                <a data-bs-target="#blog" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Blog</span>
                </a>
                <ul id="blog" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item {{ Request::is('/blog/create') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('create.blog')}}">Add Blog</a></li>
                    <li class="sidebar-item {{ Request::is('/blog') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('admin.blog')}}">All Blog</a></li>

                    <li class="sidebar-item {{ Request::is('/blog-category/create') ? 'active' : '' }}"><a
                            class="sidebar-link" href="{{route('create.blog-category')}}">Add Category</a></li>
                    <li class="sidebar-item {{ Request::is('/blog-category') ? 'active' : '' }}"><a class="sidebar-link"
                            href="{{route('admin.blog-category')}}">All Category</a></li>
                </ul>
            </li>
            {{-- end Blog--}}

        </ul>
    </div>
</nav>
