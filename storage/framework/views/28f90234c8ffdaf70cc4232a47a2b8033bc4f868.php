<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th style="width: 1%;">#</th>
      <th style="width: 1%;">
        <div class="checkbox" style="margin-top: -2.4rem!important">
          <input id="select_all_category" name="input[]" type="checkbox" value="" onclick="selectAll('select_all_category', 'category_c')">
          <label for="select_all_category"></label>
        </div>
      </th>
      <th>Name</th>
      <th>Level</th>
      <th>Default</th>
      <th>Note</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td class="align-middle"><?php echo e(++$key); ?></td>
        <td>
          <div class="checkbox" style="margin-top: -1rem!important">
            <input id="category_c<?php echo e($category->id); ?>" name="category_c" type="checkbox" value="<?php echo e($category->id); ?>">
            <label for="category_c<?php echo e($category->id); ?>"></label>
          </div>
        </td>
        <td class="align-middle"><?php echo e($category->name); ?></td>
        <td class="align-middle">Level <?php echo e($category->level); ?></td>
        <td class="align-middle"><?php echo e($category->default === 1 ? "Yes" : "No"); ?></td>
        <td class="align-middle"><?php echo e($category->notes); ?></td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php echo $categories->links(); ?><?php /**PATH /var/www/html/cigondewah.site/resources/views/customer_category/table.blade.php ENDPATH**/ ?>