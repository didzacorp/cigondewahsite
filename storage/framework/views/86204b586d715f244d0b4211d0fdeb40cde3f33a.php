<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
	<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="theme-purple" id="body">
	<!-- Page Loader -->
	<div class="page-loader-wrapper">
    <div class="loader">
      <div class="m-t-30"><img class="zmdi-hc-spin" src="<?php echo e(asset('assets/images/loader.svg')); ?>" width="48" height="48" alt="Aero"></div>
      <p>Please wait...</p>
    </div>
	</div>
	<?php echo $__env->make('layouts.left_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div id="content">
		<?php echo $__env->yieldContent('content'); ?>
	</div>
	<?php echo $__env->make('layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\ggwpos\resources\views/layouts/app.blade.php ENDPATH**/ ?>