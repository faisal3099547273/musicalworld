<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards"><?php echo app('translator')->get('translation.Dashboards'); ?></span>
                    </a>
                </li>
                  <li>
                    <a href="<?php echo e(route('company.view')); ?>" class="waves-effect">
                        <i class="fas fa-cubes"></i>
                        <span key="t-chat"><?php echo app('translator')->get('Companies'); ?></span>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo e(route('user.view')); ?>" class="waves-effect">
                        <i class="fas fa-user"></i>
                        <span key="t-chat"><?php echo app('translator')->get('Singers'); ?></span>
                    </a>
                </li>

                 <li>
                    <a href="#" class="waves-effect">
                        <i class="fas fa-diagnoses"></i>
                        <span key="t-chat"><?php echo app('translator')->get('Competitions'); ?></span>
                    </a>
                </li>
                        </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\xampp\htdocs\musicworld\resources\views/musicworld/layouts/sidebar.blade.php ENDPATH**/ ?>