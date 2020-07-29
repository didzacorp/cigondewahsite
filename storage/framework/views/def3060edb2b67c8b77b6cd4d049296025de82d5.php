<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
  <div class="navbar-brand">
    <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
    <a href="index.html"><img src="<?php echo e(asset('assets/images/logo.svg')); ?>" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
  </div>
  <div class="menu">
    <ul class="list">
      <li>
        <div class="user-info">
          <a class="image" href="profile.html"><img src="<?php echo e(asset('assets/images/profile_av.jpg')); ?>" alt="User"></a>
          <div class="detail">
            <h4>Michael</h4>
            <small>Super Admin</small>
          </div>
        </div>
      </li>
      <li class="<?php echo e(Request::segment(1) === 'dashboard' ? 'active open' : null); ?>">
        <a href="<?php echo e(url('dashboard')); ?>">
          <i class="zmdi zmdi-home"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="<?php echo e(Request::segment(1) === 'users' ? 'active open' : null); ?>">
        <a href="<?php echo e(url('users')); ?>">
          <i class="fa fa-users"></i>
          <span>Users</span>
        </a>
      </li>
      <li class="<?php echo e(Request::segment(1) === 'tasks' ? 'active open' : null); ?>">
        <a href="<?php echo e(url('tasks')); ?>">
          <i class="fa fa-tasks"></i>
          <span>Taskboard</span>
        </a>
      </li>
      <li class="<?php echo e(Request::segment(1) === 'customer' ? 'active open' : null); ?>">
        <a href="<?php echo e(url('customer')); ?>">
          <i class="fa fa-user-secret"></i>
          <span>Customer</span>
        </a>
      </li>
      <li class="<?php echo e(Request::segment(1) === 'product' ? 'active open' : null); ?>">
        <a href="<?php echo e(url('product')); ?>">
          <i class="fa fa-cubes"></i>
          <span>Products</span>
        </a>
      </li>
      <li class="<?php echo e(Request::segment(1) === 'report' ? 'active open' : null); ?>">
        <a href="<?php echo e(url('report')); ?>">
          <i class="fa fa-book"></i>
          <span>Reports</span>
        </a>
      </li>
      <li class="open_top">
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="zmdi zmdi-copy"></i>
          <span>Sample Pages</span>
        </a>
        <ul class="ml-menu">
          <li><a href="blank.html">Blank Page</a></li>
          <li><a href="image-gallery.html">Image Gallery</a></li>
          <li><a href="profile.html">Profile</a></li>
          <li><a href="timeline.html">Timeline</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="invoices.html">Invoices</a></li>
          <li><a href="invoices-list.html">Invoices List</a></li>
          <li><a href="search-results.html">Search Results</a></li>
        </ul>
      </li>
      <li>
        <div class="progress-container progress-primary m-t-10">
          <span class="progress-badge">Traffic this Month</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
              <span class="progress-value">67%</span>
            </div>
          </div>
        </div>
        <div class="progress-container progress-info">
          <span class="progress-badge">Server Load</span>
          <div class="progress">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
              <span class="progress-value">86%</span>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</aside><?php /**PATH C:\xampp\htdocs\ggwpos\resources\views/layouts/left_sidebar.blade.php ENDPATH**/ ?>