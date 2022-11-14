
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="" class="brand-link">
                <img src="{{asset('assert/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                                <img src="{{asset('assert/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Lucky</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search "></i>
                    </button>
                </div>
            </div>
        </div>



        <style>
            aside {
                overflow-x: hidden;
            }
        </style>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <li class="nav-header">QUIZ</li>

                <li class="nav-item">
                    <a href="{{route('ouiz/create')}}"
                       class="nav-link {{ Request::is('ouiz/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Ouiz</p>
                    </a>
                </li>

                <li class="nav-header">STUDENT</li>

                <li class="nav-item">
                    <a href="{{route('student/show')}}"
                       class="nav-link {{ Request::is('student/show') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Student</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
