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
                        <a href="#">
                            <div class="pull-left"><i class="ti-home"></i><span
                                    class="right-nav-text">test</span></div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">@lang('main.components')</li>
                    <!-- Users & Roles -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#users_permissions">
                            <div class="pull-left">
                                <i class="ti-hand-stop"></i>
                                <span class="right-nav-text">test</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="users_permissions" class="collapse" data-parent="#sidebarnav">
                            <li><a href="#">test</a></li>
                            <li><a href="#">test</a></li>
                        </ul>
                    </li>
                    <!-- Settings -->
                    <li>
                        <a href="#">
                            <i class="ti-key"></i>
                            <span class="right-nav-text">test</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
                   wrapper -->

        <div class="content-wrapper">
