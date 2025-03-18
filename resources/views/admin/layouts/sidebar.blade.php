        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/admin/dashboard" class="brand-link">
                <img src="/img/CahayaMitraPratama.png" alt="AdminCMP Logo" style="width: 90px; height: 90px;">
                {{-- <span class="brand-text font-weight-light">CMP Admin</span> --}}
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="/admin/dashboard"
                                class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    {{-- <span class="right badge badge-danger">New</span> --}}
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admin/posts/bestseller"
                                class="nav-link {{ Request::is('admin/best-seller') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Best Seller
                                    {{-- <i class="right fas fa-angle-left"></i> --}}
                                </p>
                            </a>
                            {{-- <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/posts/produk1" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Produk 1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/posts/produk2" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Produk 2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/posts/produk3" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Produk 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/posts/produk4" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Produk 4</p>
                                    </a>
                                </li>
                            </ul> --}}
                        </li>

                        <li class="nav-item">
                            <a href="/admin/about/" class="nav-link {{ Request::is('admin/about') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-list"></i>
                                <p>
                                    About
                                    {{-- <span class="right badge badge-danger">New</span> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/service"
                                class="nav-link {{ Request::is('admin/service') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Layanan
                                    {{-- <span class="right badge badge-danger">New</span> --}}
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/admin/client" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Our Client
                                    {{-- <span class="right badge badge-danger">New</span> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/banner" class="nav-link {{ Request::is('admin/banner') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-image"></i>
                                <p>
                                    Banner
                                    {{-- <span class="right badge badge-danger">New</span> --}}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/user" class="nav-link {{ Request::is('admin/user') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    User
                                    {{-- <span class="right badge badge-danger">New</span> --}}
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
