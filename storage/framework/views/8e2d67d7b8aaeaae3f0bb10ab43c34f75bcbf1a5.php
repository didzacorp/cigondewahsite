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
            <button type="button" class="btn btn-danger btn-sm pull-right waves-effect" onclick="destroy('<?php echo e(url('users')); ?>', 'DELETE')"><i class="fa fa-trash"></i> Delete</button>
            <button type="button" class="btn btn-warning btn-sm pull-right waves-effect" onclick="edit('<?php echo e(url('users')); ?>', 'GET')"><i class="fa fa-pencil"></i> Edit</button>
            <butotn type="button" class="btn btn-primary btn-sm pull-right waves-effect" onclick="add('<?php echo e(url('users/create')); ?>', 'GET')"><i class="fa fa-plus"></i> Add</butotn>
            <div class="table-responsive">
              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th style="width: 1%;">#</th>
                    <th style="width: 1%;">
                      <div class="checkbox" style="margin-top: -1.4rem!important">
                        <input id="select-all" name="input[]" type="checkbox" value="">
                        <label for="select-all"></label>
                      </div>
                    </th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>USERNAME</th>
                    <th>ROLE</th>
                    <th>IMAGE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="align-middle">1</td>
                    <td>
                      <div class="checkbox">
                        <input id="check1" name="checkbox" type="checkbox" value="1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="align-middle">Mark</td>
                    <td class="align-middle">Otto</td>
                    <td class="align-middle">@mdo</td>
                    <td class="align-middle">Role</td>
                    <td>
                      <img src="assets/images/xs/avatar1.jpg">
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle">2</td>
                    <td>
                      <div class="checkbox">
                        <input id="check2" name="checkbox" type="checkbox" value="2">
                        <label for="check2"></label>
                      </div>
                    </td>
                    <td class="align-middle">Mark</td>
                    <td class="align-middle">Otto</td>
                    <td class="align-middle">@mdo</td>
                    <td class="align-middle">Role</td>
                    <td>
                      <img src="assets/images/xs/avatar1.jpg">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php /**PATH C:\xampp\htdocs\ggwpos\resources\views/users/main.blade.php ENDPATH**/ ?>