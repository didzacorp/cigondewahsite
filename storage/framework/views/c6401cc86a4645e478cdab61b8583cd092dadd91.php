<section class="content">
  <div class="body_scroll">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <h2>Contacts</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Ggwpos</a></li>
            
            <li class="breadcrumb-item active">Customers</li>
          </ul>
          <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <!-- Example Tab -->
      <div class="row clearfix">
        <div class="col-sm-12">
          <div class="card">
            <div class="header">
              <h2><strong>Customers</strong></h2>
            </div>
            <div class="body">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs p-0 mb-3" id="myTab">
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0 active" data-toggle="tab" href="#customers">Customers</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" id="category_tab" data-toggle="tab" href="#category">Customer Category</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active" id="customers">
                  <button type="button" class="btn btn-danger btn-sm pull-right waves-effect" onclick="destroy('<?php echo e(url('customer')); ?>', 'DELETE', 'checkbox')"><i class="fa fa-trash"></i> Delete</button>
                  <button type="button" class="btn btn-warning btn-sm pull-right waves-effect" onclick="edit('<?php echo e(url('customer')); ?>', 'GET')"><i class="fa fa-pencil"></i> Edit</button>
                  <button type="button" class="btn btn-primary btn-sm pull-right waves-effect" onclick="add('<?php echo e(url('customer/create')); ?>', 'GET')"><i class="fa fa-plus"></i> Add</button>
                  <div class="table-responsive">
                    <form id="form_search">
                      <div class="row">
                        <div class="col-md-3">
                          <label for="name">Name</label>
                          <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Name" onkeyup="search('<?php echo e(url('customer')); ?>', 'GET', 'table_customer')">
                          </div>
                        </div>
                        <div class="col-md-2">
                          <label for="category">Group</label>
                          <div class="form-group">
                            <select class="form-control form-control-sm" id="category" name="category" onchange="search('<?php echo e(url('customer')); ?>', 'GET', 'table_customer')">
                              <option value="">All</option>
                              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div id="table_customer">
                      <?php echo $__env->make('customer.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="category">
                  <button type="button" class="btn btn-danger btn-sm pull-right waves-effect" onclick="destroy('<?php echo e(url('customer_category')); ?>', 'DELETE', 'category_c')"><i class="fa fa-trash"></i> Delete</button>
                  <button type="button" class="btn btn-warning btn-sm pull-right waves-effect" onclick="editModal('<?php echo e(url('customer_category')); ?>', 'category_c')"><i class="fa fa-pencil"></i> Edit</button>
                  <button type="button" class="btn btn-primary btn-sm pull-right waves-effect" onclick="addModal('<?php echo e(url('customer_category/create')); ?>')"><i class="fa fa-plus"></i> Add</button>
                  <div class="table-responsive">
                    <div id="table_customer_category">
                      <?php echo $__env->make('customer_category.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" id="modal-content">

    </div>
  </div>
</div><?php /**PATH /var/www/html/cigondewah.site/resources/views/customer/main.blade.php ENDPATH**/ ?>