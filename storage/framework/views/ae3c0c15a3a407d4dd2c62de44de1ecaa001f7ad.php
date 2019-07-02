<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">Pages</span>
                    <span class="pcoded-badge label label-warning">NEW</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="<?php echo e(url('/admin/add-new-page')); ?>">
                            <span class="pcoded-mtext">Add pages</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo e(url('/admin/view-page')); ?>">
                            <span class="pcoded-mtext">View pages</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo e(url('/admin/add-page-category')); ?>">
                            <span class="pcoded-mtext">Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                    <span class="pcoded-mtext">Post</span>
                    <span class="pcoded-badge label label-warning">NEW</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="<?php echo e(url('/admin/add-new-post')); ?>">
                            <span class="pcoded-mtext">Add Post</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo e(url('/admin/view-post')); ?>">
                            <span class="pcoded-mtext">View Post</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo e(url('/admin/post-category')); ?>">
                            <span class="pcoded-mtext">Category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Navigation</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="widget-statistic.html">
                            <span class="pcoded-mtext" >Top Menu</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="widget-data.html">
                            <span class="pcoded-mtext" >Main Menu</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                    <span class="pcoded-mtext" >Widget</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="widget-chart.html">
                            <span class="pcoded-mtext" >Logo</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="widget-statistic.html">
                            <span class="pcoded-mtext" >Right Sidebar</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="widget-data.html">
                            <span class="pcoded-mtext" >Left Sidebar</span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
        <div class="pcoded-navigatio-lavel">Support</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="#" target="_blank">
                    <span class="pcoded-micon"><i class="feather icon-monitor"></i></span>
                    <span class="pcoded-mtext" >Documentation</span>
                </a>
            </li>
            <li class="">
                <a href="#" target="_blank">
                    <span class="pcoded-micon"><i class="feather icon-help-circle"></i></span>
                    <span class="pcoded-mtext" >Submit Issue</span>
                </a>
            </li>
        </ul>
    </div>
</nav><?php /**PATH D:\GITCODE\MarketingWebsite\resources\views/admin/layouts/adminLayout/admin_sidebar.blade.php ENDPATH**/ ?>