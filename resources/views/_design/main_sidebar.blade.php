<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('dashboard/v3') }}" class="brand-link">
        <img src="{{ url('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://i.imgur.com/u8432kY.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <!--                            <li class="nav-item has-treeview menu-open">-->
                <li class="nav-item has-treeview <?php echo Request::segment(1) == 'dashboard' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?php echo Request::segment(1) == 'dashboard' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('dashboard/v1') }}" class="nav-link <?php echo Request::segment(2) == 'v1' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard/v2') }}" class="nav-link <?php echo Request::segment(2) == 'v2' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard/v3') }}" class="nav-link <?php echo Request::segment(2) == 'v3' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ url('widgets') }}" class="nav-link <?php echo Request::segment(1) == 'widgets' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php echo Request::segment(1) == 'charts' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?php echo Request::segment(1) == 'charts' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Charts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('charts/chartjs') }}" class="nav-link <?php echo Request::segment(2) == 'chartjs' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ChartJS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('charts/flot') }}" class="nav-link <?php echo Request::segment(2) == 'flot' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Flot</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview <?php echo Request::segment(1) == 'uielements' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?php echo Request::segment(1) == 'uielements' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            UI Elements
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('uielements/general') }}" class="nav-link <?php echo Request::segment(2) == 'general' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('uielements/icons') }}" class="nav-link <?php echo Request::segment(2) == 'icons' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('uielements/buttons') }}" class="nav-link <?php echo Request::segment(2) == 'buttons' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buttons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('uielements/sliders') }}" class="nav-link <?php echo Request::segment(2) == 'sliders' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('uielements/modals') }}" class="nav-link <?php echo Request::segment(2) == 'modals' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modals & Alerts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('uielements/navbar') }}" class="nav-link <?php echo Request::segment(2) == 'navbar' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Navbar & Tabs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('uielements/timeline') }}" class="nav-link <?php echo Request::segment(2) == 'timeline' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Timeline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('uielements/ribbons') }}" class="nav-link <?php echo Request::segment(2) == 'ribbons' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ribbons</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview <?php echo Request::segment(1) == 'forms' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?php echo Request::segment(1) == 'forms' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('forms/general') }}" class="nav-link <?php echo Request::segment(2) == 'general' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('forms/advanced') }}" class="nav-link <?php echo Request::segment(2) == 'advanced' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Advanced Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('forms/editors') }}" class="nav-link <?php echo Request::segment(2) == 'editors' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Editors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('forms/validation') }}" class="nav-link <?php echo Request::segment(2) == 'validation' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Validation</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview <?php echo Request::segment(1) == 'tables' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?php echo Request::segment(1) == 'tables' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('tables/simple') }}" class="nav-link <?php echo Request::segment(2) == 'simple' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('tables/datatables') }}" class="nav-link <?php echo Request::segment(2) == 'datatables' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('tables/jsgrid') }}" class="nav-link <?php echo Request::segment(2) == 'jsgrid' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="{{ url('calendar') }}" class="nav-link <?php echo Request::segment(1) == 'calendar' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('gallery') }}" class="nav-link <?php echo Request::segment(1) == 'gallery' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php echo Request::segment(1) == 'mailbox' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?php echo Request::segment(1) == 'mailbox' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('mailbox/inbox') }}" class="nav-link <?php echo Request::segment(2) == 'inbox' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('mailbox/compose') }}" class="nav-link <?php echo Request::segment(2) == 'compose' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('mailbox/read') }}" class="nav-link <?php echo Request::segment(2) == 'read' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview <?php echo Request::segment(1) == 'pages' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?php echo Request::segment(1) == 'pages' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('pages/invoice') }}" class="nav-link <?php echo Request::segment(2) == 'invoice' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pages/profile') }}" class="nav-link <?php echo Request::segment(2) == 'profile' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pages/e_commerce') }}" class="nav-link <?php echo Request::segment(2) == 'e_commerce' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>E-commerce</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pages/projects') }}" class="nav-link <?php echo Request::segment(2) == 'projects' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pages/project_add') }}" class="nav-link <?php echo Request::segment(2) == 'project_add' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pages/project_edit') }}" class="nav-link <?php echo Request::segment(2) == 'project_edit' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Edit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pages/project_detail') }}" class="nav-link <?php echo Request::segment(2) == 'project_detail' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Detail</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pages/contacts') }}" class="nav-link <?php echo Request::segment(2) == 'contacts' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview <?php echo Request::segment(1) == 'extras' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?php echo Request::segment(1) == 'extras' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Extras
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('extras/login') }}" class="nav-link <?php echo Request::segment(2) == 'login' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('extras/register') }}" class="nav-link <?php echo Request::segment(2) == 'register' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Register</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('extras/forgot_password') }}" class="nav-link <?php echo Request::segment(2) == 'forgot_password' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Forgot Password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('extras/recover_password') }}" class="nav-link <?php echo Request::segment(2) == 'recover_password' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Recover Password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('extras/lockscreen') }}" class="nav-link <?php echo Request::segment(2) == 'lockscreen' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lockscreen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('extras/legacy_user_menu') }}" class="nav-link <?php echo Request::segment(2) == 'legacy_user_menu' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Legacy User Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('extras/language_menu') }}" class="nav-link <?php echo Request::segment(2) == 'language_menu' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Language Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('extras/error_404') }}" class="nav-link <?php echo Request::segment(2) == 'error_404' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 404</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('extras/error_500') }}" class="nav-link <?php echo Request::segment(2) == 'error_500' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 500</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('extras/pace') }}" class="nav-link <?php echo Request::segment(2) == 'pace' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pace</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('extras/blank') }}" class="nav-link <?php echo Request::segment(2) == 'blank' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blank Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">MISCELLANEOUS</li>
                <li class="nav-item">
                    <a href="https://adminlte.io/docs/3.0" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Documentation</p>
                    </a>
                </li>
                <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Level 1
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li>
                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
