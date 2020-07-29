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
              <ul class="nav nav-tabs p-0 mb-3">
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0 active" data-toggle="tab" href="#customers">Customers</a></li>
                <li class="nav-item"><a class="nav-link border-top-0 border-left-0 border-right-0 rounded-0" data-toggle="tab" href="#category">Customer Category</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active" id="customers">
                  <button type="button" class="btn btn-danger btn-sm pull-right waves-effect" onclick="destroy('<?php echo e(url('customer')); ?>', 'DELETE')"><i class="fa fa-trash"></i> Delete</button>
                  <button type="button" class="btn btn-warning btn-sm pull-right waves-effect" onclick="edit('<?php echo e(url('customer')); ?>', 'GET')"><i class="fa fa-pencil"></i> Edit</button>
                  <button type="button" class="btn btn-primary btn-sm pull-right waves-effect" onclick="add('<?php echo e(url('customer/create')); ?>', 'GET')"><i class="fa fa-plus"></i> Add</button>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th style="width: 1%;">#</th>
                          <th style="width: 1%;">
                            <div class="checkbox" style="margin-top: -2.3rem!important">
                              <input id="select-all" name="input[]" type="checkbox" value="">
                              <label for="select-all"></label>
                            </div>
                          </th>
                          <th>NAME</th>
                          <th>COMPANY</th>
                          <th>EMAIL</th>
                          <th>PHONE NUMBER</th>
                          <th>CUSTOMER CATEGORY</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="align-middle">1</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="check1" name="checkbox" type="checkbox" value="1">
                              <label for="check1"></label>
                            </div>
                          </td>
                          <td class="align-middle">Mark</td>
                          <td class="align-middle">Otto</td>
                          <td class="align-middle">@mdo</td>
                          <td class="align-middle">082</td>
                          <td>
                            ...
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle">2</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="check2" name="checkbox" type="checkbox" value="2">
                              <label for="check2"></label>
                            </div>
                          </td>
                          <td class="align-middle">Mark</td>
                          <td class="align-middle">Otto</td>
                          <td class="align-middle">@mdo</td>
                          <td class="align-middle">082</td>
                          <td>
                            ...
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="category">
                  <button type="button" class="btn btn-danger btn-sm pull-right waves-effect" onclick="destroy('<?php echo e(url('customer_category')); ?>', 'DELETE')"><i class="fa fa-trash"></i> Delete</button>
                  <button type="button" class="btn btn-warning btn-sm pull-right waves-effect" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i> Edit</button>
                  <button type="button" class="btn btn-primary btn-sm pull-right waves-effect" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add</button>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th style="width: 1%;">#</th>
                          <th style="width: 1%;">
                            <div class="checkbox" style="margin-top: -2.3rem!important">
                              <input id="select-all" name="input[]" type="checkbox" value="">
                              <label for="select-all"></label>
                            </div>
                          </th>
                          <th>NAME</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="align-middle">1</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="category_c1" name="category_c" type="checkbox" value="1">
                              <label for="category_c1"></label>
                            </div>
                          </td>
                          <td class="align-middle">Elit</td>
                        </tr>
                        <tr>
                          <td class="align-middle">2</td>
                          <td>
                            <div class="checkbox" style="margin-top: -1rem!important">
                              <input id="category_c2" name="category_c" type="checkbox" value="2">
                              <label for="category_c2"></label>
                            </div>
                          </td>
                          <td class="align-middle">Special</td>
                        </tr>
                      </tbody>
                    </table>
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
<div class="modal fade" id="addModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="title" id="smallModalLabel">Add Category</h4>
      </div>
      <div class="modal-body">
        <label for="name">Name</label>
        <div class="form-group">
          <input type="text" id="name" name="name" class="form-control" placeholder="Name">
        </div>
      </div>
      <div class="modal-footer mr-auto">
        <button type="button" class="btn btn-warning waves-effect btn-sm" data-dismiss="modal">CLOSE</button>
        <button type="button" class="btn btn-primary waves-effect btn-sm">SAVE</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="title" id="smallModalLabel">Edit Category</h4>
      </div>
      <div class="modal-body">
        <label for="name">Name</label>
        <div class="form-group">
          <input type="text" id="name" name="name" class="form-control" placeholder="Name">
        </div>
      </div>
      <div class="modal-footer mr-auto">
        <button type="button" class="btn btn-warning waves-effect btn-sm" data-dismiss="modal">CLOSE</button>
        <button type="button" class="btn btn-primary waves-effect btn-sm">SAVE</button>
      </div>
    </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\ggwpos\resources\views/customer/main.blade.php ENDPATH**/ ?>