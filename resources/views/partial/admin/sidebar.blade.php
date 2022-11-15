<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Dashboard</span></li>

                @can('admin_panel_access')
                <!-- dashboard-->
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin')) is_active @endif" href="{{ route('home') }}" aria-expanded="false">
                        <i class="mr-3 fas fa-tachometer-alt fa-fw" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                @endcan


                @canany(['users_access','roles_access','permissions_access'])
                <li class="sidebar-item">

                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">

                       <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="hide-menu">USUARIOS</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level
                                @if(request()->is('admin/users') || request()->is('admin/users/*')) in @endif
                                @if(request()->is('admin/roles') || request()->is('admin/roles/*')) in @endif
                                @if(request()->is('admin/permissions') || request()->is('admin/permissions/*')) in @endif
                            ">
                        @can('users_access')
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif" href="{{ route('users.index') }}" aria-expanded="false">
                                
                                <span class="hide-menu">Users</span>
                            </a>
                        </li>
                        @endcan

                        @can('roles_access')
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/roles') || request()->is('admin/roles/*')) is_active @endif" href="{{ route('roles.index') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-star" aria-hidden="false"></i>
                                <span class="hide-menu">Roles</span>
                            </a>
                        </li> -->
                        @endcan

                        @can('permissions_access')
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/permissions') || request()->is('admin/permissions/*')) is_active @endif" href="{{ route('permissions.index') }}" aria-expanded="false">
                                <i class="mr-3 mdi mdi-key" aria-hidden="false"></i>
                                <span class="hide-menu">Permissions</span>
                            </a>
                        </li> -->
                        @endcan
                    </ul>
                </li>
                @endcanany

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">
                       <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="hide-menu">GRADO</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="{{route('grados.index')}}">
                                
                                <span class="hide-menu">LISTADO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="{{route('grados.create')}}">
                                
                                <span class="hide-menu">REGISTRO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="#">
                                
                                <span class="hide-menu">REPORTE</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">
                       <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="hide-menu">CURSOS</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="{{route('curos.index')}}">
                                
                                <span class="hide-menu">LISTADO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="{{route('curos.create')}}">
                                
                                <span class="hide-menu">REGISTRO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="#">
                                
                                <span class="hide-menu">REPORTE</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">
                       <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="hide-menu">UNIDAD</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="{{route('unidad.index')}}">
                                
                                <span class="hide-menu">LISTADO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="{{route('unidad.create')}}">
                                
                                <span class="hide-menu">REGISTRO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="#">
                                
                                <span class="hide-menu">REPORTE</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">
                       <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="hide-menu">PROFESORES</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="{{route('profesors.index')}}">
                                
                                <span class="hide-menu">LISTADO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="{{route('profesors.create')}}">
                                
                                <span class="hide-menu">REGISTRO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="#">
                                
                                <span class="hide-menu">REPORTE</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">
                       <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="hide-menu">SECRETARIA</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="{{route('secretaria.index')}}">
                                
                                <span class="hide-menu">LISTADO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="{{route('secretaria.create')}}">
                                
                                <span class="hide-menu">REGISTRO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="#">
                                
                                <span class="hide-menu">REPORTE</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">
                       <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="hide-menu">ESTUDIANTES</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="{{route('estudiantes.index')}}">
                                
                                <span class="hide-menu">LISTADO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="{{route('estudiantes.create')}}">
                                
                                <span class="hide-menu">REGISTRO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark " aria-expanded="false" href="#">
                                
                                <span class="hide-menu">REPORTE</span>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>