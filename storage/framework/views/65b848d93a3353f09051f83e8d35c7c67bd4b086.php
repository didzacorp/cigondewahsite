<section class="content">
  <div class="block-header">
    <div class="row">
      <div class="col-lg-7 col-md-6 col-sm-12">
        <h2>Users</h2>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Ggwpos</a></li>
          <li class="breadcrumb-item active">Users</li>
        </ul>
        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
      </div>
      
    </div>
  </div>
  <div class="container-fluid">
    <div class="row clearfix">
      <div class="col-lg-12">
        <div class="card">
          <div class="header">
            <h2><strong><i class="fa fa-users"></i> Users</strong></h2>
          </div>
          <div class="body pt-1">
            <button type="button" class="btn btn-danger btn-sm pull-right waves-effect" onclick="destroy('<?php echo e(url('users')); ?>', 'DELETE', 'checkbox')"><i class="fa fa-trash"></i> Delete</button>
            <button type="button" class="btn btn-warning btn-sm pull-right waves-effect" onclick="edit('<?php echo e(url('users')); ?>', 'GET')"><i class="fa fa-pencil"></i> Edit</button>
            <butotn type="button" class="btn btn-primary btn-sm pull-right waves-effect" onclick="add('<?php echo e(url('users/create')); ?>', 'GET')"><i class="fa fa-plus"></i> Add</butotn>
            <div class="table-responsive">
              <form id="form_search">
                <div class="row">
                  <div class="col-md-3">
                    <label for="name">Name</label>
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Name" onkeyup="search('<?php echo e(url('users')); ?>', 'GET', 'table')">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <label for="role">Role</label>
                    <div class="form-group">
                      <select class="form-control form-control-sm" id="role" name="role" onchange="search('<?php echo e(url('users')); ?>', 'GET', 'table')">
                        <option value="">All</option>
                        <option value="1">Cashier</option>
                        <option value="2">Manager</option>
                        <option value="3">Owner</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
              <div id="table">
                <?php echo $__env->make('users.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php /**PATH /var/www/html/cigondewah.site/resources/views/users/main.blade.php ENDPATH**/ ?>