<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th style="width: 1%;">#</th>
      <th style="width: 1%;">
        <div class="checkbox" style="margin-top: -2.4rem!important">
          <input id="select_all_customer" name="input[]" type="checkbox" value="" onclick="selectAll('select_all_customer', 'checkbox')">
          <label for="select_all_customer"></label>
        </div>
      </th>
      <th>Name</th>
      <th>Company</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Customer Group</th>
      <th>Address</th>
      <th>Note</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td class="align-middle"><?php echo e(++$key); ?></td>
        <td>
          <div class="checkbox" style="margin-top: -1rem!important">
            <input id="check<?php echo e($customer->id); ?>" name="checkbox" type="checkbox" value="<?php echo e($customer->id); ?>">
            <label for="check<?php echo e($customer->id); ?>"></label>
          </div>
        </td>
        <td class="align-middle"><?php echo e($customer->names); ?></td>
        <td class="align-middle"><?php echo e($customer->company_name); ?></td>
        <td class="align-middle"><?php echo e($customer->email); ?></td>
        <td class="align-middle"><?php echo e($customer->phone); ?></td>
        <td class="align-middle"><?php echo e($customer->name); ?></td>
        <td class="align-middle"><?php echo e($customer->address); ?></td>
        <td class="align-middle"><?php echo e($customer->notes); ?></td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php /**PATH /var/www/html/cigondewah.site/resources/views/customer/table.blade.php ENDPATH**/ ?>