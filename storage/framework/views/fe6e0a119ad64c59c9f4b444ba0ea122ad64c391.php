<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th style="width: 1%;">#</th>
      <th style="width: 1%;">
        <div class="checkbox" style="margin-top: -2.4rem!important">
          <input id="select_all_user" name="input[]" type="checkbox" value="" onclick="selectAll('select_all_user', 'checkbox')">
          <label for="select_all_user"></label>
        </div>
      </th>
      <th>Name</th>
      <th>Email</th>
      <th>Role</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td class="align-middle"><?php echo e(++$key); ?></td>
      <td>
        <div class="checkbox" style="margin-top: -1rem!important">
          <input id="check<?php echo e($user->id); ?>" name="checkbox" type="checkbox" value="<?php echo e($user->id); ?>">
          <label for="check<?php echo e($user->id); ?>"></label>
        </div>
      </td>
      <td class="align-middle"><?php echo e($user->name); ?></td>
      <td class="align-middle"><?php echo e($user->email); ?></td>
      <td class="align-middle"><?php echo e($user->role === 3 ? "Owner" : ($user->role === 2 ? "Manager" : "Cashier")); ?></td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php echo $users->links(); ?>


<?php /**PATH /var/www/html/cigondewah.site/resources/views/users/table.blade.php ENDPATH**/ ?>