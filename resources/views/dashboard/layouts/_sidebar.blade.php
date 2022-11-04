<!--=================================
             Main content -->

<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{ route('dashboard.welcome') }}">
                            <div class="pull-left"><i class="ti-home"></i><span
                                    class="right-nav-text">@lang('main.dashboard')</span></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">@lang('main.components')</li>
                    <!-- Users & Roles -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#users_permissions">
                            <div class="pull-left">
                                <i class="ti-user"></i>
                                <span class="right-nav-text">@lang('main.users_permissions')</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="users_permissions" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('dashboard.users.index') }}">@lang('main.users')</a></li>
                            <li><a href="{{ route('dashboard.roles.index') }}">@lang('main.roles')</a></li>
                        </ul>
                    </li>
                    <!-- Settings -->
                    <li>
                        <a href="{{ route('dashboard.settings.index') }}">
                            <i class="ti-settings"></i>
                            <span class="right-nav-text">@lang('main.settings')</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
                   wrapper -->

        <div class="content-wrapper">
