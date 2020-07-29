<?php $__env->startSection('title', 'Customers'); ?>
<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('customer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content" id="modal-content">

    </div>
  </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){

  $('.addModal').on('click',function(){
    var dataURL = 'product_category/create';
    $('.modal-content').load(dataURL,function(){
      $('#myModal').modal({show:true});
    });
  });

  $('.editModal').on('click',function(){
    var checkbox = [];
    $.each($("input[name='category_c']:checked"), function() {
      checkbox.push($(this).val());
    });
    var dataCheck = checkbox.join(",");
    var length    = $("input[name='category_c']:checked").length;

    if (length > 1 || length == 0) {
      Swal.fire({
        icon: 'error',
        title: 'Select one data!',
        // text: data.cnt,
      });
    }else{
      var dataURL = 'product_category/'+dataCheck+'/edit';
      $('.modal-content').load(dataURL,function(){
        $('#myModal').modal({show:true});
      });
    }
  });

});
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ggwpos\resources\views/customer/index.blade.php ENDPATH**/ ?>