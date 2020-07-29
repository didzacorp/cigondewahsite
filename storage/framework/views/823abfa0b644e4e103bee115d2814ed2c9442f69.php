<?php $__env->startSection('title', 'Customer Category Add'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.left_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="content">
  <div class="body_scroll">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>Customer Category Add</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('dashboard')); ?>"><i class="zmdi zmdi-home"></i> Ggwpos</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(url('customer')); ?>">Customers</a></li>
            <li class="breadcrumb-item active">Customer Category Add</li>
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
                    <label for="name">Category Name</label>
                    <div class="form-group">
                      <input type="text" id="name" name="name" class="form-control" placeholder="Category Name">
                    </div>
                  </div>
                </div>
                <a href="<?php echo e(url('customer')); ?>" type="button" class="btn btn-warning waves-effect"><i class="fa fa-arrow-left"></i> BACK</a>
                <button type="button" class="btn btn-primary waves-effect" onclick="save('<?php echo e(url('customer_category')); ?>', 'POST')"><i class="fa fa-check"></i> SAVE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ggwpos\resources\views/customer_category/add.blade.php ENDPATH**/ ?>