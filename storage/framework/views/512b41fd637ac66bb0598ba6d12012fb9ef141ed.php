<section class="content">
  <div class="body_scroll">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>Add Customer</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('dashboard')); ?>"><i class="zmdi zmdi-home"></i> Ggwpos</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(url('customer')); ?>">Customers</a></li>
            <li class="breadcrumb-item active">Add Customer</li>
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
                    <label for="name">Name</label>
                    <div class="form-group">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="company">Company</label>
                    <div class="form-group">
                      <input type="text" id="company" name="company" class="form-control" placeholder="Company">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="email_address">Email Address</label>
                    <div class="form-group">
                      <input type="email" id="email_address" name="email_address" class="form-control" placeholder="Enter your email address">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label>Phone Number</label>
                    <div class="input-group masked-input mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="zmdi zmdi-phone"></i></span>
                      </div>
                      <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (00) 000-000-000">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <label for="category">Customer Category</label>
                    <div class="form-group">
                      <select class="form-control" id="category" name="category">
                        <option value="1">...</option>
                        <option value="2">...</option>
                      </select>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-warning waves-effect btn-sm" onclick="main('<?php echo e(url('customer/main')); ?>', 'POST')"><i class="fa fa-arrow-left"></i> BACK</button>
                <button type="button" class="btn btn-primary waves-effect btn-sm" onclick="save('<?php echo e(url('customer')); ?>', 'POST')"><i class="fa fa-check"></i> SAVE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php /**PATH /var/www/html/cigondewah.site/resources/views/customer/add.blade.php ENDPATH**/ ?>