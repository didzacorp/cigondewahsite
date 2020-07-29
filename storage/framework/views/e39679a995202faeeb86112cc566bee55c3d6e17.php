<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/dropify/css/dropify.min.css')); ?>"/>
<section class="content">
  <div class="body_scroll">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>User Edit</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('dashboard')); ?>"><i class="zmdi zmdi-home"></i> Ggwpos</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(url('users')); ?>">Users</a></li>
            <li class="breadcrumb-item active">User Edit</li>
          </ul>
          <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
        </div>
        
      </div>
    </div>

    <div class="container-fluid">
      <!-- Vertical Layout -->
      <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="header">
              
            </div>
            <div class="body">
              <form id="form_save">
                <div class="row">
                  <div class="col-md-3">
                    <label for="first_name">First Name</label>
                    <div class="form-group">
                      <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="last_name">Last Name</label>
                    <div class="form-group">
                      <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="email_address">Email Address</label>
                    <div class="form-group">
                      <input type="email" id="email_address" name="email_address" class="form-control" placeholder="Enter your email address">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="password">Password</label>
                    <div class="form-group">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <label for="gender">Gender</label>
                    <div class="form-group">
                      <select class="form-control" id="gender" name="gender">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <label for="role">Role</label>
                    <div class="form-group">
                      <select class="form-control" id="role" name="role">
                        <option value="1">Admin</option>
                        <option value="2">...</option>
                        <option value="3">Member</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="role">Image</label>
                    <div class="form-group">
                      <input type="file" class="dropify" id="image" name="image[]">
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-warning waves-effect btn-sm" onclick="main('<?php echo e(url('users/main')); ?>', 'POST')"><i class="fa fa-arrow-left"></i> BACK</button>
                <button type="button" class="btn btn-primary waves-effect btn-sm" onclick="save('<?php echo e(url('users')); ?>', 'POST', 'edit')"><i class="fa fa-check"></i> SAVE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="<?php echo e(asset('assets/plugins/dropify/js/dropify.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/pages/forms/dropify.js')); ?>"></script><?php /**PATH C:\xampp\htdocs\ggwpos\resources\views/users/edit.blade.php ENDPATH**/ ?>